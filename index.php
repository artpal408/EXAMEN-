<?php
/**
 * Created by PhpStorm.
 * User: Palacio M
 * Date: 04/10/2017
 * Time: 09:11 PM
 */


session_start();

if(empty($_SESSION['usuario'])){
    include_once 'vista/Login.vista.php';
}else{
    include_once 'vista/Inicio.vista.php';
}

