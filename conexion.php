<?php
include "../../vendor/adodb/adodb-php/adodb.inc.php";

function conectar()
{
    //definir el driver de conexion
    $db = newAdoConnection('mysqli');

    //definir las credenciales
    $database = 'bdrest';
    $host     = 'localhost';
    $user     = 'root';
    $password = 'mysql';

    //habilitar el modo debug en modo desarrollo
    //$db->debug = true;

    //crear el objeto conexion
    $db->connect($host, $user, $password, $database);
    return $db;
}

$db=conectar();