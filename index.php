<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Cristian Barraza, Irving Esteban, Emir Polito">
    <title>RALQ</title>
    <!-- Tailwind CSS -->
    <link rel="stylesheet" href="build/output.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Fuentes y estilos -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        ref="https://fonts.googleapis.com/css2?family=Fira+Sans+Condensed:wght@300;400;500;700&family=Krub:wght@200;300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/index-copy.css">
    <link rel="stylesheet" href="css/animaciones.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <!-- Librería para mostrar modelos 3D -->
    <script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
</head>



<body class="relative">
    <!-- Header flotante ancho completo -->
    <header id="floating-header"
        class="fixed top-0 left-0 w-full bg-white/100 backdrop-blur-md shadow-md z-50 transition-transform duration-300">
        <div class="w-full flex items-center justify-between px-8 py-5">
            <!-- Logo a la izquierda -->
            <img src="img/logo_ralq_color-removebg-preview.png" alt="Logo" class="h-16 md:h-20 flex-shrink-0">
            <!-- Links a la derecha -->
            <div class="flex items-center space-x-5">

                <a href="menu.php"
                    class="px-7 py-4 bg-[#2b3951] text-white rounded-lg font-medium text-lg md:text-xl hover:bg-[#1f2740] transition-colors">¡Empieza
                    a usar la app!</a>

                <!-- <a href="registro.php"
                    class="px-6 py-3 bg-[#2b3951] text-white rounded-lg font-medium text-lg md:text-xl hover:bg-[#1f2740] transition-colors">Regístrate</a>
                <span class="text-gray-700 text-lg md:text-xl">o</span>
                <a href="iniciosesion.php"
                    class="px-6 py-3 bg-[#2b3951] text-white rounded-lg font-medium text-lg md:text-xl hover:bg-[#1f2740] transition-colors">Inicia
                sesión</a> -->
            </div>
        </div>
    </header>



    <!-- Hero -->
    <section class="hero relative w-full h-screen">
        <!-- Imagen de fondo -->
        <img src="img/cerrar-cientifico-vistiendo-mascarilla.jpg" alt="Imagen de fondo"
            class="w-full h-full object-cover imagen-hero">
        <!-- Overlay -->
        <div class="absolute inset-0 bg-black/50 overlay"></div>

        <!-- TEXTO SOBRE LA IMAGEN HERO -->
        <!-- Contenido del hero -->
        <div
            class="contenido-hero absolute inset-0 flex flex-col justify-center items-center text-center px-6 md:px-16 fade-in">
            <h1 class="text-6xl md:text-8xl font-light text-white mb-5 drop-shadow-lg" style="font-family: 'Poppins'">
                Visualiza y Aprende en Realidad Aumentada </h1>
            <p class="text-xl md:text-4xl text-white drop-shadow-md max-w-1xl">
                Aprende química con modelos en realidad aumentada directamente en tu dispositivo.
            </p>
        </div>
    </section>

    <script>
        // Efecto de ocultar/mostrar header según scroll
        let lastScroll = 0;
        const header = document.getElementById('floating-header');
        window.addEventListener('scroll', () => {
            const currentScroll = window.pageYOffset;

            if (currentScroll > lastScroll && currentScroll > 50) {
                // Scroll hacia abajo → ocultar
                header.style.transform = 'translateY(-100%)';
            } else {
                // Scroll hacia arriba → mostrar
                header.style.transform = 'translateY(0)';
            }
            lastScroll = currentScroll;
        });
    </script>
</body>




