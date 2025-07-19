<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Cristian Barraza, Irving Esteban, Emir Polito">
    <title>RALQ</title>

    <link rel="stylesheet" href="src/output.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans+Condensed:wght@300;400;500;700&family=Krub:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/user-icon.css">
    <link rel="stylesheet" href="css/animaciones.css">
</head>

<body>

<header>
        
        <div class="header-left">
            <a href="menu.php" class="volver-boton"></a>
            <img src="img/logo_ralq_color-removebg-preview.png" class="logo">
        </div>
    
        <div class="header-right">
            <p>Bienvenido :)</p>
            <a href="https://www.facebook.com/share/1AnZW5VRF9/"><img src="img/contctos/logofacebook.png" class="icono-red"></a>
            <a href="https://wa.me/message/ZB3EHUSWCMQFE1?src=qr"><img src="img/contctos/logowhats.png" class="icono-red"></a>
            <a href="https://mail.google.com/mail/?view=cm&to=ralq.utsv@gmail.com&su=Consulta&body=Hola, quisiera más información." target="_blank" target="_blank"><img src="img/contctos/logogmail.png" class="icono-red"></a>
            <nav>
                <!-- Icono de Usuario -->
                <div class="user-menu">
                        
                    <img src="img/user.jpg" class="user-icon" onclick="toggleMenu()">
                    <div class="user-dropdown" id="userDropdown">
                        <p><strong><?php echo $_SESSION['user_email']; ?></strong></p>
                        <a class="boton-a" href="index.php">Cerrar sesión</a>
                    </div>
                </div>
                <script src="js/usuario.js"></script>
                <!-- Icono de Usuario -->
            </nav>
        </div>
</header>

    <div class="encabezado-delgado">
        <h1>APRENDE Y ESTUDIA SOBRE...</h1>
    </div>

    <main>
        <div class="menu">
            <a href="laboratorios.php" class="menu-item fade-in">
                <img src="img/img-menu/tuslabs.png" alt="Instrumentaria de Laboratorio">
            </a>
            <a href="tabla-periodica.php" class="menu-item fade-in">
                <img src="img/img-menu/tablape.png" alt="Elementos Químicos">
            </a>
            <a href="estructuras-mol.php" class="menu-item fade-in">
                <img src="img/img-menu/3 (2).png" alt="Estructuras Moleculares">
            </a>
            <a href="https://www.youtube.com/watch?v=cubEOJ_gz3w" class="menu-item fade-in">
                <img src="img/img-menu/4 (2).png" alt="Explora tu Laboratorio">
            </a>
            <a href="https://forms.office.com/Pages/ResponsePage.aspx?id=DQSIkWdsW0yxEjajBLZtrQAAAAAAAAAAAAO__TR___tUOTI4WkFURU0yR1RZQkdLTFU4OFpZWjgyTS4u" class="menu-item fade-in">
                <img src="img/img-menu/5.png" alt="Evalúate">
            </a>
            <a href="https://wordwall.net/es/resource/13254497/elementos-de-laboratorio" class="menu-item fade-in">
                <img src="img/img-menu/6.png" alt="Nuevo botón">
            </a>
        </div>
    </main>

    <footer class="pie-pagina">
        <div class="contactos">
            <p>    
                CONTÁCTANOS <br>
                <br>
                <a>Facebook: RALQ</a> <br>
                Correo: ralq.utsv@mail.com<br>
                Teléfono: +123 456 789 <br>
                <br>
            </p>
        </div>
        <div class="colaboradores">
            <p>
                Colaboradores: <br>
                <br>
                Emir Polito Guevara <br>
                Irving Esteban Molina Méndez <br>
                Cristian Daniel Barraza Hernández <br>
                <br>
                2024 &copy; Todos los derechos reservados. 
            </p>
        </div>
        <img src="img/utsv-log.png" alt="Imagen del Footer" class="imagen-footer">
    </footer>




</body>
</html>

<script src="js/animaciones-index.js"></script>





