<?php

namespace App\Models;

use \CodeIgniter\Model;

class Combo_estatus extends Model{

    protected $table = "estatus";
    
    protected $primaryKey = "Id";
    protected $returnType = "array";
    protected $allowFields = ["Id", "Condicion"];
}