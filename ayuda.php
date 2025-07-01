<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Cristian Barraza, Irving Esteban, Emir Polito">
    <title>RALQ</title>

        //
    <link rel="stylesheet" href="src/output.css">
    //
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
            <a href="estructuras-mol.php" class="volver-boton">
                <img src="img/logos/volver.png" alt="Volver">
            </a>
            <img src="img/logo_ralq_color-removebg-preview.png" class="logo">
        </div>
            <div class="header-right">
                <nav>
                <a href="https://publuu.com/flip-book/789518/1745350">Ayuda</a>
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
    
    <main class="contenedor-imagen">
        <img src="tu-imagen.jpg" alt="Infografía" class="imagen-infografia">
    </main>
    
    <footer class="footer">
        <p>2024 &copy; RALQ. Todos los derechos reservados.</p>
    </footer>
</body>

</html>
