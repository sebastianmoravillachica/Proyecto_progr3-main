 <?php
include 'conexion_login.php';
/*
// Recibir datos del formulario
$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
$apellido1 = isset($_POST['apellido1']) ? $_POST['apellido1'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$telefono = isset($_POST['telefono']) ? $_POST['telefono'] : '';

// Verificar si todos los campos requeridos están completos
if (!empty($nombre) && !empty($apellido1) && !empty($email) && !empty($telefono)) {
    $usuario_id = 1; 

    // Actualizar la información del usuario en la base de datos
    $sql = "UPDATE tusuarios SET nombre='$nombre', apellido_1='$apellido1', email='$email', telefono='$telefono' WHERE id_usuario=$usuario_id";

    if ($conn->query($sql) === TRUE) {
        echo "Datos actualizados correctamente"; 
    } else {
        echo "Error al actualizar datos: " . $conn->error;
    }
} else {
    echo "Por favor, complete todos los campos obligatorios.";
}

$conn->close();
?>
*/