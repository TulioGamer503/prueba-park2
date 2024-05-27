<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('location:../html/login.html');
    exit();
}

// Aquí obtienes el nombre del usuario desde la sesión o la base de datos
$nombre_usuario = $_SESSION['email']; // Asumiendo que guardaste el nombre del usuario en la sesión
?>
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

// Obtener todos los usuarios
$sql = "SELECT id, nombre, email, fecha_registro FROM registro";
$result = $conn->query($sql);
$usuarios = [];

if ($result) {
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $usuarios[] = $row;
        }
    }
} else {
    echo "Error en la consulta: " . $conn->error;
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administración de Usuarios</title>
    <link rel="stylesheet" href="../css/estilo.css">
    <link rel="stylesheet" href="crud_css/tabla.css">
</head>
<body>
    <header>
        <div class="logo-container">
            <a href="index.html"><img class="logo" src="../img/estrella (1).png" alt="Logo de la App"></a>
        </div>
        <h1>Administración de Usuarios</h1>
        <div class="icons-container">
            <a href="../html/login.html"><img class="header-icon" src="../img/perfil.png" alt="Icono de Usuario"></a>
        </div>
    </header>

    <main>
        <h2>Usuarios Registrados</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Email</th>
                    <th>Nombre de Usuario</th>
                    <th>Fecha de Registro</th>
                </tr>
            </thead>
            <tbody id="user-table">
                <?php if (!empty($usuarios)): ?>
                    <?php foreach ($usuarios as $usuario): ?>
                        <tr>
                            <td><?= htmlspecialchars($usuario['id']) ?></td>
                            <td><?= htmlspecialchars($usuario['nombre']) ?></td>
                            <td><?= htmlspecialchars($usuario['email']) ?></td>
                            <td><?= htmlspecialchars($usuario['fecha_registro']) ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="4">No hay usuarios registrados</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </main>

    <footer class="purple-footer invert-images">
        <div class="footer-icons">
            <a href="../html/index.html"><img class="icon invert-img" src="../img/casa.png" alt="Icono Casa"></a>
            <a href="pagina_mensaje.html"><img class="icon invert-img" src="../img/chat.png" alt="Icono Chat"></a>
            <a href="pagina_ajustes.html"><img class="icon invert-img" src="../img/ajustes.png" alt="Icono Ajustes"></a>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>
