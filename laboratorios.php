<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Cristian Barraza, Irving Esteban, Emir Polito">
    <title>RALQ - Laboratorios</title>

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
    <style>
        header {
            display: block !important;
            background-color: white !important;
            padding: 0 !important;
            gap: 0 !important;
        }
    </style>
    <link rel="preload" as="image" href="img/laboratorios/labodesc.jpg">
</head>

<body class="bg-gray-50 min-h-screen flex flex-col font-['Krub']">
    <!-- HEADER -->
    <header id="mainHeader"
        class="bg-white border-b border-gray-100 sticky top-0 z-50 shadow-sm transition-transform duration-300 ease-in-out">
        <div class="max-w-[1500px] mx-auto flex justify-between items-center gap-2 px-4 md:px-8 py-5 md:py-7 w-full">
            <!-- Logo -->
            <div class="flex items-center flex-shrink-0">
                <img src="img/logo_ralq_color-removebg-preview.png" alt="RALQ Logo" class="h-12 md:h-16 object-contain">
            </div>

            <!-- Back Button -->
            <div class="flex items-center">
                <a href="menu.php" class="hover:scale-110 transition-transform flex items-center group">
                    <img src="img/logos/volver.png" alt="Volver" class="h-10 md:h-12 object-contain">
                </a>
            </div>
        </div>
    </header>


    <section class="relative overflow-hidden min-h-[240px] md:min-h-[470px] flex items-end md:items-start">
        <!-- Imagen de fondo -->
        <img src="img/laboratorios/labodesc.jpg" alt="Laboratorio de análisis"
            class="absolute inset-0 w-full h-full object-cover object-center">

        <!-- Overlay oscuro -->
        <div class="absolute inset-0 bg-teal-900/65"></div>

        <!-- Contenido -->
        <div class="relative z-10 w-full px-2.5 md:px-16 pb-10 pt-28 md:pb-0 md:pt-56">

            <div class="max-w-5xl mx-auto md:text-center">

                <span class="inline-block text-white font-normal tracking-[0.18em] uppercase text-xs md:text-lg mb-3">
                    Área de Laboratorios
                </span>

                <h2 class="text-3xl sm:text-4xl md:text-6xl font-bold text-white leading-tight mb-5">
                    Laboratorios Químicos
                </h2>

                <p
                    class="text-white text-base font-normal md:text-2xl leading-relaxed border-l-4 md:border-0 border-white pl-3 md:pl-0">
                    Espacios de experimentación y descubrimiento donde la ciencia cobra vida. Explora nuestras
                    instalaciones virtuales y domina los protocolos de seguridad.
                </p>

            </div>
        </div>
    </section>

    <!-- Content -->
    <main class="flex-grow py-24 px-10 bg-white">

        <div class="max-w-[1200px] mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 md:gap-12 lg:gap-20">

            <!-- Química General -->
            <a href="quimica-general.php"
                class="group relative bg-white rounded-[3rem] overflow-hidden shadow-xl hover:shadow-2xl transition-all duration-500 hover:-translate-y-4">
                <img src="img/laboratorios/labo1.png" alt="Química General"
                    class="w-full h-[400px] object-cover group-hover:scale-102 transition-transform duration-700"
                    loading="lazy" decoding="async">
                <div
                    class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent flex flex-col justify-end p-10">
                    <h3 class="text-3xl font-bold text-white mb-2">Química General</h3>
                    <p class="text-teal-300 font-medium uppercase tracking-widest text-sm">Entrar al Laboratorio</p>
                </div>
            </a>

            <!-- Análisis Instrumental -->
            <a href="analisis-instrumental.php"
                class="group relative bg-white rounded-[3rem] overflow-hidden shadow-xl hover:shadow-2xl transition-all duration-500 hover:-translate-y-4">
                <img src="img/laboratorios/labo2.png" alt="Análisis Instrumental"
                    class="w-full h-[400px] object-cover group-hover:scale-102 transition-transform duration-700"
                    loading="lazy" decoding="async">
                <div
                    class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent flex flex-col justify-end p-10">
                    <h3 class="text-3xl font-bold text-white mb-2">Análisis Instrumental</h3>
                    <p class="text-teal-300 font-medium uppercase tracking-widest text-sm">Explorar Instrumentos</p>
                </div>
            </a>

            <!-- Plantas Químicas -->
            <a href="plantas-quimicas.php"
                class="group relative bg-white rounded-[3rem] overflow-hidden shadow-xl hover:shadow-2xl transition-all duration-500 hover:-translate-y-4">
                <img src="img/laboratorios/labo3.png" alt="Plantas Químicas"
                    class="w-full h-[400px] object-cover group-hover:scale-102 transition-transform duration-700"
                    loading="lazy" decoding="async">
                <div
                    class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent flex flex-col justify-end p-10">
                    <h3 class="text-3xl font-bold text-white mb-2">Plantas Químicas</h3>
                    <p class="text-teal-300 font-medium uppercase tracking-widest text-sm">Visitar Plantas</p>
                </div>
            </a>

        </div>
    </main>
    <!-- FAQ Accordion -->
    <section class="py-24 bg-gray-50 px-6">
        <div class="max-w-7xl mx-auto space-y-6">
            <h2 class="text-4xl font-bold text-gray-900 mb-12 text-center uppercase">Información Detallada</h2>

            <!-- Question 1 -->
            <div class="bg-white rounded-3xl shadow-sm border border-gray-100 overflow-hidden">
                <button class="w-full px-8 py-6 text-left flex justify-between items-center group"
                    onclick="toggleAccordion(this)">
                    <span class="text-2xl font-bold text-gray-800 group-hover:text-teal-600 transition-colors">¿Qué
                        normas de seguridad se deben seguir?</span>
                    <span class="text-3xl text-teal-500 transform transition-transform duration-300">+</span>
                </button>
                <div class="hidden px-8 pb-8 text-xl text-gray-600 leading-relaxed">
                    <ul class="list-disc list-inside space-y-2">
                        <li>Uso obligatorio de bata blanca de algodón.</li>
                        <li>No ingerir alimentos ni bebidas dentro del área.</li>
                        <li>Identificar las salidas de emergencia y estaciones de lavado.</li>
                    </ul>
                </div>
            </div>

            <!-- Question 2 -->
            <div class="bg-white rounded-3xl shadow-sm border border-gray-100 overflow-hidden">
                <button class="w-full px-8 py-6 text-left flex justify-between items-center group"
                    onclick="toggleAccordion(this)">
                    <span class="text-2xl font-bold text-gray-800 group-hover:text-teal-600 transition-colors">¿Cómo
                        acceder a los laboratorios virtuales?</span>
                    <span class="text-3xl text-teal-500 transform transition-transform duration-300">+</span>
                </button>
                <div class="hidden px-8 pb-8 text-xl text-gray-600 leading-relaxed">
                    <p>Puedes acceder a través de los enlaces directos en la sección superior. Cada laboratorio cuenta
                        con una guía interactiva para facilitar la navegación.</p>
                </div>
            </div>

            <!-- Question 3 -->
            <div class="bg-white rounded-3xl shadow-sm border border-gray-100 overflow-hidden">
                <button class="w-full px-8 py-6 text-left flex justify-between items-center group"
                    onclick="toggleAccordion(this)">
                    <span class="text-2xl font-bold text-gray-800 group-hover:text-teal-600 transition-colors">¿Qué
                        equipos están disponibles?</span>
                    <span class="text-3xl text-teal-500 transform transition-transform duration-300">+</span>
                </button>
                <div class="hidden px-8 pb-8 text-xl text-gray-600 leading-relaxed">
                    <p>Contamos con espectrofotómetros, balanzas analíticas de alta precisión, reactores químicos y
                        equipos de destilación avanzada, todos representados fielmente en el entorno virtual.</p>
                </div>
            </div>

            <!-- Question 4 -->
            <div class="bg-white rounded-3xl shadow-sm border border-gray-100 overflow-hidden">
                <button class="w-full px-8 py-6 text-left flex justify-between items-center group"
                    onclick="toggleAccordion(this)">
                    <span class="text-2xl font-bold text-gray-800 group-hover:text-teal-600 transition-colors">¿Es
                        necesario equipo de protección personal (EPP)?</span>
                    <span class="text-3xl text-teal-500 transform transition-transform duration-300">+</span>
                </button>
                <div class="hidden px-8 pb-8 text-xl text-gray-600 leading-relaxed">
                    <p>Sí, aunque sea un entorno virtual, fomentamos la cultura del EPP: lentes de seguridad, guantes de
                        nitrilo y calzado cerrado son fundamentales en la práctica real.</p>
                </div>
            </div>

            <!-- Question 5 -->
            <div class="bg-white rounded-3xl shadow-sm border border-gray-100 overflow-hidden">
                <button class="w-full px-8 py-6 text-left flex justify-between items-center group"
                    onclick="toggleAccordion(this)">
                    <span class="text-2xl font-bold text-gray-800 group-hover:text-teal-600 transition-colors">¿Cómo se
                        reportan incidentes?</span>
                    <span class="text-3xl text-teal-500 transform transition-transform duration-300">+</span>
                </button>
                <div class="hidden px-8 pb-8 text-xl text-gray-600 leading-relaxed">
                    <p>Cualquier derrame o anomalía debe ser reportada inmediatamente al encargado del laboratorio
                        siguiendo el protocolo de seguridad establecido en la bitácora.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="text-white py-16 px-6 md:px-24" style="background-color: #434e4e;">
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
    <script>
        function toggleAccordion(button) {
            const content = button.nextElementSibling;
            content.classList.toggle('hidden');
            const icon = button.querySelector('span:last-child');
            icon.textContent = content.classList.contains('hidden') ? '+' : '−';
            icon.style.transform = content.classList.contains('hidden') ? 'rotate(0deg)' : 'rotate(180deg)';
        }
    </script>
    <script src="js/animaciones-index.js"></script>
</body>

</html>