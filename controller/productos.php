<?php
require_once("../config/conexion.php");
require_once("../models/Productos.php");
$producto = new Producto();

switch ($_GET["op"]) {

    case "listar":
        $datos = $producto->get_producto();
        $data = array();
        foreach ($datos as $row) {
            $sub_array = array();
            $sub_array[] = $row["prod_nombre"];
            $sub_array[] = '<button type="button" onClick="editar(' . $row["prod_id"] . ');"  id="' . $row["prod_id"] . '" class="btn btn-outline-primary btn-icon"><div><i class="fa fa-edit"></i></div></button>';
            $sub_array[] = '<button type="button" onClick="eliminar(' . $row["prod_id"] . ');"  id="' . $row["prod_id"] . '" class="btn btn-outline-danger btn-icon"><div><i class="fa fa-trash"></i></div></button>';
            $data[] = $sub_array;
        }

        $results = array(
            "draw" => 1, // En v2.0 se prefiere 'draw' en lugar de 'sEcho'
            "recordsTotal" => count($data),
            "recordsFiltered" => count($data),
            "data" => $data // <-- ESTE ES EL CAMBIO CLAVE
        );
        // 1. Limpiamos cualquier "basura" o espacio previo
        if (ob_get_length()) ob_clean();

        // 2. Definimos el tipo de contenido
        header('Content-Type: application/json; charset=utf-8');

        // 3. Enviamos el JSON
        echo json_encode($results);

        break;

    case "guardaryeditar":
        $datos = $producto->get_producto_x_id($_POST["prod_id"]);
        if (empty($_POST["prod_id"])) {
            if (is_array($datos) == true and count($datos) == 0) {
                $producto->insert_producto($_POST["prod_nombre"]);
            }
        } else {
            $producto->update_producto($_POST["prod_id"], $_POST["prod_nombre"]);
        }
        break;

    case "mostrar":
        $datos = $producto->get_producto_x_id($_POST["prod_id"]);
        if (is_array($datos) == true and count($datos) > 0) {
            foreach ($datos as $row) {
                $output["prod_id"] = $row["prod_id"];
                $output["prod_nombre"] = $row["prod_nombre"];
            }
            echo json_encode($output);
        }
        break;

    case "eliminar":
        $producto->delete_producto($_POST["prod_id"]);
        break;
}
