
<!DOCTYPE html>
<html lang="es">
    <body>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
$db_host = 'localhost';
$db_username = 'root';
$db_password = '';
$db_name = 'crea';
$conn = mysqli_connect($db_host, $db_username, $db_password, $db_name);

if (!$conn) {
    die("Error de la conexión a la base de datos: " . mysqli_connect_error());
}

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = mysqli_real_escape_string($conn, $_POST['email']);
    $contra = mysqli_real_escape_string($conn, $_POST['password']);

    // Verificar en la tabla admin
    $stmt = $conn->prepare("SELECT id, email, password FROM admin WHERE email = ?");
    $stmt->bind_param("s", $correo);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($row = $result->fetch_assoc()) {
        if (password_verify($contra, $row['password'])) {
            $_SESSION['email'] = $row['email'];
            $_SESSION['id'] = $row['id'];

            // Redirigir a la página de administración
            echo "<script>
                swal.fire({
                    icon: 'success',
                    title: '¡Inicio de sesión exitoso!',
                    text: '¡Bienvenido administrador!',
                    showConfirmButton: false,
                    timer: 2000
                }).then(function() {
                    window.location = '../crud-ad/index.php'; // URL para administradores
                });
            </script>";
            exit();
        }
    }

    // Verificar en la tabla registro (usuarios comunes)
    $stmt = $conn->prepare("SELECT id, email, contra FROM registro WHERE email = ?");
    $stmt->bind_param("s", $correo);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($row = $result->fetch_assoc()) {
        if (password_verify($contra, $row['contra'])) {
            $_SESSION['email'] = $row['email'];
            $_SESSION['id'] = $row['id'];

            // Redirigir a la página de usuarios
            echo "<script>
                swal.fire({
                    icon: 'success',
                    title: '¡Inicio de sesión exitoso!',
                    text: '¡Bienvenido!',
                    showConfirmButton: false,
                    timer: 2000
                }).then(function() {
                    window.location = '../index.php'; // URL para usuarios comunes
                });
            </script>";
            exit();
        }
    }

    // Si no se encontró coincidencia en ninguna tabla
    echo "<script>
        swal.fire({
            icon: 'error',
            title: 'Usuario o contraseña incorrectos',
            text: '¡Vuelva a ingresar sus datos!',
        }).then(function() {
            window.location = '../login.html'; // URL del formulario de inicio de sesión
        });
    </script>";
}

mysqli_close($conn);

?>

</body>
</html>
