<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsuariosModel;
use App\Models\Combo_roles;

class Usuarios extends BaseController{

    protected $usuarios;
    protected $reglas, $reglasLogin;

    

    /*public function crear(){

        $validation = $this->validate([ 

            "usuario" => "required|min_length[3]|max_length[30]|is_unique[usuarios.usuario]",
            "password" => "required",
            "valid_pass" => "required|matches[password]",
            "nombre" => "required|min_length[3]|max_length[30]|",
            "apellido" => "required|min_length[3]|max_length[30]|",
            "id_rol" => "required",
            ]);

            if(!$validation){
                $session = session();
                $session->setFlashdata("mensaje", "Revise la informaci{on");
                /*return $this->response->redirect(site_url("/listarlibro"));*/
    
            /*    return redirect()->back()->withInput();
            }

            

        if($this->request->getMethod() == "post" && $validation){

            $registerusuario = new RegisterUsuario();
            $hash = password_hash($this->request->getPost("password"), PASSWORD_DEFAULT);

            $registerusuario->save([

                "usuario" => $this->request->getPost("usuario", FILTER_SANITIZE_STRING),
                "password" => $this->request->getPost("password"),
                "nombre" => $this->request->getPost("nombre"),
                "apellido" => $this->request->getPost("apellido"),
                "id_rol" => $this->request->getPost("id_rol"),
                "activo" => 1,
                
            ]);
            return redirect(site_url("/login"));
        }
        
        

        
        
        
    }*/
    public function __construct()
    {
        $this->usuarios = new UsuariosModel();
        helper(["form"]);

        $this->reglas = [
            "usuario" => [
                "rules" => "required|is_unique[usuarios.usuario]",
                "errors" => [
                    "required" => "El campo {field} es obligatorio",
                    "is_unique" => "El campo {field} debe ser unico"
                ]
            ],
            "password" => [
                "rules" => "required",
                "errors" => [
                    "required" => "El campo {field} es obligatorio",
                ]
            ],
            "valid_pass" => [
                "rules" => "required|matches[password]",
                "errors" => [
                    "required" => "El campo {field} es obligatorio",
                    "matches" => "Las contraseñas deben ser iguales",
                ]
            ],
            "nombre" => [
                "rules" => "required",
                "errors" => [
                    "required" => "El campo {field} es obligatorio",
                ]
            ],
            "apellido" => [
                "rules" => "required",
                "errors" => [
                    "required" => "El campo {field} es obligatorio",
                ]
            ],
            "id_rol" => [
                "rules" => "required",
                "errors" => [
                    "required" => "El campo {field} es obligatorio",
                ]
            ],
        ];

        $this->reglasLogin = [
            "usuario" => [
                "rules" => "required|",
                "errors" => [
                    "required" => "El campo {field} es obligatorio",
                    
                ]
            ],
            "password" => [
                "rules" => "required",
                "errors" => [
                    "required" => "El campo {field} es obligatorio",
                ]
            ],
        ];
    }

    public function nuevo(){
        $comboroles = new Combo_roles();

        $datos["header"] = view("templates/header-register");
        $datos["footer"] = view("templates/footer");
        $datos["roles"] = $comboroles->orderBy("id", "ASC")->findAll();
        
        return view("secciones/register", $datos);
    }

    public function insertar(){
        if($this->request->getMethod() == "post" && $this->validate($this->reglas)){

            $hash = password_hash($this->request->getPost("password"), PASSWORD_DEFAULT);

            $this->usuarios->save([

                "usuario" => $this->request->getPost("usuario", FILTER_SANITIZE_STRING),
                "password" => $hash,
                "nombre" => $this->request->getPost("nombre"),
                "apellido" => $this->request->getPost("apellido"),
                "id_rol" => $this->request->getPost("id_rol"),
                "activo" => 1,
                
            ]);
            
            return redirect()->to(base_url() . "/login")->with("mensaje-succes","Usuario registrado satisfactoriamente");
        }else{
            
            $session = session();
            $session->setFlashdata("mensaje", "Revise la informaci{on");
            return $this->response->redirect(site_url("/register"));
    
            return redirect()->back()->withInput();
            
            /*$comboroles = new Combo_roles();

            $datos["header"] = view("templates/header-register");
            $datos["footer"] = view("templates/footer");
            $datos["roles"] = $comboroles->orderBy("id", "ASC")->findAll();
            $datos = ["validation" => $this->validator];

            return view ("secciones/register", $datos);*/
        }
    }

    public function login(){

        $datos["header"] = view("templates/header-login");
        $datos["footer"] = view("templates/footer");

        $mensaje = session("mensaje");
        return view("secciones/login", $datos, ["mensaje" => $mensaje]);

    }

    
    

    /*public function validarlogin(){
        
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

    public function validar(){
        if($this->request->getMethod() == "post" && $this->validate($this->reglasLogin)){
            $usuario = $this->request->getPost("usuario");
            $password = $this->request->getPost("password");
            $datosusuario = $this->usuarios->where("usuario", $usuario)->first();

            if($datosusuario != null){
                if(password_verify($password, $datosusuario["password"])){
                    $datosSesion = [
                        "id_usuario" => $datosusuario["id_usuario"],
                        "nombre" => $datosusuario["nombre"],
                        "apellido" => $datosusuario["apellido"],
                        "id_rol" => $datosusuario["id_rol"],
                    ];

                    $session = session();
                    $session->set($datosSesion);
                    return redirect()->to(base_url() . "/BibliotecaUMC")->with("mensaje", "Usuario autenticado correctamente");
                }else{
                    
                    return redirect()->to(base_url("/login"))->with("mensaje", "Contraseña inválida");
                }
            }else{
                
                return redirect()->to(base_url("/login"))->with("mensaje", "El usuario no existe");
            }
        }else{
            return redirect()->to(base_url("/login"))->with("mensaje", "No ha sido posible su verificación");
        }
    }

    public function logout(){
        $session = session();
        $session->destroy();

        return redirect()->to(base_url("/"));
    }    
}