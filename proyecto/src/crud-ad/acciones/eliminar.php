<?php
$servername = "localhost"; // Nombre del servidor MySQL
$username = "root"; // Nombre de usuario de la base de datos
$password = ""; // Contraseña de la base de datos
$database = "crea"; // Nombre de la base de datos

if (isset($_GET['id'])) {
    $blogId = $_GET['id'];
    
    $eliminarSql = "DELETE FROM registro WHERE id = $blogId";
    
    if ($conn->query($eliminarSql) === TRUE) {
        header("Location: index.php"); // Redirige de vuelta a la lista de blogs después de eliminar
        exit();
    } else {
        echo "Error al eliminar la entrada: " . $conn->error;
    }
    
    $conn->close();
} else {
    echo 'ID de entrada no proporcionado.';
}
?>
