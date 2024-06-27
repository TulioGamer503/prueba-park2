<!DOCTYPE html>
<html lang="es">
    <body>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
$db_host = 'localhost';
$db_username = 'root';
$db_password = '';
$db_name = 'crea'; // Asegúrate de que el nombre de la base de datos es correcto
$conn = mysqli_connect($db_host, $db_username, $db_password, $db_name);

if (!$conn) {
    die("Error de la conexion a la base de datos: " . mysqli_connect_error());
}

session_start();

if (!isset($_POST['email'])) {
    header('location:../login.html');
    exit;
}

$correo = $_POST['email'];
$contra = $_POST['password'];

$sql_admin = "SELECT * FROM `admin` WHERE email = '$correo' AND password = '$contra'";
$result_admin = mysqli_query($conn, $sql_admin);
$existe1 = mysqli_num_rows($result_admin);

$sql_user = "SELECT * FROM `registro` WHERE email = '$correo' AND contra = '$contra'";
$result_user = mysqli_query($conn, $sql_user);
$existe2 = mysqli_num_rows($result_user);

if ($existe1 > 0) {
    while ($row = mysqli_fetch_array($result_admin)) {
        $_SESSION['email'] = $row['CorreoElectronico'];
        $_SESSION['ID_Administrador'] = $row['ID_Administrador'];
        echo "
        <script language='JavaScript'>
            Swal.fire({
                icon: 'success',
                title: '¡Bienvenid@ a Parknow Administrador!',
                showConfirmButton: false,
                timer: 2000
            }).then(function() {
                window.location = '../crud_admin/index.php';
            });
        </script>";
    }
} elseif ($existe2 > 0) {
    while ($row = mysqli_fetch_array($result_user)) {
        $_SESSION['email'] = $row['email'];
        $_SESSION['id'] = $row['id'];
        echo "
        <script language='JavaScript'>
            Swal.fire({
                icon: 'success',
                title: '¡Bienvenid@ a Parknow!',
                showConfirmButton: false,
                timer: 2000
            }).then(function() {
                window.location = '../index.php';
            });
        </script>";
    }
} else {
    echo "
    <script language='JavaScript'>
        Swal.fire({
            icon: 'error',
            title: 'Su usuario o contraseña pueden estar incorrecto',
            text: '¡Vuelva a ingresar sus datos!',
        }).then(function() {
            window.location = '../login.html';
        });
    </script>";
}

mysqli_close($conn);
?>
</body>
</html>
