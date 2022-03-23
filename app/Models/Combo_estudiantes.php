<?php

namespace App\Models;

use \CodeIgniter\Model;

class Combo_estudiantes extends Model{

    protected $table = "estudiantes";
    
    protected $primaryKey = "Cedula";
    protected $returnType = "array";
    protected $allowFields = ["Cedula", "Nombre", "Apellido"];
}