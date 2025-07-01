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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans+Condensed:wght@300;400;500;700&family=Krub:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/laboratorios.css">
    <link rel="stylesheet" href="css/user-icon.css">
    <link rel="stylesheet" href="css/QRN.css">
</head>
<body>
    
<header>
        
    <div class="header-left">
        <a href="menu.php" class="volver-boton">
            <img src="img/logos/volver.png" alt="Volver">
        </a>
        <img src="img/logo_ralq_color-removebg-preview.png" class="logo">
    </div>
        <div class="header-right">
            <nav>
            <!-- <a href="https://publuu.com/flip-book/789518/1745350">Ayuda</a> -->
                    <!-- <a href="#">Servicios</a>
                    <a href="#">Blog</a> -->

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

    <section class="hero-section">
    <div class="hero-content">
        <img src="img/laboratorios/labodesc.jpg" alt="Robot de laboratorio" class="hero-image">
        <div class="hero-text">
            <h1>LABORATORIOS</h1>
            <p>Un laboratorio químico es un espacio en el que se estudian mezclas de elementos, sustancias y compuestos para obtener informaciones de carácter científico, generalmente en forma de datos, para la posterior realización de un informe.</p>
        </div>
    </div>
    </section>

    <main>

        <div class="menu">
            <a href="quimica-general.php" class="menu-item">
                <img src="img/laboratorios/labo1.png" alt="Instrumentaria de Laboratorio">
            </a>
            <a href="analisis-instrumental.php" class="menu-item">
                <img src="img/laboratorios/labo2.png" alt="Estructuras Moleculares">
            </a>
            <a href="plantas-quimicas.php" class="menu-item">
                <img src="img/laboratorios/labo3.png" alt="Elementos Químicos">
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
