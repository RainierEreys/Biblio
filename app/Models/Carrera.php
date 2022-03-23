<?php

namespace App\Models;

use \CodeIgniter\Model;

class Carrera extends Model{

    protected $table = "carrera";

    protected $primaryKey = "Id"; 
    protected $allowedFields=["Carrera"];

}