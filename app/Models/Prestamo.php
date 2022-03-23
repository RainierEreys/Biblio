<?php

namespace App\Models;

use \CodeIgniter\Model;

class Prestamo extends Model{

    protected $table = "prestamos";

    protected $primaryKey = "Id_prestamo"; 
    protected $allowedFields=["Id_prestamo","Id_estudiante", "libro", "fecha_prestamo", "fecha_devolucion", "fecha_entrega", "cantidad", "estatus", "observaciones"];

}