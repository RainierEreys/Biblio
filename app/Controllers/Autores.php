<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Combo_autores;
use App\Models\Autor;


class Autores extends BaseController
{

    public function index()
    {

        $autor = new Autor();
        $datos["autores"] = $autor->orderby("Nombre", "ASC")->findAll();

        $datos["header"] = view("templates/header1");
        $datos["footer"] = view("templates/footer1");
        

        return view("autores/listar", $datos);
    }


    public function crear()
    {

        $datos["header"] = view("templates/header1");
        $datos["footer"] = view("templates/footer");
        

        return view("autores/crear", $datos);
    }



    public function guardar()
    {

        $autor = new Autor();

        $validation = $this->validate([ 

            "Nombre" => "required|min_length[3]|max_length[30]",
            "Apellido" => "required|min_length[3]|max_length[30]", 
            "Nacionalidad" => "required|min_length[3]|max_length[30]",            
            ]);
        
        if(!$validation){
            $session = session();
            $session->setFlashdata("mensaje", "Revise la informaci{on");

            /*return $this->response->redirect(site_url("/listarlibro"));*/

            return redirect()->back()->withInput();
        }

        $datos = [

            "Nombre" => $this->request->getVar("Nombre", FILTER_SANITIZE_STRING),
            "Apellido" => $this->request->getVar("Apellido", FILTER_SANITIZE_STRING),
            "Nacionalidad" => $this->request->getVar("Nacionalidad", FILTER_SANITIZE_STRING),
            
        ];

        $autor->insert($datos);
        
        return $this->response->redirect(site_url("/listar-autores"));
    }

    public function borrar($Id = null)
    {

        $autor = new Autor();
        $datosautor = $autor->where("Id", $Id)->first();

        $autor->where("Id", $Id)->delete($Id);

        return $this->response->redirect(site_url("/listar-autores"));
    }

    public function editar($Id = null)
    {
        print_r($Id);

        $autor = new Autor();

        $datos["autor"] = $autor->where("Id", $Id)->first();

        $datos["header"] = view("templates/header1");
        $datos["footer"] = view("templates/footer");

        return view("autores/editar", $datos);
    }

    public function actualizar()
    {

        $autor = new Autor();

        $validation = $this->validate([ 

            "Nombre" => "required|min_length[3]|max_length[30]",
            "Apellido" => "required|min_length[3]|max_length[30]", 
            "Nacionalidad" => "required|min_length[3]|max_length[30]",                    
            ]);

        $datos = [
            "Nombre" => $this->request->getVar("Nombre", FILTER_SANITIZE_STRING),
            "Apellido" => $this->request->getVar("Apellido", FILTER_SANITIZE_STRING),
            "Nacionalidad" => $this->request->getVar("Nacionalidad", FILTER_SANITIZE_STRING),
        ];
   

        if ($validation) {

            $autor->update("Id", $datos);
          
        }else{
            $session = session();
            $session->setFlashdata("mensaje", "Revise la informaci{on");

            /*return $this->response->redirect(site_url("/listarlibro"));*/

            return redirect()->back()->withInput();
        }
        return $this->response->redirect(site_url("/listar-autores"));
    }
}
