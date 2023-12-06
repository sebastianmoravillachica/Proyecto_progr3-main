<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../../vendor/autoload.php';
require "conexion.php";
//require "conexionmenu.php";


$app = new \Slim\App;

// Insertar un usuario
$app->post('/insusuario', function (Request $request, Response $response, array $args) {
    //abrir la conexion
    $db = conectar();
    //obtener los datos a insertar
    $rec = $request->getQueryParams();
    $res = $db->AutoExecute("tusuarios", $rec, "INSERT");
    //retornar el valor que indica si se ejecuto correctamente        
    $response->getBody()->write($res);
    return $response;
});
//Modificar el Usuario
$app->put('/updusuario', function (Request $request, Response $response, array $args) {
    $db=conectar();
    $rec=$request->getQueryParams();
    $res=$db->AutoExecute("tusuarios",$rec,"UPDATE","id=$rec[id]");
    $response->getBody()->write($res);    
    return $response;
});
//Eliminar Usuario
$app->delete('/delusuario/{id}', function (Request $request, Response $response, array $args) {
    $id=$args["id"];
    $db=conectar();
    $sql="DELETE FROM tusuarios WHERE id=$id";
    $res=$db->execute($sql);
    $response->getBody()->write($res);
    return $response;
});
$app->get('/getusuario', function (Request $request, Response $response, array $args) {
    $db=conectar();
    //definir el tipo de fetch
    $db->SetFetchMode(ADODB_FETCH_ASSOC);
    $sql="SELECT * FROM tusuarios";
    $res=$db->GetAll($sql);
    //respuesta en formato json
    $response->getBody()->write(json_encode($res));
    return $response;
});

//-------------------------------------  CRUD menu/platillos-------------------------------------------------//

//insertar
$app->post('/insplatillo', function (Request $request, Response $response, array $args) {
//abrir conexion
$db = conectar();
//obtener los datos a insertar
$rec=$request->getQueryParams();
$res=$db->AutoExecute("tplatillos",$rec,"INSERT");
//retornar el valor que indica si se ejecuto correctamente
$response->getBody()->write($res);
return $response;
});

//modificar
$app->put('/updplatillo', function (Request $request, Response $response, array $args) {
    $db = conectar();
    $rec=$request->getQueryParams();
    $res=$db->AutoExecute("tplatillos",$rec,"UPDATE","id=$rec[id]");
    $response->getBody()->write($res);
    return $response;
});

//eliminar
$app->delete('/delplatillo/{id}', function (Request $request, Response $response, array $args) {
    $id=$args["id"];
    $db = conectar();
    $sql="DELETE FROM tplatillos WHERE id=$id";
    $res=$db->execute($sql);
    $response->getBody()->write($res);
    return $response;
});

$app->get('/getplatillo', function (Request $request, Response $response, array $args) {
    $db=conectar();
    //definir el tipo de fetch
    $db->SetFetchMode(ADODB_FETCH_ASSOC);
    $sql="SELECT * FROM tplatillos";
    $res=$db->GetAll($sql);
    //respuesta en formato json
    $response->getBody()->write(json_encode($res));
    return $response;
});

$app->run();
