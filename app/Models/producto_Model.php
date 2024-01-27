<?php
namespace App\Models;
use CodeIgniter\Model;

class producto_Model extends Model{


    protected $table='productos';
    protected $primaryKey='id';
    protected $allowedFields =['nombre','marca','cantidad','descripcion','id_categoria','precio','baja'];
}