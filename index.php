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
        href="https://fonts.googleapis.com/css2?family=Fira+Sans+Condensed:wght@300;400;500;700&family=Krub:wght@200;300;400;500;600;700&display=swap"
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
        <div
            class="w-full flex flex-col md:flex-row items-center justify-between px-4 md:px-8 py-3 md:py-5 gap-4 md:gap-0">
            <!-- Logo a la izquierda -->
            <img src="img/logo_ralq_color-removebg-preview.png" alt="Logo" class="h-12 md:h-20 flex-shrink-0">
            <!-- Links a la derecha -->
            <div class="hidden md:flex items-center space-x-3 md:space-x-5">
                <a href="menu.php"
                    class="px-4 md:px-7 py-2 md:py-4 bg-[#2b3951] text-white rounded-lg font-medium text-base md:text-xl hover:bg-[#1f2740] transition-colors">¡Empieza
                    a usar la app!</a>
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
            class="contenido-hero absolute inset-0 flex flex-col justify-center items-center text-center px-8 md:px-16 fade-in">
            <h1 class="text-5xl md:text-7xl lg:text-8xl font-bold text-white mb-6 drop-shadow-2xl leading-tight"
                style="font-family: 'Poppins', sans-serif;">
                Visualiza el <span class="text-teal-400">Futuro</span> de la Química </h1>
            <p
                class="text-xl md:text-2xl lg:text-3xl text-gray-200 drop-shadow-md max-w-3xl mb-8 font-light leading-relaxed">
                Descubre una experiencia educativa inmersiva con Realidad Aumentada de última generación.
            </p>
            <a href="menu.php"
                class="px-10 py-5 bg-teal-500 text-white rounded-full font-semibold text-lg hover:bg-teal-400 transition-all shadow-[0_0_20px_rgba(20,184,166,0.5)] transform hover:scale-105">
                ¡Empieza a usar la app!
            </a>
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




