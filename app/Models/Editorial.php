<?php

namespace App\Models;

use \CodeIgniter\Model;

class Editorial extends Model{

    protected $table = "editoriales";
    
    protected $primaryKey = "Id";
    protected $allowedFields = ["Nombre"];
}