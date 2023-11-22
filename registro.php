<?php
include 'conexion_login.php';
include 'login.html';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
    $apellido_1 = isset($_POST['apellido_1']) ? $_POST['apellido_1'] : '';
    $apellido_2 = isset($_POST['apellido_2']) ? $_POST['apellido_2'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $contrasena = isset($_POST['passwd']) ? $_POST['passwd'] : '';

    $hashed_password = password_hash($contrasena, PASSWORD_DEFAULT);

    $sql = "INSERT INTO tusuarios (nombre, apellido_1, apellido_2, email, passwd)
            VALUES ('$nombre', '$apellido_1', '$apellido_2', '$email', '$hashed_password')";

    if ($conn->query($sql) === TRUE) {
        echo "Registro exitoso"; 

    } else {
        echo "Error al registrar usuario: " . $conn->error;
    }
}

$conn->close();
?>
