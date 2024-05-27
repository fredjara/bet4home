<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

require("./FlowApi.class.php");
require './conexion.php';

try {

    if (empty($_POST['nombre'])) {
        echo 'error nombre empty';
    } else {
        $nombre = $_POST['nombre'];
    }

    if (empty($_POST['rut'])) {
        echo 'error rut vacio';
    } else {
        $rut = $_POST['rut'];
    }

    if (empty($_POST['email'])) {
        echo 'error email vacio';
    } else {
        $correo = $_POST['email'];
    }
    
    if (empty($_POST['telefono'])) {
        echo 'error telefono vacio';
    } else {
        $telefono = $_POST['telefono'];
    }
    
    
    if (empty($_POST['unidades_reservadas'])) {
        echo 'error reserva vacia';
    } else {
        $unidades_reservadas = $_POST['unidades_reservadas'];
    }
    
    if ($unidades_reservadas == 2) {
        $reserva = 200000;
    } else {
        $reserva = 100000;
    }
    
    date_default_timezone_set('America/Santiago');
    $fechaReserva = date("Y-m-d H:i:s");

    
    $query = "INSERT INTO formulario(form_nombre, form_rut, form_correo, form_telefono, form_reservas, form_fecha, form_asunto) "
            . "VALUES ('$nombre', '$rut', '$correo', '+569$telefono', '$unidades_reservadas', '$fechaReserva', 'Lanzamiento')";
    $resultado = $conexion->query($query);
    
    $query_log = "INSERT INTO logs(log_nombrecontacto, log_accion, log_fecha)"
            . " VALUES ('$nombre',  'el contacto con correo: $correo ha realizado $unidades_reservadas reservas', '$fechaReserva')";
    $resultado_querylog = $conexion->query($query_log);
    
    //Para datos opcionales campo "optional" prepara un arreglo JSON
    $optional = array(
        "rut" => $rut,
        "nombre" => $nombre
    );
    $optional = json_encode($optional);

    $params = array(
        "commerceOrder" => rand(1050, 3000),
        "subject" => "Reserva departamento",
        "currency" => "CLP",
        "amount" => $reserva,
        "email" => $correo,
        "paymentMethod" => 9,
        "optional" => $optional,
        "urlConfirmation" => Config::get("BASEURL") . "confirm.php",
        "urlReturn" => Config::get("BASEURL") . "result.php",
    );

//Define el metodo a usar
    $serviceName = "payment/create";

    try {
        $flowApi = new FlowApi;
        $response = $flowApi->send($serviceName, $params, "POST");
        $redirect = $response["url"] . "?token=" . $response["token"];
        if ($response["token"] != '') {
            header("location:$redirect");
        } else {
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        }
    } catch (Exception $e) {
        echo $e->getCode() . " - " . $e->getMessage();
    }
    
    

} catch (Exception $ex) {
    echo 'ERROR: ', $e->getMessage(), "\n";
}


