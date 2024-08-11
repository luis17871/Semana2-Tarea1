<?php

class Clientes {
    public function todos() {
        $sql = "SELECT * FROM Clientes";
        $result = mysqli_query($this->conexion, $sql);
        return $result;
    }

    public function uno($idClientes) {
        $sql = "SELECT * FROM Clientes WHERE idClientes = '$idClientes'";
        $result = mysqli_query($this->conexion, $sql);
        return $result;
    }

    public function insertar($Nombre_Cliente, $Direccion, $Telefono, $Email) {
        $sql = "INSERT INTO Clientes (Nombre_Cliente, Direccion, Telefono, Email) 
                VALUES ('$Nombre_Cliente', '$Direccion', '$Telefono', '$Email')";
        $result = mysqli_query($this->conexion, $sql);
        return $result;
    }

    public function actualizar($idClientes, $Nombre_Cliente, $Direccion, $Telefono, $Email) {
        $sql = "UPDATE Clientes SET 
                Nombre_Cliente = '$Nombre_Cliente', 
                Direccion = '$Direccion', 
                Telefono = '$Telefono', 
                Email = '$Email'
                WHERE idClientes = '$idClientes'";
        $result = mysqli_query($this->conexion, $sql);
        return $result;
    }

    public function eliminar($idClientes) {
        $sql = "DELETE FROM Clientes WHERE idClientes = '$idClientes'";
        $result = mysqli_query($this->conexion, $sql);
        return $result;
    }
}