<main class="contenido-principal overflow-x-hidden">
    <!-- Sección de Novedades (Carousel) -->
    <section class="novedades fade-in text-center py-12 md:py-24 bg-white">
        <h2 class="text-3xl md:text-5xl font-bold text-gray-900 mb-10 uppercase tracking-[0.2em]">Novedades</h2>
        <div class="carrusel-container relative w-full overflow-hidden">
            <div class="carrusel-track flex items-center">
                <div class="carta !min-w-[120px] !max-w-[140px] md:!min-w-[250px] md:!max-w-[300px]">
                    <img src="img/carrusel/carrusel1.png" alt="Novedad 1" class="!h-[100px] md:!h-[200px]">
                    <p class="!text-[0.9rem] md:!text-[1.6rem]">Descubre tus laboratorios</p>
                </div>
                <div class="carta !min-w-[120px] !max-w-[140px] md:!min-w-[250px] md:!max-w-[300px]">
                    <img src="img/carrusel/carrusel2.png" alt="Novedad 2" class="!h-[100px] md:!h-[200px]">
                    <p class="!text-[0.9rem] md:!text-[1.6rem]">Infinidad de instrumentos RA</p>
                </div>
                <div class="carta !min-w-[120px] !max-w-[140px] md:!min-w-[250px] md:!max-w-[300px]">
                    <img src="img/carrusel/carrusel3.png" alt="Novedad 3" class="!h-[100px] md:!h-[200px]">
                    <p class="!text-[0.9rem] md:!text-[1.6rem]">Tus conocimientos aumentarán</p>
                </div>
                <div class="carta !min-w-[120px] !max-w-[140px] md:!min-w-[250px] md:!max-w-[300px]">
                    <img src="img/carrusel/carrusel4.png" alt="Novedad 4" class="!h-[100px] md:!h-[200px]">
                    <p class="!text-[0.9rem] md:!text-[1.6rem]">Solo usa tu smartphone</p>
                </div>
                <!-- Duplicados -->
                <div class="carta !min-w-[120px] !max-w-[140px] md:!min-w-[250px] md:!max-w-[300px]">
                    <img src="img/carrusel/carrusel1.png" alt="Novedad 1" class="!h-[100px] md:!h-[200px]">
                    <p class="!text-[0.9rem] md:!text-[1.6rem]">Descubre tus laboratorios</p>
                </div>
            </div>
        </div>
    </section>
 
    <!-- Sección 1: Estructuras Moleculares -->
    <section class="bg-[#0f172a] text-white">
        <div class="max-w-[1500px] mx-auto px-6 py-20 lg:py-32">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <!-- Texto -->
                <div class="space-y-12 lg:pr-12">
                    <div class="text-center lg:text-left space-y-4">
                        <h2 class="text-4xl md:text-6xl lg:text-7xl font-bold leading-tight" style="font-family: 'Poppins', sans-serif;">
                            Estructuras en <span class="text-teal-400">3D</span>
                        </h2>
                        <div class="w-24 h-1.5 bg-teal-500 rounded-full mx-auto lg:mx-0"></div>
                    </div>
 
                    <div class="grid grid-cols-1 gap-10">
                        <div class="flex flex-col items-center lg:items-start text-center lg:text-left gap-4">
                            <div class="p-4 bg-white/5 border border-white/10 rounded-2xl text-teal-400 backdrop-blur-md">
                                <svg class="w-8 h-8 lg:w-10 lg:h-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M14 10l-2 1m0 0l-2-1m2 1v2.5M20 7l-2 1m2-1l-2-1m2 1v2.5" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-2xl lg:text-3xl font-bold text-white mb-2">Interacción Total</h3>
                                <p class="text-gray-400 text-xl lg:text-xl leading-relaxed">Manipula cada átomo y enlace para entender la química desde adentro.</p>
                            </div>
                        </div>
                        <div class="flex flex-col items-center lg:items-start text-center lg:text-left gap-4">
                            <div class="p-4 bg-white/5 border border-white/10 rounded-2xl text-teal-400 backdrop-blur-md">
                                <svg class="w-8 h-8 lg:w-10 lg:h-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-2xl lg:text-3xl font-bold text-white mb-2">Fidelidad Científica</h3>
                                <p class="text-gray-400 text-xl lg:text-xl leading-relaxed">Modelos validados para una representación exacta de las geometrías moleculares.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modelo -->
                <div class="relative flex justify-center items-center">
                    <div class="absolute inset-0 bg-teal-500/10 rounded-full blur-[100px] scale-150"></div>
                    <model-viewer src="modelos/cafeina.glb" alt="Cafeína" auto-rotate camera-controls ar 
                        class="w-full h-80 md:h-[500px] lg:h-[600px] bg-transparent">
                    </model-viewer>
                    <div class="absolute bottom-4 bg-white/5 backdrop-blur-xl border border-white/10 px-6 py-3 rounded-2xl text-lg lg:text-xl font-bold text-white">
                        Cafeína <span class="text-teal-400 ml-2">C₈H₁₀N₄O₂</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
 
    <!-- Sección 2: Instrumental -->
    <section class="bg-white text-gray-900">
        <div class="max-w-[1500px] mx-auto px-6 py-20 lg:py-32">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <!-- Modelo (Primero en laptop para efecto espejo) -->
                <div class="relative flex justify-center items-center lg:order-1">
                    <div class="absolute inset-0 bg-teal-500/5 rounded-full blur-[100px] scale-150"></div>
                    <model-viewer src="modelos/gradilla.glb" alt="Gradilla" auto-rotate camera-controls ar 
                        class="w-full h-80 md:h-[500px] lg:h-[600px] bg-transparent">
                    </model-viewer>
                    <div class="absolute bottom-4 bg-white shadow-2xl border border-gray-100 px-6 py-3 rounded-2xl text-lg lg:text-xl font-bold flex items-center gap-3">
                        <div class="w-3 h-3 bg-teal-500 rounded-full animate-pulse"></div>
                        Gradilla UTSV
                    </div>
                </div>
                <!-- Texto -->
                <div class="space-y-12 lg:pl-12 lg:order-2">
                    <div class="text-center lg:text-left space-y-4">
                        <h2 class="text-4xl md:text-6xl lg:text-7xl font-bold leading-tight" style="font-family: 'Poppins', sans-serif;">
                            Instrumental <span class="text-teal-600 italic">RA</span>
                        </h2>
                        <div class="w-24 h-1.5 bg-teal-600 rounded-full mx-auto lg:mx-0"></div>
                    </div>
 
                    <div class="grid grid-cols-1 gap-10">
                        <div class="flex flex-col items-center lg:items-start text-center lg:text-left gap-4">
                            <div class="p-4 bg-gray-50 border border-gray-100 rounded-2xl text-teal-600">
                                <svg class="w-8 h-8 lg:w-10 lg:h-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-2xl lg:text-3xl font-bold text-gray-900 mb-2">Dominio Técnico</h3>
                                <p class="text-gray-600 text-xl lg:text-xl leading-relaxed">Familiarízate con el equipo crítico antes de manipularlo en el mundo real.</p>
                            </div>
                        </div>
                        <div class="flex flex-col items-center lg:items-start text-center lg:text-left gap-4">
                            <div class="p-4 bg-gray-50 border border-gray-100 rounded-2xl text-teal-600">
                                <svg class="w-8 h-8 lg:w-10 lg:h-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-2xl lg:text-3xl font-bold text-gray-900 mb-2">Seguridad Total</h3>
                                <p class="text-gray-600 text-xl lg:text-xl leading-relaxed">Aprende los protocolos de uso correcto sin peligro de roturas o accidentes.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
 
    <!-- Sección 3: Multimedia -->
    <section class="bg-gray-100 py-20 lg:py-40 px-6">
        <div class="max-w-[1500px] mx-auto space-y-32">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div class="rounded-[2.5rem] overflow-hidden shadow-2xl">
                    <video src="video/5752738-uhd_3840_2160_30fps.mp4" autoplay loop muted playsinline class="w-full aspect-video object-cover"></video>
                </div>
                <div class="space-y-8 text-center lg:text-left">
                    <h3 class="text-3xl md:text-5xl font-bold text-gray-900">Acelera tu <span class="text-teal-600">Aprendizaje</span></h3>
                    <div class="space-y-6">
                        <div class="flex items-center justify-center lg:justify-start gap-4 text-xl lg:text-2xl text-gray-700">
                            <span class="w-8 h-8 bg-teal-100 text-teal-600 rounded-full flex items-center justify-center font-bold flex-shrink-0">✓</span>
                            Retención de conceptos mejorada en un 90%.
                        </div>
                        <div class="flex items-center justify-center lg:justify-start gap-4 text-xl lg:text-2xl text-gray-700">
                            <span class="w-8 h-8 bg-teal-100 text-teal-600 rounded-full flex items-center justify-center font-bold flex-shrink-0">✓</span>
                            Identificación de instrumental en segundos.
                        </div>
                    </div>
                </div>
            </div>
 
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div class="lg:order-2 rounded-[2.5rem] overflow-hidden shadow-2xl">
                    <video src="video/8326252-uhd_3840_2160_30fps (1).mp4" autoplay loop muted playsinline class="w-full aspect-video object-cover"></video>
                </div>
                <div class="lg:order-1 space-y-8 text-center lg:text-left">
                    <h3 class="text-3xl md:text-5xl font-bold text-gray-900">Confianza en el <span class="text-teal-600">Laboratorio</span></h3>
                    <div class="space-y-6">
                        <div class="flex items-center justify-center lg:justify-start gap-4 text-xl lg:text-2xl text-gray-700">
                            <span class="w-8 h-8 bg-teal-100 text-teal-600 rounded-full flex items-center justify-center font-bold flex-shrink-0">✓</span>
                            Entorno virtual de prácticas libre de riesgos.
                        </div>
                        <div class="flex items-center justify-center lg:justify-start gap-4 text-xl lg:text-2xl text-gray-700">
                            <span class="w-8 h-8 bg-teal-100 text-teal-600 rounded-full flex items-center justify-center font-bold flex-shrink-0">✓</span>
                            Gana seguridad antes de la práctica real.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

    <footer class="text-white py-16 px-6 md:px-24" style="background-color: #233c53ff;">
        <div class="max-w-[1500px] mx-auto grid grid-cols-1 md:grid-cols-3 gap-12 items-center">

            <!-- Contacto -->
            <div class="text-center md:text-left">
                <h4 class="text-3xl font-bold mb-6 text-center">Contacto</h4>
                <p class="text-lg leading-relaxed text-center">
                    Facebook: <a href="#" class="hover:underline">RALQ</a><br>
                    Correo: <a href="mailto:ralq.utsv@mail.com" class="hover:underline">ralq.utsv@mail.com</a><br>
                    Teléfono: <a href="tel:+123456789" class="hover:underline">+123 456 789</a>
                </p>
            </div>
            <!-- Logo centrado -->
            <div class="flex justify-center items-center">
                <img src="img/utsv-log.png" alt="UTSV Logo" class="h-24 md:h-36 object-contain">
            </div>

            <!-- Creadores -->
            <div class="text-center md:text-right">
                <h4 class="text-3xl font-bold mb-6 text-center">Creadores</h4>
                <p class="text-lg leading-relaxed text-center">
                    Emir Polito Guevara<br>
                    Irving Esteban Molina Méndez<br>
                    Cristian Daniel Barraza Hernández
                </p>
            </div>
        </div>
        <!-- Línea separadora -->
        <div class="border-t border-gray-400 mt-12"></div>

        <!-- Derechos -->
        <div class="mt-6 text-center text-lg text-gray-200">
            2024 &copy; Todos los derechos reservados.
        </div>
    </footer>

    <!-- Animaciones -->
    <script src="js/animaciones-index.js"></script>
    </body>

</html>