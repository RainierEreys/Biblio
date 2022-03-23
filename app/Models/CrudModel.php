<?php

namespace App\Models;

use CodeIgniter\Model;

class CrudModel extends Model{
    public function editar($data){
        $Libro = $this->db->table("libros");
        $Libro->where($data);
        return $Libro->get()->getResultArray();
    }

    public function editarprestamo($data){
        $Prestamo = $this->db->table("prestamos");
        $Prestamo->where($data);
        return $Prestamo->get()->getResultArray();
    }

    public function editarestudiante($data){
        $Estudiante = $this->db->table("estudiantes");
        $Estudiante->where($data);
        return $Estudiante->get()->getResultArray();
    }

    public function actualizar($data, $Idlibro){
        $Libro = $this->db->table("libros");
        $Libro->set($data);
        $Libro->where("Id_libro", $Idlibro);
        return $Libro->update();
    }

    public function actualizarprestamo($data, $Idprestamo){
        $Prestamo = $this->db->table("prestamos");
        $Prestamo->set($data);
        $Prestamo->where("Id_prestamo", $Idprestamo);
        return $Prestamo->update();
    }

    public function actualizarestudiante($data, $CodigoEstudiante){
        $Estudiante = $this->db->table("estudiantes");
        $Estudiante->set($data);
        $Estudiante->where("Codigo_estudiante", $CodigoEstudiante);
        return $Estudiante->update();
    }
}