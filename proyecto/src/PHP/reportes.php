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
$reporte = $_POST['reporte'];
$sql = "INSERT INTO `reportes`(`id`, 'reporte') 
        VALUES (NULL, '$reporte')";

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


