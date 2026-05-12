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

    <style>
        /* Estilos para el carrusel infinito en desktop */
        @media (min-width: 1024px) {
            .carrusel-track {
                animation: scroll-infinite 20s linear infinite;
            }

            .carrusel-track:hover {
                animation-play-state: paused;
            }
        }

        @keyframes scroll-infinite {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-33.333%);
            }
        }
    </style>
    <!-- Preload hero image -->
    <link rel="preload" as="image" href="img/Hero.NEW.jpg">
</head>



<body class="relative">
    <!-- Header flotante ancho completo -->
    <header id="mainHeader"
        class="bg-white border-b border-gray-100 px-4 md:px-8 py-5 md:py-7 sticky top-0 z-50 shadow-sm transition-transform duration-300 ease-in-out">
        <div class="max-w-[1500px] mx-auto flex justify-between items-center gap-2">

            <!-- Logo -->
            <div class="flex items-center flex-shrink-0">
                <img src="img/logo_ralq_color-removebg-preview.png" alt="RALQ Logo" class="h-12 md:h-16 object-contain">
            </div>

            <!-- Right -->
            <div class="flex items-center gap-3 md:gap-8">
                <!-- Welcome + Socials -->
                <div class="hidden sm:flex items-center gap-3 md:gap-4">

                    <div class="flex gap-2">

                        <a href="#" class="hover:opacity-70- transition-opacity">
                            <img src="img/contctos/logofacebook.png"
                                class="w-6 h-6 md:w-8 md:h-8 rounded-full object-cover" alt="Facebook">
                        </a>

                        <a href="#" class="hover:opacity-70 transition-opacity">
                            <img src="img/contctos/logowhats.png"
                                class="w-6 h-6 md:w-8 md:h-8 rounded-full object-cover" alt="WhatsApp">
                        </a>

                        <a href="#" class="hover:opacity-70 transition-opacity">
                            <img src="img/contctos/logogmail.png"
                                class="w-6 h-6 md:w-8 md:h-8 rounded-full object-cover" alt="Gmail">
                        </a>

                    </div>
                </div>
            </div>

        </div>

    </header>



    <!-- Hero -->
    <section class="hero relative w-full h-screen">
        <!-- Imagen de fondo -->
        <img src="img/hero1.png" alt="Imagen de fondo" class="w-full h-full object-cover imagen-hero"
            fetchpriority="high" decoding="sync">
        <!-- Overlay -->
        <div class="absolute inset-0 bg-black/50 overlay"></div>

        <!-- TEXTO SOBRE LA IMAGEN HERO -->
        <div class="contenido-hero absolute inset-0 flex flex-col justify-start md:justify-center items-center text-center
    px-8 md:px-16
    pt-[30vh] md:pt-0
    fade-in">

            <h1 class="text-4xl md:text-7xl lg:text-8xl font-bold text-white mb-6 drop-shadow-2xl leading-tight"
                style="font-family: 'Poppins', sans-serif;">
                Visualiza instrumentos y moleculas en Realidad Aumentada.
            </h1>

            <p
                class="text-xl md:text-2xl lg:text-3xl text-gray-200 drop-shadow-md max-w-3xl mb-8 font-light leading-relaxed">
                Descubre una experiencia educativa inmersiva con Realidad Aumentada de última generación.
            </p>

            <a href="menu.php"
                class="px-10 py-5 bg-white text-black rounded-full font-semibold text-lg transition-all shadow-[0_0_20px_rgba(20,184,166,0.5)] transform hover:scale-105">
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
        <!-- Sección de Novedades (Carousel) - CARRUSEL INFINITO -->
        <section class="novedades fade-in text-center py-12 md:py-24 bg-white">
            <h2 class="text-3xl md:text-5xl font-bold text-gray-900 mb-10 uppercase tracking-[0.2em]">Novedades</h2>
            <div class="carrusel-container relative w-full overflow-hidden">
                <!-- Items triplicados para loop infinito en desktop -->
                <div class="carrusel-track flex items-center">
                    <!-- Set 1 -->
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
                    <!-- Set 2 (duplicado para loop infinito) -->
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
                    <!-- Set 3 (duplicado para loop infinito) -->
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
                </div>
            </div>
        </section>

        <!-- Sección 1: Estructuras Moleculares -->
        <section class="bg-[#5c886c] text-white">
            <div class="max-w-[1400px] mx-auto px-6py-20 lg:py-32">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">

                    <!-- Texto -->
                    <div class="flex flex-col gap-10 lg:pr-8">
                        <!-- Eyebrow -->
                        <span
                            class="inline-flex items-center gap-2 self-center lg:self-start text-xs font-semibold tracking-widest uppercase px-4 py-2 rounded-full bg-white border border-teal-500/20 text-black">
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9.75 3.104v5.714a2.25 2.25 0 01-.659 1.591L5 14.5M9.75 3.104c-.251.023-.501.05-.75.082m.75-.082a24.301 24.301 0 014.5 0m0 0v5.714a2.25 2.25 0 001.5 2.122m-1.5-2.122c.252.023.502.05.75.082M15 3.104c.251.023.501.05.75.082m0 0A24.301 24.301 0 0118.75 8.5m-3-5.396a24.301 24.301 0 00-4.5 0" />
                            </svg>
                            Química Interactiva
                        </span>

                        <!-- Título -->
                        <div class="text-center lg:text-left">
                            <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold leading-tight tracking-tight"
                                style="font-family:'Poppins',sans-serif;">
                                Estructuras en 3D
                            </h2>
                            <div class="mt-4 w-16 h-1 bg-white rounded-full mx-auto lg:mx-0"></div>
                        </div>

                        <!-- Features -->
                        <div class="flex flex-col gap-8">
                            <div
                                class="flex flex-col sm:flex-row items-center sm:items-start text-center sm:text-left gap-4">
                                <div class="shrink-0 p-3 rounded-2xl bg-white/5 border border-white/10">
                                    <svg class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                        stroke-width="1.5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M14 10l-2 1m0 0l-2-1m2 1v2.5M20 7l-2 1m2-1l-2-1m2 1v2.5M14 4l-2-1-2 1M4 7l2-1M4 7l2 1M4 7v2.5M12 21l-2-1m2 1l2-1m-2 1v-2.5M6 18l-2-1v-2.5M18 18l2-1v-2.5" />
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-xl lg:text-2xl font-bold text-white mb-1">Interacción Total</h3>
                                    <p class="text-white text-base lg:text-lg leading-relaxed">Manipula cada átomo y
                                        enlace para entender la química desde adentro.</p>
                                </div>
                            </div>

                            <div
                                class="flex flex-col sm:flex-row items-center sm:items-start text-center sm:text-left gap-4">
                                <div class="shrink-0 p-3 rounded-2xl bg-white/5 border border-white/10">
                                    <svg class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                        stroke-width="1.5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-xl lg:text-2xl font-bold text-white mb-1">Fidelidad Científica</h3>
                                    <p class="text-white text-base lg:text-lg leading-relaxed">Modelos validados para
                                        una representación exacta de las geometrías moleculares.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modelo 3D -->
                    <div class="relative flex justify-center items-center">
                        <!-- Glow de fondo -->
                        <div class="absolute inset-0 flex items-center justify-center pointer-events-none">
                            <div class="w-72 h-72 lg:w-96 lg:h-96 rounded-full bg-teal-500/10 blur-[80px]"></div>
                        </div>

                        <!-- Viewer -->
                        <model-viewer src="modelos/cafeina.glb" alt="Cafeína" auto-rotate camera-controls ar
                            style="width:100%; height:420px; background:transparent;; --poster-color: transparent;"
                            class="lg:h-[560px]">
                        </model-viewer>

                        <!-- Badge -->
                        <div class="absolute bottom-4 left-1/2 -translate-x-1/2 pointer-events-none whitespace-nowrap
                    bg-[#0f172a]/80 backdrop-blur-xl border border-white/10
                    px-5 py-2.5 rounded-2xl text-sm lg:text-base font-semibold text-white">
                            Cafeína <span class="text-teal-400 ml-1.5">C₈H₁₀N₄O₂</span>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <!-- Sección 2: Instrumental RA -->
        <section class="bg-white text-gray-900">
            <div class="max-w-[1400px] mx-auto px-6 py-20 lg:py-32">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">

                    <!-- Modelo 3D (izquierda en desktop, abajo en móvil) -->
                    <div class="relative flex justify-center items-center order-last lg:order-none">
                        <!-- Glow de fondo -->
                        <div class="absolute inset-0 flex items-center justify-center pointer-events-none">
                            <div class="w-72 h-72 lg:w-96 lg:h-96 rounded-full bg-teal-500/10 blur-[80px]"></div>
                        </div>

                        <!-- Viewer -->
                        <model-viewer src="modelos/gradilla.glb" alt="Gradilla" auto-rotate camera-controls ar
                            style="width:100%; height:420px; background:transparent;; --poster-color: transparent;"
                            class="lg:h-[560px]">
                        </model-viewer>

                        <!-- Badge -->
                        <div class="absolute bottom-4 left-1/2 -translate-x-1/2 pointer-events-none whitespace-nowrap
                    bg-white shadow-lg border border-gray-100
                    px-5 py-2.5 rounded-2xl text-sm lg:text-base font-semibold text-gray-900
                    flex items-center gap-2.5">
                            <span class="w-2.5 h-2.5 rounded-full bg-teal-500 animate-pulse shrink-0"></span>
                            Gradilla UTSV
                        </div>
                    </div>

                    <!-- Texto (derecha en desktop) -->
                    <div class="flex flex-col gap-10 lg:pl-8">
                        <!-- Eyebrow -->
                        <span
                            class="inline-flex items-center gap-2 self-center lg:self-start text-xs font-semibold tracking-widest uppercase px-4 py-2 rounded-full bg-teal-50 border border-teal-200 text-teal-700">
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M7.5 3.75H6A2.25 2.25 0 003.75 6v1.5M16.5 3.75H18A2.25 2.25 0 0120.25 6v1.5m0 9V18A2.25 2.25 0 0118 20.25h-1.5m-9 0H6A2.25 2.25 0 013.75 18v-1.5M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            Realidad Aumentada
                        </span>

                        <!-- Título -->
                        <div class="text-center lg:text-left">
                            <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold leading-tight tracking-tight"
                                style="font-family:'Poppins',sans-serif;">
                                Instrumental <span class="text-teal-600 italic">RA</span>
                            </h2>
                            <div class="mt-4 w-16 h-1 bg-teal-600 rounded-full mx-auto lg:mx-0"></div>
                        </div>

                        <!-- Features -->
                        <div class="flex flex-col gap-8">
                            <div
                                class="flex flex-col sm:flex-row items-center sm:items-start text-center sm:text-left gap-4">
                                <div class="shrink-0 p-3 rounded-2xl bg-gray-50 border border-gray-100 text-teal-600">
                                    <svg class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                        stroke-width="1.5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 004.486-6.336l-3.276 3.277a3.004 3.004 0 01-2.25-2.25l3.276-3.276a4.5 4.5 0 00-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437l1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008z" />
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-xl lg:text-2xl font-bold text-gray-900 mb-1">Dominio Técnico</h3>
                                    <p class="text-gray-500 text-base lg:text-lg leading-relaxed">Familiarízate con el
                                        equipo crítico antes de manipularlo en el mundo real.</p>
                                </div>
                            </div>

                            <div
                                class="flex flex-col sm:flex-row items-center sm:items-start text-center sm:text-left gap-4">
                                <div class="shrink-0 p-3 rounded-2xl bg-gray-50 border border-gray-100 text-teal-600">
                                    <svg class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                        stroke-width="1.5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" />
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-xl lg:text-2xl font-bold text-gray-900 mb-1">Seguridad Total</h3>
                                    <p class="text-gray-500 text-base lg:text-lg leading-relaxed">Aprende los protocolos
                                        de uso correcto sin peligro de roturas o accidentes.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Sección 3: Multimedia - VIDEOS MÁS HACIA LOS LADOS -->
        <section class="bg-white py-20 lg:py-40 px-2 lg:px-20">
            <!-- max-w más amplio para que ocupe más espacio horizontal -->
            <div class="max-w-[1600px] mx-auto space-y-32">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                    <div class="rounded-[2.5rem] overflow-hidden shadow-2xl">
                        <video src="video/5752738-uhd_3840_2160_30fps.mp4" autoplay loop muted playsinline
                            class="w-full aspect-video object-cover"></video>
                    </div>
                    <div class="space-y-8 text-center lg:text-left">
                        <h3 class="text-3xl md:text-5xl font-bold text-gray-900">Acelera tu Aprendizaje</h3>
                        <div class="space-y-6">
                            <div
                                class="flex items-center justify-center lg:justify-start gap-4 text-xl lg:text-2xl text-gray-700">
                                <span
                                    class="w-8 h-8 bg-teal-100 text-teal-600 rounded-full flex items-center justify-center font-bold flex-shrink-0">✓</span>
                                Retención de conceptos mejorada en un 90%.
                            </div>
                            <div
                                class="flex items-center justify-center lg:justify-start gap-4 text-xl lg:text-2xl text-gray-700">
                                <span
                                    class="w-8 h-8 bg-teal-100 text-teal-600 rounded-full flex items-center justify-center font-bold flex-shrink-0">✓</span>
                                Identificación de instrumental en segundos.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                    <div class="lg:order-2 rounded-[2.5rem] overflow-hidden shadow-2xl">
                        <video src="video/8326252-uhd_3840_2160_30fps (1).mp4" autoplay loop muted playsinline
                            class="w-full aspect-video object-cover"></video>
                    </div>
                    <div class="lg:order-1 space-y-8 text-center lg:text-left">
                        <h3 class="text-3xl md:text-5xl font-bold text-gray-900">Confianza en el laboratorio</h3>
                        <div class="space-y-6">
                            <div
                                class="flex items-center justify-center lg:justify-start gap-4 text-xl lg:text-2xl text-gray-700">
                                <span
                                    class="w-8 h-8 bg-teal-100 text-teal-600 rounded-full flex items-center justify-center font-bold flex-shrink-0">✓</span>
                                Entorno virtual de prácticas libre de riesgos.
                            </div>
                            <div
                                class="flex items-center justify-center lg:justify-start gap-4 text-xl lg:text-2xl text-gray-700">
                                <span
                                    class="w-8 h-8 bg-teal-100 text-teal-600 rounded-full flex items-center justify-center font-bold flex-shrink-0">✓</span>
                                Gana seguridad antes de la práctica real.
                            </div>
                        </div>
        </section>
    </main>

    <!-- FOOTER -->
    <footer class="text-white py-16 px-6 md:px-24" style="background-color: #5c886c;">

        <div class="max-w-4xl mx-auto grid grid-cols-2 gap-8 md:gap-16 items-start">

            <div class="text-center">

                <h4 class="text-xl md:text-3xl font-bold mb-4 md:mb-6">
                    Contacto
                </h4>

                <p class="text-sm sm:text-base md:text-lg leading-relaxed">

                    Facebook:
                    <a href="#" class="hover:underline">RALQ</a><br>

                    Correo:
                    <a href="mailto:ralq.utsv@mail.com" class="hover:underline">
                        ralq.utsv@mail.com
                    </a><br>

                    Teléfono:
                    <a href="tel:+123456789" class="hover:underline">
                        +123 456 789
                    </a>

                </p>
            </div>

            <!-- Creadores -->
            <div class="text-center">

                <h4 class="text-xl md:text-3xl font-bold mb-4 md:mb-6">
                    Creadores
                </h4>

                <p class="text-sm sm:text-base md:text-lg leading-relaxed">
                    Emir Polito Guevara<br>
                    Irving Esteban Molina Méndez<br>
                    Cristian Daniel Barraza Hernández
                </p>

            </div>

        </div>

        <div class="border-t border-gray-400 mt-12"></div>

        <div class="mt-6 text-center text-lg text-gray-200">
            2024 &copy; Todos los derechos reservados.
        </div>

    </footer>

    <!-- Animaciones -->
    <script src="js/animaciones-index.js"></script>
</body>

</html>