<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Cristian Barraza, Irving Esteban, Emir Polito">
    <title>RALQ - Estructuras Moleculares</title>

    <link rel="stylesheet" href="src/output.css">
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
    <!-- Preload hero image -->
    <link rel="preload" as="image" href="img/laboratorios/Moleculas.jpg">
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

    <section
        class="relative flex flex-col-reverse md:flex-row items-center gap-0 md:gap-10 p-8 md:p-16 bg-slate-50 border border-slate-200 rounded-3xl overflow-hidden">
        <!-- Imagen -->
        <div class="w-full md:w-5/12">
            <div class="relative group">
                <div
                    class="absolute -inset-1 bg-gradient-to-r from-blue-600 to-cyan-500 rounded-2xl blur opacity-25 group-hover:opacity-40 transition duration-1000">
                </div>

                <img src="img/laboratorios/Moleculas.jpg" alt="Laboratorio de análisis"
                    class="relative rounded-2xl shadow-sm object-cover w-full h-80 md:h-96">
            </div>
        </div>
        <!-- Texto -->
        <div class="w-full md:w-7/12 flex flex-col justify-center">
            <span class="text-blue-600 font-medium tracking-wider text-sm mb-2 uppercase">
                Area de
            </span>

            <h2 class="text-3xl md:text-4xl font-bold text-slate-800 mb-4 tracking-tight">
                Estructuras Moleculares
            </h2>

            <p class="text-slate-600 text-base md:text-2xl leading-relaxed mb-8 border-l-4 border-blue-500 pl-3">
                Explora la disposición atómica y los enlaces químicos en tres dimensiones para comprender la esencia de
                la materia.
            </p>
        </div>
    </section>

    <!-- Content -->
    <main class="flex-grow py-20 px-6 bg-white">
        <div class="max-w-[1500px] mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold text-center text-gray-900 mb-16 uppercase tracking-wider">Elige
                una para visualizarla</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-5 gap-y-14">

                <!-- Agua -->
                <div
                    class="group bg-gray-50 rounded-[2rem] p-4 md:p-6 shadow-md shadow-gray-300 hover:shadow-2xl transition-all duration-500 border border-gray-200 flex flex-col aspect-square max-w-[280px] md:aspect-auto md:min-h-[400px] md:max-w-[340px] mx-auto w-full">

                    <div class="relative flex-grow flex items-center justify-center">

                        <model-viewer src="modelos/agua.glb" alt="Modelo de agua" auto-rotate camera-controls ar
                            class="w-full h-40 md:h-64 bg-transparent"></model-viewer>

                        <button onclick="toggleFullInfo(this)"
                            class="absolute top-0 right-0 w-10 h-10 bg-blue-600 text-white rounded-full font-bold shadow-lg hover:scale-110 transition-transform">

                            i

                        </button>

                    </div>

                    <div class="card-content mt-auto text-center pt-4">

                        <h3 class="text-xl md:text-3xl font-bold text-gray-900 mb-3">
                            Agua (H₂O)
                        </h3>

                        <a href="https://mywebar.com/p/Project_2_y08cdw22dd" target="_blank"
                            class="block py-4 bg-blue-600 text-white rounded-2xl font-bold text-xl">

                            Ver en RA

                        </a>

                    </div>

                    <div class="full-info hidden mt-auto text-center pt-4">

                        <h3 class="text-lg md:text-2xl font-bold text-gray-900 mb-4">
                            Agua (H₂O)
                        </h3>

                        <div class="text-lg text-gray-600 space-y-2">
                            <p><strong>Fórmula:</strong> H₂O</p>
                            <p><strong>Estado:</strong> Líquido a 25°C</p>
                            <p><strong>Peso molecular:</strong> 18.015 g/mol</p>
                        </div>

                    </div>

                </div>

                <!-- Benciletanol -->
                <div
                    class="group bg-gray-50 rounded-[2rem] p-4 md:p-6 shadow-md shadow-gray-300 hover:shadow-2xl transition-all duration-500 border border-gray-200 flex flex-col aspect-square max-w-[280px] md:aspect-auto md:min-h-[400px] md:max-w-[340px] mx-auto w-full">

                    <div class="relative flex-grow flex items-center justify-center">

                        <model-viewer src="modelos/benciletanol.glb" alt="Benciletanol" auto-rotate camera-controls ar
                            class="w-full h-40 md:h-64 bg-transparent"></model-viewer>

                        <button onclick="toggleFullInfo(this)"
                            class="absolute top-0 right-0 w-10 h-10 bg-blue-600 text-white rounded-full font-bold shadow-lg hover:scale-110 transition-transform">

                            i

                        </button>

                    </div>

                    <div class="card-content mt-auto text-center pt-4">

                        <h3 class="text-xl md:text-3xl font-bold text-gray-900 mb-3">
                            Benciletanol
                        </h3>

                        <a href="https://mywebar.com/p/Project_2_y08cdw22dd" target="_blank"
                            class="block py-4 bg-blue-600 text-white rounded-2xl font-bold text-xl hover:bg-teal-600 transition-all shadow-lg hover:shadow-teal-200">

                            Ver en RA

                        </a>

                    </div>

                    <div class="full-info hidden mt-auto text-center pt-4">

                        <h3 class="text-lg md:text-2xl font-bold text-gray-900 mb-4">
                            Benciletanol
                        </h3>

                        <div class="text-lg text-gray-600 space-y-2">
                            <p><strong>Fórmula:</strong> C₈H₁₀O</p>
                            <p><strong>Estado:</strong> Líquido</p>
                            <p><strong>Peso molecular:</strong> 122.16 g/mol</p>
                        </div>

                    </div>

                </div>

                <!-- Cafeína -->
                <div
                    class="group bg-gray-50 rounded-[2rem] p-4 md:p-6 shadow-md shadow-gray-300 hover:shadow-2xl transition-all duration-500 border border-gray-200 flex flex-col aspect-square max-w-[280px] md:aspect-auto md:min-h-[400px] md:max-w-[340px] mx-auto w-full">

                    <div class="relative flex-grow flex items-center justify-center">

                        <model-viewer src="modelos/cafeina.glb" alt="Cafeína" auto-rotate camera-controls ar
                            class="w-full h-40 md:h-64 bg-transparent"></model-viewer>

                        <button onclick="toggleFullInfo(this)"
                            class="absolute top-0 right-0 w-10 h-10 bg-blue-600 text-white rounded-full font-bold shadow-lg hover:scale-110 transition-transform">

                            i

                        </button>

                    </div>

                    <div class="card-content mt-auto text-center pt-4">

                        <h3 class="text-xl md:text-3xl font-bold text-gray-900 mb-3">
                            Cafeína
                        </h3>

                        <a href="https://mywebar.com/p/Project_0_lui6nsi9y3" target="_blank"
                            class="block py-4 bg-blue-600 text-white rounded-2xl font-bold text-xl hover:bg-teal-600 transition-all shadow-lg hover:shadow-teal-200">

                            Ver en RA

                        </a>

                    </div>

                    <div class="full-info hidden mt-auto text-center pt-4">

                        <h3 class="text-lg md:text-2xl font-bold text-gray-900 mb-4">
                            Cafeína
                        </h3>

                        <div class="text-lg text-gray-600 space-y-2">
                            <p><strong>Fórmula:</strong> C₈H₁₀N₄O₂</p>
                            <p><strong>Estado:</strong> Sólido</p>
                            <p><strong>Peso molecular:</strong> 194.19 g/mol</p>
                        </div>

                    </div>


                </div>
                <!-- Metano -->
                <div
                    class="group bg-gray-50 rounded-[2rem] p-4 md:p-6 shadow-md shadow-gray-300 hover:shadow-2xl transition-all duration-500 border border-gray-200 flex flex-col aspect-square max-w-[280px] md:aspect-auto md:min-h-[400px] md:max-w-[340px] mx-auto w-full">

                    <div class="relative flex-grow flex items-center justify-center">

                        <model-viewer src="modelos/metano.glb" alt="Metano" auto-rotate camera-controls ar
                            class="w-full h-40 md:h-64 bg-transparent"></model-viewer>

                        <button onclick="toggleFullInfo(this)"
                            class="absolute top-0 right-0 w-10 h-10 bg-blue-600 text-white rounded-full font-bold shadow-lg hover:scale-110 transition-transform">

                            i

                        </button>

                    </div>

                    <div class="card-content mt-auto text-center pt-4">

                        <h3 class="text-xl md:text-3xl font-bold text-gray-900 mb-3">
                            Metano
                        </h3>

                        <a href="https://mywebar.com/p/Project_2_y08cdw22dd" target="_blank"
                            class="block py-4 bg-blue-600 text-white rounded-2xl font-bold text-xl">

                            Ver en RA

                        </a>

                    </div>

                    <div class="full-info hidden mt-auto text-center pt-4">

                        <h3 class="text-lg md:text-2xl font-bold text-gray-900 mb-4">
                            Metano
                        </h3>

                        <div class="text-lg text-gray-600 space-y-2">
                            <p><strong>Fórmula:</strong> CH₄</p>
                            <p><strong>Estado:</strong> Gas</p>
                            <p><strong>Peso molecular:</strong> 16.04 g/mol</p>
                        </div>

                    </div>

                </div>

                <!-- Fenol -->
                <div
                    class="group bg-gray-50 rounded-[2rem] p-4 md:p-6 shadow-md shadow-gray-300 hover:shadow-2xl transition-all duration-500 border border-gray-200 flex flex-col aspect-square max-w-[280px] md:aspect-auto md:min-h-[400px] md:max-w-[340px] mx-auto w-full">

                    <div class="relative flex-grow flex items-center justify-center">

                        <model-viewer src="modelos/fenol (1).glb" alt="Fenol" auto-rotate camera-controls ar
                            class="w-full h-40 md:h-64 bg-transparent"></model-viewer>

                        <button onclick="toggleFullInfo(this)"
                            class="absolute top-0 right-0 w-10 h-10 bg-blue-600 text-white rounded-full font-bold shadow-lg hover:scale-110 transition-transform">

                            i

                        </button>

                    </div>

                    <div class="card-content mt-auto text-center pt-4">

                        <h3 class="text-xl md:text-3xl font-bold text-gray-900 mb-3">
                            Fenol
                        </h3>

                        <a href="https://mywebar.com/p/Project_2_y08cdw22dd" target="_blank"
                            class="block py-4 bg-blue-600 text-white rounded-2xl font-bold text-xl hover:bg-teal-600 transition-all shadow-lg hover:shadow-teal-200">

                            Ver en RA

                        </a>

                    </div>

                    <div class="full-info hidden mt-auto text-center pt-4">

                        <h3 class="text-lg md:text-2xl font-bold text-gray-900 mb-4">
                            Fenol
                        </h3>

                        <div class="text-lg text-gray-600 space-y-2">
                            <p><strong>Fórmula:</strong> C₆H₆O</p>
                            <p><strong>Estado:</strong> Sólido</p>
                            <p><strong>Peso molecular:</strong> 94.11 g/mol</p>
                        </div>

                    </div>

                </div>

                <!-- Glicerol -->
                <div
                    class="group bg-gray-50 rounded-[2rem] p-4 md:p-6 shadow-md shadow-gray-300 hover:shadow-2xl transition-all duration-500 border border-gray-200 flex flex-col aspect-square max-w-[280px] md:aspect-auto md:min-h-[400px] md:max-w-[340px] mx-auto w-full">

                    <div class="relative flex-grow flex items-center justify-center">

                        <model-viewer src="modelos/glicerol (1).glb" alt="Glicerol" auto-rotate camera-controls ar
                            class="w-full h-40 md:h-64 bg-transparent"></model-viewer>

                        <button onclick="toggleFullInfo(this)"
                            class="absolute top-0 right-0 w-10 h-10 bg-blue-600 text-white rounded-full font-bold shadow-lg hover:scale-110 transition-transform">

                            i

                        </button>

                    </div>

                    <div class="card-content mt-auto text-center pt-4">

                        <h3 class="text-xl md:text-3xl font-bold text-gray-900 mb-3">
                            Glicerol
                        </h3>

                        <a href="https://mywebar.com/p/Project_2_y08cdw22dd" target="_blank"
                            class="block py-4 bg-blue-600 text-white rounded-2xl font-bold text-xl">

                            Ver en RA

                        </a>

                    </div>

                    <div class="full-info hidden mt-auto text-center pt-4">

                        <h3 class="text-lg md:text-2xl font-bold text-gray-900 mb-4">
                            Glicerol
                        </h3>

                        <div class="text-lg text-gray-600 space-y-2">
                            <p><strong>Fórmula:</strong> C₃H₈O₃</p>
                            <p><strong>Estado:</strong> Líquido</p>
                            <p><strong>Peso molecular:</strong> 92.09 g/mol</p>
                        </div>

                    </div>

                </div>

            </div>
    </main>

    <!-- FAQ Accordion -->
    <section class="py-24 bg-gray-50 px-14">
        <div class="max-w-8xl mx-auto space-y-6">
            <h2 class="text-4xl font-bold text-gray-900 mb-12 text-center uppercase">Información Detallada</h2>

            <!-- Question 1 -->
            <div class="bg-white rounded-3xl shadow-sm border border-gray-100 overflow-hidden">
                <button class="w-full px-8 py-6 text-left flex justify-between items-center group"
                    onclick="toggleAccordion(this)">
                    <span class="text-2xl font-bold text-gray-800 group-hover:text-teal-600 transition-colors">¿Qué son
                        las estructuras moleculares?</span>
                    <span class="text-3xl text-teal-500 transform transition-transform duration-300">+</span>
                </button>
                <div class="hidden px-8 pb-8 text-xl text-gray-600 leading-relaxed">
                    <ul class="list-disc list-inside space-y-2">
                        <li>Representaciones en 2D o 3D de cómo se organizan los átomos.</li>
                        <li>Muestran enlaces químicos, ángulos y geometría molecular.</li>
                        <li>Ayudan a comprender propiedades físicas y químicas.</li>
                    </ul>
                </div>
            </div>

            <!-- Question 2 -->
            <div class="bg-white rounded-3xl shadow-sm border border-gray-100 overflow-hidden">
                <button class="w-full px-8 py-6 text-left flex justify-between items-center group"
                    onclick="toggleAccordion(this)">
                    <span
                        class="text-2xl font-bold text-gray-800 group-hover:text-teal-600 transition-colors">Importancia
                        de la visualización 3D</span>
                    <span class="text-3xl text-teal-500 transform transition-transform duration-300">+</span>
                </button>
                <div class="hidden px-8 pb-8 text-xl text-gray-600 leading-relaxed">
                    <p>La visualización 3D permite entender la estereoquímica y cómo la forma de una molécula determina
                        su función biológica o reactividad química.</p>
                </div>
            </div>

            <!-- Question 3 -->
            <div class="bg-white rounded-3xl shadow-sm border border-gray-100 overflow-hidden">
                <button class="w-full px-8 py-6 text-left flex justify-between items-center group"
                    onclick="toggleAccordion(this)">
                    <span class="text-2xl font-bold text-gray-800 group-hover:text-teal-600 transition-colors">¿Cómo
                        afectan los enlaces a la forma molecular?</span>
                    <span class="text-3xl text-teal-500 transform transition-transform duration-300">+</span>
                </button>
                <div class="hidden px-8 pb-8 text-xl text-gray-600 leading-relaxed">
                    <p>Los enlaces (simples, dobles o triples) y los pares de electrones no compartidos crean
                        repulsiones que definen los ángulos específicos, siguiendo la teoría de repulsión de pares
                        electrónicos de la capa de valencia (VSEPR).</p>
                </div>
            </div>

            <!-- Question 4 -->
            <div class="bg-white rounded-3xl shadow-sm border border-gray-100 overflow-hidden">
                <button class="w-full px-8 py-6 text-left flex justify-between items-center group"
                    onclick="toggleAccordion(this)">
                    <span class="text-2xl font-bold text-gray-800 group-hover:text-teal-600 transition-colors">¿Qué es
                        la polaridad molecular?</span>
                    <span class="text-3xl text-teal-500 transform transition-transform duration-300">+</span>
                </button>
                <div class="hidden px-8 pb-8 text-xl text-gray-600 leading-relaxed">
                    <p>Es la distribución asimétrica de la carga eléctrica en una molécula. Depende tanto de la
                        electronegatividad de los átomos como de la geometría de la estructura.</p>
                </div>
            </div>

            <!-- Question 5 -->
            <div class="bg-white rounded-3xl shadow-sm border border-gray-100 overflow-hidden">
                <button class="w-full px-8 py-6 text-left flex justify-between items-center group"
                    onclick="toggleAccordion(this)">
                    <span class="text-2xl font-bold text-gray-800 group-hover:text-teal-600 transition-colors">¿Por qué
                        es importante en la industria?</span>
                    <span class="text-3xl text-teal-500 transform transition-transform duration-300">+</span>
                </button>
                <div class="hidden px-8 pb-8 text-xl text-gray-600 leading-relaxed">
                    <p>En farmacología y petroquímica, conocer la estructura exacta permite diseñar catalizadores más
                        eficientes y medicamentos que encajen perfectamente en los receptores celulares.</p>
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
        function toggleFullInfo(button) {
            const card = button.closest('.group');
            const content = card.querySelector('.card-content');
            const info = card.querySelector('.full-info');
            content.classList.toggle('hidden');
            info.classList.toggle('hidden');
        }

        function toggleAccordion(button) {
            const content = button.nextElementSibling;
            content.classList.toggle('hidden');
            const icon = button.querySelector('span:last-child');
            icon.textContent = content.classList.contains('hidden') ? '+' : '−';
            icon.style.transform = content.classList.contains('hidden') ? 'rotate(0deg)' : 'rotate(180deg)';
        }

        // Header scroll behavior
        let lastScrollTop = 0;
        const header = document.getElementById('mainHeader');

        window.addEventListener('scroll', () => {
            let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

            if (scrollTop > lastScrollTop && scrollTop > 100) {
                // Scrolling down
                header.style.transform = 'translateY(-100%)';
            } else {
                // Scrolling up or at top
                header.style.transform = 'translateY(0)';
            }

            lastScrollTop = scrollTop <= 0 ? 0 : scrollTop;
        }, false);
    </script>
    <script src="js/animaciones-index.js"></script>
</body>

</html>