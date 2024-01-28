<?php
    header('Content-Type: aplication/json');

    require_once('../config/conexion.php');
    require_once('../models/Categoria.php');
    $categoria = new Categoria();
    $body = json_decode(file_get_contents("php://input"), true);


    switch($_GET["op"]){
        case "GetAll":
            $datos=$categoria->get_categoria();
            echo json_encode($datos);
        break;
        case "GetId":
            $datos=$categoria->get_categoria_x_id($body["cat_id"]);
            echo json_encode($datos);
        break;
        case "Insert":
            $datos=$categoria->insert_categoria($body['cat_nom'], $body['cat_obs']);
            echo json_encode('Correcto');
        break;
    }
