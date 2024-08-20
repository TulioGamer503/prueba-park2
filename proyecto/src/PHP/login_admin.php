<?php
session_start();
require_once 'db_connection.php'; // Asegúrate de tener un archivo de conexión a la base de datos

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir y sanitizar los datos del formulario
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $password = $_POST['password'];
    
    // Consultar la base de datos
    $stmt = $conn->prepare("SELECT id, nombre, email, contra FROM administradores WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Verificar la contraseña
        if (password_verify($password, $row['contra'])) {
            // Autenticación exitosa
            $_SESSION['admin_id'] = $row['id'];
            $_SESSION['admin_name'] = $row['nombre'];
            $_SESSION['admin_email'] = $row['email'];

            // Redirigir al panel de administración
            header("Location: admin_dashboard.php");
            exit();
        } else {
            // Contraseña incorrecta
            header("Location: login.html?error=1");
            exit();
        }
    } else {
        // Correo no encontrado
        header("Location: login.html?error=2");
        exit();
    }
}
?>
