<?php

class Productos {
    public function todos() {
        $sql = "SELECT * FROM Productos";
        $result = mysqli_query($this->conexion, $sql);
        return $result;
    }

    public function uno($idProductos) {
        $sql = "SELECT * FROM Productos WHERE idProductos = '$idProductos'";
        $result = mysqli_query($this->conexion, $sql);
        return $result;
    }

    public function insertar($Nombre_Producto, $Descripcion, $Precio, $Stock) {
        $sql = "INSERT INTO Productos (Nombre_Producto, Descripcion, Precio, Stock) 
                VALUES ('$Nombre_Producto', '$Descripcion', '$Precio', '$Stock')";
        $result = mysqli_query($this->conexion, $sql);
        return $result;
    }

    public function actualizar($idProductos, $Nombre_Producto, $Descripcion, $Precio, $Stock) {
        $sql = "UPDATE Productos SET 
                Nombre_Producto = '$Nombre_Producto', 
                Descripcion = '$Descripcion', 
                Precio = '$Precio', 
                Stock = '$Stock'
                WHERE idProductos = '$idProductos'";
        $result = mysqli_query($this->conexion, $sql);
        return $result;
    }

    public function eliminar($idProductos) {
        $sql = "DELETE FROM Productos WHERE idProductos = '$idProductos'";
        $result = mysqli_query($this->conexion, $sql);
        return $result;
    }
}
