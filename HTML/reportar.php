<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Reportes</title>
    <link rel="stylesheet" href="../css/reporte.css">
</head>
<body>
<header>
  <div class="logo-container">
      <a href="index.html"><img class="logo" src="../img/estrella (1).png" alt="Logo de la App"></a>
  </div>
  <h1>Bienvenido a reportes</h1> 
  <div class="icons-container">
      <a href="../php/logout.php"><img class="header-icon" src="../img/logout.png" alt="Icono de Cerrar Sesión"></a> 
  </div>
</header>
    <div class="container">
        <h2>Reporte de Problemas</h2>
        <form action="../PHP/guardar-reportes.php" method="post">
            <label for="categoria">Seleccione la categoría:</label>
            <select name="categoria" id="categoria">
                <option value="0">Seleccion</option>
                <?php
                    $db_host = 'localhost';
                    $db_username = 'root';
                    $db_password = '';
                    $db_name = 'crea-j 2024'; // Asegúrate de que el nombre de la base de datos es correcto
                    $conn = mysqli_connect($db_host, $db_username, $db_password, $db_name);
                    
                    if (!$conn) {
                        die("Error de la conexion a la base de datos: " . mysqli_connect_error());
                    }
                    
                    $query = "SELECT * FROM `categorias`";
                    $result = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_array($result)) {
                        echo '<option value="' . $row['id'] . '">' . $row['nombre'] . '</option>';
                    }
                    mysqli_close($conn);
                ?>
            </select>
            <br><br>
            <label for="descripcion">Descripción del problema:</label>
            <br>
            <textarea name="descripcion" id="descripcion" rows="4" cols="50"></textarea>
            <br><br>
            <input type="submit" value="Enviar Reporte">
        </form>
    </div>
    <footer class="purple-footer invert-images">
        <div class="footer-icons">
            <a href="../html/index.html"><img class="icon invert-img" src="../img/casa.png" alt="Icono Casa"></a>
            <a href="pagina_ajustes.html"><img class="icon invert-img" src="../img/ajustes.png" alt="Icono Ajustes"></a>
        </div>
</footer>
</body>
</html>
