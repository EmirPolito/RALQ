<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro RALQ</title>

    //
    <link rel="stylesheet" href="src/output.css">
    //
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Krub:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/registro.css">

    <script>
        function validateForm() {
    // Limpiar mensajes de error previos
    document.querySelectorAll(".error").forEach(e => {
        e.innerText = "";
        e.style.visibility = "hidden"; // Ocultar antes de validar
    });

    let nombre = document.getElementById("nombre").value.trim();
    let apellidoPaterno = document.getElementById("apellido-paterno").value.trim();
    let apellidoMaterno = document.getElementById("apellido-materno").value.trim();
    let email = document.getElementById("email").value.trim();
    let password = document.getElementById("password").value;
    let confirmPassword = document.getElementById("confirm_password").value;

    let isValid = true;

    if (nombre === "") {
        let errorNombre = document.getElementById("error-nombre");
        errorNombre.innerText = "El nombre es obligatorio.";
        errorNombre.style.visibility = "visible"; // Mostrar error
        isValid = false;
    }
    if (apellidoPaterno === "") {
        let errorApellidoPaterno = document.getElementById("error-apellido-paterno");
        errorApellidoPaterno.innerText = "El apellido paterno es obligatorio.";
        errorApellidoPaterno.style.visibility = "visible";
        isValid = false;
    }
    if (apellidoMaterno === "") {
        let errorApellidoMaterno = document.getElementById("error-apellido-materno");
        errorApellidoMaterno.innerText = "El apellido materno es obligatorio.";
        errorApellidoMaterno.style.visibility = "visible";
        isValid = false;
    }
    if (email === "" || !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
        let errorEmail = document.getElementById("error-email");
        errorEmail.innerText = "Correo electrónico inválido.";
        errorEmail.style.visibility = "visible";
        isValid = false;
    }
    if (password === "") {
        let errorPassword = document.getElementById("error-password");
        errorPassword.innerText = "La contraseña es obligatoria.";
        errorPassword.style.visibility = "visible";
        isValid = false;
    }
    if (confirmPassword === "" || password !== confirmPassword) {
        let errorConfirmPassword = document.getElementById("error-confirm-password");
        errorConfirmPassword.innerText = "Las contraseñas no coinciden.";
        errorConfirmPassword.style.visibility = "visible";
        isValid = false;
    }

    return isValid;
}

    </script>
</head>
<body>
    <div class="contenedor">
        <div class="seccion-imagen">
        </div>
        <div class="seccion-formulario">

            <button class="btn-volver"><a href="index.php">VOLVER</a></button>
            
            <div class="logo">
                <img src="img/logo_ralq_color-removebg-preview.png" alt="Logo de RALQ">
            </div>

            <h2>REGÍSTRATE</h2>
            <p>¿Ya tienes una cuenta? <a href="iniciosesion.php">Inicia sesión</a>.</p>

            <form class="formulario" action="php/alerta-registro.php" method="post" onsubmit="return validateForm()">
               
                <div class="grupo-formulario">
                    <input type="text" id="nombre" name="nombre" placeholder="Nombre(s)">
                    <span class="error" id="error-nombre"></span>
                </div>

                <div class="grupo-formulario">
                    <input type="text" id="apellido-paterno" name="apellido_paterno" placeholder="Apellido Paterno">
                    <span class="error" id="error-apellido-paterno"></span>
                </div>

                <div class="grupo-formulario">
                    <input type="text" id="apellido-materno" name="apellido_materno" placeholder="Apellido Materno">
                    <span class="error" id="error-apellido-materno"></span>
                </div>

                <div class="grupo-formulario">
                    <input type="email" id="email" name="email" placeholder="Correo">
                    <span class="error" id="error-email"></span>
                </div>

                <div class="grupo-formulario">
                    <input type="password" id="password" name="password" placeholder="Contraseña">
                    <span class="error" id="error-password"></span>
                </div>

                <div class="grupo-formulario">
                    <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirmar Contraseña">
                    <span class="error" id="error-confirm-password"></span>
                </div>

                <button type="submit"><a>LISTO</a></button>

            </form>
        </div>
    </div>

    <?php
        // Limpiar los errores después de mostrarlos
        if (isset($_SESSION['errors'])) {
            unset($_SESSION['errors']);
        }
    ?>
</body>
</html>
