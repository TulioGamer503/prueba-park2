<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crea-j";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $reporte = $_POST['error-report'];

    // Preparar y ejecutar la consulta
    $stmt = $conn->prepare("INSERT INTO reportes (reporte) VALUES (?)");
    $stmt->bind_param("s", $reporte);

    if ($stmt->execute()) {
        echo "Reporte enviado con éxito.";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
