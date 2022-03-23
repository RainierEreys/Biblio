<?php

namespace App\Models;

use \CodeIgniter\Model;

class Estudiante extends Model{

    protected $table = "estudiantes";

    protected $primaryKey = "Codigo_estudiante"; 
    protected $allowedFields=["Cedula", "Codigo_estudiante","Nombre", "Apellido", "Telefono", "Email", "Carrera"];

}