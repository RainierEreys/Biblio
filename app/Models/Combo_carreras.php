<?php

namespace App\Models;

use \CodeIgniter\Model;

class Combo_carreras extends Model{

    protected $table = "carrera";
    
    protected $primaryKey = "Id";
    protected $returnType = "array";
    protected $allowFields = ["Id", "Codigo_carrera", "Carrera"];
}