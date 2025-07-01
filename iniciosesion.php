<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="css/iniciosesion.css">

        //
    <link rel="stylesheet" href="src/output.css">
    //
    <!-- <link rel="stylesheet" href="php/alerta-inicioSecion.php"> -->
    <link href="https://fonts.googleapis.com/css2?family=Krub:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="contenedor">
        <div class="seccion-imagen"></div>
        <div class="seccion-formulario">

            <button class="btn-volver"><a href="index.php">VOLVER</a></button>

            <div class="logo">
                <img src="img/logo_ralq_color-removebg-preview.png" alt="Logo">
            </div>

            <h2>INICIO DE SESIÓN</h2>
            <p>Hola de nuevo...</p>

            <!-- Incluir el archivo de las alertas -->
            <?php
            // Incluir el archivo de las alertas
            include('php/alerta-inicioSecion.php');
            ?>

            <form class="formulario" action="php/log.php" method="POST">
                <div class="grupo-formulario">
                    <input type="email" id="email" name="email" placeholder="Correo:" value="<?php echo isset($_SESSION['post_data']['email']) ? $_SESSION['post_data']['email'] : ''; ?>">
                    <span class="error"><?php echo isset($_SESSION['errors']['email']) ? $_SESSION['errors']['email'] : ''; ?></span>
                </div>
                <div class="grupo-formulario">
                    <input type="password" id="password" name="password" placeholder="Contraseña:" value="<?php echo isset($_SESSION['post_data']['password']) ? $_SESSION['post_data']['password'] : ''; ?>">
                    <span class="error"><?php echo isset($_SESSION['errors']['password']) ? $_SESSION['errors']['password'] : ''; ?></span>
                </div>

                <button type="submit"><a>ENTRAR</a></button>
            </form>
        </div>
    </div>

    <?php
    // Limpiar las variables de sesión después de mostrarlas
    if (isset($_SESSION['errors'])) {
        unset($_SESSION['errors']);
    }
    if (isset($_SESSION['post_data'])) {
        unset($_SESSION['post_data']);
    }

    //----------------------------------------------------------------------------------
    
    if (isset($_SESSION['errors']['email']) && $_SESSION['errors']['email'] == "El correo no está registrado.") {
        echo '<div class="alerta alerta-error">El correo no está registrado.</div>';
        unset($_SESSION['errors']['email']);
    }

    if (isset($_SESSION['errors']['email']) && $_SESSION['errors']['email'] == "El correo electrónico es obligatorio.") {
        echo '<div class="alerta alerta-error">El correo electrónico es obligatorio.</div>';
        unset($_SESSION['errors']['email']);
    }

    if (isset($_SESSION['errors']['password']) && $_SESSION['errors']['password'] == "Contraseña incorrecta.") {
        echo '<div class="alerta alerta-error">Contraseña incorrecta.</div>';
        unset($_SESSION['errors']['password']);
    }

    if (isset($_SESSION['errors']['password']) && $_SESSION['errors']['password'] == "La contraseña es obligatoria.") {
        echo '<div class="alerta alerta-error">La contraseña es obligatoria.</div>';
        unset($_SESSION['errors']['password']);
    }
    ?>

    
</body>
</html>
