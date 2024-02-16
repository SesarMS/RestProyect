<?php
    header('Content-Type: aplication/json');

    require_once('../config/conexion.php');
    require_once('../models/Producto.php');
    $producto = new Producto();
    $body = json_decode(file_get_contents("php://input"), true);


    switch($_GET["op"]){
        case "GetAll":
            $datos=$producto->get_productos();
            echo json_encode($datos);
        break;
        case "GetId":
            $datos=$producto->get_producto_x_id($body["producto_id"]);
            echo json_encode($datos);
        break;
        case "Insert":
            $datos=$producto->insert_producto($body['producto_nombre'], $body['producto_descripcion'],$body['cat_id'] );
            echo json_encode('Correcto');
        break;
        case "Remove":
            $datos=$producto->remove_producto($body['producto_id']);
            echo json_encode('Remove correcto');
        break;        
        case "GetProductosPorCategoria":
            $datos = $producto->obtener_productos_por_categoria($body['cat_id']);
            echo json_encode($datos);
            break;
    }
