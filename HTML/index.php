<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('location:../html/login.html');
    exit();
}

// Aquí obtienes el nombre del usuario desde la sesión o la base de datos
$nombre_usuario = $_SESSION['email']; // Asumiendo que guardaste el nombre del usuario en la sesión
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mi App de Estacionamiento</title>
  <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>

<header>
  <div class="logo-container">
      <a href="index.html"><img class="logo" src="../img/estrella (1).png" alt="Logo de la App"></a>
  </div>
  <h1>Bienvenido, <?php echo htmlspecialchars($nombre_usuario); ?></h1> <!-- Personaliza con el nombre del usuario -->
  <div class="icons-container">
      <a href="../php/logout.php"><img class="header-icon" src="../img/logout.png" alt="Icono de Cerrar Sesión"></a> <!-- Icono de cerrar sesión -->
  </div>
</header>

<div class="app-container">
  <img id="logo" class="invert-img" src="../img/inicioparking.jpg" alt="Estacionamiento Logo">
  <br>
  <br>
  <div class="card">
    <p>Busca tu estacionamiento con nosotros, somos una alternativa fácil y rápida.</p>
  </div>
  
  <!-- Botón de búsqueda -->
  <button class="buscar-btn"><a href="../html/ved.html">Buscar estacionamiento</a></button>
</div>

<footer class="purple-footer invert-images">
  <div class="footer-icons">
    <a href="../html/index.html"><img class="icon invert-img" src="../img/casa.png" alt="Icono Casa"></a>
    <a href="ayuda.html"><img class="icon invert-img" src="../img/chat.png" alt="Icono Chat"></a>
    <a href="opciones.html"><img class="icon invert-img" src="../img/ajustes.png" alt="Icono Ajustes"></a>
  </div>
</footer>

</body>
</html>
