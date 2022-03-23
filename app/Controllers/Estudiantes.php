<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Estudiante;
use App\Models\Combo_carreras;
use App\Models\CrudModel;

class Estudiantes extends BaseController
{

    public function index()
    {

        $estudiante = new Estudiante();
        $datos["estudiantes"] = $estudiante->orderby("Cedula", "ASC")->findAll();

        $datos["header"] = view("templates/header1");
        $datos["footer"] = view("templates/footer1");


        return view("estudiantes/listar", $datos);
    }


    public function crear()
    {
        $combocarrera = new Combo_carreras();

        $datos["header"] = view("templates/header1");
        $datos["footer"] = view("templates/footer");
        $datos["carrera"] = $combocarrera->orderBy("Id", "ASC")->findAll();

        return view("estudiantes/crear", $datos);
    }

    public function obtenercodigo()
    {
    }

    public function guardar()
    {

        
        $estudiante = new Estudiante();

        $validation = $this->validate([

            "Cedula" => "required|is_natural|min_length[7]|max_length[8]",
            "Nombre" => "required|min_length[3]|max_length[30]",
            "Cod_carrera" => "required|min_length[3]|max_length[6]",
            "Apellido" => "required|min_length[3]|max_length[30]",
            "Telefono" => "required|is_natural|exact_length[11]",
            "Email" => "required|valid_email",
            
        ]);

        if (!$validation) {
            $session = session();
            $session->setFlashdata("mensaje", "Revise la informaci{on");

            /*return $this->response->redirect(site_url("/listarlibro"));*/

            return redirect()->back()->withInput();
        }

        $datos = [

            "Cedula" => $this->request->getVar("Cedula"),
            "Nombre" => $this->request->getVar("Nombre", FILTER_SANITIZE_STRING),
            "Codigo_estudiante" => $this->request->getVar("Cod_carrera") . "-" . $this->request->getVar("Cedula"),
            "Apellido" => $this->request->getVar("Apellido", FILTER_SANITIZE_STRING),
            "Telefono" => $this->request->getVar("Telefono", FILTER_SANITIZE_STRING),
            "Email" => $this->request->getVar("Email"),

        ];

        $estudiante->insert($datos);

        return $this->response->redirect(site_url("/listar-estudiantes"));
    }

    public function borrar($Codigo_estudiante = null)
    {

        $estudiante = new Estudiante();
        $datosestudiante = $estudiante->where("Codigo_estudiante", $Codigo_estudiante)->first();

        $estudiante->where("Codigo_estudiante", $Codigo_estudiante)->delete($Codigo_estudiante);

        return $this->response->redirect(site_url("/listar-estudiantes"));
    }

    public function editar($CodigoEstudiante)
    {
        print_r($CodigoEstudiante);

        $data = ["Codigo_estudiante" => $CodigoEstudiante];
        $crud = new CrudModel();
        $respuesta = $crud->editarestudiante($data);

        $datos = ["datos" => $respuesta];

        $combocarrera = new Combo_carreras();
        $datos["carrera"] = $combocarrera->orderBy("Id", "ASC")->findAll();

        $datos["header"] = view("templates/header1");
        $datos["footer"] = view("templates/footer");

        return view("estudiantes/editar", $datos);
    }

    public function actualizar()
    {

        $validation = $this->validate([

            "Cedula" => "required",
            "Nombre" => "required|min_length[3]|max_length[30]",
            "Cod_carrera" => "required|min_length[3]|max_length[6]",
            "Apellido" => "required|min_length[3]|max_length[30]",
            "Telefono" => "required|is_natural|exact_length[11]",
            "Email" => "required|valid_email",
        ]);

        if(!$validation){
            $session = session();
            $session->setFlashdata("mensaje", "Revise la información");

            /*return $this->response->redirect(site_url("/listarlibro"));*/
            
            return redirect()->back()->withInput();
           
        }

        $datos = [
            
            "Cedula" => $_POST["Cedula"],
            "Nombre" => $_POST["Nombre"],
            "Apellido" => $_POST["Apellido"],
            "Codigo_estudiante" => $_POST["Cod_carrera"]. "-" .$_POST["Cedula"],
            "Telefono" => $_POST["Telefono"],
            "Email" => $_POST["Email"],
        ];

        $CodigoEstudiante = $_POST["Codigo_estudiante"];

        $crud = new CrudModel();

        $respuesta = $crud->actualizarestudiante($datos, $CodigoEstudiante);

        return $this->response->redirect(site_url("/listar-estudiantes"));
    }
}
