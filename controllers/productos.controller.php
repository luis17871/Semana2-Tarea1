<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Allow: GET, POST, OPTIONS, PUT, DELETE");
$method = $_SERVER["REQUEST_METHOD"];
if ($method == "OPTIONS") {
    die();
}

require_once('../models/productos.model.php');
error_reporting(0);
$productos = new Productos;

switch ($_GET["op"]) {
    case 'todos':
        $datos = array();
        $datos = $productos->todos();
        while ($row = mysqli_fetch_assoc($datos)) {
            $todos[] = $row;
        }
        echo json_encode($todos);
        break;
    case 'uno':
        $idProductos = $_POST["idProductos"];
        $datos = array();
        $datos = $productos->uno($idProductos);
        $res = mysqli_fetch_assoc($datos);
        echo json_encode($res);
        break;
    case 'insertar':
        $Nombre_Producto = $_POST["Nombre_Producto"];
        $Descripcion = $_POST["Descripcion"];
        $Precio = $_POST["Precio"];
        $Stock = $_POST["Stock"];
        $datos = array();
        $datos = $productos->insertar($Nombre_Producto, $Descripcion, $Precio, $Stock);
        echo json_encode($datos);
        break;
    case 'actualizar':
        $idProductos = $_POST["idProductos"];
        $Nombre_Producto = $_POST["Nombre_Producto"];
        $Descripcion = $_POST["Descripcion"];
        $Precio = $_POST["Precio"];
        $Stock = $_POST["Stock"];
        $datos = array();
        $datos = $productos->actualizar($idProductos, $Nombre_Producto, $Descripcion, $Precio, $Stock);
        echo json_encode($datos);
        break;
    case 'eliminar':
        $idProductos = $_POST["idProductos"];
        $datos = array();
        $datos = $productos->eliminar($idProductos);
        echo json_encode($datos);
        break;
}
