<?php

namespace App\Models;

use \CodeIgniter\Model;

class Libro extends Model{

    protected $table = "libros";

    protected $primaryKey = "Id_libro"; 
    protected $allowedFields=["titulo","fecha_publicacion", "autor", "editorial", "ciudad", "cantidad", "imagen"];

}