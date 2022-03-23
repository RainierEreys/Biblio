<?php

namespace App\Models;
use CodeIgniter\Model;

class UsuariosModel extends Model{
    
    protected $table = "usuarios";
    protected $primarykey = "id_usuario";

    protected $returnType = "array";
    protected $useSoftDeletes = false;

    protected $allowedFields = ["usuario", "password", "nombre", "apellido", "id_rol", "activo"];

    protected $useTimestamps = true;
    protected $createdField = "fecha_alta";
    protected $updatedField = "fecha_modifica";
    protected $deletedField = "deleted_at";


}