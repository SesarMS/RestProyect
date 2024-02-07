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
        case "Update":
            $datos=$categoria->update_categoria($body['cat_id'],$body['cat_nom'], $body['cat_obs']);
            echo json_encode('Update correcto');
        break;
        case "Remove":
            $datos=$categoria->remove_categoria($body['cat_id']);
            echo json_encode('Remove correcto');
        break;
        case "AddProducto":
            $datos = $categoria->agregar_producto_a_categoria($body['cat_id'], $body['producto_nombre'], $body['producto_descripcion']);
            echo json_encode('Producto agregado a la categoría');
            break;
        case "GetProductosPorCategoria":
            $datos = $categoria->obtener_productos_por_categoria($body['cat_id']);
            echo json_encode($datos);
            break;
    }
