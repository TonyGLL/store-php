<?php

session_start();

require_once 'autoLoad.php';

require_once "config/db.php";
require_once "config/parameters.php";

require_once "helpers/utils.php";

require_once "views/layouts/header.php";
require_once "views/layouts/sidebar.php";

// Mostrar error cuando no existe la pagina Error 404
function showError(){

    $error = new ErrorController();
    $error->index();
}

// Verificar si existe en la URL la palabra controller
if (isset($_GET['controller'])) {
    
    // Introducir en una variable la concatenacion de el valor dentro de $_GET['controller'] con (Controller)
    $name_controller = $_GET['controller'] . 'Controller';
}elseif(!isset($_GET['controller']) && !isset($_GET['action'])){

    $name_controller = default_controller;
}else{

    showError();
    exit();
}

// Verificar si realmente existe una clase en el controlador con dicho nombre introducido por la URL
if (class_exists($name_controller)) {

    // Crear un objeto nuevo con dicha clase
    $controller = new $name_controller();

    // Verificar si existe algo en el action y si corresponde a un metodo creado en el controlador
    if (isset($_GET['action']) && method_exists($controller, $_GET['action'])) {
        
        $action = $_GET['action'];
        
        $controller->$action();
    }elseif (!isset($_GET['controller']) && !isset($_GET['action'])) {
        
        $default_action = default_action;
        $controller->$default_action();
    }else{
    
        showError();
    }
}else{

    showError();
}

require_once "views/layouts/footer.php";