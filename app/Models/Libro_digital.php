<?php

namespace App\Models;

use \CodeIgniter\Model;

class Libro_digital extends Model{

    protected $table = "libros-digitales";

    protected $primaryKey = "Id"; 
    protected $allowedFields=["titulo","fecha_publicacion", "autor", "editorial", "imagen"];

}