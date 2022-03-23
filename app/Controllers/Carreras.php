<?php

namespace App\Controllers;

use App\Models\Carrera;


class Carreras extends BaseController{

    public function index(){

        $carrera = new Carrera();

        $datos["carreras"] = $carrera->orderby("Id", "ASC")->findAll();

        $datos["header"] = view("templates/header1");
        $datos["footer"] = view("templates/footer1");
        

        return view("carreras/listar", $datos);
    }

    public function crear(){

        $datos["header"] = view("templates/header1");
        $datos["footer"] = view("templates/footer");
        

        return view("carreras/crear", $datos);
    }

    public function guardar()
    {

        $carrera = new Carrera();

        $validation = $this->validate([ 

            "Carrera" => "required",

            ]);
        
        if(!$validation){
            $session = session();
            $session->setFlashdata("mensaje", "Revise la información");

            /*return $this->response->redirect(site_url("/listarlibro"));*/
            
            return redirect()->back()->withInput();
           
        }

        $datos = [

            "Carrera" => $this->request->getVar("Carrera"),
            
        ];

        $carrera->insert($datos);
        
        return $this->response->redirect(site_url("/listar-carreras"));
    }

    public function borrar($Id = null)
    {

        $carrera = new Carrera();
        $datosprestamo = $carrera->where("Id", $Id)->first();

        $carrera->where("Id", $Id)->delete($Id);

        return $this->response->redirect(site_url("/listar-carreras"));
    }
}