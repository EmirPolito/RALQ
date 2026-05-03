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
</head>

<body class="bg-gray-50 min-h-screen flex flex-col font-['Krub']">
    <!-- Header -->
    <header class="bg-white border-b border-gray-100 px-6 py-4 sticky top-0 z-50 shadow-sm">
        <div class="max-w-[1500px] mx-auto flex justify-between items-center">
            <div class="flex items-center gap-6">
                <a href="menu.php" class="hover:scale-110 transition-transform">
                    <img src="img/logos/volver.png" alt="Volver" class="h-8 md:h-10">
                </a>
                <img src="img/logo_ralq_color-removebg-preview.png" alt="RALQ Logo" class="h-12 md:h-16">
            </div>

            <div class="flex items-center gap-4 md:gap-8">
                <div class="relative user-menu">
                    <img src="img/user.jpg" class="user-icon w-12 h-12 rounded-full border-2 border-teal-500 cursor-pointer shadow-lg" onclick="toggleMenu()" alt="Usuario">
                    <div id="userDropdown" class="hidden absolute right-0 mt-4 w-64 bg-white rounded-2xl shadow-2xl border border-gray-100 p-6 z-50">
                        <p class="text-gray-900 font-bold mb-4 truncate" title="<?php echo isset($_SESSION['user_email']) ? htmlspecialchars($_SESSION['user_email']) : 'Invitado'; ?>">
                            <?php echo isset($_SESSION['user_email']) ? htmlspecialchars($_SESSION['user_email']) : 'Invitado'; ?>
                        </p>
                        <a href="index.php" class="block w-full py-3 bg-teal-500 text-white text-center rounded-xl font-bold hover:bg-teal-600 transition-colors">Cerrar Sesión</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="relative h-[60vh] min-h-[500px] flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="img/laboratorios/labodesc.jpg" alt="Laboratorios" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-teal-900/60 backdrop-blur-[3px]"></div>
        </div>
        <div class="relative z-10 max-w-5xl px-6 text-center text-white space-y-8">
            <h1 class="text-5xl md:text-7xl lg:text-8xl font-bold uppercase tracking-tighter drop-shadow-2xl" style="font-family: 'Poppins', sans-serif;">
                Laboratorios <span class="text-teal-400">Químicos</span>
            </h1>
            <p class="text-xl md:text-2xl font-light leading-relaxed max-w-4xl mx-auto opacity-95">
                Espacios de experimentación y descubrimiento donde la ciencia cobra vida. Explora nuestras instalaciones virtuales y domina los protocolos de seguridad.
            </p>
        </div>
    </section>

    <!-- Content -->
    <main class="flex-grow py-24 px-6 bg-white">
        <div class="max-w-[1400px] mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12">
            <!-- Química General -->
            <a href="quimica-general.php" class="group relative bg-white rounded-[3rem] overflow-hidden shadow-xl hover:shadow-2xl transition-all duration-500 hover:-translate-y-4">
                <img src="img/laboratorios/labo1.png" alt="Química General" class="w-full h-[400px] object-cover group-hover:scale-110 transition-transform duration-700">
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent flex flex-col justify-end p-10">
                    <h3 class="text-3xl font-bold text-white mb-2">Química General</h3>
                    <p class="text-teal-300 font-medium uppercase tracking-widest text-sm">Entrar al Laboratorio</p>
                </div>
            </a>

            <!-- Análisis Instrumental -->
            <a href="analisis-instrumental.php" class="group relative bg-white rounded-[3rem] overflow-hidden shadow-xl hover:shadow-2xl transition-all duration-500 hover:-translate-y-4">
                <img src="img/laboratorios/labo2.png" alt="Análisis Instrumental" class="w-full h-[400px] object-cover group-hover:scale-110 transition-transform duration-700">
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent flex flex-col justify-end p-10">
                    <h3 class="text-3xl font-bold text-white mb-2">Análisis Instrumental</h3>
                    <p class="text-teal-300 font-medium uppercase tracking-widest text-sm">Explorar Instrumentos</p>
                </div>
            </a>

            <!-- Plantas Químicas -->
            <a href="plantas-quimicas.php" class="group relative bg-white rounded-[3rem] overflow-hidden shadow-xl hover:shadow-2xl transition-all duration-500 hover:-translate-y-4">
                <img src="img/laboratorios/labo3.png" alt="Plantas Químicas" class="w-full h-[400px] object-cover group-hover:scale-110 transition-transform duration-700">
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent flex flex-col justify-end p-10">
                    <h3 class="text-3xl font-bold text-white mb-2">Plantas Químicas</h3>
                    <p class="text-teal-300 font-medium uppercase tracking-widest text-sm">Visitar Plantas</p>
                </div>
            </a>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-[#1e293b] text-white py-20 px-6 mt-auto">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-16 items-center">
            <div class="text-center md:text-left space-y-6">
                <h4 class="text-3xl font-bold text-teal-400">Contacto</h4>
                <div class="space-y-4 text-lg text-gray-300">
                    <p>Facebook: <a href="https://www.facebook.com/share/1AnZW5VRF9/" class="hover:text-white transition-colors">RALQ</a></p>
                    <p>Correo: <a href="mailto:ralq.utsv@gmail.com" class="hover:text-white transition-colors">ralq.utsv@gmail.com</a></p>
                    <p>Teléfono: <a href="tel:+123456789" class="hover:text-white transition-colors">+123 456 789</a></p>
                </div>
            </div>

            <div class="flex flex-col items-center gap-6">
                <img src="img/utsv-log.png" alt="UTSV Logo" class="h-32 object-contain filter brightness-110">
                <div class="w-24 h-1 bg-teal-500 rounded-full"></div>
            </div>

            <div class="text-center md:text-right space-y-6">
                <h4 class="text-3xl font-bold text-teal-400">Creadores</h4>
                <div class="space-y-2 text-lg text-gray-300">
                    <p>Emir Polito Guevara</p>
                    <p>Irving Esteban Molina Méndez</p>
                    <p>Cristian Daniel Barraza Hernández</p>
                </div>
            </div>
        </div>
        <div class="max-w-7xl mx-auto border-t border-white/10 mt-16 pt-8 text-center text-gray-400">
            2024 &copy; Todos los derechos reservados.
        </div>
    </footer>

    <script>
        function toggleMenu() {
            const dropdown = document.getElementById('userDropdown');
            dropdown.classList.toggle('hidden');
        }

        window.onclick = function(event) {
            if (!event.target.matches('.user-icon')) {
                const tailwindDropdown = document.getElementById('userDropdown');
                if (tailwindDropdown && !tailwindDropdown.classList.contains('hidden') && !event.target.closest('.user-menu')) {
                    tailwindDropdown.classList.add('hidden');
                }
            }
        }
    </script>
    <script src="js/animaciones-index.js"></script>
</body>

</html>
