<?php

namespace App\Controllers;

use App\Models\Prestamo;
use App\Models\Combo_estudiantes;
use App\Models\Combo_libro;
use App\Models\Combo_estatus;
use App\Models\CrudModel;

class Prestamos extends BaseController{

    public function index(){

        $prestamo = new Prestamo();

        $datos["prestamos"] = $prestamo->orderby("Id_prestamo", "ASC")->findAll();

        $datos["header"] = view("templates/header1");
        $datos["footer"] = view("templates/footer");
        

        return view("prestamos/listar", $datos);
    }

    public function crear(){

        $comboestudiante = new Combo_estudiantes();
        $combolibro = new Combo_libro();
        $comboestatus = new Combo_estatus();
        $datos["header"] = view("templates/header_prestamo");
        $datos["footer"] = view("templates/footer1");
        $datos["estudiante"] = $comboestudiante->orderBy("Cedula", "ASC")->findAll();
        $datos["libro"] = $combolibro->orderBy("titulo", "ASC")->findAll();
        $datos["estatu"] = $comboestatus->orderBy("Condicion", "ASC")->findAll();

        return view("prestamos/crear", $datos);
    }

    public function guardar()
    {

        $prestamo = new Prestamo();

        $validation = $this->validate([ 

            "Id_estudiante" => "required",
            "libro" => "required",
            "fecha_prestamo" => "required|valid_date", 
            "fecha_devolucion" => "required|valid_date",       
               
            "estatus" => "required",         
            "cantidad" => "required|is_natural",  
            
            ]);
        
        if(!$validation){
            $session = session();
            $session->setFlashdata("mensaje", "Revise la información");

            /*return $this->response->redirect(site_url("/listarlibro"));*/
            
            return redirect()->back()->withInput();
           
        }

        $datos = [

            "Id_estudiante" => $this->request->getVar("Id_estudiante"),
            "libro" => $this->request->getVar("libro"),
            "fecha_prestamo" => $this->request->getVar("fecha_prestamo"),
            "fecha_devolucion" => $this->request->getVar("fecha_devolucion"),
            "fecha_entrega" => $this->request->getVar("fecha_entrega"),
            "estatus" => $this->request->getVar("estatus"),
            "cantidad" => $this->request->getVar("cantidad"),
            "observaciones" => $this->request->getVar("observaciones"),
            
        ];

        $prestamo->insert($datos);
        
        return $this->response->redirect(site_url("/listar-prestamos"));
    }

    public function editar($Idprestamo){

        $data = ["Id_prestamo" => $Idprestamo];
        $crud = new CrudModel();
        $respuesta = $crud->editarprestamo($data);
        
        $datos = ["datos" => $respuesta];

        $comboestudiante = new Combo_estudiantes();
        $combolibro = new Combo_libro();
        $comboestatus = new Combo_estatus();
        $datos["header"] = view("templates/header_prestamo");
        $datos["footer"] = view("templates/footer1");
        $datos["estudiante"] = $comboestudiante->orderBy("Cedula", "ASC")->findAll();
        $datos["libro"] = $combolibro->orderBy("titulo", "ASC")->findAll();
        $datos["estatu"] = $comboestatus->orderBy("Condicion", "ASC")->findAll();

        return view("prestamos/editar", $datos);
    }

    public function actualizar(){

        $validation = $this->validate([ 

            "Id_estudiante" => "required",
            "libro" => "required",
            "fecha_prestamo" => "required|valid_date", 
            "fecha_devolucion" => "required|valid_date",       
               
            "estatus" => "required",         
            "cantidad" => "required|is_natural",  
            
            ]);
        
        if(!$validation){
            $session = session();
            $session->setFlashdata("mensaje", "Revise la información");

            /*return $this->response->redirect(site_url("/listarlibro"));*/
            
            return redirect()->back()->withInput();
           
        }

        $datos = [

            "Id_estudiante" => $_POST["Id_estudiante"],
            "libro" => $_POST["libro"],
            "fecha_prestamo" => $_POST["fecha_prestamo"],
            "fecha_devolucion" => $_POST["fecha_devolucion"],
            "estatus" => $_POST["estatus"],
            "cantidad" => $_POST["cantidad"],
            "observaciones" => $_POST["observaciones"],

        ];

        $Idprestamo = $_POST["Id_prestamo"];

        $crud = new CrudModel();

        $respuesta = $crud->actualizarprestamo($datos, $Idprestamo);

        return $this->response->redirect(site_url("/listar-prestamos"));
    }

    public function borrar($Id_prestamo = null)
    {

        $prestamo = new Prestamo();
        $datosprestamo = $prestamo->where("Id_prestamo", $Id_prestamo)->first();

        $prestamo->where("Id_prestamo", $Id_prestamo)->delete($Id_prestamo);

        return $this->response->redirect(site_url("/listar-prestamos"));
    }
}