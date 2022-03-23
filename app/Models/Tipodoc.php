<?php

namespace App\Models;

use \CodeIgniter\Model;

class Tipodoc extends Model{

    protected $table = "tipo_documento";

    protected $primaryKey = "Id"; 
    protected $allowedFields=["Id","tipo_textodigital"];

}