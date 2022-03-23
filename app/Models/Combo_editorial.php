<?php

namespace App\Models;

use \CodeIgniter\Model;

class Combo_editorial extends Model{

    protected $table = "editoriales";
    
    protected $primaryKey = "Id";
    protected $returnType = "array";
    protected $allowFields = ["Id", "editorial"];
}