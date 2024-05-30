<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi App de Estacionamiento</title>
    <link rel="stylesheet" href="../css/estilo.css">
    <link rel="stylesheet" href="../css/ayuda.css">
</head>

<body>

    <header>
        <div class="logo-container">
            <a href="pagina_casa.html"><img class="logo" src="../img/estrella (1).png" alt="Logo de la App"></a>
        </div>
        <h1>Busca tu estacionamiento</h1>
        <div class="icons-container">
            <!--<a href="pagina_casa.html"><img class="header-icon" src="../img/carros.png" alt="Icono de Carros"></a>-->
            <a href="../html/login.html"><img class="header-icon" src="../img/perfil.png" alt="Icono de Usuario"></a>
        </div>
    </header>
    <div class="signo">
        <div class="signo-1" id="signo-1">
            <div class="contenido-signo">
                <img src="../img/signo-de-interrogacion.png" alt="Ayuda">
                <!-- Asegúrate de que la ruta a la imagen sea correcta -->
                <p>Necesitas ayuda</p>
            </div>
        </div>
    </div>
    <div class="contenedor">
        <div class="parqueo" id="parqueo1">
            <a href="reportar.php">
                <div class="contenido-parqueo">
                    <img src="../img/cancelar.png" alt="Reportar un problema">
                    <p>Ver problemas reportados</p>
                </div>
            </a>
        </div>
        <div class="parqueo" id="parqueo2">
            <a href="pagina_no_entiendo_colores.html">
                <div class="contenido-parqueo">
                    <img src="../img/pantone.png" alt="No entiendo los colores">
                    <p>Editar parqueos</p>
                </div>
            </a>
        </div>
        <div class="parqueo" id="parqueo3">
            <a href="pagina_soporte.html">
                <div class="contenido-parqueo">
                    <img src="../img/soporte-tecnico.png" alt="Soporte">
                    <p>Soporte</p>
                </div>
            </a>
        </div>
    </div>

    <div class="contenedor2">

    </div>

    <footer class="purple-footer invert-images">
        <div class="footer-icons">
            <a href="../html/index.html"><img class="icon invert-img" src="../img/casa.png" alt="Icono Casa"></a>
            <a href="pagina_mensaje.html"><img class="icon invert-img" src="../img/chat.png" alt="Icono Chat"></a>
            <a href="pagina_ajustes.html"><img class="icon invert-img" src="../img/ajustes.png" alt="Icono Ajustes"></a>
        </div>
    </footer>

    <script src="script.js"></script>

</body>

</html>