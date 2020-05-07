<?php

class Utils{

    public static function deleteSession($name){

        if (isset($_SESSION[$name])) {
            
            $_SESSION[$name] = null;
            unset($_SESSION[$name]);
        }

        return $name;
    }
    
    public static function isAdmin(){

        if (!isset($_SESSION['admin'])) {
            
            header("Location:" . base_url);
        }
    }

    public static function isIdentity(){

        if (!isset($_SESSION['identity'])) {
            
            header("Location:" . base_url);
        }
    }

    public static function showCategories(){

        require_once "models/categoria.php";
        $categoria = new Categoria();
        $categorias = $categoria->getAll();

        return $categorias;
    }

    public static function statsCarrito(){

        $stats = array(

            "count" => 0,
            "total" => 0
        );

        if (isset($_SESSION['carrito'])) {
            
            $stats['count'] = count($_SESSION['carrito']);

            foreach ($_SESSION['carrito'] as $producto) {
                
                $stats['total'] += $producto['precio'] * $producto['unidades'];
            }
        }

        return $stats;
    }

    public static function showStatus($status){

        $value = "Pending";
        if ($status == "confirm") {
            
            $value = "Pending";
        } elseif ($status == "preparation") {
            
            $value = "In preparation";
        } elseif ($status == "ready") {
            
            $value = "Ready to ship";
        } elseif ($status == "sended") {
            
            $value = "Sended"; 
        }

        return $value;
        
    }
}