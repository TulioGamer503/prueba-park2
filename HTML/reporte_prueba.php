<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Subida/Juego</title>
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
  <link rel="stylesheet" href="../estilos-css/Formulario_Registro_InicioSecion.css">
  <link rel="icon" href="../multimedia/LOGOS/Logo-Modificado-finalizado2.png">
  <link rel="stylesheet" href="../estilos-css/boton.css">
  <script src="https://kit.fontawesome.com/c15491d054.js" crossorigin="anonymous"></script>
  
</head>

<body>
  <div class="form-container sign-in-form">
    <div class="form-box sign-in-box">
      <h2>Listo para Mostrar tu juego¡?</h2>
      <form action="../scrips-JS/prueba 2.php" method="post" autocomplete="off" enctype="multipart/form-data">
        <div class="field">
          <i class="uil uil-chat-bubble-user"></i>
          <input type="text" placeholder="nombre del juego" required name="nombre">
        </div>
        <div class="field">
          <i class="uil uil-chat-bubble-user"></i>
          <input type="" placeholder="Categoria">
          <p>
          <select name="genero" id="genero">
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
        
        $genero = "SELECT * FROM `categorias`";
        $resultado = mysqli_query($conn, $genero);
        while ($valores = mysqli_fetch_array($resultado)) {
            echo '<option value="' . $valores['id'] . '">' . $valores['nombre'] . '</option>';
        }

        mysqli_close($conn);
    ?>
</select>

          <p>
        </div>
        <div class="field">
          <i class="uil uil-chat-bubble-user"></i>
          <input type="text" placeholder="desarrollador" required name="desarrollador">
        </div>
        <div class="field">
          <i class="uil uil-chat-bubble-user"></i>
          <input type="text" placeholder="descripcion del juego" required name="descripcion">
        </div>
        <div class="field">
          <i class="uil uil-chat-bubble-user"></i>
          <input type="text" placeholder="peso" required name="peso">
        </div>
        <div class="field">
          <input type="file" name="game" id="imagee">
        </div>
        <button onclick="href='index.html'" class="submit-btn">Subir</button>
      </form>
</body>

</html>