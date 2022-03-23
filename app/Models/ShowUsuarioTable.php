<?php

namespace App\Models;

use \CodeIgniter\Model;

class ShowUsuarioTable extends Model{

    protected $table = "usuarios";

    protected $primaryKey = "id_usuario"; 
    protected $allowedFields=["id_usuario","nombre","apellido", "usuario"];

}