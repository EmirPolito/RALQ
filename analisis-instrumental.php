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
    <link rel="preload" as="image" href="img/laboratorios/labo-q-analisis.jpg">
</head>

<body>

    <!-- HEADER -->
    <header id="mainHeader"
        class="bg-white border-b border-gray-100 sticky top-0 z-50 shadow-sm transition-transform duration-300 ease-in-out">
        <div class="max-w-[1500px] mx-auto flex justify-between items-center gap-2 px-4 md:px-8 py-5 md:py-7 w-full">
            <!-- Logo -->
            <div class="flex items-center flex-shrink-0">
                <img src="img/logo_ralq_color-removebg-preview.png" alt="RALQ Logo" class="h-12 md:h-16 object-contain"
                    fetchpriority="high">
            </div>
            <!-- Back Button -->
            <div class="flex items-center">
                <a href="laboratorios.php" class="hover:scale-110 transition-transform flex items-center group">
                    <img src="img/logos/volver.png" alt="Volver" class="h-10 md:h-12 object-contain"
                        fetchpriority="high">
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

                <img src="img/laboratorios/labo-q-analisis.jpg" alt="Laboratorio de análisis"
                    class="relative rounded-2xl shadow-sm object-cover w-full h-80 md:h-96" fetchpriority="high">
            </div>
        </div>
        <!-- Texto -->
        <div class="w-full md:w-7/12 flex flex-col justify-center">
            <span class="text-blue-600 font-medium tracking-wider text-sm mb-2 uppercase">
                Laboratorio
            </span>

            <h2 class="text-3xl md:text-4xl font-bold text-slate-800 mb-4 tracking-tight">
                Análisis Instrumental
            </h2>

            <p class="text-slate-600 text-base md:text-2xl leading-relaxed mb-8 border-l-4 border-blue-500 pl-3">
                Aquí podrás visualizar los instrumentos químicos utilizados en el área
                de análisis instrumental, permitiendo conocer su funcionamiento,
                aplicación y uso dentro de procesos científicos y de laboratorio.
            </p>
        </div>
    </section>



    <main>
        <h2 style="text-align:center; margin-bottom: 2rem;">ELIGE UNO PARA VISUALIZARLO</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-5 gap-y-14">
            <!-- Autoclave -->
            <div
                class="group bg-gray-50 rounded-[2rem] p-4 md:p-6 shadow-md shadow-gray-300 hover:shadow-2xl transition-all duration-500 border border-gray-200 flex flex-col aspect-square max-w-[280px] md:aspect-auto md:min-h-[400px] md:max-w-[340px] mx-auto w-full">

                <div class="relative flex-grow flex items-center justify-center">

                    <model-viewer src="instrumentos3D/autoclave.glb" alt="Modelo de Autoclave" auto-rotate
                        camera-controls ar class="w-full h-40 md:h-64 bg-transparent"></model-viewer>

                    <button onclick="toggleFullInfo(this)"
                        class="absolute top-0 right-0 w-10 h-10  bg-blue-600 text-white rounded-full font-bold shadow-lg hover:scale-110 transition-transform">

                        i

                    </button>

                </div>

                <div class="card-content mt-auto text-center pt-4">

                    <h3 class="text-xl md:text-3xl font-bold text-gray-900 mb-3">
                        Autoclave
                    </h3>

                    <a href="img/QR/analisis/Autoclave.jpg" target="_blank"
                        class="block py-4 bg-blue-600 text-white rounded-2xl font-bold text-xl">

                        Ver en RA

                    </a>

                </div>

                <div class="full-info hidden mt-auto text-center pt-4">

                    <h3 class="text-lg md:text-2xl font-bold text-gray-900 mb-4">
                        Autoclave
                    </h3>

                    <div class="text-lg text-gray-600 space-y-2">
                        <p><strong>Función:</strong> Esterilización de materiales</p>
                        <p><strong>Método:</strong> Vapor a alta presión</p>
                    </div>

                </div>

            </div>

            <!-- Campana de extracción -->
            <div
                class="group bg-gray-50 rounded-[2rem] p-4 md:p-6 shadow-md shadow-gray-300 hover:shadow-2xl transition-all duration-500 border border-gray-200 flex flex-col aspect-square max-w-[280px] md:aspect-auto md:min-h-[400px] md:max-w-[340px] mx-auto w-full">

                <div class="relative flex-grow flex items-center justify-center">

                    <model-viewer src="instrumentos3D/campana_de_extraccion.glb" alt="Modelo de Campana de extracción"
                        auto-rotate camera-controls ar class="w-full h-40 md:h-64 bg-transparent"></model-viewer>

                    <button onclick="toggleFullInfo(this)"
                        class="absolute top-0 right-0 w-10 h-10 bg-blue-600 text-white rounded-full font-bold shadow-lg hover:scale-110 transition-transform">

                        i

                    </button>

                </div>

                <div class="card-content mt-auto text-center pt-4">

                    <h3 class="text-xl md:text-3xl font-bold text-gray-900 mb-3">
                        Campana de extracción
                    </h3>

                    <a href="img/QR/analisis/Campana.jpg" target="_blank"
                        class="block py-4 bg-blue-600 text-white rounded-2xl font-bold text-xl">

                        Ver en RA

                    </a>

                </div>

                <div class="full-info hidden mt-auto text-center pt-4">

                    <h3 class="text-lg md:text-2xl font-bold text-gray-900 mb-4">
                        Campana de extracción
                    </h3>

                    <div class="text-lg text-gray-600 space-y-2">
                        <p><strong>Función:</strong> Protección del usuario</p>
                        <p><strong>Acción:</strong> Extrae vapores tóxicos</p>
                    </div>

                </div>

            </div>

            <!-- Centrifugadora -->
            <div
                class="group bg-gray-50 rounded-[2rem] p-4 md:p-6 shadow-md shadow-gray-300 hover:shadow-2xl transition-all duration-500 border border-gray-200 flex flex-col aspect-square max-w-[280px] md:aspect-auto md:min-h-[400px] md:max-w-[340px] mx-auto w-full">

                <div class="relative flex-grow flex items-center justify-center">

                    <model-viewer src="instrumentos3D/centrifugadora.glb" alt="Modelo de Centrifugadora" auto-rotate
                        camera-controls ar class="w-full h-40 md:h-64 bg-transparent"></model-viewer>

                    <button onclick="toggleFullInfo(this)"
                        class="absolute top-0 right-0 w-10 h-10 bg-blue-600 text-white rounded-full font-bold shadow-lg hover:scale-110 transition-transform">

                        i

                    </button>

                </div>

                <div class="card-content mt-auto text-center pt-4">

                    <h3 class="text-xl md:text-3xl font-bold text-gray-900 mb-3">
                        Centrifugadora
                    </h3>

                    <a href="img/QR/analisis/Centrifugadora.jpg" target="_blank"
                        class="block py-4 bg-blue-600 text-white rounded-2xl font-bold text-xl">

                        Ver en RA

                    </a>

                </div>

                <div class="full-info hidden mt-auto text-center pt-4">

                    <h3 class="text-lg md:text-2xl font-bold text-gray-900 mb-4">
                        Centrifugadora
                    </h3>

                    <div class="text-lg text-gray-600 space-y-2">
                        <p><strong>Función:</strong> Separación de componentes</p>
                        <p><strong>Método:</strong> Fuerza centrífuga</p>
                    </div>

                </div>

            </div>

            <!-- Incubadora -->
            <div
                class="group bg-gray-50 rounded-[2rem] p-4 md:p-6 shadow-md shadow-gray-300 hover:shadow-2xl transition-all duration-500 border border-gray-200 flex flex-col aspect-square max-w-[280px] md:aspect-auto md:min-h-[400px] md:max-w-[340px] mx-auto w-full">

                <div class="relative flex-grow flex items-center justify-center">

                    <model-viewer src="instrumentos3D/incubadora.glb" alt="Modelo de Incubadora" auto-rotate
                        camera-controls ar class="w-full h-40 md:h-64 bg-transparent"></model-viewer>

                    <button onclick="toggleFullInfo(this)"
                        class="absolute top-0 right-0 w-10 h-10 bg-blue-600 text-white rounded-full font-bold shadow-lg hover:scale-110 transition-transform">

                        i

                    </button>

                </div>

                <div class="card-content mt-auto text-center pt-4">

                    <h3 class="text-xl md:text-3xl font-bold text-gray-900 mb-3">
                        Incubadora
                    </h3>

                    <a href="#" target="_blank" class="block py-4 bg-blue-600 text-white rounded-2xl font-bold text-xl">

                        Ver en RA

                    </a>

                </div>

                <div class="full-info hidden mt-auto text-center pt-4">

                    <h3 class="text-lg md:text-2xl font-bold text-gray-900 mb-4">
                        Incubadora
                    </h3>

                    <div class="text-lg text-gray-600 space-y-2">
                        <p><strong>Función:</strong> Crecimiento biológico</p>
                        <p><strong>Control:</strong> Temperatura y humedad</p>
                    </div>

                </div>

            </div>

            <!-- Placa calefactora -->
            <div
                class="group bg-gray-50 rounded-[2rem] p-4 md:p-6 shadow-md shadow-gray-300 hover:shadow-2xl transition-all duration-500 border border-gray-200 flex flex-col aspect-square max-w-[280px] md:aspect-auto md:min-h-[400px] md:max-w-[340px] mx-auto w-full">

                <div class="relative flex-grow flex items-center justify-center">

                    <model-viewer src="instrumentos3D/placa_calefactora.glb" alt="Modelo de Placa calefactora"
                        auto-rotate camera-controls ar class="w-full h-40 md:h-64 bg-transparent"></model-viewer>

                    <button onclick="toggleFullInfo(this)"
                        class="absolute top-0 right-0 w-10 h-10 bg-blue-600 text-white rounded-full font-bold shadow-lg hover:scale-110 transition-transform">

                        i

                    </button>

                </div>

                <div class="card-content mt-auto text-center pt-4">

                    <h3 class="text-xl md:text-3xl font-bold text-gray-900 mb-3">
                        Placa calefactora
                    </h3>

                    <a href="#" target="_blank" class="block py-4 bg-blue-600 text-white rounded-2xl font-bold text-xl">

                        Ver en RA

                    </a>

                </div>

                <div class="full-info hidden mt-auto text-center pt-4">

                    <h3 class="text-lg md:text-2xl font-bold text-gray-900 mb-4">
                        Placa calefactora
                    </h3>

                    <div class="text-lg text-gray-600 space-y-2">
                        <p><strong>Función:</strong> Calentar sustancias</p>
                        <p><strong>Distribución:</strong> Uniforme y controlada</p>
                    </div>

                </div>

            </div>

            <!-- Soporte universal -->
            <div
                class="group bg-gray-50 rounded-[2rem] p-4 md:p-6 shadow-md shadow-gray-300 hover:shadow-2xl transition-all duration-500 border border-gray-200 flex flex-col aspect-square max-w-[280px] md:aspect-auto md:min-h-[400px] md:max-w-[340px] mx-auto w-full">

                <div class="relative flex-grow flex items-center justify-center">

                    <model-viewer src="instrumentos3D/soporte_universal.glb" alt="Modelo de Soporte universal"
                        auto-rotate camera-controls ar class="w-full h-40 md:h-64 bg-transparent"></model-viewer>

                    <button onclick="toggleFullInfo(this)"
                        class="absolute top-0 right-0 w-10 h-10 bg-blue-600 text-white rounded-full font-bold shadow-lg hover:scale-110 transition-transform">

                        i

                    </button>

                </div>

                <div class="card-content mt-auto text-center pt-4">

                    <h3 class="text-xl md:text-3xl font-bold text-gray-900 mb-3">
                        Soporte universal
                    </h3>

                    <a href="#" target="_blank" class="block py-4 bg-blue-600 text-white rounded-2xl font-bold text-xl">

                        Ver en RA

                    </a>

                </div>

                <div class="full-info hidden mt-auto text-center pt-4">

                    <h3 class="text-lg md:text-2xl font-bold text-gray-900 mb-4">
                        Soporte universal
                    </h3>

                    <div class="text-lg text-gray-600 space-y-2">
                        <p><strong>Función:</strong> Sujetar instrumentos</p>
                        <p><strong>Estructura:</strong> Base metálica y varilla</p>
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




    <div class="w-full px-14 md:px-36  py-12">
        <!-- Sección 1 -->
        <section class="border-b border-gray-300 py-4">
            <button
                class="w-full text-left flex justify-between items-center text-xl font-semibold text-gray-800 focus:outline-none"
                onclick="toggleAccordion(this)">
                Objetivos del laboratorio de análisis instrumental
                <span class="transform transition-transform duration-300">+</span>
            </button>
            <div class="mt-2 hidden text-gray-700">
                <ul class="list-disc list-inside space-y-2">
                    <li>Determinar la composición química de una muestra.</li>
                    <li>Identificar compuestos desconocidos.</li>
                    <li>Cuantificar la concentración de sustancias en diferentes matrices.</li>
                    <li>Estudiar propiedades físicas y químicas de los materiales.</li>
                    <li>Controlar la calidad de productos en industrias como la farmacéutica, alimentaria y ambiental.
                    </li>
                </ul>
            </div>
        </section>


        <!-- Sección 2 -->
        <section class="border-b border-gray-300 py-4">
            <button
                class="w-full text-left flex justify-between items-center text-xl font-semibold text-gray-800 focus:outline-none"
                onclick="toggleAccordion(this)">
                Áreas de un laboratorio de análisis instrumental
                <span class="transform transition-transform duration-300">+</span>
            </button>
            <div class="mt-2 hidden text-gray-700">
                <ul class="list-disc list-inside space-y-2">
                    <li><strong>Zona de preparación de muestras:</strong> Donde las muestras se procesan antes del
                        análisis.</li>
                    <li><strong>Zona de análisis:</strong> Espacio donde se encuentran los equipos de medición.</li>
                    <li><strong>Área de almacenamiento:</strong> Para reactivos y materiales.</li>
                    <li><strong>Zona de seguridad:</strong> Con duchas de emergencia, extintores y botiquín.</li>
                </ul>
            </div>
        </section>

        <!-- Sección 3 -->
        <section class="border-b border-gray-300 py-4">
            <button
                class="w-full text-left flex justify-between items-center text-xl font-semibold text-gray-800 focus:outline-none"
                onclick="toggleAccordion(this)">
                Técnicas e instrumentos más utilizados
                <span class="transform transition-transform duration-300">+</span>
            </button>
            <div class="mt-2 hidden text-gray-700 space-y-4">

                <div>
                    <h3 class="text-lg font-semibold">Espectroscopia – Analiza la interacción de la luz con la materia.
                    </h3>
                    <ul class="list-disc list-inside space-y-2">
                        <li><strong>UV-Vis:</strong> Determina concentraciones de sustancias en soluciones.</li>
                        <li><strong>Infrarrojo (FTIR):</strong> Identifica grupos funcionales en moléculas orgánicas.
                        </li>
                        <li><strong>Espectroscopia de absorción atómica (AAS):</strong> Detecta metales en muestras
                            líquidas.</li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-lg font-semibold">Cromatografía – Separa e identifica componentes de una mezcla.
                    </h3>
                    <ul class="list-disc list-inside space-y-2">
                        <li><strong>Cromatografía de gases (GC):</strong> Para compuestos volátiles como hidrocarburos.
                        </li>
                        <li><strong>Cromatografía líquida de alta resolución (HPLC):</strong> Para fármacos y proteínas.
                        </li>
                    </ul>
                </div>

            </div>
        </section>

        <!-- Sección 4 -->
        <section class="border-b border-gray-300 py-4">
            <button
                class="w-full text-left flex justify-between items-center text-xl font-semibold text-gray-800 focus:outline-none"
                onclick="toggleAccordion(this)">
                Normas de seguridad en un laboratorio
                <span class="transform transition-transform duration-300">+</span>
            </button>
            <div class="mt-2 hidden text-gray-700">
                <ul class="list-disc list-inside space-y-2">
                    <li>Usar bata, guantes y gafas de seguridad.</li>
                    <li>Manipular reactivos y equipos con precaución.</li>
                    <li>Calibrar los instrumentos antes de cada análisis.</li>
                    <li>Documentar y etiquetar correctamente las muestras.</li>
                    <li>Mantener los equipos en condiciones óptimas y limpias.</li>
                </ul>
            </div>
        </section>

        <!-- Sección 5 -->
        <section class="border-b border-gray-300 py-4">
            <button
                class="w-full text-left flex justify-between items-center text-xl font-semibold text-gray-800 focus:outline-none"
                onclick="toggleAccordion(this)">
                Ejemplos de aplicaciones en distintos sectores
                <span class="transform transition-transform duration-300">+</span>
            </button>
            <div class="mt-2 hidden text-gray-700">
                <ul class="list-disc list-inside space-y-2">
                    <li><strong>Farmacéutica:</strong> Análisis de medicamentos para verificar su pureza y
                        concentración.</li>
                    <li><strong>Alimentos:</strong> Detección de contaminantes y control de calidad en productos.</li>
                    <li><strong>Ambiental:</strong> Análisis de agua, suelo y aire para detectar contaminantes.</li>
                    <li><strong>Forense:</strong> Identificación de sustancias en investigaciones criminales.</li>
                    <li><strong>Nanotecnología:</strong> Caracterización de materiales avanzados.</li>
                </ul>
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