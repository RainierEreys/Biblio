<?php

namespace App\Models;

use \CodeIgniter\Model;

class Autor extends Model{

    protected $table = "autores";
    
    protected $primaryKey = "Id";
    protected $allowedFields = ["Nombre", "Apellido", "Nacionalidad"];
}