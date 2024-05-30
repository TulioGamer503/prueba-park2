<?php
// Verifica si se han enviado datos a través del método POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibe los datos del formulario
    $categoria = $_POST["categoria"];
    $descripcion = $_POST["descripcion"];

    // Conexión a la base de datos (cambia estos valores según tu configuración)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "crea-j 2024";

    // Crea una conexión
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verifica la conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Prepara la consulta SQL para insertar el reporte en la base de datos
    $sql = "INSERT INTO reportes (categoria, descripcion) VALUES ('$categoria', '$descripcion')";

    // Ejecuta la consulta y verifica si fue exitosa
    if ($conn->query($sql) === TRUE) {
        // Cierra la conexión a la base de datos
        $conn->close();
        // Muestra la alerta formal
        echo "<script>alert('Agradecemos tu reporte. Por favor, acepta nuestras disculpas por cualquier inconveniente causado. Estamos trabajando para mejorar. Serás redirigido.'); setTimeout(function(){ window.location.href = '../HTML/index.php'; }, 1000);</script>";
        // Redirige al usuario a otra página
        exit; // Esto asegura que el script se detenga aquí para que no se ejecute el resto del código
    } else {
        echo "Error al guardar el reporte: " . $conn->error;
    }

    // Cierra la conexión a la base de datos
    $conn->close();
}
?>

