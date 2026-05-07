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

    <!-- HEADER -->
    <header id="mainHeader" class="bg-white border-b border-gray-100 px-4 md:px-8 py-5 md:py-7 sticky top-0 z-50 shadow-sm transition-transform duration-300 ease-in-out">

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

                        <a href="#" class="hover:opacity-70 transition-opacity">
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

                <!-- USER -->
                <div class="relative user-menu flex-shrink-0">

                    <img src="img/user.jpg"
                        class="user-icon w-12 h-12 md:w-14 md:h-14 rounded-full border-2 border-teal-500 cursor-pointer shadow-lg object-cover"
                        onclick="toggleMenu()" alt="Usuario">

                    <!-- DROPDOWN -->
                    <div id="userDropdown"
                        class="hidden absolute right-0 mt-4 w-60 bg-white rounded-2xl shadow-2xl border border-gray-100 p-5 z-50">

                        <p class="text-gray-900 font-bold mb-4 truncate"
                            title="<?php echo isset($_SESSION['user_email']) ? htmlspecialchars($_SESSION['user_email']) : 'Invitado'; ?>">

                            <?php echo isset($_SESSION['user_email']) ? htmlspecialchars($_SESSION['user_email']) : 'Invitado'; ?>

                        </p>

                        <a href="index.php"
                            class="block w-full py-3 bg-teal-500 text-white text-center rounded-xl font-bold hover:bg-teal-600 transition-colors">

                            Salir

                        </a>

                    </div>
                </div>

            </div>
        </div>
    </header>

    <!-- HERO -->
    <section class="relative h-64 md:h-96 flex items-center justify-center overflow-hidden">

        <div class="absolute inset-0 z-0">

            <img src="img/fondomenu.png" alt="Fondo" class="w-full h-full object-cover">

            <div class="absolute inset-0 bg-teal-900/40 backdrop-blur-[2px]"></div>

        </div>

        <h1 class="relative z-10 text-4xl md:text-6xl lg:text-7xl font-bold text-white text-center px-6 drop-shadow-2xl uppercase tracking-wider"
            style="font-family: 'Poppins', sans-serif;">

            Aprende y Estudia sobre...

        </h1>
    </section>

    <!-- MAIN -->
    <main class="flex-grow py-20 px-7">

        <div class="max-w-[1300px] mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-20 gap-y-16">

            <!-- CARD -->
            <a href="estructuras-mol.php"
                class="group relative bg-white rounded-[2rem] overflow-hidden shadow-xl hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">

                <img src="img/img-menu/3 (2).png" alt="Estructuras Moleculares"
                    class="w-full h-full object-cover group-hover:scale-102 transition-transform duration-500">

                <div
                    class="absolute inset-0 bg-black/5 group-hover:bg-black/5 transition-all duration-500 flex items-end p-8">

                    <p class="text-white text-2xl font-bold">
                        Explorar Estructuras
                    </p>

                </div>
            </a>

            <!-- CARD -->
            <a href="laboratorios.php"
                class="group relative bg-white rounded-[2rem] overflow-hidden shadow-xl hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">

                <img src="img/img-menu/tuslabs.png" alt="Laboratorios"
                    class="w-full h-full object-cover group-hover:scale-102 transition-transform duration-700">

                <div
                    class="absolute inset-0 bg-black/5 group-hover:bg-black/5 transition-all duration-500 flex items-end p-8">

                    <p class="text-white text-2xl font-bold">
                        Visitar Laboratorios
                    </p>

                </div>
            </a>

            <!-- CARD -->
            <a href="tabla-periodica.php"
                class="group relative bg-white rounded-[2rem] overflow-hidden shadow-xl hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">

                <img src="img/img-menu/tablape.png" alt="Tabla Periódica"
                    class="w-full h-full object-cover group-hover:scale-102 transition-transform duration-700">

                <div
                    class="absolute inset-0 bg-black/5 group-hover:bg-black/5 transition-all duration-500 flex items-end p-8">

                    <p class="text-white text-2xl font-bold">
                        Ver Elementos
                    </p>

                </div>
            </a>

            <!-- CARD -->
            <a href="https://www.youtube.com/watch?v=cubEOJ_gz3w" target="_blank"
                class="group relative bg-white rounded-[2rem] overflow-hidden shadow-xl hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">

                <img src="img/img-menu/4 (2).png" alt="Video"
                    class="w-full h-full object-cover group-hover:scale-102 transition-transform duration-700">

                <div
                    class="absolute inset-0 bg-black/5 group-hover:bg-black/5 transition-all duration-500 flex items-end p-8">

                    <p class="text-white text-2xl font-bold">
                        Ver Video RA
                    </p>

                </div>
            </a>

            <!-- CARD -->
            <a href="https://forms.office.com/Pages/ResponsePage.aspx?id=DQSIkWdsW0yxEjajBLZtrQAAAAAAAAAAAAO__TR___tUOTI4WkFURU0yR1RZQkdLTFU4OFpZWjgyTS4u"
                target="_blank"
                class="group relative bg-white rounded-[2rem] overflow-hidden shadow-xl hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">

                <img src="img/img-menu/5.png" alt="Evaluación"
                    class="w-full h-full object-cover group-hover:scale-102 transition-transform duration-700">

                <div
                    class="absolute inset-0 bg-black/5 group-hover:bg-black/5 transition-all duration-500 flex items-end p-8">

                    <p class="text-white text-2xl font-bold">
                        Evaluar Conocimientos
                    </p>

                </div>
            </a>

            <!-- CARD -->
            <a href="https://wordwall.net/es/resource/13254497/elementos-de-laboratorio" target="_blank"
                class="group relative bg-white rounded-[2rem] overflow-hidden shadow-xl hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">

                <img src="img/img-menu/6.png" alt="Juegos"
                    class="w-full h-full object-cover group-hover:scale-102 transition-transform duration-700">

                <div
                    class="absolute inset-0 bg-black/5 group-hover:bg-black/5 transition-all duration-500 flex items-end p-8">

                    <p class="text-white text-2xl font-bold">
                        Actividades Lúdicas
                    </p>

                </div>
            </a>

        </div>
    </main>

    <!-- FOOTER -->
    <footer class="text-white py-16 px-6 md:px-24" style="background-color: #434e4e;">

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

    <!-- SCRIPT MENU -->
    <script>
        function toggleMenu() {
            const menu = document.getElementById("userDropdown");
            menu.classList.toggle("hidden");
        }

        document.addEventListener("click", function (event) {
            const userMenu = document.querySelector(".user-menu");
            const dropdown = document.getElementById("userDropdown");

            if (!userMenu.contains(event.target)) {
                dropdown.classList.add("hidden");
            }
        });

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