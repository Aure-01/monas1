<?php 
namespace App\Models;

use CodeIgniter\Model;

class Almohada extends Model{
    protected $table      = 'almohadas';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id';
    protected $allowedFields= ['nombre','tamaño','precio','tela'];
}