<main class="contenido-principal">
    <!-- Sección de Novedades -->
    <section class="novedades fade-in text-center color-black">
        <div class="carrusel mt-6">
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
            <div class="carta"><img src="img/carrusel/carrusel1 copy.png" alt="Novedad 5">
                <p>Visualiza tu aprendizaje</p>
            </div>
            <div class="carta"><img src="img/carrusel/carrusel2 copy.png" alt="Novedad 6">
                <p>Aprende de una mejor manera</p>
            </div>
        </div>
    </section>



    <!-- Sección Texto + Modelo 3D -->
    <!-- <section class="bg-black text-white"> -->
    <section class="bg-gray-900 text-white">

        <div class="container px-8 py-8 mx-auto">
            <div class="lg:flex lg:items-center lg:gap-12">
                <!-- Texto principal y componentes -->
                <div class="w-full space-y-11 lg:w-1/2">
                    <!-- Título principal -->
                    <div>
                        <h1 class="text-6xl lg:text-5xl font-extrabold capitalize text-white -mt-8"
                            style="font-family: 'Poppins', sans-serif;"> Aprende sobre estructuras moleculares
                        </h1>


                        <div class="mt-4 flex items-center gap-2">
                            <span class="inline-block w-40 h-1 bg-teal-500 rounded-full"></span>
                            <span class="inline-block w-3 h-1 bg-teal-500 rounded-full"></span>
                            <span class="inline-block w-1 h-1 bg-teal-500 rounded-full"></span>
                        </div>
                    </div>

                    <!-- Item 1 -->
                    <div class="md:flex md:items-start md:gap-4">
                        <span class="inline-block p-3 text-teal-400 bg-gray-800/50 rounded-xl">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-teal-400" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                            </svg>
                        </span>
                        <div class="mt-4 md:mt-0">
                            <h2 class="text-2xl font-bold text-white">Aprendizaje interactivo</h2>
                            <p class="mt-2 text-gray-300">
                                Explora cada molécula desde todos los ángulos, manipulando los modelos para comprender
                                mejor su estructura. </p>
                        </div>
                    </div>

                    <!-- Item 2 -->
                    <div class="md:flex md:items-start md:gap-4">
                        <span class="inline-block p-3 text-teal-400 bg-gray-800/50 rounded-xl">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-teal-400" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                            </svg>
                        </span>
                        <div class="mt-4 md:mt-0">
                            <h2 class="text-2xl font-bold text-white">Visualización intuitiva
                            </h2>
                            <p class="mt-2 text-gray-300">
                                Nuestros modelos 3D hacen que conceptos complejos sean fáciles de entender, mostrando
                                cómo se conectan los átomos y se forman las moléculas. </p>
                        </div>
                    </div>

                    <!-- Item 3 -->
                    <div class="md:flex md:items-start md:gap-4">
                        <span class="inline-block p-3 text-teal-400 bg-gray-800/50 rounded-xl">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-teal-400" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z" />
                            </svg>
                        </span>
                        <div class="mt-4 md:mt-0">
                            <h2 class="text-2xl font-bold text-white">Accesible en cualquier dispositivo
                            </h2>
                            <p class="mt-2 text-gray-300">
                                Todo el contenido es accesible para computadoras, tablets y celulares, permitiendo
                                experimentar y aprender desde cualquier lugar. </p>
                        </div>
                    </div>
                </div>

                <!-- MODELO 3D -->
                <div class="w-full lg:w-1/2 mt-2 flex justify-center relative">
                    <model-viewer id="modeloCafeina" src="modelos/cafeina.glb" alt="Modelo de Cafeína" auto-rotate
                        camera-controls ar loading="lazy"
                        class="w-full h-96 lg:h-[500px] bg-transparent -translate-y-5">
                    </model-viewer>

                    <!-- Etiqueta minimalista -->
                    <span class="absolute bottom-4 left-1/2 -translate-x-1/2 transform
                             bg-teal-900/50 backdrop-blur-md px-6 py-2 rounded-xl
                             font-bold text-white text-lg shadow-sm">
                        Cafeína <span class="text-teal-200 font-medium">(C₈H₁₀N₄O₂)</span>
                    </span>
                </div>
            </div>
        </div>
    </section>





    <section class="bg-white text-black">
        <div class="container px-8 py-8 mx-auto">
            <div class="lg:flex lg:items-center lg:gap-12 lg:flex-row-reverse">
                <!-- Texto principal y componentes (ahora a la derecha) -->
                <div class="w-full space-y-11 lg:w-1/2">
                    <!-- Título principal -->
                    <div>
                        <h1 class="text-6xl lg:text-5xl font-extrabold capitalize text-black -mt-8"
                            style="font-family: 'Poppins', sans-serif;"> Aprende sobre instrumentos de laboratorio
                        </h1>

                        <div class="mt-4 flex items-center gap-2">
                            <span class="inline-block w-40 h-1 bg-teal-500 rounded-full"></span>
                            <span class="inline-block w-3 h-1 bg-teal-500 rounded-full"></span>
                            <span class="inline-block w-1 h-1 bg-teal-500 rounded-full"></span>
                        </div>
                    </div>

                    <!-- Items 1, 2 y 3 -->
                    <div class="md:flex md:items-start md:gap-4">
                        <span class="inline-block p-3 text-teal-500 bg-gray-100 rounded-xl">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-teal-500" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                            </svg>
                        </span>
                        <div class="mt-4 md:mt-0">
                            <h2 class="text-2xl font-bold text-black">Conoce cada instrumento</h2>
                            <p class="mt-2 text-gray-700">
                                Aprende la función de cada herramienta de laboratorio, desde pipetas y matraces hasta
                                microscopios y agitadores magnéticos
                        </div>
                    </div>

                    <div class="md:flex md:items-start md:gap-4">
                        <span class="inline-block p-3 text-teal-500 bg-gray-100 rounded-xl">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-teal-500" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                            </svg>
                        </span>
                        <div class="mt-4 md:mt-0">
                            <h2 class="text-2xl font-bold text-black">Visualización detallada</h2>
                            <p class="mt-2 text-gray-700">
                                Observa los instrumentos en 3D para entender su forma, tamaño y funcionamiento antes de
                                utilizarlos en un laboratorio real.
                        </div>
                    </div>

                    <div class="md:flex md:items-start md:gap-4">
                        <span class="inline-block p-3 text-teal-500 bg-gray-100 rounded-xl">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-teal-500" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z" />
                            </svg>
                        </span>
                        <div class="mt-4 md:mt-0">
                            <h2 class="text-2xl font-bold text-black">Estudia desde cualquier dispositivo</h2>
                            <p class="mt-2 text-gray-700">
                                Accede desde tablet o celular y familiarízate con los instrumentos del laboratorio
                                dondequiera que estés </p>
                        </div>
                    </div>
                </div>
                <!-- MODELO 3D (ahora a la izquierda) -->
                <div class="w-full lg:w-1/2 mt-2 flex justify-center relative">
                    <model-viewer id="modeloGradilla" src="modelos/gradilla.glb" alt="Modelo de Gradilla" auto-rotate
                        camera-controls ar loading="lazy"
                        class="w-full h-96 lg:h-[500px] bg-transparent -translate-y-5">
                    </model-viewer>

                    <!-- Etiqueta minimalista -->
                    <span class="absolute bottom-4 left-1/2 -translate-x-1/2 transform
                         bg-teal-100/50 backdrop-blur-md px-6 py-2 rounded-xl
                         font-bold text-black text-lg shadow-sm">
                        Gradilla <span class="text-teal-700 font-medium"></span>
                    </span>
                </div>
            </div>
        </div>
    </section>






    <!-- Sección de Videos -->
    <section class="bg-gray-200 py-20 px-4 md:px-16">
        <div class="flex flex-col gap-16">
            <!-- Video 1: Imagen izquierda, texto derecha -->
            <div class="flex flex-col md:flex-row items-center gap-8">
                <div
                    class="group relative rounded-3xl overflow-hidden shadow-2xl transition-transform transform hover:scale-105 w-full md:w-1/2">
                    <video src="video/5752738-uhd_3840_2160_30fps.mp4" autoplay loop muted playsinline
                        preload="metadata" class="w-full h-72 md:h-[400px] object-cover"></video>
                </div>
                <div class="w-full md:w-1/2 flex justify-center items-center h-[400px] px-4">
                    <div class="text-center max-w-md flex flex-col justify-center h-full">
                        <h3 class="text-2xl md:text-4xl font-bold mb-20 text-black-400">AMPLÍA TUS CONOCIMIENTOS</h3>
                        <div class="space-y-6 text-left mt-[-20px]">
                            <div class="flex items-start gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-10 w-10 text-green-800 mt-1 flex-shrink-0" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                <p class="text-gray-700 text-xl md:text-2xl">La RA mejora la comprensión de los equipos
                                    de laboratorio.</p>
                            </div>

                            <div class="flex items-start gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-10 w-10 text-green-800 mt-1 flex-shrink-0" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                <p class="text-gray-700 text-xl md:text-2xl">Aprende a identificar correctamente cada
                                    instrumento.</p>
                            </div>

                            <div class="flex items-start gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-10 w-10 text-green-800 mt-1 flex-shrink-0" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                <p class="text-gray-700 text-xl md:text-2xl">Aumenta tu participación y seguridad en
                                    clase.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Video 2: Imagen derecha, texto izquierda -->
            <div class="flex flex-col md:flex-row-reverse items-center gap-8">
                <div
                    class="group relative rounded-3xl overflow-hidden shadow-2xl transition-transform transform hover:scale-105 w-full md:w-1/2">
                    <video src="video/8326252-uhd_3840_2160_30fps (1).mp4" autoplay loop muted playsinline
                        preload="metadata" class="w-full h-72 md:h-[400px] object-cover"></video>
                </div>
                <div class="w-full md:w-1/2 flex justify-center items-center h-[400px] px-4">
                    <div class="text-center max-w-md flex flex-col justify-center h-full">
                        <h3 class="text-2xl md:text-4xl font-bold mb-20 text-black-400">SIÉNTETE CONFIADO</h3>

                        <div class="space-y-6 text-left mt-[-20px]">
                            <div class="flex items-start gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-10 w-10 text-green-800 mt-1 flex-shrink-0" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                <p class="text-gray-700 text-xl md:text-2xl">Conoce a fondo los instrumentos de
                                    laboratorio gracias a la RA.</p>
                            </div>

                            <div class="flex items-start gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-10 w-10 text-green-800 mt-1 flex-shrink-0" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                <p class="text-gray-700 text-xl md:text-2xl">Gana confianza en su uso y aumenta tu
                                    seguridad en clase.</p>
                            </div>

                            <div class="flex items-start gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-10 w-10 text-green-800 mt-1 flex-shrink-0" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                <p class="text-gray-700 text-xl md:text-2xl">Explora y comprende cómo se relacionan las
                                    moléculas y sus estructuras de manera interactiva.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Animaciones -->
    <script src="js/animaciones-index.js"></script>
    </body>

</html>