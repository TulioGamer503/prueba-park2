<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width" />
    <title>Alert</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
    <script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>

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

// Preparar la consulta SQL para insertar datos
$sql = "INSERT INTO `registro`(`id`, `nombre`, `email`, `contra`) 
        VALUES (NULL, '$nombre_user', '$contrasena_user', '$correo_user')";

// Ejecutar la consulta
if ($conn->query($sql) === TRUE) {
    echo "<script>swal('Éxito!', 'Registro exitoso', 'success');</script>";
} else {
    echo "Error al registrar: " . $conn->error;
}

// Cerrar conexión
$conn->close();
?>

    <script>
        var SweetAlert2Demo = function () {
            var initDemos = function () {
                // Success alert
                $('#m_sweetalert_demo_12').click(function (e) {
                    swal("Success!", "This is a successful message", "success");
                });
            };
9
            return {
                init: function () {
                    initDemos();
                },
            };
        }();

        jQuery(document).ready(function () {
            SweetAlert2Demo.init();
        });
    </script>
</body>
</html>
