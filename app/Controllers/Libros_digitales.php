<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Libro_digital;
use App\Models\Combo_autores;
use App\Models\Combo_editorial;
use App\Models\Combo_tipodoc;

class Libros_digitales extends BaseController
{

    public function index()
    {

        $libro = new Libro_digital();
        $datos["libros_digitales"] = $libro->orderby("titulo", "ASC")->findAll();

        $datos["header"] = view("templates/header1");
        $datos["footer"] = view("templates/footer");

        return view("libros_digitales/listar", $datos);
    }

    public function crear()
    {
        $combotipodoc = new Combo_tipodoc();
        $comboautores = new Combo_autores();
        $comboeditorial = new Combo_editorial();

        $datos["header"] = view("templates/header1");
        $datos["footer"] = view("templates/footer1");
        $datos["Autores"] = $comboautores->orderBy("Nombre", "ASC")->findAll();
        $datos["Editorial"] = $comboeditorial->orderBy("Nombre", "ASC")->findAll();
        $datos["tipo_documentos"] = $combotipodoc->orderBy("tipo_textodigital", "ASC")->findAll();

        return view("libros_digitales/crear", $datos);
    }



    public function guardar()
    {

        $libro = new Libro_digital();

        $validation = $this->validate([ 
            "titulo" =>"required|min_length[3]|max_length[30]",
            "fecha_publicacion" => "required|is_natural",
            "autor" => "required",
            "editorial" => "required|min_length[3]|max_length[20]",
            "tipo_documento" => "required",
            /*"imagen" => [
                "uploaded[imagen]",
                "mime_in[imagen, image/jpg, image/jpeg, image/png]",
                "max_size[imagen,1024]",
            ]*/
            ]);
        
        if(!$validation){
            $session = session();
            $session->setFlashdata("mensaje", "Revise la información");

            /*return $this->response->redirect(site_url("/listarlibro"));*/

            return redirect()->back()->withInput();
        }

        /*if ($imagen = $this->request->getFile("imagen")) {
            $nuevonombre = $imagen->getRandomName();
            $imagen->move("../public/uploads/", $nuevonombre);*/


            $datos = [
                "titulo" => $this->request->getVar("titulo"),
                "fecha_publicacion" => $this->request->getVar("fecha_publicacion"),
                "autor" => $this->request->getVar("autor"),
                "editorial" => $this->request->getVar("editorial"),
                "tipo_documento" => $this->request->getVar("tipo_documento"),
                /*"imagen" => $nuevonombre,*/
            ];

            $libro->insert($datos);
        /*}*/
        return $this->response->redirect(site_url("/listarlibrodigi"));
    }

    public function borrar($Id = null)
    {

        $libro = new Libro_digital();
        $datoslibro = $libro->where("Id", $Id)->first();

        /*$ruta = ("../public/uploads/" . $datoslibro["imagen"]);       /*Si deseas borrar registro sin imagen, comentar esta linea*/
        /*unlink($ruta);*/

        $libro->where("Id", $Id)->delete($Id);

        return $this->response->redirect(site_url("/listarlibrodigi"));
    }

    public function editar($Id = null)
    {
        print_r($Id);

        $libro = new Libro_digital();

        $datos["libro"] = $libro->where("Id", $Id)->first();

        $datos["header"] = view("templates/header1");
        $datos["footer"] = view("templates/footer");

        return view("libros_digitales/editar", $datos);
    }

    public function actualizar()
    {

        $libro = new Libro_digital();

        $datos = [
            "titulo" => $this->request->getVar("titulo"),

        ];

        $Id = $this->request->getVar("Id");

        $validation = $this->validate([ 
            "titulo" =>"required|min_length[3]",
            /*"imagen" => [
                "uploaded[imagen]",
                "mime_in[imagen, image/jpg, image/jpeg, image/png]",
                "max_size[imagen,1024]",
            ]*/
            ]);
        
        if(!$validation){
            $session = session();
            $session->setFlashdata("mensaje", "Revise la informaci{on");

            /*return $this->response->redirect(site_url("/listarlibro"));*/

            return redirect()->back()->withInput();
        }else{
        
        $libro->update("Id", $datos);
        }

        /*$validation = $this->validate(
            [
                "imagen" => [
                    "uploaded[imagen]",
                    "mime_in[imagen, image/jpg, image/jpeg, image/png]",
                    "max_size[imagen,1024]",
                ]
            ]
        );*/

        /*if ($validation) {

            if ($imagen = $this->request->getFile("imagen")) {

                $datoslibro = $libro->where("Id", $Id)->first();
                /*$ruta = ("../public/uploads/" . $datoslibro["imagen"]);   */    /*Si deseas borrar registro sin imagen, comentar esta linea*/
                /*unlink($ruta);
                $nuevonombre = $imagen->getRandomName();
                $imagen->move("../public/uploads/", $nuevonombre);

                $datos = ["imagen" => $nuevonombre];
                $libro->update($Id, $datos);
            }
        }*/
        return $this->response->redirect(site_url("/listarlibrodigi"));
    }
}
