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


    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Fira+Sans+Condensed:wght@300;400;500;700&family=Krub:wght@200;300;400;500;600;700&family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/laboratorios.css">
    <link rel="stylesheet" href="css/user-icon.css">
    <link rel="stylesheet" href="css/QRN.css">
    <script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
    <style>
        header {
            display: block !important;
            background-color: white !important;
            padding: 0 !important;
            gap: 0 !important;
        }
    </style>
    <link rel="preload" fetchpriority="high" as="image" href="img/laboratorios/labo-q-general.jpg">
</head>

<body>
    <!-- HEADER -->
    <header id="mainHeader"
        class="bg-white border-b border-gray-100 sticky top-0 z-50 shadow-sm transition-transform duration-300 ease-in-out">
        <div class="max-w-[1500px] mx-auto flex justify-between items-center gap-2 px-4 md:px-8 py-5 md:py-7 w-full">
            <!-- Logo -->
            <div class="flex items-center flex-shrink-0">
                <img src="img/logo_ralq_color-removebg-preview.png" alt="RALQ Logo" class="h-12 md:h-16 object-contain"
                    fetchpriority="high" decoding="sync">
            </div>
            <!-- Back Button -->
            <div class="flex items-center">
                <a href="laboratorios.php" class="hover:scale-110 transition-transform flex items-center group">
                    <img src="img/logos/volver.png" alt="Volver" class="h-10 md:h-12 object-contain"
                        fetchpriority="high" decoding="sync">
                </a>
            </div>
        </div>
    </header>

    <section
        class="relative flex flex-col-reverse md:flex-row items-center gap-0 md:gap-10 p-8 md:p-16 bg-slate-50 border border-slate-200 rounded-3xl overflow-hidden">
        <!-- Imagen -->
        <div class="w-full md:w-5/12">
            <div class="relative group">
                <div
                    class="absolute -inset-1 bg-gradient-to-r from-blue-600 to-cyan-500 rounded-2xl blur opacity-25 group-hover:opacity-40 transition duration-1000">
                </div>

                <img src="img/laboratorios/labo-q-general.jpg" alt="Laboratorio de análisis"
                    class="relative rounded-2xl shadow-sm object-cover w-full h-80 md:h-96" fetchpriority="high"
                    decoding="sync">
            </div>
        </div>
        <!-- Texto -->
        <div class="w-full md:w-7/12 flex flex-col justify-center">
            <span class="text-blue-600 font-medium tracking-wider text-sm mb-2 uppercase">
                Laboratorio
            </span>

            <h2 class="text-3xl md:text-4xl font-bold text-slate-800 mb-4 tracking-tight">
                Química General
            </h2>

            <p class="text-slate-600 text-base md:text-2xl leading-relaxed mb-8 border-l-4 border-blue-500 pl-3">
                Un laboratorio de química general es un espacio diseñado para la enseñanza y realización de
                experimentos básicos de química. En él, los estudiantes y científicos pueden practicar, analizar y
                comprender los principios fundamentales de la química a través de experimentos controlados.
            </p>
        </div>
    </section>


    <main>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-5 gap-y-14">
            <!-- Gradilla -->
            <div
                class="group bg-gray-50 rounded-[2rem] p-4 md:p-6 shadow-md shadow-gray-300 hover:shadow-2xl transition-all duration-500 border border-gray-200 flex flex-col aspect-square max-w-[280px] md:aspect-auto md:min-h-[400px] md:max-w-[340px] mx-auto w-full">

                <div class="relative flex-grow flex items-center justify-center">

                    <model-viewer src="modelos/gradilla.glb" alt="Modelo de gradilla" auto-rotate camera-controls ar
                        class="w-full h-40 md:h-64 bg-transparent"></model-viewer>

                    <button onclick="toggleFullInfo(this)"
                        class="absolute top-0 right-0 w-10 h-10 bg-blue-600 text-white rounded-full font-bold shadow-lg hover:scale-110 transition-transform">

                        i

                    </button>

                </div>

                <div class="card-content mt-auto text-center pt-4">

                    <h3 class="text-xl md:text-3xl font-bold text-gray-900 mb-3">
                        Gradilla
                    </h3>

                    <a href="https://mywebar.com/p/Project_1_bsnqy3x66o" target="_blank"
                        class="block py-4 bg-blue-600 text-white rounded-2xl font-bold text-xl">

                        Ver en RA

                    </a>

                </div>

                <div class="full-info hidden mt-auto text-center pt-4">

                    <h3 class="text-lg md:text-2xl font-bold text-gray-900 mb-4">
                        Gradilla
                    </h3>

                    <div class="text-lg text-gray-600 space-y-2">
                        <p><strong>Uso:</strong> Sostener tubos de ensayo</p>
                        <p><strong>Material:</strong> Madera, plástico o metal</p>
                        <p><strong>Importancia:</strong> Evita derrames</p>
                    </div>

                </div>

            </div>

            <!-- Matraz Erlenmeyer -->
            <div
                class="group bg-gray-50 rounded-[2rem] p-4 md:p-6 shadow-md shadow-gray-300 hover:shadow-2xl transition-all duration-500 border border-gray-200 flex flex-col aspect-square max-w-[280px] md:aspect-auto md:min-h-[400px] md:max-w-[340px] mx-auto w-full">

                <div class="relative flex-grow flex items-center justify-center">

                    <model-viewer src="instrumentos3D/matraz (1).glb" alt="Modelo de matraz" auto-rotate camera-controls
                        ar class="w-full h-40 md:h-64 bg-transparent"></model-viewer>

                    <button onclick="toggleFullInfo(this)"
                        class="absolute top-0 right-0 w-10 h-10 bg-blue-600 text-white rounded-full font-bold shadow-lg hover:scale-110 transition-transform">

                        i

                    </button>

                </div>

                <div class="card-content mt-auto text-center pt-4">

                    <h3 class="text-xl md:text-3xl font-bold text-gray-900 mb-3">
                        Matraz
                    </h3>

                    <a href="https://mywebar.com/p/Project_1_bsnqy3x66o" target="_blank"
                        class="block py-4 bg-blue-600 text-white rounded-2xl font-bold text-xl">

                        Ver en RA

                    </a>

                </div>

                <div class="full-info hidden mt-auto text-center pt-4">

                    <h3 class="text-lg md:text-2xl font-bold text-gray-900 mb-4">
                        Matraz
                    </h3>

                    <div class="text-lg text-gray-600 space-y-2">
                        <p><strong>Uso:</strong> Mezclar y calentar líquidos</p>
                        <p><strong>Forma:</strong> Base ancha, cuello estrecho</p>
                        <p><strong>Material:</strong> Vidrio de borosilicato</p>
                    </div>

                </div>

            </div>

            <!-- Microscopio -->
            <div
                class="group bg-gray-50 rounded-[2rem] p-4 md:p-6 shadow-md shadow-gray-300 hover:shadow-2xl transition-all duration-500 border border-gray-200 flex flex-col aspect-square max-w-[280px] md:aspect-auto md:min-h-[400px] md:max-w-[340px] mx-auto w-full">

                <div class="relative flex-grow flex items-center justify-center">

                    <model-viewer src="instrumentos3D/microscopio.glb" alt="Modelo de Microscopio" auto-rotate
                        camera-controls ar class="w-full h-40 md:h-64 bg-transparent"></model-viewer>

                    <button onclick="toggleFullInfo(this)"
                        class="absolute top-0 right-0 w-10 h-10 bg-blue-600 text-white rounded-full font-bold shadow-lg hover:scale-110 transition-transform">

                        i

                    </button>

                </div>

                <div class="card-content mt-auto text-center pt-4">

                    <h3 class="text-xl md:text-3xl font-bold text-gray-900 mb-3">
                        Microscopio
                    </h3>

                    <a href="https://mywebar.com/p/Project_1_f3ia9uedar" target="_blank"
                        class="block py-4 bg-blue-600 text-white rounded-2xl font-bold text-xl">

                        Ver en RA

                    </a>

                </div>

                <div class="full-info hidden mt-auto text-center pt-4">

                    <h3 class="text-lg md:text-2xl font-bold text-gray-900 mb-4">
                        Microscopio
                    </h3>

                    <div class="text-lg text-gray-600 space-y-2">
                        <p><strong>Uso:</strong> Observar objetos muy pequeños</p>
                        <p><strong>Tipo:</strong> Óptico o electrónico</p>
                        <p><strong>Importancia:</strong> Análisis celular</p>
                    </div>

                </div>

            </div>

            <!-- Mortero con mano de porcelana -->
            <div
                class="group bg-gray-50 rounded-[2rem] p-4 md:p-6 shadow-md shadow-gray-300 hover:shadow-2xl transition-all duration-500 border border-gray-200 flex flex-col aspect-square max-w-[280px] md:aspect-auto md:min-h-[400px] md:max-w-[340px] mx-auto w-full">

                <div class="relative flex-grow flex items-center justify-center">

                    <model-viewer src="instrumentos3D/mortero_con_mano.glb"
                        alt="Modelo de Mortero con mano de porcelana" auto-rotate camera-controls ar
                        class="w-full h-40 md:h-64 bg-transparent"></model-viewer>

                    <button onclick="toggleFullInfo(this)"
                        class="absolute top-0 right-0 w-10 h-10 bg-blue-600 text-white rounded-full font-bold shadow-lg hover:scale-110 transition-transform">

                        i

                    </button>

                </div>

                <div class="card-content mt-auto text-center pt-4">

                    <h3 class="text-xl md:text-3xl font-bold text-gray-900 mb-3">
                        Mortero con mano
                    </h3>

                    <a href="https://mywebar.com/p/Project_2_weu37bf31" target="_blank"
                        class="block py-4 bg-blue-600 text-white rounded-2xl font-bold text-xl">

                        Ver en RA

                    </a>

                </div>

                <div class="full-info hidden mt-auto text-center pt-4">

                    <h3 class="text-lg md:text-2xl font-bold text-gray-900 mb-4">
                        Mortero con mano
                    </h3>

                    <div class="text-lg text-gray-600 space-y-2">
                        <p><strong>Uso:</strong> Triturar sustancias sólidas</p>
                        <p><strong>Material:</strong> Porcelana resistente</p>
                        <p><strong>Acción:</strong> Molienda manual</p>
                    </div>

                </div>

            </div>

            <!-- Pipeta -->
            <div
                class="group bg-gray-50 rounded-[2rem] p-4 md:p-6 shadow-md shadow-gray-300 hover:shadow-2xl transition-all duration-500 border border-gray-200 flex flex-col aspect-square max-w-[280px] md:aspect-auto md:min-h-[400px] md:max-w-[340px] mx-auto w-full">

                <div class="relative flex-grow flex items-center justify-center">

                    <model-viewer src="instrumentos3D/pipeta (1).glb" alt="Modelo de Pinzas para pipeta" auto-rotate
                        camera-controls ar class="w-full h-40 md:h-64 bg-transparent"></model-viewer>

                    <button onclick="toggleFullInfo(this)"
                        class="absolute top-0 right-0 w-10 h-10 bg-blue-600 text-white rounded-full font-bold shadow-lg hover:scale-110 transition-transform">

                        i

                    </button>

                </div>

                <div class="card-content mt-auto text-center pt-4">

                    <h3 class="text-xl md:text-3xl font-bold text-gray-900 mb-3">
                        Pipeta
                    </h3>

                    <a href="#" target="_blank" class="block py-4 bg-blue-600 text-white rounded-2xl font-bold text-xl">

                        Ver en RA

                    </a>

                </div>

                <div class="full-info hidden mt-auto text-center pt-4">

                    <h3 class="text-lg md:text-2xl font-bold text-gray-900 mb-4">
                        Pipeta
                    </h3>

                    <div class="text-lg text-gray-600 space-y-2">
                        <p><strong>Uso:</strong> Medir líquidos con precisión</p>
                        <p><strong>Tipo:</strong> Volumétrica o graduada</p>
                        <p><strong>Material:</strong> Vidrio o plástico</p>
                    </div>

                </div>

            </div>

            <!-- Placas de porcelana para reacciones -->
            <div
                class="group bg-gray-50 rounded-[2rem] p-4 md:p-6 shadow-md shadow-gray-300 hover:shadow-2xl transition-all duration-500 border border-gray-200 flex flex-col aspect-square max-w-[280px] md:aspect-auto md:min-h-[400px] md:max-w-[340px] mx-auto w-full">

                <div class="relative flex-grow flex items-center justify-center">

                    <model-viewer src="instrumentos3D/placas_de_porcelana_para_reacciones (2).glb"
                        alt="Modelo de Placas de porcelana para reacciones" auto-rotate camera-controls ar
                        class="w-full h-40 md:h-64 bg-transparent"></model-viewer>

                    <button onclick="toggleFullInfo(this)"
                        class="absolute top-0 right-0 w-10 h-10 bg-blue-600 text-white rounded-full font-bold shadow-lg hover:scale-110 transition-transform">

                        i

                    </button>

                </div>

                <div class="card-content mt-auto text-center pt-4">

                    <h3 class="text-xl md:text-3xl font-bold text-gray-900 mb-3">
                        Placas de porcelana
                    </h3>

                    <a href="img/QR/quimicaGen/matraz.jpg" target="_blank"
                        class="block py-4 bg-blue-600 text-white rounded-2xl font-bold text-xl">

                        Ver en RA

                    </a>

                </div>

                <div class="full-info hidden mt-auto text-center pt-4">

                    <h3 class="text-lg md:text-2xl font-bold text-gray-900 mb-4">
                        Placas de porcelana
                    </h3>

                    <div class="text-lg text-gray-600 space-y-2">
                        <p><strong>Uso:</strong> Reacciones a pequeña escala</p>
                        <p><strong>Forma:</strong> Múltiples cavidades</p>
                        <p><strong>Ventaja:</strong> Fácil visualización de color</p>
                    </div>

                </div>

            </div>

            <!-- Pinzas para matraces -->
            <div
                class="group bg-gray-50 rounded-[2rem] p-4 md:p-6 shadow-md shadow-gray-300 hover:shadow-2xl transition-all duration-500 border border-gray-200 flex flex-col aspect-square max-w-[280px] md:aspect-auto md:min-h-[400px] md:max-w-[340px] mx-auto w-full">

                <div class="relative flex-grow flex items-center justify-center">

                    <model-viewer src="instrumentos3D/pinzas_para_matraces (1).glb" alt="Modelo de Pinzas para matraces"
                        auto-rotate camera-controls ar class="w-full h-40 md:h-64 bg-transparent"></model-viewer>

                    <button onclick="toggleFullInfo(this)"
                        class="absolute top-0 right-0 w-10 h-10 bg-blue-600 text-white rounded-full font-bold shadow-lg hover:scale-110 transition-transform">

                        i

                    </button>

                </div>

                <div class="card-content mt-auto text-center pt-4">

                    <h3 class="text-xl md:text-3xl font-bold text-gray-900 mb-3">
                        Pinzas para matraces
                    </h3>

                    <a href="#" target="_blank" class="block py-4 bg-blue-600 text-white rounded-2xl font-bold text-xl">

                        Ver en RA

                    </a>

                </div>

                <div class="full-info hidden mt-auto text-center pt-4">

                    <h3 class="text-lg md:text-2xl font-bold text-gray-900 mb-4">
                        Pinzas para matraces
                    </h3>

                    <div class="text-lg text-gray-600 space-y-2">
                        <p><strong>Uso:</strong> Sujetar matraces calientes</p>
                        <p><strong>Material:</strong> Metal con aislante</p>
                        <p><strong>Seguridad:</strong> Previene quemaduras</p>
                    </div>

                </div>

            </div>

            <!-- Anillo_de_hierro -->
            <div
                class="group bg-gray-50 rounded-[2rem] p-4 md:p-6 shadow-md shadow-gray-300 hover:shadow-2xl transition-all duration-500 border border-gray-200 flex flex-col aspect-square max-w-[280px] md:aspect-auto md:min-h-[400px] md:max-w-[340px] mx-auto w-full">

                <div class="relative flex-grow flex items-center justify-center">

                    <model-viewer src="instrumentos3D/anillo_de_hierro (1).glb" alt="Modelo de Pinzas para matraces"
                        auto-rotate camera-controls ar class="w-full h-40 md:h-64 bg-transparent"></model-viewer>

                    <button onclick="toggleFullInfo(this)"
                        class="absolute top-0 right-0 w-10 h-10 bg-blue-600 text-white rounded-full font-bold shadow-lg hover:scale-110 transition-transform">

                        i

                    </button>

                </div>

                <div class="card-content mt-auto text-center pt-4">

                    <h3 class="text-xl md:text-3xl font-bold text-gray-900 mb-3">
                        Anillo de hierro
                    </h3>

                    <a href="#" target="_blank" class="block py-4 bg-blue-600 text-white rounded-2xl font-bold text-xl">

                        Ver en RA

                    </a>

                </div>

                <div class="full-info hidden mt-auto text-center pt-4">

                    <h3 class="text-lg md:text-2xl font-bold text-gray-900 mb-4">
                        Anillo de hierro
                    </h3>

                    <div class="text-lg text-gray-600 space-y-2">
                        <p><strong>Uso:</strong> Soporte para calentar</p>
                        <p><strong>Acople:</strong> Soporte universal</p>
                        <p><strong>Material:</strong> Hierro fundido</p>
                    </div>

                </div>

            </div>

            <!-- Pinzas para tubo de ensayo -->
            <div
                class="group bg-gray-50 rounded-[2rem] p-4 md:p-6 shadow-md shadow-gray-300 hover:shadow-2xl transition-all duration-500 border border-gray-200 flex flex-col aspect-square max-w-[280px] md:aspect-auto md:min-h-[400px] md:max-w-[340px] mx-auto w-full">

                <div class="relative flex-grow flex items-center justify-center">

                    <model-viewer src="instrumentos3D/pinzas_para_tubo_de_ensayo (1).glb"
                        alt="Modelo de Pinzas para tubo de ensayo" auto-rotate camera-controls ar
                        class="w-full h-40 md:h-64 bg-transparent"></model-viewer>

                    <button onclick="toggleFullInfo(this)"
                        class="absolute top-0 right-0 w-10 h-10 bg-blue-600 text-white rounded-full font-bold shadow-lg hover:scale-110 transition-transform">

                        i

                    </button>

                </div>

                <div class="card-content mt-auto text-center pt-4">

                    <h3 class="text-xl md:text-3xl font-bold text-gray-900 mb-3">
                        Pinzas para tubo
                    </h3>

                    <a href="#" target="_blank" class="block py-4 bg-blue-600 text-white rounded-2xl font-bold text-xl">

                        Ver en RA

                    </a>

                </div>

                <div class="full-info hidden mt-auto text-center pt-4">

                    <h3 class="text-lg md:text-2xl font-bold text-gray-900 mb-4">
                        Pinzas para tubo
                    </h3>

                    <div class="text-lg text-gray-600 space-y-2">
                        <p><strong>Uso:</strong> Sujetar tubos al calentar</p>
                        <p><strong>Material:</strong> Madera o metal</p>
                        <p><strong>Seguridad:</strong> Aísla del calor</p>
                    </div>

                </div>

            </div>
        </div>
    </main>

    <script>
        function toggleFullInfo(button) {
            const card = button.closest('.group');
            const content = card.querySelector('.card-content');
            const info = card.querySelector('.full-info');
            content.classList.toggle('hidden');
            info.classList.toggle('hidden');
        }
    </script>



    <div class="w-full px-14 md:px-36 py-12">
        <!-- Sección 1 -->
        <section class="border-b border-gray-300 py-4">
            <button
                class="w-full text-left flex justify-between items-center text-xl font-semibold text-gray-800 focus:outline-none"
                onclick="toggleAccordion(this)">
                ¿Para qué sirve un laboratorio de química general?
                <span class="transform transition-transform duration-300">+</span>
            </button>
            <div class="mt-2 hidden text-gray-700">
                <ul class="list-disc list-inside space-y-2">
                    <li>Aplicar los conceptos teóricos aprendidos en clase.</li>
                    <li>Realizar experimentos para observar reacciones químicas.</li>
                    <li>Aprender técnicas de medición y análisis químico.</li>
                    <li>Manejar sustancias químicas con seguridad.</li>
                    <li>Desarrollar habilidades en el uso de instrumentos de laboratorio.</li>
                </ul>
            </div>
        </section>

        <!-- Sección 2 -->
        <section class="border-b border-gray-300 py-4">
            <button
                class="w-full text-left flex justify-between items-center text-xl font-semibold text-gray-800 focus:outline-none"
                onclick="toggleAccordion(this)">
                ¿Qué áreas tiene un laboratorio de química general?
                <span class="transform transition-transform duration-300">+</span>
            </button>
            <div class="mt-2 hidden text-gray-700">
                <ul class="list-disc list-inside space-y-2">
                    <li><strong>Área de trabajo:</strong> Mesas con quemadores, reactivos y equipos de laboratorio.</li>
                    <li><strong>Área de almacenamiento:</strong> Donde se guardan reactivos y sustancias químicas.</li>
                    <li><strong>Área de seguridad:</strong> Incluye extintores, regaderas de emergencia y botiquín de
                        primeros auxilios.</li>
                    <li><strong>Campana de extracción:</strong> Para trabajar con gases tóxicos de manera segura.</li>
                </ul>
            </div>
        </section>

        <!-- Sección 3 -->
        <section class="border-b border-gray-300 py-4">
            <button
                class="w-full text-left flex justify-between items-center text-xl font-semibold text-gray-800 focus:outline-none"
                onclick="toggleAccordion(this)">
                Instrumentos y equipos comunes
                <span class="transform transition-transform duration-300">+</span>
            </button>
            <div class="mt-2 hidden text-gray-700">
                <ul class="list-disc list-inside space-y-2">
                    <li><strong>Vaso de precipitados:</strong> Para mezclar sustancias.</li>
                    <li><strong>Probetas y pipetas:</strong> Para medir líquidos con precisión.</li>
                    <li><strong>Matraz Erlenmeyer:</strong> Para calentar y agitar soluciones.</li>
                    <li><strong>Balanza analítica:</strong> Para pesar sustancias químicas.</li>
                    <li><strong>Mechero Bunsen:</strong> Para calentar muestras.</li>
                    <li><strong>Tubos de ensayo:</strong> Para realizar pequeñas reacciones químicas.</li>
                    <li><strong>Espátulas y pinzas:</strong> Para manipular sólidos y objetos calientes.</li>
                </ul>
            </div>
        </section>

        <!-- Sección 4 -->
        <section class="border-b border-gray-300 py-4">
            <button
                class="w-full text-left flex justify-between items-center text-xl font-semibold text-gray-800 focus:outline-none"
                onclick="toggleAccordion(this)">
                Normas de seguridad
                <span class="transform transition-transform duration-300">+</span>
            </button>
            <div class="mt-2 hidden text-gray-700">
                <ul class="list-disc list-inside space-y-2">
                    <li>Usar bata, guantes y gafas de seguridad.</li>
                    <li>No comer ni beber dentro del laboratorio.</li>
                    <li>Leer y seguir las instrucciones de cada experimento.</li>
                    <li>Manejar los reactivos con cuidado y conocer su peligrosidad.</li>
                    <li>En caso de accidente, reportarlo de inmediato al instructor.</li>
                </ul>
            </div>
        </section>

        <!-- Sección 5 -->
        <section class="border-b border-gray-300 py-4">
            <button
                class="w-full text-left flex justify-between items-center text-xl font-semibold text-gray-800 focus:outline-none"
                onclick="toggleAccordion(this)">
                Ejemplos de experimentos en un laboratorio de química general
                <span class="transform transition-transform duration-300">+</span>
            </button>
            <div class="mt-2 hidden text-gray-700">
                <ul class="list-disc list-inside space-y-2">
                    <li><strong>Reacción entre ácido y base:</strong> Formación de sal y agua.</li>
                    <li><strong>Prueba de llama:</strong> Identificación de elementos metálicos.</li>
                    <li><strong>Síntesis y purificación:</strong> Obtención de compuestos químicos.</li>
                    <li><strong>Electroquímica:</strong> Estudio de pilas y corrosión de metales.</li>
                    <li><strong>Titulaciones:</strong> Determinación de la concentración de una sustancia.</li>
                </ul>
            </div>
        </section>

        <!-- Sección 6 -->
        <section class="border-b border-gray-300 py-4">
            <button
                class="w-full text-left flex justify-between items-center text-xl font-semibold text-gray-800 focus:outline-none"
                onclick="toggleAccordion(this)">
                Resumen
                <span class="transform transition-transform duration-300">+</span>
            </button>
            <div class="mt-2 hidden text-gray-700">
                <p>Un laboratorio de química general es esencial para el aprendizaje práctico de la química. Permite a
                    los estudiantes experimentar y reforzar los conceptos teóricos de manera segura y controlada.</p>
            </div>
        </section>

    </div>

    <script>
        function toggleAccordion(button) {
            const content = button.nextElementSibling;
            content.classList.toggle('hidden');

            const icon = button.querySelector('span');
            icon.textContent = content.classList.contains('hidden') ? '+' : '−';
        }
    </script>



    <!-- FOOTER -->
    <footer class="text-white py-16 px-6 md:px-24" style="background-color: #5c886c;">
        <div class="max-w-4xl mx-auto grid grid-cols-2 gap-8 md:gap-16 items-start">
            <div class="text-center">
                <h4 class="text-xl md:text-3xl font-bold mb-4 md:mb-6">Contacto</h4>
                <p class="text-sm sm:text-base md:text-lg leading-relaxed">
                    Facebook: <a href="https://www.facebook.com/share/1AnZW5VRF9/" class="hover:underline">RALQ</a><br>
                    Correo: <a href="mailto:ralq.utsv@gmail.com" class="hover:underline">ralq.utsv@gmail.com</a><br>
                    Teléfono: <a href="tel:+123456789" class="hover:underline">+123 456 789</a>
                </p>
            </div>
            <div class="text-center">
                <h4 class="text-xl md:text-3xl font-bold mb-4 md:mb-6">Creadores</h4>
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

    <!-- Ventanas emergentes -->
    <!-- Modal -->
    <div id="instrumentModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2 id="modalTitle">Instrumento</h2>
            <img loading="lazy" id="modalImage" src="" alt="Instrument Image"
                style="max-width: 100%; height: auto; border-radius: 10px;">
            <p id="modalDescription">Descripción del instrumento.</p>
            <script src="js/qr-emergente.js"></script>
        </div>
    </div>
</body>

</html>