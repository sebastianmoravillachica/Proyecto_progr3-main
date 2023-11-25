<?php
include 'conexion_login.php';
include 'login.html';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
    $apellido_1 = isset($_POST['apellido_1']) ? $_POST['apellido_1'] : '';
    $apellido_2 = isset($_POST['apellido_2']) ? $_POST['apellido_2'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $contrasena = isset($_POST['passwd']) ? $_POST['passwd'] : '';

    // Establecer el rol por defecto (tipo 2 para clientes)
    $id_cargo = 2;

    // Verificar si todos los campos requeridos están completos
    if (!empty($nombre) && !empty($apellido_1) && !empty($apellido_2) && !empty($email) && !empty($contrasena)) {
        $sql = "INSERT INTO tusuarios (nombre, apellido_1, apellido_2, email, passwd, id_cargo)
                VALUES ('$nombre', '$apellido_1', '$apellido_2', '$email', '$contrasena', '$id_cargo')";

        if ($conn->query($sql) === TRUE) {
            echo "Registro exitoso"; 
        } else {
            if ($conn->errno == 1062) { // Verificar el error específico para correo duplicado
                echo "El correo que ingresaste ya existe";
            } else {
                echo "Error al registrar usuario: " . $conn->error;
            }
        }
    } else {
        echo "Por favor, complete todos los campos obligatorios.";
    }
}

$conn->close();
?>
