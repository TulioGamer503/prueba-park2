function togglePasswordVisibility() {
    var passwordInput = document.getElementById("password");
    var togglePasswordImg = document.getElementById("togglePassword");

    if (passwordInput.type === "password") {
        passwordInput.type = "text";
        togglePasswordImg.src = "../img/ojoabierto.png"; // mostrar contraseña ../img/ojofoto.png
    } else {
        passwordInput.type = "password";
        togglePasswordImg.src = "../img/ojofoto.png"; // ocultar contraseña ../img/ojoabierto.png
    }
}