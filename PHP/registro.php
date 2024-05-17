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
$nombre_user = $_POST['nombre_user'];
$contrasena_user = $_POST['contrasena_user'];
$correo_user = $_POST['correo_user'];

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
            window.location = '../HTML/login.html';
        });
    </script>
    ";
    exit; // Detener la ejecución del script si el correo es inválido
}
$sql = "INSERT INTO `registro`(`id`, `nombre`, `email`, `contra`) 
        VALUES (NULL, '$nombre_user', '$contrasena_user', '$correo_user')";

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
            window.location = '../HTML/login.html';
        });
    </script>
    ";
}else{
    echo "
    <script language='JavaScript'>
        swal.fire({type: 'success',
            title: 'Mal!'
        }).then(function() {
            window.location = '../HTML/login.html';
        });
    </script>
    ";
}
    
?> 
</body>
</html>


