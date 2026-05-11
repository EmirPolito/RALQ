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
  <!-- <link rel="stylesheet" href="css/informacion.css"> -->
  <style>
    header {
      display: block !important;
      background-color: white !important;
      padding: 0 !important;
      gap: 0 !important;
    }
  </style>
  <!-- Preload hero image -->
  <link rel="preload" fetchpriority="high" as="image" href="img/laboratorios/labo-plantas-q.jpg">
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
          <img src="img/logos/volver.png" alt="Volver" class="h-10 md:h-12 object-contain" fetchpriority="high" decoding="sync">
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

        <img src="img/laboratorios/labo-plantas-q.jpg" alt="Laboratorio de plantas químicas"
          class="relative rounded-2xl shadow-sm object-cover w-full h-80 md:h-96" fetchpriority="high" decoding="sync">
      </div>
    </div>
    <!-- Texto -->
    <div class="w-full md:w-7/12 flex flex-col justify-center">
      <span class="text-blue-600 font-medium tracking-wider text-sm mb-2 uppercase">
        Laboratorio
      </span>

      <h2 class="text-3xl md:text-4xl font-bold text-slate-800 mb-4 tracking-tight">
        Plantas Químicas
      </h2>

      <p class="text-slate-600 text-base md:text-2xl leading-relaxed mb-8 border-l-4 border-blue-500 pl-3">
        Un laboratorio de plantas químicas es un espacio especializado donde se realizan estudios, pruebas y
        simulaciones de los procesos químicos utilizados en la industria. Su objetivo principal es diseñar, optimizar
        y controlar la producción de sustancias químicas a gran escala, garantizando seguridad, eficiencia y calidad
        en los procesos industriales.

        Este tipo de laboratorio es esencial en sectores como la industria petroquímica, farmacéutica, de alimentos,
        de plásticos y de energía , entre otros.
      </p>
    </div>
  </section>



  <div class="w-full px-10 md:px-14  py-12">

    <!-- Sección 1 -->
    <section class="border-b border-gray-300 py-4">
      <button
        class="w-full text-left flex justify-between items-center text-xl font-semibold text-gray-800 focus:outline-none"
        onclick="toggleAccordion(this)">
        Objetivos de un laboratorio de plantas químicas
        <span class="transform transition-transform duration-300">+</span>
      </button>
      <div class="mt-2 hidden text-gray-700">
        <ul class="list-disc list-inside space-y-2">
          <li>Diseñar y optimizar procesos químicos industriales.</li>
          <li>Evaluar la viabilidad de nuevos productos y materiales.</li>
          <li>Controlar la calidad y seguridad en la producción química.</li>
          <li>Reducir costos y minimizar impactos ambientales.</li>
          <li>Realizar simulaciones y modelado de procesos químicos.</li>
        </ul>
      </div>
    </section>

    <!-- Sección 2 -->
    <section class="border-b border-gray-300 py-4">
      <button
        class="w-full text-left flex justify-between items-center text-xl font-semibold text-gray-800 focus:outline-none"
        onclick="toggleAccordion(this)">
        Áreas principales de un laboratorio de plantas químicas
        <span class="transform transition-transform duration-300">+</span>
      </button>
      <div class="mt-2 hidden text-gray-700">
        <ul class="list-disc list-inside space-y-2">
          <li><strong>Área de reacción química:</strong> Para probar y analizar reacciones químicas industriales.</li>
          <li><strong>Zona de separación y purificación:</strong> Con equipos como destiladores y filtros.</li>
          <li><strong>Área de control de calidad:</strong> Donde se realizan análisis de productos intermedios y
            finales.</li>
          <li><strong>Zona de seguridad y almacenamiento:</strong> Para el manejo de sustancias peligrosas y residuos.
          </li>
        </ul>
      </div>
    </section>

    <!-- Sección 3 -->
    <section class="border-b border-gray-300 py-4">
      <button
        class="w-full text-left flex justify-between items-center text-xl font-semibold text-gray-800 focus:outline-none"
        onclick="toggleAccordion(this)">
        Equipos y técnicas utilizadas en un laboratorio de plantas químicas
        <span class="transform transition-transform duration-300">+</span>
      </button>
      <div class="mt-2 hidden text-gray-700">
        <ul class="list-disc list-inside space-y-2">
          <li><strong>Reactores químicos:</strong> Para estudiar la cinética y termodinámica de las reacciones.</li>
          <li><strong>Destiladores y evaporadores:</strong> Para separar y concentrar sustancias.</li>
          <li><strong>Intercambiadores de calor:</strong> Para estudiar la transferencia de energía en procesos.</li>
          <li><strong>Cromatografía y espectroscopia:</strong> Para analizar la composición de productos.</li>
          <li><strong>Modelado y simulación computacional:</strong> Para optimizar procesos sin riesgos físicos.</li>
        </ul>
      </div>
    </section>

    <!-- Sección 4 -->
    <section class="border-b border-gray-300 py-4">
      <button
        class="w-full text-left flex justify-between items-center text-xl font-semibold text-gray-800 focus:outline-none"
        onclick="toggleAccordion(this)">
        Ejemplos de procesos estudiados en un laboratorio de plantas químicas
        <span class="transform transition-transform duration-300">+</span>
      </button>
      <div class="mt-2 hidden text-gray-700">
        <ul class="list-disc list-inside space-y-2">
          <li>Producción de combustibles y petroquímicos (gasolina, diésel, plásticos).</li>
          <li>Síntesis de fármacos y productos químicos industriales.</li>
          <li>Procesos de tratamiento de aguas y residuos.</li>
          <li>Optimización de la producción de fertilizantes y agroquímicos.</li>
          <li>Generación de biocombustibles y energías renovables.</li>
        </ul>
      </div>
    </section>

    <!-- Sección 5 -->
    <section class="border-b border-gray-300 py-4">
      <button
        class="w-full text-left flex justify-between items-center text-xl font-semibold text-gray-800 focus:outline-none"
        onclick="toggleAccordion(this)">
        Normas de seguridad en un laboratorio de plantas químicas
        <span class="transform transition-transform duration-300">+</span>
      </button>
      <div class="mt-2 hidden text-gray-700">
        <ul class="list-disc list-inside space-y-2">
          <li>Uso de equipo de protección personal (bata, guantes, gafas).</li>
          <li>Manejo seguro de sustancias inflamables y tóxicas.</li>
          <li>Control y monitoreo de variables como temperatura y presión.</li>
          <li>Implementación de protocolos de emergencia y buenas prácticas de fabricación (BPM).</li>
          <li>Minimización de residuos y contaminación ambiental.</li>
        </ul>
      </div>
    </section>

    <!-- Sección 6 -->
    <section class="border-b border-gray-300 py-4">
      <button
        class="w-full text-left flex justify-between items-center text-xl font-semibold text-gray-800 focus:outline-none"
        onclick="toggleAccordion(this)">
        Conclusión
        <span class="transform transition-transform duration-300">+</span>
      </button>
      <div class="mt-2 hidden text-gray-700">
        <p>
          Un laboratorio de plantas químicas es clave para el desarrollo de la industria química, ya que permite diseñar
          y mejorar
          procesos de producción de manera segura y eficiente. Su trabajo impacta en sectores fundamentales como la
          energía, la
          salud, los alimentos y la tecnología.
        </p>
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
      <img loading="lazy" id="modalImage" src="" alt="Instrument Image" style="max-width: 100%; height: auto; border-radius: 10px;">
      <p id="modalDescription">Descripción del instrumento.</p>
      <script src="js/qr-emergente.js"></script>
    </div>
  </div>
</body>

</html>