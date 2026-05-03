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

    <link rel="stylesheet" href="src/output.css">
    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Fira+Sans+Condensed:wght@300;400;500;700&family=Krub:wght@200;300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/user-icon.css">
    <link rel="stylesheet" href="css/animaciones.css">
</head>


<body class="bg-gray-50 min-h-screen flex flex-col font-['Krub']">
    <header class="bg-white border-b border-gray-100 px-3 md:px-6 py-3 md:py-4 sticky top-0 z-50 shadow-sm">
        <div class="max-w-[1500px] mx-auto flex justify-between items-center gap-2">
            <!-- Left: Volver + Logo -->
            <div class="flex items-center gap-2 md:gap-6 flex-shrink-0">
                <a href="index.php" class="hover:scale-110 transition-transform flex-shrink-0">
                    <img src="img/logos/volver.png" alt="Volver" class="h-6 md:h-10 object-contain">
                </a>
                <img src="img/logo_ralq_color-removebg-preview.png" alt="RALQ Logo" class="h-10 md:h-16 flex-shrink-0 object-contain">
            </div>

            <!-- Right: Welcome + Socials + User -->
            <div class="flex items-center gap-2 md:gap-8 overflow-hidden">
                <!-- Welcome + Socials (Compact on mobile) -->
                <div class="flex items-center gap-2 md:gap-4 flex-shrink min-w-0">
                    <div class="flex flex-col md:flex-row md:items-center leading-tight text-right md:text-left flex-shrink-0">
                        <p class="text-teal-600 font-bold text-[11px] md:text-lg whitespace-nowrap">¡Bienvenido</p>
                        <p class="text-teal-600 font-bold text-[11px] md:text-lg md:ml-1">:)</p>
                    </div>
                    <div class="flex gap-1 md:gap-2 flex-shrink-0">
                        <a href="#" class="hover:opacity-70 transition-opacity">
                            <img src="img/contctos/logofacebook.png" class="w-6 h-6 md:w-8 md:h-8 rounded-full object-cover" alt="Facebook">
                        </a>
                        <a href="#" class="hover:opacity-70 transition-opacity">
                            <img src="img/contctos/logowhats.png" class="w-6 h-6 md:w-8 md:h-8 rounded-full object-cover" alt="WhatsApp">
                        </a>
                        <a href="#" class="hover:opacity-70 transition-opacity">
                            <img src="img/contctos/logogmail.png" class="w-6 h-6 md:w-8 md:h-8 rounded-full object-cover" alt="Gmail">
                        </a>
                    </div>
                </div>

                <!-- User Icon -->
                <div class="relative user-menu flex-shrink-0">
                    <img src="img/user.jpg"
                        class="user-icon w-10 h-10 md:w-12 md:h-12 rounded-full border-2 border-teal-500 cursor-pointer shadow-lg object-cover"
                        onclick="toggleMenu()" alt="Usuario">
                    <div id="userDropdown"
                        class="hidden absolute right-0 mt-4 w-64 bg-white rounded-2xl shadow-2xl border border-gray-100 p-6 z-50">
                        <p class="text-gray-900 font-bold mb-4 truncate"
                            title="<?php echo isset($_SESSION['user_email']) ? htmlspecialchars($_SESSION['user_email']) : 'Invitado'; ?>">
                            <?php echo isset($_SESSION['user_email']) ? htmlspecialchars($_SESSION['user_email']) : 'Invitado'; ?>
                        </p>
                        <a href="index.php"
                            class="block w-full py-3 bg-teal-500 text-white text-center rounded-xl font-bold hover:bg-teal-600 transition-colors">Cerrar
                            Sesión</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="relative h-64 md:h-96 flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="img/fondomenu.png" alt="Fondo" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-teal-900/40 backdrop-blur-[2px]"></div>
        </div>
        <h1 class="relative z-10 text-4xl md:text-6xl lg:text-7xl font-bold text-white text-center px-6 drop-shadow-2xl uppercase tracking-wider"
            style="font-family: 'Poppins', sans-serif;">
            Aprende y <span class="text-teal-400">Estudia</span> sobre...
        </h1>
    </section>

    <main class="flex-grow py-20 px-6">
        <div class="max-w-[1400px] mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 md:gap-12">
            <!-- Estructuras Moleculares -->
            <a href="estructuras-mol.php"
                class="group relative bg-white rounded-[2rem] overflow-hidden shadow-xl hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
                <img src="img/img-menu/3 (2).png" alt="Estructuras Moleculares"
                    class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                <div
                    class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-8">
                    <p class="text-white text-2xl font-bold">Explorar Estructuras</p>
                </div>
            </a>

            <!-- Laboratorios -->
            <a href="laboratorios.php"
                class="group relative bg-white rounded-[2rem] overflow-hidden shadow-xl hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
                <img src="img/img-menu/tuslabs.png" alt="Laboratorios"
                    class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                <div
                    class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-8">
                    <p class="text-white text-2xl font-bold">Visitar Laboratorios</p>
                </div>
            </a>

            <!-- Tabla periódica -->
            <a href="tabla-periodica.php"
                class="group relative bg-white rounded-[2rem] overflow-hidden shadow-xl hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
                <img src="img/img-menu/tablape.png" alt="Tabla Periódica"
                    class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                <div
                    class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-8">
                    <p class="text-white text-2xl font-bold">Ver Elementos</p>
                </div>
            </a>

            <!-- Otros links -->
            <a href="https://www.youtube.com/watch?v=cubEOJ_gz3w" target="_blank"
                class="group relative bg-white rounded-[2rem] overflow-hidden shadow-xl hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
                <img src="img/img-menu/4 (2).png" alt="Explora"
                    class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                <div
                    class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-8">
                    <p class="text-white text-2xl font-bold">Ver Video RA</p>
                </div>
            </a>

            <a href="https://forms.office.com/Pages/ResponsePage.aspx?id=DQSIkWdsW0yxEjajBLZtrQAAAAAAAAAAAAO__TR___tUOTI4WkFURU0yR1RZQkdLTFU4OFpZWjgyTS4u"
                target="_blank"
                class="group relative bg-white rounded-[2rem] overflow-hidden shadow-xl hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
                <img src="img/img-menu/5.png" alt="Evalúate"
                    class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                <div
                    class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-8">
                    <p class="text-white text-2xl font-bold">Evaluar Conocimientos</p>
                </div>
            </a>

            <a href="https://wordwall.net/es/resource/13254497/elementos-de-laboratorio" target="_blank"
                class="group relative bg-white rounded-[2rem] overflow-hidden shadow-xl hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
                <img src="img/img-menu/6.png" alt="Juegos"
                    class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                <div
                    class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-8">
                    <p class="text-white text-2xl font-bold">Actividades Lúdicas</p>
                </div>
            </a>
        </div>
    </main>



    <footer class="text-white py-16 px-6 md:px-24" style="background-color: #434e4e;">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-12 items-center">

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
                <img src="img/utsv-log.png" alt="UTSV Logo" class="h-32 md:h-36 object-contain">
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




</body>

</html>

<script src="js/animaciones-index.js"></script>