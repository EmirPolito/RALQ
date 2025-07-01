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
        <img src="img/laboratorios/labo-q-general.jpg" alt="Robot de laboratorio" class="hero-image">
        <div class="hero-text">
            <h2>LABORATORIO</h2>
            <h1>QUÍMICA GENERAL</h1>
            <p>Un laboratorio de química general es un espacio diseñado para la enseñanza y realización de experimentos básicos de química. En él, los estudiantes y científicos pueden practicar, analizar y comprender los principios fundamentales de la química a través de experimentos controlados.</p>
        </div>
    </div>
    </section>

    <main>
        <h2>ELIGE UNO PARA VISUALIZARLO</h2>

        <div class="menu">

            <div class="menu-item" data-title="Matraz Erlenmeyer" data-image="img/QR/quimicaGen/Matraz.jpg" data-description="Es un matraz de vidrio con forma cónica y cuello cilíndrico, utilizado en laboratorios para calentar, mezclar y almacenar sustancias.">
                <img src="img/FOTO-QR/quimica-general/Matraz-Erlenmeyer.jpg" alt="Matraz-Erlenmeyer">
                <p>Matraz Erlenmeyer</p>
            </div>

            <!-- <div class="menu-item" data-title="Anillo de hierro" data-image="img/QR/quimicaGen/matraz.jpg" data-description="Es un soporte metálico en forma de aro que se fija a un soporte universal para sujetar materiales como embudos o vasos de precipitados.">
                <img src="img/FOTO-QR/quimica-general/Anillo de hierro.jpg" alt="Anillo de hierro">
                <p>Anillo de hierro</p>
            </div> -->

            <div class="menu-item" data-title="Microscopio" data-image="img/QR/quimicaGen/Microscopio.jpg" data-description="Instrumento óptico que permite la observación de objetos demasiado pequeños para ser vistos a simple vista, ampliando su imagen.">
                <img src="img/FOTO-QR/quimica-general/Microscopio.jpg" alt="Microscopio">
                <p>Microscopio</p>
            </div>

            <div class="menu-item" data-title="Mortero con mano de porcelana" data-image="img/QR/quimicaGen/Mortero-con-mano.jpg" data-description="Utensilio de laboratorio utilizado para triturar, moler o mezclar sustancias sólidas hasta obtener partículas más pequeñas.">
                <img src="img/FOTO-QR/quimica-general/Mortero-con-mano.jpg" alt="Mortero con mano">
                <p>Mortero con mano de porcelana</p>
            </div>

            <div class="menu-item" data-title="Pinzas para tubo de ensayo" data-image="img/QR/quimicaGen/Pinzas-para-tubos de ensayo.jpg" data-description="Herramienta metálica utilizada para sujetar tubos de ensayo cuando están calientes o al realizar experimentos.">
                <img src="img/FOTO-QR/quimica-general/Pinzas-para tubo-de-ensayo.jpg" alt="pinzas">
                <p>Pinzas para tubo de ensayo</p>
            </div>

            <div class="menu-item" data-title="Pinzas para matraces" data-image="img/QR/quimicaGen/Pinzas-para-matraces.jpg" data-description="Dispositivo de agarre diseñado para sostener matraces de diferentes tamaños durante experimentos de laboratorio.">
                <img src="img/FOTO-QR/quimica-general/Pinzas-para-matraces.jpg" alt="pin-ma">
                <p>Pinzas para matraces</p>
            </div>

            <!-- <div class="menu-item" data-title="Pipeta" data-image="img/QR/quimicaGen/matraz.jpg" data-description="Instrumento de medición de líquidos que permite transferir volúmenes precisos de una sustancia de un recipiente a otro.">
                <img src="img/FOTO-QR/quimica-general/Pipeta.jpg" alt="pipeta">
                <p>Pipeta</p>
            </div> -->

            <div class="menu-item" data-title="Placas de porcelana para reacciones" data-image="img/QR/quimicaGen/matraz.jpg" data-description="Superficies resistentes al calor utilizadas en experimentos químicos para llevar a cabo reacciones en pequeñas cantidades.">
                <img src="img/FOTO-QR/quimica-general/Placas-de-porcelana-para-reacciones.jpg" alt="placas">
                <p>Placas de porcelana para reacciones</p>
            </div>

        </div>
    </main>


    <div class="informacion">

        <section class="contenido-laboratorio">
            <h2>¿Para qué sirve un laboratorio de química general?</h2>
            <ul>
                <li>Aplicar los conceptos teóricos aprendidos en clase.</li>
                <li>Realizar experimentos para observar reacciones químicas.</li>
                <li>Aprender técnicas de medición y análisis químico.</li>
                <li>Manejar sustancias químicas con seguridad.</li>
                <li>Desarrollar habilidades en el uso de instrumentos de laboratorio.</li>
            </ul>
        </section>

        <section class="contenido-laboratorio">
            <h2>¿Qué áreas tiene un laboratorio de química general?</h2>
            <ul>
                <li><strong>Área de trabajo:</strong> Mesas con quemadores, reactivos y equipos de laboratorio.</li>
                <li><strong>Área de almacenamiento:</strong> Donde se guardan reactivos y sustancias químicas.</li>
                <li><strong>Área de seguridad:</strong> Incluye extintores, regaderas de emergencia y botiquín de primeros auxilios.</li>
                <li><strong>Campana de extracción:</strong> Para trabajar con gases tóxicos de manera segura.</li>
            </ul>
        </section>

        <section class="contenido-laboratorio">
            <h2>Instrumentos y equipos comunes</h2>
            <ul>
                <li><strong>Vaso de precipitados:</strong> Para mezclar sustancias.</li>
                <li><strong>Probetas y pipetas:</strong> Para medir líquidos con precisión.</li>
                <li><strong>Matraz Erlenmeyer:</strong> Para calentar y agitar soluciones.</li>
                <li><strong>Balanza analítica:</strong> Para pesar sustancias químicas.</li>
                <li><strong>Mechero Bunsen:</strong> Para calentar muestras.</li>
                <li><strong>Tubos de ensayo:</strong> Para realizar pequeñas reacciones químicas.</li>
                <li><strong>Espátulas y pinzas:</strong> Para manipular sólidos y objetos calientes.</li>
            </ul>
        </section>

        <section class="contenido-laboratorio">
            <h2>Normas de seguridad</h2>
            <ul>
                <li>Usar bata, guantes y gafas de seguridad.</li>
                <li>No comer ni beber dentro del laboratorio.</li>
                <li>Leer y seguir las instrucciones de cada experimento.</li>
                <li>Manejar los reactivos con cuidado y conocer su peligrosidad.</li>
                <li>En caso de accidente, reportarlo de inmediato al instructor.</li>
            </ul>
        </section>

        <section class="contenido-laboratorio">
            <h2>Ejemplos de experimentos en un laboratorio de química general</h2>
            <ul>
                <li><strong>Reacción entre ácido y base:</strong> Formación de sal y agua.</li>
                <li><strong>Prueba de llama:</strong> Identificación de elementos metálicos.</li>
                <li><strong>Síntesis y purificación:</strong> Obtención de compuestos químicos.</li>
                <li><strong>Electroquímica:</strong> Estudio de pilas y corrosión de metales.</li>
                <li><strong>Titulaciones:</strong> Determinación de la concentración de una sustancia.</li>
            </ul>
        </section>

        <section class="contenido-laboratorio">
            <h2>Resumen</h2>
            <p>Un laboratorio de química general es esencial para el aprendizaje práctico de la química. 
                Permite a los estudiantes experimentar y reforzar los conceptos teóricos de manera segura y controlada.</p>
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
