<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Libro;
use App\Models\Combo_autores;
use App\Models\Combo_editorial;
use App\Models\CrudModel;

class Libros extends BaseController
{

    public function index()
    {

        $libro = new Libro();
        $datos["libros"] = $libro->orderby("titulo", "ASC")->findAll();

        $datos["header"] = view("templates/header1");
        $datos["footer"] = view("templates/footer");

        return view("libros_fisicos/listar", $datos);
    }

    public function crear()
    {
        $comboautores = new Combo_autores();
        $comboeditorial = new Combo_editorial();

        $datos["header"] = view("templates/header1");
        $datos["footer"] = view("templates/footer1");
        $datos["Autores"] = $comboautores->orderBy("Nombre", "ASC")->findAll();
        $datos["Editorial"] = $comboeditorial->orderBy("Nombre", "ASC")->findAll();

        return view("libros_fisicos/crear", $datos);
    }



    public function guardar()
    {

        $libro = new Libro();

        $validation = $this->validate([ 
            "titulo" =>"required|min_length[3]|max_length[30]",
            "fecha_publicacion" => "required|is_natural",
            "autor" => "required",
            "edicion" => "required|min_length[1]|max_length[30]",
            "editorial" => "required|min_length[3]|max_length[30]",
            "ciudad" => "required|min_length[3]|max_length[30]",
            "cantidad" => "required|is_natural",
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
        }

        $datos = [
            "titulo" => $this->request->getVar("titulo"),
            "fecha_publicacion" => $this->request->getVar("fecha_publicacion"),
            "autor" => $this->request->getVar("autor"),
            "edicion" => $this->request->getVar("edicion"),
            "editorial" => $this->request->getVar("editorial"),
            "ciudad" => $this->request->getVar("ciudad"),
            "cantidad" => $this->request->getVar("cantidad"),
        ];

        $libro->insert($datos);
        
        return $this->response->redirect(site_url("/listarlibro"));

    }

    public function borrar($Id_libro = null)
    {

        $libro = new Libro();
        $datoslibro = $libro->where("Id_libro", $Id_libro)->first();

        $libro->where("Id_libro", $Id_libro)->delete($Id_libro);

        return $this->response->redirect(site_url("/listarlibro"));
    }

    public function editar($Idlibro)
    {
        $data = ["Id_libro" => $Idlibro];
        $crud = new CrudModel();
        $respuesta = $crud->editar($data);

        $datos = ["datos" => $respuesta];

        $comboautores = new Combo_autores();
        $comboeditorial = new Combo_editorial();

        $datos["header"] = view("templates/header1");
        $datos["footer"] = view("templates/footer1");
        $datos["Autores"] = $comboautores->orderBy("Nombre", "ASC")->findAll();
        $datos["Editorial"] = $comboeditorial->orderBy("Nombre", "ASC")->findAll();

        return view("libros_fisicos/editar", $datos);
    }

    public function actualizar()
    {
        $validation = $this->validate([ 
            "titulo" =>"required|min_length[3]|max_length[30]",
            "fecha_publicacion" => "required|is_natural",
            "autor" => "required",
            "edicion" => "required|min_length[1]|max_length[30]",
            "editorial" => "required|min_length[3]|max_length[30]",
            "ciudad" => "required|min_length[3]|max_length[30]",
            "cantidad" => "required|is_natural",
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
        }

        $datos = [

            
            "titulo" => $_POST["titulo"],
            "fecha_publicacion" => $_POST["fecha_publicacion"],
            "autor" => $_POST["autor"],
            "edicion" =>$_POST["edicion"],
            "editorial" => $_POST["editorial"],
            "ciudad" => $_POST["ciudad"],
            "cantidad" => $_POST["cantidad"],

        ];

        $Idlibro = $_POST["Id_libro"];

        $crud = new CrudModel();

        
        $respuesta = $crud->actualizar($datos, $Idlibro);
        
        

        /*$validation = $this->validate(
            [
                "imagen" => [
                    "uploaded[imagen]",
                    "mime_in[imagen, image/jpg, image/jpeg, image/png]",
                    "max_size[imagen,1024]",
                ]
            ]
        );

        if ($validation) {

            if ($imagen = $this->request->getFile("imagen")) {

                $datoslibro = $libro->where("Id_libro", $Id_libro)->first();
                $ruta = ("../public/uploads/" . $datoslibro["imagen"]);       /*Si deseas borrar registro sin imagen, comentar esta linea*/
                /*unlink($ruta);
                $nuevonombre = $imagen->getRandomName();
                $imagen->move("../public/uploads/", $nuevonombre);

                $datos = ["imagen" => $nuevonombre];
                $libro->update($Id_libro, $datos);
            }
        }*/
        return $this->response->redirect(site_url("/listarlibro"));
    }
}
