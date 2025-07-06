<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Cristian Barraza, Irving Esteban, Emir Polito">
    <title>RALQ</title>

    //
    <link rel="stylesheet" href="build/output.css">
    //

    <!-- Fuentes y estilos -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans+Condensed:wght@300;400;500;700&family=Krub:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/index-copy.css">
    <link rel="stylesheet" href="css/animaciones.css">

    <!-- Librería para mostrar modelos 3D -->
    <script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
</head>

<body>

    <!-- Sección Hero con Imagen -->
    <section class="hero">
        <div class="header-overlay">
            <img src="img/logo_ralq_color-removebg-preview.png" alt="Logo" class="logo-header-overlay">
            <span class="info-texto">¿Aún no tienes cuenta?</span>
            <a href="registro.php" class="registro">Regístrate</a>
            <span class="info-texto">o</span>
            <a href="iniciosesion.php" class="inicio-sesion">Inicia sesión</a>
        </div>
        <img src="img/NEW-HERO.IMAGE.png" alt="Imagen de fondo" class="imagen-hero">
    </section>

    <main class="contenido-principal">

        <!-- Sección de Novedades -->
        <section class="novedades fade-in">
            <h2>HORA DE APRENDER</h2>
            <div class="carrusel">
                <!-- Cartas del carrusel (repetidas para efecto loop) -->
                <div class="carta"><img src="img/carrusel/carrusel1.png" alt="Novedad 1">
                    <p>Descubre tus laboratorios</p>
                </div>
                <div class="carta"><img src="img/carrusel/carrusel2.png" alt="Novedad 2">
                    <p>Infinidad de instrumentos RA</p>
                </div>
                <div class="carta"><img src="img/carrusel/carrusel3.png" alt="Novedad 3">
                    <p>Tus conocimientos aumentarán</p>
                </div>
                <div class="carta"><img src="img/carrusel/carrusel4.png" alt="Novedad 4">
                    <p>Solo usa tu smartphone</p>
                </div>
                <!-- Puedes duplicar más si quieres -->
            </div>
        </section>

        <!-- Sección de Texto e Imagen con modelo 3D -->
        <section class="texto-imagen">
            <div class="texto fade-in">
                <h2>SUMÉRGETE EN LA REALIDAD AUMENTADA</h2>
                <p>¡Laboratorios en la palma de tus manos!</p>
                <p>Prepárate para vivir la mejor experiencia con instrumentaria renderizada,
                    visualizada con RA (Realidad Aumentada) con tu propio smartphone.</p>
            </div>
            <div class="imagen fade-in">
                <!-- Modelo 3D giratorio -->
                <div class="imagen fade-in" style="position: relative;">
                    <model-viewer
                        id="modeloMetano"
                        src="modelos/metano.glb"
                        alt="Modelo de Metano"
                        auto-rotate
                        camera-controls
                        ar
                        style="width: 100%; height: 450px; background-color: transparent;"
                        rotation-per-second="1">
                    </model-viewer>

                    <span style="
        position: absolute;
        bottom: 10px;
        left: 50%;
        transform: translateX(-50%);
        background-color: rgba(255, 255, 255, 0.7);
        padding: 5px 10px;
        border-radius: 8px;
        font-weight: bold;
        font-family: 'Krub', sans-serif;">
                        Metano (CH₄)
                    </span>
                </div>


            </div>
        </section>

        <!-- Otras secciones -->
        <section class="tex-img">
            <div class="img fade-in">
                <img src="img/section1.png" alt="IN">
            </div>
            <div class="tex fade-in">
                <h2>EXPERIMENTA</h2>
                <p>Demostraciones en vivo: Ve cómo la RA transforma el mundo a tu alrededor para
                    observar instrumentarías de laboratorio.</p>
                <p>Interactividad: Experiencias de RA con tu propio smartphone.</p>
            </div>
        </section>

        <section class="tex-img fade-in">
            <div class="tex fade-in">
                <h2>CONÓCENOS</h2>
                <p>Esta página web está diseñada principalmente para estudiantes y docentes de la
                    UTSV, ofreciendo acceso directo a materiales de apoyo educativo, y un punto de
                    contacto, como Facebook y WhatsApp, para noticias, soporte, sugerencias,
                    reportes del sistema, entre otros.</p>
            </div>
            <div class="img fade-in">
                <img src="img/section2.png" alt="IN">
            </div>
        </section>

        <!-- Sección de Videos -->
        <section class="videos">
            <h2 class="titulo-videos">¡OBTEN ÉXITO!</h2>
            <div class="video-contenedor">
                <div class="video-contenido fade-in">
                    <video src="video/5752738-uhd_3840_2160_30fps.mp4" autoplay loop muted class="gif-video"></video>
                    <div class="info-video">
                        <h2>AMPLÍA TUS CONOCIMIENTOS</h2>
                        <p>La integración de RA en la enseñanza te permitirá
                            mejorar la comprensión de los equipos de laboratorio, aumentar tu participación
                            en clase.</p>
                    </div>
                </div>
                <div class="video-contenido fade-in">
                    <video src="video/8326252-uhd_3840_2160_30fps (1).mp4" autoplay loop muted class="gif-video"></video>
                    <div class="info-video">
                        <h2>SIÉNTETE CONFIADO</h2>
                        <p>Consigue la confianza para saber todo sobre los instrumentos de tus laboratorios
                            gracias al RA.</p>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <!-- Footer -->

    <footer class="pie-pagina">

        <div class="contactos">
            <p class="text-center">
                Contacto: <br><br>
                <a>Facebook: RALQ</a><br>
                Correo: ralq.utsv@mail.com<br>
                Teléfono: +123 456 789 <br><br>
            </p>
        </div>

        <div class="colaboradores">
            <p class="text-center">
                Colaboradores: <br><br>
                Emir Polito Guevara <br>
                Irving Esteban Molina Méndez <br>
                Cristian Daniel Barraza Hernández <br><br>
                2024 &copy; Todos los derechos reservados.
            </p>
        </div>

        <img src="img/utsv-log.png" alt="Imagen del Footer" class="imagen-footer">
    </footer>

    <!-- Animaciones -->
    <script src="js/animaciones-index.js"></script>

</body>

</html>