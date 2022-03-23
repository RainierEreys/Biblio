<?php

namespace App\Models;

use \CodeIgniter\Model;

class Combo_autores extends Model{

    protected $table = "autores";
    
    protected $primaryKey = "Id";
    protected $returnType = "array";
    protected $allowFields = ["Id", "Nombre", "Apellido", "Nacionalidad"];
}