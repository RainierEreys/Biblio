<?php

namespace App\Controllers;

use App\Models\Editorial;


class Editoriales extends BaseController{

    public function index(){

        $editorial = new Editorial();

        $datos["editoriales"] = $editorial->orderby("Id", "ASC")->findAll();

        $datos["header"] = view("templates/header1");
        $datos["footer"] = view("templates/footer");
        

        return view("editoriales/listar", $datos);
    }

    public function crear(){

        $datos["header"] = view("templates/header1");
        $datos["footer"] = view("templates/footer");
        

        return view("editoriales/crear", $datos);
    }

    public function guardar()
    {

        $editorial = new Editorial();

        $validation = $this->validate([ 

            "Nombre" => "required",

            ]);
        
        if(!$validation){
            $session = session();
            $session->setFlashdata("mensaje", "Revise la información");

            /*return $this->response->redirect(site_url("/listarlibro"));*/
            
            return redirect()->back()->withInput();
           
        }

        $datos = [

            "Nombre" => $this->request->getVar("Nombre"),
            
        ];

        $editorial->insert($datos);
        
        return $this->response->redirect(site_url("/listar-editoriales"));
    }

    public function borrar($Id = null)
    {

        $editorial = new Editorial();
        $datosprestamo = $editorial->where("Id", $Id)->first();

        $editorial->where("Id", $Id)->delete($Id);

        return $this->response->redirect(site_url("/listar-editoriales"));
    }
}