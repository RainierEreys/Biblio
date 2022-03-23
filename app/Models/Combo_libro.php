<?php

namespace App\Models;

use \CodeIgniter\Model;

class Combo_libro extends Model{

    protected $table = "libros";
    
    protected $primaryKey = "Id_libro";
    protected $returnType = "array";
    protected $allowFields = ["Id_libro", "titulo"];
}