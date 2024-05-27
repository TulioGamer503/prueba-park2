<!DOCTYPE html>
<html lang="es">
    <body>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
// Conectar a la base de datos (reemplaza los valores con los de tu configuración)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crea-j";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("La conexión falló: " . $conn->connect_error);
}

// Recibir datos del formulario
$nombre_user = $_POST['username'];
$contrasena_user = $_POST['password'];
$correo_user = $_POST['email'];

if (!filter_var($correo_user, FILTER_VALIDATE_EMAIL)) {
    echo "
    <script language='JavaScript'>
        swal.fire({
            icon: 'error',
            title: 'Correo electrónico inválido',
            text: 'El correo electrónico no es válido.',
            showConfirmButton: false,
            timer: 3000
        }).then(function() {
            window.location = '../crud_admin/agg_admin.html';
        });
    </script>
    ";
    exit; // Detener la ejecución del script si el correo es inválido
}
$sql = "INSERT INTO `admin`(`id`, `email`, `nombre`, `password`) 
        VALUES (NULL, '$correo_user','$nombre_user','$contrasena_user')";

$resultado = mysqli_query($conn,$sql);
mysqli_close($conn);
if ($resultado) {
    echo "
    <script language='JavaScript'>
        swal.fire({
            icon: 'success',
            title: 'Te has registrado correctamente',
            showConfirmButton: false,
            timer: 2000
        }).then(function() {
            window.location = '../crud_admin/index.html';
        });
    </script>
    ";
}else{
    echo "
    <script language='JavaScript'>
        swal.fire({type: 'success',
            title: 'Mal!'
        }).then(function() {
            window.location = '../crud_admin/agg_admin.html';
        });
    </script>
    ";
}
    
?> 
</body>
</html>


