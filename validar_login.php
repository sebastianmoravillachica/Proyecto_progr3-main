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
        $passwd_hash = $fila['passwd'];

        // Verificar la contraseña
        if (password_verify($passwd, $passwd_hash)) {
            // Contraseña válida, iniciar sesión
            session_start();
            $_SESSION['email'] = $email;

            // Redirigir al usuario a la página principal después del inicio de sesión exitoso
            header('Location: index.html');
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
