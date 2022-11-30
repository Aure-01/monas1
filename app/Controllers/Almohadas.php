<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\almohada;
class Almohadas extends Controller{
    public function index()
    {
        $almohada = new almohada();
        $datos['almohada']= $almohada->orderBy('id','ASC')->findAll();

        $datos['cabecera']= view('template/cabecera');
        $datos['pie']= view('template/piepagina');

        return view('almohadas/listar', $datos);
    }

    public function crear()
    {
        $datos['cabecera']= view('template/cabecera');
        $datos['pie']= view('template/piepagina');
        return view('almohadas/crear', $datos);
    }

    public function guardar()
    {
        $almohada = new almohada();
        $datos=[
            'nombre'=>$this->request->getVar('nombre'),
            'tamaño'=>$this->request->getVar('tamaño'),
            'precio'=>$this->request->getVar('precio'),
            'tela'=>$this->request->getVar('tela')
                ];
        $id= $this->request->getVar('id');
        $almohada->insert($datos);
        return $this->response->redirect(site_url('/listar'));
    }

    public function borrar($id=null)
    {
        $almohada = new almohada();
        $datosAlmohada=$almohada->where('id',$id)->first();
        $almohada->where('id',$id)->delete($id);
        return $this->response->redirect(site_url('/listar'));
    }

    public function editar($id=null)
    {
        $almohada = new almohada();
        $datos['almohada']=$almohada->where('id',$id)->first();


        $datos['cabecera']= view('template/cabecera');
        $datos['pie']= view('template/piepagina');

        return view('almohadas/editar', $datos);
    }

    public function actualizar($id=null)
    {
        $almohada = new almohada();
        $datos['almohada']=$almohada->where('id',$id)->first();
        $datos=[
            'nombre'=>$this->request->getPost('nombre'),
            'tamaño'=>$this->request->getPost('tamaño'),
            'precio'=>$this->request->getPost('precio'),
            'tela'=>$this->request->getPost('tela')
                ];
        $almohada->set($datos);
        $almohada->where('id',$id);

        if($almohada->update()){
            session()->setFlashdata("success", 'Actualizacion exitosa');
        } else {
            session()->setFlashdata("error", "No se pudo Actualizar");
        }

        return $this->response->redirect(site_url('/listar'));
    }
    public function nosotros()
    {
        $datos['cabecera']= view('template/cabecera');
        $datos['pie']= view('template/piepagina');
        return view('nosotros/nosotros', $datos);
    }
    
}