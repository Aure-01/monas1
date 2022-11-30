<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\usuario;
use App\Models\almohada;
class Usuarios extends Controller
{
    public function login()
    {
        //Recibir datos del formulario
        $usuario = $this->request->getPost('user');
        $password = $this->request->getPost('password');
        // Crear una instancia del modelo Usuario
        $Usuarios = new usuario();
        //Buscar un cliente por la bd
        $cliente = $Usuarios->where('user', $usuario)->first();
        //Crear una instancia de session
        $session = session();

        if (is_null($cliente)):
            $session->setFlashdata("error", "Error: este usuario no existe");
            return redirect()->to(base_url('/'));
        endif;
        if ($cliente->password != $password) :
            $session->setFlashdata("error", "Error: la clave es incorrecta");
            return redirect()->to(base_url('/'));
        endif;
        
        $almohada = new almohada();
        $datos['almohada']= $almohada->orderBy('id','ASC')->findAll();
        $datos['cabecera'] = view('template/cabecera');
        $datos['pie'] = view('template/piepagina');
        return view('nosotros/nosotros', $datos);
    }
    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('/'));
    }
    public function index()
    {
        $usuario = new usuario();
        $datos['usuario'] = $usuario->orderBy('id', 'ASC')->findAll();

        $datos['cabecera'] = view('template/cabecera');
        $datos['pie'] = view('template/piepagina');

        return view('usuarios/listar', $datos);
    }

    public function crear()
    {
        $datos['cabecera'] = view('template/cabecera');
        $datos['pie'] = view('template/piepagina');
        return view('usuarios/crear', $datos);
    }

    public function guardar()
    {
        $usuario = new usuario();
        $datos = [
            'nombre_completo' => $this->request->getVar('nombre_completo'),
            'user' => $this->request->getVar('user'),
            'password' => $this->request->getVar('password'),
        ];
        $id = $this->request->getVar('id');
        $usuario->insert($datos);
        return $this->response->redirect(site_url('/usuarios/listar'));
    }

    public function borrar($id = null)
    {
        $usuario = new usuario();
        $datosUsuario = $usuario->where('id', $id)->first();
        $usuario->where('id', $id)->delete($id);
        return $this->response->redirect(site_url('/usuarios/listar'));
    }

    public function editar($id = null)
    {
        $usuario = new usuario();
        $datos['usuario'] = $usuario->where('id', $id)->first();


        $datos['cabecera'] = view('template/cabecera');
        $datos['pie'] = view('template/piepagina');

        return view('usuarios/editar', $datos);
    }

    public function actualizar($id = null)
    {
        $usuario = new usuario();
        $datos['usuario'] = $usuario->where('id', $id)->first();
        $datos = [
            'nombre_completo' => $this->request->getPost('nombre_completo'),
            'user' => $this->request->getPost('user'),
            'password' => $this->request->getPost('password'),
        ];
        $usuario->set($datos);
        $usuario->where('id', $id);

        if ($usuario->update()) {
            session()->setFlashdata("success", 'Actualizacion exitosa');
        } else {
            session()->setFlashdata("error", "No se pudo Actualizar");
        }

        return $this->response->redirect(site_url('/usuarios/listar'));
    }
}
