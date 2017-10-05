<?php
/**
 * Created by PhpStorm.
 * User: Palacio M
 * Date: 04/10/2017
 * Time: 09:17 PM
 */

session_start();

require_once '../modelo/Inicio.modelo.php';

$modelo = new InicioModelo();


if(isset($_GET['cerrar'])){
    session_destroy();
    header("Location: http://presidentes:8080");
}

if(isset($_POST['login'])){
    echo 'Hola, queres iniciar sesion';
    $usuario = $_POST['usuario'];
    $pass = $_POST['pass'];

    $resultado = $modelo->login($usuario, $pass);

    if(empty($resultado)){
        echo 'Usuario no encontrado';
    }else{
        echo 'Bienvenido';
        $_SESSION['usuario'] = 1;
        header("Location: http://presidentes:8080/controlador/Presidentes.ccontrolador.php");
    }
}


if(!empty($_POST['agregar'])){
    echo 'Hola! vamos a agregar';
}