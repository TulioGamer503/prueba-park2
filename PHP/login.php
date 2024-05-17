<!DOCTYPE html>
<html lang="es">
    <body>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
$db_host = 'localhost';
$db_username = 'root';
$db_password = '';
$db_name = 'crea-j';
$conn = mysqli_connect($db_host, $db_username, $db_password, $db_name);

if (!$conn) {
    die("Error de la conexion a la base de datos". mysqli_connect_error());
}

session_start();

if (!isset($_POST['email'])) {
    header('location:../HTML/login.html');
}

$correo = $_POST['email'];
$contra = $_POST['contra'];

$sql_user = "SELECT * FROM `registro` WHERE email = '$correo' and contra = '$contra'";
$result_user = mysqli_query($conn, $sql_user);
$existe2 = mysqli_num_rows($result_user);

if ($existe2 > 0) {
    while ($row = mysqli_fetch_array($result_user)) {
        if ($correo == $row['email'] && $contra == $row['contra']) {
            $_SESSION['email'] = $row['email'];
            $_SESSION['id'] = $row['id'];
            echo "
    <script language='JavaScript'>
        swal.fire({
            icon: 'success',
            title: '¡Bienvenid@ a SaludRural!',
            showConfirmButton: false,
            timer: 2000
        }).then(function() {
            window.location = '../HTML/index.html';
        });
    </script>";
}
    }
} else {
    echo "
    <script language='JavaScript'>
        swal.fire({
            icon: 'error',
            title: 'Su usuario o contraseña pueden estar incorrecto',
            text: '¡Vuelva a ingresar sus datos!',
        }).then(function() {
            window.location = '../HTML/login.html';
        });
    </script>
    ";
}

?>
</body>
</html>