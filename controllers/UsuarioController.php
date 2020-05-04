<?php
require_once "models/usuario.php";

class UsuarioController{

    public function index(){

        echo "Controlador Usuario accion Index";
    }

    public function register(){

        require_once "views/usuario/register.php";
    }

    public function save(){

        // Verificar si se enviaron los datos del formulario por el metodo POST
        if (isset($_POST)) {

            // Verificar que los datos enviados existen realmente
            $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
            $apellidos = isset($_POST['apellidos']) ? $_POST['apellidos'] : false;
            $email = isset($_POST['email']) ? $_POST['email'] : false;
            $password = isset($_POST['password']) ? $_POST['password'] : false;
            
            // Si todo esta correcto enviar los datos a sus respectivos metodos Set
            if ($nombre && $apellidos && $email && $password) {
                
                $usuario = new Usuario();
                $usuario->setNombre($nombre);
                $usuario->setApellidos($apellidos);
                $usuario->setEmail($email);
                $usuario->setPassword($password);
    
                $save = $usuario->save();
    
                if ($save) {
                    
                    $_SESSION['register'] = "complete";
                }else{
    
                    $_SESSION['register'] = "failed";
                }
            }else{

                $_SESSION['register'] = "failed";
            }
        }else{

            $_SESSION['register'] = "failed";
            header("Location:" . base_url . "usuario/register");
        }

        header("Location:" . base_url . "usuario/register");
    }

    public function login(){

        if (isset($_POST)) {
            
            // Identificar al usuario
            $usuario = new Usuario();
            $usuario->setEmail($_POST['email']);
            $usuario->setPassword($_POST['password']);

            $identity = $usuario->login();

            // Crear una session
            if ($identity && is_object($identity)) {
                
                $_SESSION['identity'] = $identity;

                if ($identity->rol == 'admin') {
                    
                    $_SESSION['admin'] = true;
                }
            }else{

                $_SESSION['error_login'] = "Failed identification";
            }

        }

        header("Location:" . base_url);
    }

    public function logout(){

        if (isset($_SESSION['identity'])) {
            
            unset($_SESSION['identity']);
        }

        if (isset($_SESSION['admin'])) {
            
            unset($_SESSION['admin']);
        }

        header("Location:" . base_url);
    }
}