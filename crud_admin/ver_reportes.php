<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crea-j 2024";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener los reportes
$sql = "SELECT * FROM datos";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Reportes de Usuarios</title>
</head>
<body>
    <h1>Reportes de Usuarios</h1>
    <?php
    if ($result->num_rows > 0) {
        echo "<table border='1'>";
        echo "<tr><th>ID</th><th>Reporte</th><th>Categoria</th></tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["descripcion"] . "</td>";
            echo "<td>" . $row["categoria_id"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No hay reportes.";
    }
    ?>
</body>
</html>

<?php
$conn->close();
?>
