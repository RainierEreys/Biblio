<?php

namespace App\Models;

use \CodeIgniter\Model;

class Combo_roles extends Model{

    protected $table = "roles";
    
    protected $primaryKey = "id";
    protected $returnType = "array";
    protected $allowFields = ["id", "nombre_rol"];
}