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
  <link href="https://fonts.googleapis.com/css2?family=Fira+Sans+Condensed:wght@300;400;500;700&family=Krub:wght@200;300;400;500;600;700&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
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
              <img src="img/logo_ralq_color-removebg-preview.png" alt="RALQ Logo" class="h-12 md:h-16 object-contain">
          </div>
          <!-- Back Button -->
          <div class="flex items-center">
              <a href="laboratorios.php" class="hover:scale-110 transition-transform flex items-center group">
                  <img src="img/logos/volver.png" alt="Volver" class="h-10 md:h-12 object-contain">
              </a>
          </div>
      </div>
  </header>

  <section class="hero-section">
    <div class="hero-content">
      <img src="img/laboratorios/labo-q-analisis.jpg" alt="Robot de laboratorio" class="hero-image" fetchpriority="high" decoding="sync">
      <div class="hero-text">
        <h2>LABORATORIO</h2>
        <h1>ANALISÍS INSTRUMENTAL</h1>
        <p>Un laboratorio de análisis instrumental es un espacio especializado donde se utilizan equipos avanzados para analizar la composición química, estructura y propiedades de diferentes muestras mediante técnicas instrumentales. A diferencia del laboratorio de química general, que se centra en reacciones y experimentos básicos, en un laboratorio de análisis instrumental se emplean equipos de alta precisión para identificar y cuantificar sustancias en muestras de alimentos, medicamentos, materiales, suelos, aguas, entre otros.</p>
      </div>
    </div>
  </section>






  <main>
    <h2 style="text-align:center; margin-bottom: 2rem;">ELIGE UNO PARA VISUALIZARLO</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
            <!-- Autoclave -->
            <div
                class="group bg-gray-50 rounded-[2rem] p-4 md:p-6 shadow-md shadow-gray-300 hover:shadow-2xl transition-all duration-500 border border-gray-200 flex flex-col aspect-square max-w-[280px] md:aspect-auto md:min-h-[400px] md:max-w-[340px] mx-auto w-full">
                <div class="relative flex-grow">
                    <model-viewer src="instrumentos3D/autoclave.glb" alt="Modelo de Autoclave" auto-rotate camera-controls ar
                        class="w-full h-32 md:h-52 bg-transparent"></model-viewer>
                    <button onclick="toggleFullInfo(this)"
                        class="absolute top-0 right-0 w-10 h-10 bg-teal-500 text-white rounded-full font-bold shadow-lg hover:scale-110 transition-transform">i</button>
                </div>

                <div class="card-content mt-auto md:mt-32 text-center flex flex-col flex-grow pt-6 md:pt-12">
                    <h3 class="text-xl md:text-3xl font-bold text-gray-900 mb-2 md:mb-6">Autoclave</h3>
                    <a href="img/QR/analisis/Autoclave.jpg" target="_blank"
                        class="mt-auto block py-4 bg-teal-500 text-white rounded-2xl font-bold text-xl hover:bg-teal-600 transition-all shadow-lg hover:shadow-teal-200">
                        Ver en Realidad Aumentada
                    </a>
                </div>

                <div
                    class="full-info hidden mt-auto md:mt-32 text-center flex-grow space-y-2 md:space-y-4 pt-6 md:pt-12">
                    <h3 class="text-lg md:text-2xl font-bold text-gray-900">Autoclave</h3>
                    <div class="text-lg text-gray-600 space-y-2">
                        <p>Equipo utilizado para la esterilización de materiales mediante vapor de agua a alta presión y temperatura.</p>
                    </div>
                </div>
            </div>
            <!-- Campana de extracción -->
            <div
                class="group bg-gray-50 rounded-[2rem] p-4 md:p-6 shadow-md shadow-gray-300 hover:shadow-2xl transition-all duration-500 border border-gray-200 flex flex-col aspect-square max-w-[280px] md:aspect-auto md:min-h-[400px] md:max-w-[340px] mx-auto w-full">
                <div class="relative flex-grow">
                    <model-viewer src="instrumentos3D/campana_de_extraccion.glb" alt="Modelo de Campana de extracción" auto-rotate camera-controls ar
                        class="w-full h-32 md:h-52 bg-transparent"></model-viewer>
                    <button onclick="toggleFullInfo(this)"
                        class="absolute top-0 right-0 w-10 h-10 bg-teal-500 text-white rounded-full font-bold shadow-lg hover:scale-110 transition-transform">i</button>
                </div>

                <div class="card-content mt-auto md:mt-32 text-center flex flex-col flex-grow pt-6 md:pt-12">
                    <h3 class="text-xl md:text-3xl font-bold text-gray-900 mb-2 md:mb-6">Campana de extracción</h3>
                    <a href="img/QR/analisis/Campana.jpg" target="_blank"
                        class="mt-auto block py-4 bg-teal-500 text-white rounded-2xl font-bold text-xl hover:bg-teal-600 transition-all shadow-lg hover:shadow-teal-200">
                        Ver en Realidad Aumentada
                    </a>
                </div>

                <div
                    class="full-info hidden mt-auto md:mt-32 text-center flex-grow space-y-2 md:space-y-4 pt-6 md:pt-12">
                    <h3 class="text-lg md:text-2xl font-bold text-gray-900">Campana de extracción</h3>
                    <div class="text-lg text-gray-600 space-y-2">
                        <p>Dispositivo de seguridad que protege al usuario de vapores y gases tóxicos al extraerlos del área de trabajo.</p>
                    </div>
                </div>
            </div>
            <!-- Centrifugadora -->
            <div
                class="group bg-gray-50 rounded-[2rem] p-4 md:p-6 shadow-md shadow-gray-300 hover:shadow-2xl transition-all duration-500 border border-gray-200 flex flex-col aspect-square max-w-[280px] md:aspect-auto md:min-h-[400px] md:max-w-[340px] mx-auto w-full">
                <div class="relative flex-grow">
                    <model-viewer src="instrumentos3D/centrifugadora.glb" alt="Modelo de Centrifugadora" auto-rotate camera-controls ar
                        class="w-full h-32 md:h-52 bg-transparent"></model-viewer>
                    <button onclick="toggleFullInfo(this)"
                        class="absolute top-0 right-0 w-10 h-10 bg-teal-500 text-white rounded-full font-bold shadow-lg hover:scale-110 transition-transform">i</button>
                </div>

                <div class="card-content mt-auto md:mt-32 text-center flex flex-col flex-grow pt-6 md:pt-12">
                    <h3 class="text-xl md:text-3xl font-bold text-gray-900 mb-2 md:mb-6">Centrifugadora</h3>
                    <a href="img/QR/analisis/Centrifugadora.jpg" target="_blank"
                        class="mt-auto block py-4 bg-teal-500 text-white rounded-2xl font-bold text-xl hover:bg-teal-600 transition-all shadow-lg hover:shadow-teal-200">
                        Ver en Realidad Aumentada
                    </a>
                </div>

                <div
                    class="full-info hidden mt-auto md:mt-32 text-center flex-grow space-y-2 md:space-y-4 pt-6 md:pt-12">
                    <h3 class="text-lg md:text-2xl font-bold text-gray-900">Centrifugadora</h3>
                    <div class="text-lg text-gray-600 space-y-2">
                        <p>Equipo de laboratorio que separa componentes de una mezcla mediante la fuerza centrífuga, basado en su densidad.</p>
                    </div>
                </div>
            </div>
            <!-- Incubadora -->
            <div
                class="group bg-gray-50 rounded-[2rem] p-4 md:p-6 shadow-md shadow-gray-300 hover:shadow-2xl transition-all duration-500 border border-gray-200 flex flex-col aspect-square max-w-[280px] md:aspect-auto md:min-h-[400px] md:max-w-[340px] mx-auto w-full">
                <div class="relative flex-grow">
                    <model-viewer src="instrumentos3D/incubadora.glb" alt="Modelo de Incubadora" auto-rotate camera-controls ar
                        class="w-full h-32 md:h-52 bg-transparent"></model-viewer>
                    <button onclick="toggleFullInfo(this)"
                        class="absolute top-0 right-0 w-10 h-10 bg-teal-500 text-white rounded-full font-bold shadow-lg hover:scale-110 transition-transform">i</button>
                </div>

                <div class="card-content mt-auto md:mt-32 text-center flex flex-col flex-grow pt-6 md:pt-12">
                    <h3 class="text-xl md:text-3xl font-bold text-gray-900 mb-2 md:mb-6">Incubadora</h3>
                    <a href="a" target="_blank"
                        class="mt-auto block py-4 bg-teal-500 text-white rounded-2xl font-bold text-xl hover:bg-teal-600 transition-all shadow-lg hover:shadow-teal-200">
                        Ver en Realidad Aumentada
                    </a>
                </div>

                <div
                    class="full-info hidden mt-auto md:mt-32 text-center flex-grow space-y-2 md:space-y-4 pt-6 md:pt-12">
                    <h3 class="text-lg md:text-2xl font-bold text-gray-900">Incubadora</h3>
                    <div class="text-lg text-gray-600 space-y-2">
                        <p>Equipo que mantiene condiciones controladas de temperatura y humedad para el crecimiento de cultivos biológicos.</p>
                    </div>
                </div>
            </div>
            <!-- Placa calefactora -->
            <div
                class="group bg-gray-50 rounded-[2rem] p-4 md:p-6 shadow-md shadow-gray-300 hover:shadow-2xl transition-all duration-500 border border-gray-200 flex flex-col aspect-square max-w-[280px] md:aspect-auto md:min-h-[400px] md:max-w-[340px] mx-auto w-full">
                <div class="relative flex-grow">
                    <model-viewer src="instrumentos3D/placa_calefactora.glb" alt="Modelo de Placa calefactora" auto-rotate camera-controls ar
                        class="w-full h-32 md:h-52 bg-transparent"></model-viewer>
                    <button onclick="toggleFullInfo(this)"
                        class="absolute top-0 right-0 w-10 h-10 bg-teal-500 text-white rounded-full font-bold shadow-lg hover:scale-110 transition-transform">i</button>
                </div>

                <div class="card-content mt-auto md:mt-32 text-center flex flex-col flex-grow pt-6 md:pt-12">
                    <h3 class="text-xl md:text-3xl font-bold text-gray-900 mb-2 md:mb-6">Placa calefactora</h3>
                    <a href="a" target="_blank"
                        class="mt-auto block py-4 bg-teal-500 text-white rounded-2xl font-bold text-xl hover:bg-teal-600 transition-all shadow-lg hover:shadow-teal-200">
                        Ver en Realidad Aumentada
                    </a>
                </div>

                <div
                    class="full-info hidden mt-auto md:mt-32 text-center flex-grow space-y-2 md:space-y-4 pt-6 md:pt-12">
                    <h3 class="text-lg md:text-2xl font-bold text-gray-900">Placa calefactora</h3>
                    <div class="text-lg text-gray-600 space-y-2">
                        <p>Dispositivo utilizado para calentar sustancias en recipientes de vidrio de manera uniforme y controlada.</p>
                    </div>
                </div>
            </div>
            <!-- Soporte universal -->
            <div
                class="group bg-gray-50 rounded-[2rem] p-4 md:p-6 shadow-md shadow-gray-300 hover:shadow-2xl transition-all duration-500 border border-gray-200 flex flex-col aspect-square max-w-[280px] md:aspect-auto md:min-h-[400px] md:max-w-[340px] mx-auto w-full">
                <div class="relative flex-grow">
                    <model-viewer src="instrumentos3D/soporte_universal.glb" alt="Modelo de Soporte universal" auto-rotate camera-controls ar
                        class="w-full h-32 md:h-52 bg-transparent"></model-viewer>
                    <button onclick="toggleFullInfo(this)"
                        class="absolute top-0 right-0 w-10 h-10 bg-teal-500 text-white rounded-full font-bold shadow-lg hover:scale-110 transition-transform">i</button>
                </div>

                <div class="card-content mt-auto md:mt-32 text-center flex flex-col flex-grow pt-6 md:pt-12">
                    <h3 class="text-xl md:text-3xl font-bold text-gray-900 mb-2 md:mb-6">Soporte universal</h3>
                    <a href="a" target="_blank"
                        class="mt-auto block py-4 bg-teal-500 text-white rounded-2xl font-bold text-xl hover:bg-teal-600 transition-all shadow-lg hover:shadow-teal-200">
                        Ver en Realidad Aumentada
                    </a>
                </div>

                <div
                    class="full-info hidden mt-auto md:mt-32 text-center flex-grow space-y-2 md:space-y-4 pt-6 md:pt-12">
                    <h3 class="text-lg md:text-2xl font-bold text-gray-900">Soporte universal</h3>
                    <div class="text-lg text-gray-600 space-y-2">
                        <p>Estructura metálica utilizada en laboratorios para sujetar y sostener distintos equipos o instrumentos.</p>
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




  <div class="w-full px-6 md:px-12 py-12">
    <!-- Sección 1 -->
    <section class="border-b border-gray-300 py-4">
      <button class="w-full text-left flex justify-between items-center text-xl font-semibold text-gray-800 focus:outline-none" onclick="toggleAccordion(this)">
        Objetivos del laboratorio de análisis instrumental
        <span class="transform transition-transform duration-300">+</span>
      </button>
      <div class="mt-2 hidden text-gray-700">
        <ul class="list-disc list-inside space-y-2">
          <li>Determinar la composición química de una muestra.</li>
          <li>Identificar compuestos desconocidos.</li>
          <li>Cuantificar la concentración de sustancias en diferentes matrices.</li>
          <li>Estudiar propiedades físicas y químicas de los materiales.</li>
          <li>Controlar la calidad de productos en industrias como la farmacéutica, alimentaria y ambiental.</li>
        </ul>
      </div>
    </section>


    <!-- Sección 2 -->
    <section class="border-b border-gray-300 py-4">
      <button class="w-full text-left flex justify-between items-center text-xl font-semibold text-gray-800 focus:outline-none" onclick="toggleAccordion(this)">
        Áreas de un laboratorio de análisis instrumental
        <span class="transform transition-transform duration-300">+</span>
      </button>
      <div class="mt-2 hidden text-gray-700">
        <ul class="list-disc list-inside space-y-2">
          <li><strong>Zona de preparación de muestras:</strong> Donde las muestras se procesan antes del análisis.</li>
          <li><strong>Zona de análisis:</strong> Espacio donde se encuentran los equipos de medición.</li>
          <li><strong>Área de almacenamiento:</strong> Para reactivos y materiales.</li>
          <li><strong>Zona de seguridad:</strong> Con duchas de emergencia, extintores y botiquín.</li>
        </ul>
      </div>
    </section>

    <!-- Sección 3 -->
    <section class="border-b border-gray-300 py-4">
      <button class="w-full text-left flex justify-between items-center text-xl font-semibold text-gray-800 focus:outline-none" onclick="toggleAccordion(this)">
        Técnicas e instrumentos más utilizados
        <span class="transform transition-transform duration-300">+</span>
      </button>
      <div class="mt-2 hidden text-gray-700 space-y-4">

        <div>
          <h3 class="text-lg font-semibold">Espectroscopia – Analiza la interacción de la luz con la materia.</h3>
          <ul class="list-disc list-inside space-y-2">
            <li><strong>UV-Vis:</strong> Determina concentraciones de sustancias en soluciones.</li>
            <li><strong>Infrarrojo (FTIR):</strong> Identifica grupos funcionales en moléculas orgánicas.</li>
            <li><strong>Espectroscopia de absorción atómica (AAS):</strong> Detecta metales en muestras líquidas.</li>
          </ul>
        </div>

        <div>
          <h3 class="text-lg font-semibold">Cromatografía – Separa e identifica componentes de una mezcla.</h3>
          <ul class="list-disc list-inside space-y-2">
            <li><strong>Cromatografía de gases (GC):</strong> Para compuestos volátiles como hidrocarburos.</li>
            <li><strong>Cromatografía líquida de alta resolución (HPLC):</strong> Para fármacos y proteínas.</li>
          </ul>
        </div>

      </div>
    </section>

    <!-- Sección 4 -->
    <section class="border-b border-gray-300 py-4">
      <button class="w-full text-left flex justify-between items-center text-xl font-semibold text-gray-800 focus:outline-none" onclick="toggleAccordion(this)">
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
      <button class="w-full text-left flex justify-between items-center text-xl font-semibold text-gray-800 focus:outline-none" onclick="toggleAccordion(this)">
        Ejemplos de aplicaciones en distintos sectores
        <span class="transform transition-transform duration-300">+</span>
      </button>
      <div class="mt-2 hidden text-gray-700">
        <ul class="list-disc list-inside space-y-2">
          <li><strong>Farmacéutica:</strong> Análisis de medicamentos para verificar su pureza y concentración.</li>
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


  <!-- Ventanas emergentes -->
  <!-- Modal -->
  <div id="instrumentModal" class="modal">
    <div class="modal-content">
      <span class="close">&times;</span>
      <h2 id="modalTitle">Instrumento</h2>
      <img id="modalImage" src="" alt="Instrument Image" style="max-width: 100%; height: auto; border-radius: 10px;">
      <p id="modalDescription">Descripción del instrumento.</p>
      <script src="js/qr-emergente.js"></script>
    </div>
  </div>
</body>

</html>