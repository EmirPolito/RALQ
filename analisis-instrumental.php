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
            <a href="laboratorios.php" class="volver-boton">
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
        <img src="img/laboratorios/labo-q-analisis.jpg" alt="Robot de laboratorio" class="hero-image">
        <div class="hero-text">
            <h2>LABORATORIO</h2>
            <h1>ANALISÍS INSTRUMENTAL</h1>
            <p>Un laboratorio de análisis instrumental es un espacio especializado donde se utilizan equipos avanzados para analizar la composición química, estructura y propiedades de diferentes muestras mediante técnicas instrumentales.

A diferencia del laboratorio de química general, que se centra en reacciones y experimentos básicos, en un laboratorio de análisis instrumental se emplean equipos de alta precisión para identificar y cuantificar sustancias en muestras de alimentos, medicamentos, materiales, suelos, aguas, entre otros.</p>
        </div>
    </div>
    </section>

    <main>
        <h2>ELIGE UNO PARA VISUALIZARLO</h2>

        <div class="menu">
            
            <div class="menu-item" data-title="Autoclave" data-image="img/QR/analisis/Autoclave.jpg" data-description="Equipo utilizado para la esterilización de materiales mediante vapor de agua a alta presión y temperatura.">
                <img src="img/FOTO-QR/analisis-instrumental/Autoclave.jpg" alt="Autoclave">
                <p>Autoclave</p>
            </div>

            <div class="menu-item" data-title="Campana de extracción" data-image="img/QR/analisis/Campana.jpg" data-description="Dispositivo de seguridad que protege al usuario de vapores y gases tóxicos al extraerlos del área de trabajo.">
                <img src="img/FOTO-QR/analisis-instrumental/Campana-de-Extraccion.jpg" alt="Campana de extracción">
                <p>Campana de extracción</p>
            </div>

            <div class="menu-item" data-title="Centrifugadora" data-image="img/QR/analisis/Centrifugadora.jpg" data-description="Equipo de laboratorio que separa componentes de una mezcla mediante la fuerza centrífuga, basado en su densidad.">
                <img src="img/FOTO-QR/analisis-instrumental/Centrifugadora.jpg" alt="Centrifugadora">
                <p>Centrifugadora</p>
            </div>

            <div class="menu-item" data-title="Incubadora" data-image="a" data-description="Equipo que mantiene condiciones controladas de temperatura y humedad para el crecimiento de cultivos biológicos.">
                <img src="img/FOTO-QR/analisis-instrumental/Incubadora.jpg" alt="Incubadora">
                <p>Incubadora</p>
            </div>

            <div class="menu-item" data-title="Placa calefactora" data-image="a" data-description="Dispositivo utilizado para calentar sustancias en recipientes de vidrio de manera uniforme y controlada.">
                <img src="img/FOTO-QR/analisis-instrumental/Placa Calefactora.jpg" alt="Placa calefactora">
                <p>Placa calefactora</p>
            </div>

            <div class="menu-item" data-title="Soporte universal" data-image="a" data-description="Estructura metálica utilizada en laboratorios para sujetar y sostener distintos equipos o instrumentos.">
                <img src="img/FOTO-QR/analisis-instrumental/Soporte-universal.jpg" alt="Soporte universal">
                <p>Soporte universal</p>
            </div>

        </div>
    </main>


    <div class="informacion">

        <section class="contenido-laboratorio">
        <h2>Objetivos del laboratorio de análisis instrumental</h2>
        <ul>
            <li> Determinar la composición química de una muestra.</li>
            <li> Identificar compuestos desconocidos.</li>
            <li> Cuantificar la concentración de sustancias en diferentes matrices.</li>
            <li> Estudiar propiedades físicas y químicas de los materiales.</li>
            <li> Controlar la calidad de productos en industrias como la farmacéutica, alimentaria y ambiental.</li>
        </ul>
        </section>

        <section class="contenido-laboratorio">
            <h2>Áreas de un laboratorio de análisis instrumental</h2>
            <!-- <img src="imagenes/zonas-laboratorio.jpg" alt="Zonas del laboratorio" class="laboratorio-imagen"> -->
            <ul>
                <li><strong>Zona de preparación de muestras:</strong> Donde las muestras se procesan antes del análisis.</li>
                <li><strong>Zona de análisis:</strong> Espacio donde se encuentran los equipos de medición.</li>
                <li><strong>Área de almacenamiento:</strong> Para reactivos y materiales.</li>
                <li><strong>Zona de seguridad:</strong> Con duchas de emergencia, extintores y botiquín.</li>
            </ul>
        </section>

        <section class="contenido-laboratorio">
            <h2>Técnicas e instrumentos más utilizados</h2>
            <!-- <img src="imagenes/espectroscopia.jpg" alt="Equipo de espectroscopia" class="laboratorio-imagen"> -->
            <h3>Espectroscopia – Analiza la interacción de la luz con la materia.</h3>
            <ul>
                <li><strong>UV-Vis:</strong> Determina concentraciones de sustancias en soluciones.</li>
                <li><strong>Infrarrojo (FTIR):</strong> Identifica grupos funcionales en moléculas orgánicas.</li>
                <li><strong>Espectroscopia de absorción atómica (AAS):</strong> Detecta metales en muestras líquidas.</li>
            </ul>

            <h3>Cromatografía – Separa e identifica componentes de una mezcla.</h3>
            <ul>
                <li><strong>Cromatografía de gases (GC):</strong> Para compuestos volátiles como hidrocarburos.</li>
                <li><strong>Cromatografía líquida de alta resolución (HPLC):</strong> Para fármacos y proteínas.</li>
            </ul>
        </section>

        <section class="contenido-laboratorio">
            <h2>Normas de seguridad en un laboratorio</h2>
            <!-- <img src="imagenes/seguridad-laboratorio.jpg" alt="Normas de seguridad" class="laboratorio-imagen"> -->
            <ul>
                <li> Usar bata, guantes y gafas de seguridad.</li>
                <li> Manipular reactivos y equipos con precaución.</li>
                <li> Calibrar los instrumentos antes de cada análisis.</li>
                <li> Documentar y etiquetar correctamente las muestras.</li>
                <li> Mantener los equipos en condiciones óptimas y limpias.</li>
            </ul>
        </section>

        <section class="contenido-laboratorio">
            <h2>Ejemplos de aplicaciones en distintos sectores</h2>
            <!-- <img src="imagenes/aplicaciones-laboratorio.jpg" alt="Aplicaciones del laboratorio" class="laboratorio-imagen"> -->
            <ul>
                <li> <strong>Farmacéutica:</strong> Análisis de medicamentos para verificar su pureza y concentración.</li>
                <li> <strong>Alimentos:</strong> Detección de contaminantes y control de calidad en productos.</li>
                <li> <strong>Ambiental:</strong> Análisis de agua, suelo y aire para detectar contaminantes.</li>
                <li> <strong>Forense:</strong> Identificación de sustancias en investigaciones criminales.</li>
                <li> <strong>Nanotecnología:</strong> Caracterización de materiales avanzados.</li>
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
