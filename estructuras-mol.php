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

    <!-- <link rel="stylesheet" href="css/informacion.css"> -->
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
                <a href="https://publuu.com/flip-book/821912/1808843">Ayuda</a>
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
            <img src="img/laboratorios/Moleculas.jpg" alt="Robot de laboratorio" class="hero-image">
            <div class="hero-text">
                <h2>ESTRUCTURAS</h2>
                <h1>MOLECULARES 3D</h1>
                <p>Las estructuras moleculares representan la disposición de los átomos en una molécula y cómo están unidos entre sí mediante enlaces químicos. Estas estructuras pueden describirse de diferentes maneras, dependiendo del nivel de detalle que se necesite.</p>
            </div>
        </div>
    </section>

    <main>
        <h2>ELIGE UNO PARA VISUALIZARLO</h2>

        <div class="menu">

            <!-- Asegúrate de incluir el script de model-viewer -->
            <script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>

            <div class="menu-item bg-white rounded-xl shadow-lg p-4 max-w-sm">
                <!-- Modelo 3D girando -->
                <model-viewer
                    src="modelos/agua.glb"
                    alt="Modelo de Agua"
                    auto-rotate
                    camera-controls
                    ar
                    ar-modes="scene-viewer webxr quick-look"
                    style="width: 100%; height: 300px; background-color: #f0f0f0; border-radius: 10px;">
                </model-viewer>

                <!-- Información -->
                <h2 style="margin-top: 1rem; font-size: 1.2rem;">Agua (H₂O)</h2>
                <p style="font-size: 0.9rem; color: #444;">
                    Molécula compuesta por dos átomos de hidrógeno y uno de oxígeno. Es esencial para la vida y actúa como solvente universal en numerosos procesos químicos.
                </p>

                <!-- Botón RA -->
                <a href="https://mywebar.com/p/Project_1_m7gu6v0nsv" target="_blank"
                    style="display: inline-block; margin-top: 1rem; padding: 0.5rem 1rem; background-color: #1d4ed8; color: white; border-radius: 6px; text-decoration: none;">
                    Experiencia en RA
                </a>
            </div>


            <div class="menu-item" data-title="Benciletanol (C₆H₅CH₂CH₂OH)" data-image="img/QR/estructuras/Benciletano.jpg" data-description="Compuesto orgánico utilizado en síntesis química y en la fabricación de productos farmacéuticos y fragancias.">
                <img src="img/FOTO-QR/Estructuras-moleculares/Benciletanol.jpg" alt="Benciletanol">
                <p>Benciletanol (C₆H₅CH₂CH₂OH)</p>
            </div>


            <div class="menu-item" style="background: white; border-radius: 12px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); padding: 16px; max-width: 400px; margin: auto;">
                <!-- Visor 3D de Sketchfab (Cafeína) -->
                <div class="sketchfab-embed-wrapper" style="width: 100%; height: 300px; border-radius: 10px; overflow: hidden; margin-bottom: 16px;">
                    <iframe title="Cafeína" frameborder="0" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true"
                        allow="autoplay; fullscreen; xr-spatial-tracking"
                        xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share
                        src="https://sketchfab.com/models/8ddc9d2757c946ee98436ad64ece93dc/embed?autospin=1&autostart=1&annotations_visible=1&transparent=1"
                        style="width: 100%; height: 100%;">
                    </iframe>
                </div>

                <!-- Información de la molécula -->
                <h2 style="margin-top: 1rem; font-size: 1.2rem; font-weight: bold; color: #222;">Cafeína (C₈H₁₀N₄O₂)</h2>

                <!-- Botón RA -->
                <a href="https://mywebar.com/p/Project_0_lui6nsi9y3" target="_blank"
                    style="display: inline-block; margin-top: 1rem; padding: 0.5rem 1rem; background-color: #10b981; color: white; border-radius: 6px; text-decoration: none; font-size: 0.9rem;">
                    Ver en Realidad Aumentada
                </a>
            </div>




            <div class="menu-item" data-title="Fenol (C₆H₅OH)" data-image="img/QR/estructuras/Fenol.jpg" data-description="Compuesto aromático con propiedades antisépticas. Se usa en la fabricación de plásticos, resinas y productos farmacéuticos.">
                <img src="img/FOTO-QR/Estructuras-moleculares/Fenol.jpg" alt="Fenol">
                <p>Fenol (C₆H₅OH)</p>
            </div>

            <div class="menu-item" data-title="Glicerol (C₃H₈O₃)" data-image="img/QR/estructuras/Glicerol.jpg" data-description="Compuesto orgánico viscoso e incoloro utilizado en cosméticos, alimentos y medicamentos como humectante y solvente.">
                <img src="img/FOTO-QR/Estructuras-moleculares/Glicerol.jpg" alt="Glicerol">
                <p>Glicerol (C₃H₈O₃)</p>
            </div>

            <div class="menu-item" data-title="Propano (C₃H₈)" data-image="img/QR/estructuras/Propano.jpg" data-description="Hidrocarburo gaseoso inflamable utilizado como combustible en calentadores, estufas y motores de combustión interna.">
                <img src="img/FOTO-QR/Estructuras-moleculares/Propano.jpg" alt="Propano">
                <p>Propano (C₃H₈)</p>
            </div>

        </div>
    </main>



    <div class="informacion">

        <section class="contenido-laboratorio">
            <h2>Tipos de representaciones de estructuras moleculares</h2>

            <h3>Fórmula estructural</h3>
            <p>Muestra los átomos y los enlaces en dos dimensiones (2D).</p>
            <p><strong>Ejemplo:</strong> La estructura del agua (H₂O) se puede representar como:</p>
            <pre>H—O—H</pre>

            <h3>Estructura de Lewis</h3>
            <p>Usa puntos para representar los electrones de valencia y líneas para los enlaces entre átomos.</p>

            <h3>Modelo de esqueleto o de líneas</h3>
            <p>Se usa en química orgánica para representar moléculas grandes, omitiendo los átomos de carbono e hidrógeno en ciertas posiciones.</p>

            <h3>Modelo tridimensional (3D)</h3>
            <p>Representa la geometría molecular en el espacio, mostrando la orientación real de los átomos.</p>
            <p>Puede incluir modelos de esferas y varillas, modelos de espacio completo, etc.</p>
        </section>

        <section class="contenido-laboratorio">
            <h2>Importancia de las estructuras moleculares</h2>
            <ul>
                <li>Determinan las propiedades físicas y químicas de una sustancia.</li>
                <li>Ayudan a predecir la reactividad y la interacción con otras moléculas.</li>
                <li>Son esenciales en campos como la bioquímica, la farmacología y la nanotecnología.</li>
            </ul>
        </section>

    </div>



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

    <!-- Ventanas emergentes -->
    <!-- Modal -->
    <div id="instrumentModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2 id="modalTitle">Instrumento</h2>
            <img id="modalImage" src="" alt="Instrument Image" style="max-width: 100%; height: auto; border-radius: 10px;">
            <p id="modalDescription">Descripción del instrumento.</p>
            <script src="js/qr-emergente.js"></script>
        </div>
    </div>
</body>

</html>