<?php
// Conexión a la base de datos
require "conexion_login.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener el email y la contraseña ingresados por el usuario
    $email = $_POST['email'];
    $passwd = $_POST['passwd'];

    // Consulta SQL para seleccionar el usuario con el email proporcionado
    $sql = "SELECT * FROM tusuarios WHERE email = '$email'";
    $resultado = $conn->query($sql);

    if ($resultado && $resultado->num_rows > 0) {
        // Obtener la fila del usuario
        $fila = $resultado->fetch_assoc();
        $passwd_db = $fila['passwd']; // Contraseña almacenada en la base de datos
        $id_cargo = $fila['id_cargo']; // Obtener el id_cargo del usuario

        // Verificar la contraseña sin hashear
        if ($passwd === $passwd_db) {
            // Contraseña válida, iniciar sesión
            session_start();
            $_SESSION['email'] = $email;

            // Mostrar un mensaje de bienvenida según el id_cargo del usuario
            if ($id_cargo == 1) { // Si el id_cargo es 1 (administrador)
                echo "Bienvenido Administrador";
            } else if ($id_cargo == 2) { // Si el id_cargo es 2 (cliente)
                echo "Bienvenido Cliente";
            }

            // Redirigir al usuario a la página correspondiente después del inicio de sesión
            if ($id_cargo == 1) {
                // Redirigir al usuario administrador a la parte específica de la página web para administradores
                header('Location: index.html');
            } else if ($id_cargo == 2) {
                // Redirigir al usuario cliente a la página principal después del inicio de sesión exitoso
                header('Location: index.html');
            }

            exit(); // Asegurar que se detenga la ejecución del script después de la redirección
        } else {
            // Contraseña incorrecta
            echo "Contraseña incorrecta";
        }
    } else {
        // Email no registrado
        echo "Email no registrado";
    }
} else {
    // Si no es una solicitud POST, redireccionar o manejar de acuerdo a tu lógica
    echo "Solicitud incorrecta";
}

// Cerrar la conexión a la base de datos
$conn->close();
?>
