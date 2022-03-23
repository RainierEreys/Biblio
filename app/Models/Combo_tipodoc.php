<?php

namespace App\Models;

use \CodeIgniter\Model;

class Combo_tipodoc extends Model{

    protected $table = "tipo_documento";
    
    protected $primaryKey = "Id";
    protected $returnType = "array";
    protected $allowFields = ["Id", "tipo_textodigital"];
}