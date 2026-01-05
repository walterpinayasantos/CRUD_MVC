<?php
require_once("../config/conexion.php");
require_once("../models/Productos.php");
$producto = new Producto();

// Limpiamos cualquier salida previa que pueda ensuciar el JSON
if (ob_get_length()) ob_clean();

switch ($_GET["op"]) {
    case "listar":
        $datos = $producto->get_producto();
        $data = array();
        foreach ($datos as $row) {
            $sub_array = array();
            $sub_array[] = $row["prod_nombre"];
            $sub_array[] = $row["prod_desc"];
            $sub_array[] = '<button type="button" onClick="editar(' . $row["prod_id"] . ');" id="' . $row["prod_id"] . '" class="btn btn-outline-primary btn-icon"><div><i class="fa fa-edit"></i></div></button>';
            $sub_array[] = '<button type="button" onClick="eliminar(' . $row["prod_id"] . ');" id="' . $row["prod_id"] . '" class="btn btn-outline-danger btn-icon"><div><i class="fa fa-trash"></i></div></button>';
            $data[] = $sub_array;
        }

        $results = array(
            "draw" => 1,
            "recordsTotal" => count($data),
            "recordsFiltered" => count($data),
            "data" => $data
        );
        header('Content-Type: application/json');
        echo json_encode($results);
        break;

    case "guardaryeditar":
        if (empty($_POST["prod_id"])) {
            $producto->insert_producto($_POST["prod_nombre"], $_POST["prod_desc"]);
        } else {
            $producto->update_producto($_POST["prod_id"], $_POST["prod_nombre"], $_POST["prod_desc"]);
        }
        break;

    case "mostrar":
        $datos = $producto->get_producto_x_id($_POST["prod_id"]);
        $output = array();
        if (is_array($datos) && count($datos) > 0) {
            foreach ($datos as $row) {
                $output["prod_id"] = $row["prod_id"];
                $output["prod_nombre"] = $row["prod_nombre"];
                $output["prod_desc"] = $row["prod_desc"];
            }
            header('Content-Type: application/json');
            echo json_encode($output);
        }
        break;

    case "eliminar":
        $producto->delete_producto($_POST["prod_id"]);
        break;
}
// NOTA: No pongas 