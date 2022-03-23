<?php

namespace App\Controllers;

use App\Models\Usuarios;

use App\Models\Autor;
use App\Models\Editorial;
use App\Models\Carrera;
use App\Models\Tipodoc;
use App\Models\RegisterUsuario;
use App\Models\ShowUsuarioTable;
use App\Models\Combo_roles;

class Home extends BaseController
{
    /*public function login(){

        $datos["header"] = view("templates/header-login");
        $datos["footer"] = view("templates/footer");

        $mensaje = session("mensaje");
        return view("secciones/login", $datos, ["mensaje" => $mensaje]);

    }

    
    

    public function validarlogin(){
        
        $Usuario = new Usuarios();
        $usuario = $this->request->getPost("usuario");
        $password = $this->request->getPost("password");

        $datosusuario = $Usuario->obtenerusuario(["usuario" => $usuario]);

        if(count($datosusuario) > 0 && password_verify($password, $datosusuario[0]["password"])){
            
            $data = [
                "usuario" => $datosusuario[0]["usuario"],
                "type" => $datosusuario[0]["type"],
            ];

            $session = session();
            $session->set($data);
            
            return redirect()->to(base_url("BibliotecaUMC"))->with("mensaje", "Ha sido verificado");

        }else{
            return redirect()->to(base_url("/login"))->with("mensaje", "No ha sido posible su verificación");
        }
    }*/

    /*public function salir(){
        $session = session();
        $session->destroy();

        return redirect()->to(base_url("/"));
    }*/

    public function index(){

        $datos["header"] = view("templates/header1");
        $datos["footer"] = view("templates/footer1");
        
        return view("Secciones/home", $datos);
    }

    public function consultar(){

        $datos["header"] = view("templates/header1");
        $datos["footer"] = view("templates/footer");
        
        return view("Secciones/consultas", $datos);
    }

    public function registro(){

        $autor = new Autor();
        $editorial = new Editorial();
        $carrera = new Carrera();
        $tipodoc = new Tipodoc();
        $showusuario = new ShowUsuarioTable();

        $datos["header"] = view("templates/header1");
        $datos["footer"] = view("templates/footer1");

        $datos["autores"] = $autor->orderby("Nombre", "ASC")->findAll();
        $datos["editoriales"] = $editorial->orderby("Nombre", "ASC")->findAll();
        $datos["carreras"] = $carrera->orderby("Id", "ASC")->findAll();
        $datos["tipo_documentos"] = $tipodoc->orderby("tipo_textodigital", "ASC")->findAll();
        $datos["usuarios"] = $showusuario->orderby("id_usuario", "ASC")->findAll();

        return view("secciones/registros", $datos);
    }
}