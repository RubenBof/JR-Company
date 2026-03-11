<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>AUREON - Desarrollo de Software Premium</title>
<script src="https://cdn.tailwindcss.com"></script>
<script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</head>
<body class="bg-gray-50 text-gray-800 font-sans">

<!-- Header -->
<header class="fixed w-full bg-white shadow z-50 transition-all duration-500" x-data="{scrolled:false}" 
        :class="{'bg-white shadow-lg py-2': scrolled, 'py-4': !scrolled}" 
        x-init="window.addEventListener('scroll', () => { scrolled = window.scrollY > 50 })">
  <div class="container mx-auto flex justify-between items-center px-4">
    <div class="text-2xl font-bold text-blue-600 transition-transform duration-300 hover:scale-105">AUREON</div>
    <nav class="space-x-6 hidden md:flex">
      <a href="#inicio" class="hover:text-blue-600 transition-colors duration-300">Inicio</a>
      <a href="#servicios" class="hover:text-blue-600 transition-colors duration-300">Servicios</a>
      <a href="#nosotros" class="hover:text-blue-600 transition-colors duration-300">Nosotros</a>
      <a href="#portfolio" class="hover:text-blue-600 transition-colors duration-300">Portfolio</a>
      <a href="#contacto" class="hover:text-blue-600 transition-colors duration-300">Contacto</a>
    </nav>
    <a href="#contacto" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition-all duration-300">Contáctanos</a>
  </div>
</header>

<!-- Hero Section -->
<section id="inicio" class="relative overflow-hidden">
  <div class="absolute inset-0 bg-gradient-to-r from-blue-600 to-blue-400 -z-10"></div>
  <div class="container mx-auto flex flex-col md:flex-row items-center py-32 px-4">
    <div class="md:w-1/2" x-data="{hover:false}">
      <h1 class="text-4xl md:text-5xl font-bold mb-6 transform transition-transform duration-700" :class="{'translate-x-0 opacity-100': hover, 'translate-x-10 opacity-0': !hover}" x-intersect.once="hover=true">
        Innovación en Desarrollo de Software
      </h1>
      <p class="mb-6 text-lg opacity-0 transform translate-y-6 transition-all duration-700" x-intersect.once="hover=true" x-bind:class="hover?'opacity-100 translate-y-0':''">
        Creamos aplicaciones web, móviles y software a medida para empresas que desean crecer con tecnología moderna.
      </p>
      <div class="flex space-x-4 opacity-0 transform translate-y-6 transition-all duration-700" x-intersect.once="hover=true" x-bind:class="hover?'opacity-100 translate-y-0':''">
        <a href="#contacto" class="bg-white text-blue-600 px-6 py-3 rounded-md font-semibold hover:bg-gray-100 transition duration-300">Solicitar Consulta</a>
        <a href="#portfolio" class="border border-white px-6 py-3 rounded-md font-semibold hover:bg-white hover:text-blue-600 transition">Ver Portfolio</a>
      </div>
    </div>
    <div class="md:w-1/2 mt-10 md:mt-0 flex justify-center">
      <img src="assets/hero.svg" alt="Desarrollo de software" class="w-80 md:w-96 transform transition-transform duration-500 hover:scale-105">
    </div>
  </div>
  <div class="absolute bottom-0 left-0 w-full h-32 bg-white rounded-t-full opacity-20 transform translate-y-10"></div>
</section>

<!-- Servicios Section -->
<section id="servicios" class="py-20">
  <div class="container mx-auto text-center">
    <h2 class="text-3xl font-bold mb-12">Nuestros Servicios</h2>
    <div class="grid md:grid-cols-3 gap-8">
      <div class="bg-white p-8 rounded-xl shadow hover:shadow-2xl transition duration-500 transform hover:-translate-y-2">
        <h3 class="text-xl font-semibold mb-4">Desarrollo Web</h3>
        <p>Páginas web rápidas, modernas y optimizadas para tu negocio.</p>
      </div>
      <div class="bg-white p-8 rounded-xl shadow hover:shadow-2xl transition duration-500 transform hover:-translate-y-2">
        <h3 class="text-xl font-semibold mb-4">Apps Móviles</h3>
        <p>Aplicaciones nativas y multiplataforma para iOS y Android.</p>
      </div>
      <div class="bg-white p-8 rounded-xl shadow hover:shadow-2xl transition duration-500 transform hover:-translate-y-2">
        <h3 class="text-xl font-semibold mb-4">Software a Medida</h3>
        <p>Sistemas empresariales personalizados para automatizar procesos.</p>
      </div>
    </div>
  </div>
</section>

<!-- Nosotros Section -->
<section id="nosotros" class="py-20 bg-gray-50">
  <div class="container mx-auto text-center">
    <h2 class="text-3xl font-bold mb-12">Sobre Nosotros</h2>
    <p class="max-w-2xl mx-auto mb-12 text-lg">Somos un equipo apasionado por la tecnología, la innovación y el diseño. Combinamos experiencia, creatividad y estrategia para ofrecer soluciones digitales que marcan la diferencia.</p>
    <div class="grid md:grid-cols-3 gap-8 mb-12">
      <div class="bg-white p-8 rounded-xl shadow hover:shadow-2xl transition-transform duration-500 transform hover:-translate-y-2">
        <h3 class="text-xl font-semibold mb-4">Visión</h3>
        <p>Convertirnos en referentes de soluciones tecnológicas innovadoras y eficientes.</p>
      </div>
      <div class="bg-white p-8 rounded-xl shadow hover:shadow-2xl transition-transform duration-500 transform hover:-translate-y-2">
        <h3 class="text-xl font-semibold mb-4">Misión</h3>
        <p>Crear software que impulse el crecimiento y la transformación digital de nuestros clientes.</p>
      </div>
      <div class="bg-white p-8 rounded-xl shadow hover:shadow-2xl transition-transform duration-500 transform hover:-translate-y-2">
        <h3 class="text-xl font-semibold mb-4">Valores</h3>
        <p>Excelencia, innovación, compromiso y pasión por la tecnología.</p>
      </div>
    </div>
    <h3 class="text-2xl font-bold mb-6">Nuestro Equipo</h3>
    <div class="grid md:grid-cols-4 gap-6">
      <div class="bg-white p-6 rounded-xl shadow hover:shadow-2xl transition transform hover:-translate-y-2">
        <img src="assets/team1.jpg" alt="Miembro del equipo" class="w-32 h-32 mx-auto rounded-full mb-4 object-cover">
        <h4 class="font-semibold mb-2">Iván Carmona</h4>
        <p class="text-gray-500">CEO & Lead Developer</p>
      </div>
      <div class="bg-white p-6 rounded-xl shadow hover:shadow-2xl transition transform hover:-translate-y-2">
        <img src="assets/team2.jpg" alt="Miembro del equipo" class="w-32 h-32 mx-auto rounded-full mb-4 object-cover">
        <h4 class="font-semibold mb-2">Laura Martínez</h4>
        <p class="text-gray-500">Project Manager</p>
      </div>
      <div class="bg-white p-6 rounded-xl shadow hover:shadow-2xl transition transform hover:-translate-y-2">
        <img src="assets/team3.jpg" alt="Miembro del equipo" class="w-32 h-32 mx-auto rounded-full mb-4 object-cover">
        <h4 class="font-semibold mb-2">Carlos Pérez</h4>
        <p class="text-gray-500">UX/UI Designer</p>
      </div>
      <div class="bg-white p-6 rounded-xl shadow hover:shadow-2xl transition transform hover:-translate-y-2">
        <img src="assets/team4.jpg" alt="Miembro del equipo" class="w-32 h-32 mx-auto rounded-full mb-4 object-cover">
        <h4 class="font-semibold mb-2">Sofía Gómez</h4>
        <p class="text-gray-500">QA & Backend</p>
      </div>
    </div>
  </div>
</section>

<!-- Portfolio Section -->
<section id="portfolio" class="py-20 bg-white">
  <div class="container mx-auto text-center">
    <h2 class="text-3xl font-bold mb-12">Portfolio Destacado</h2>
    <div class="grid md:grid-cols-3 gap-6">
      <div class="relative group rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition">
        <img src="assets/project1.jpg" alt="Proyecto 1" class="w-full h-64 object-cover transform group-hover:scale-110 transition duration-500">
        <div class="absolute inset-0 bg-black bg-opacity-40 flex flex-col justify-center items-center opacity-0 group-hover:opacity-100 transition duration-500">
          <h4 class="text-white font-bold mb-2">Web Corporativa</h4>
          <p class="text-gray-200">Desarrollo full-stack con React y Node.js</p>
          <a href="#" class="mt-3 px-4 py-2 border border-white text-white rounded hover:bg-white hover:text-black transition">Ver Detalles</a>
        </div>
      </div>
      <div class="relative group rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition">
        <img src="assets/project2.jpg" alt="Proyecto 2" class="w-full h-64 object-cover transform group-hover:scale-110 transition duration-500">
        <div class="absolute inset-0 bg-black bg-opacity-40 flex flex-col justify-center items-center opacity-0 group-hover:opacity-100 transition duration-500">
          <h4 class="text-white font-bold mb-2">App Móvil</h4>
          <p class="text-gray-200">Aplicación nativa iOS/Android con Firebase</p>
          <a href="#" class="mt-3 px-4 py-2 border border-white text-white rounded hover:bg-white hover:text-black transition">Ver Detalles</a>
        </div>
      </div>
      <div class="relative group rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition">
        <img src="assets/project3.jpg" alt="Proyecto 3" class="w-full h-64 object-cover transform group-hover:scale-110 transition duration-500">
        <div class="absolute inset-0 bg-black bg-opacity-40 flex flex-col justify-center items-center opacity-0 group-hover:opacity-100 transition duration-500">
          <h4 class="text-white font-bold mb-2">Software Empresarial</h4>
          <p class="text-gray-200">Sistema a medida para gestión de procesos internos</p>
          <a href="#" class="mt-3 px-4 py-2 border border-white text-white rounded hover:bg-white hover:text-black transition">Ver Detalles</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Contact Section -->
<section id="contacto" class="py-20 bg-blue-50">
  <div class="container mx-auto max-w-3xl">
    <h2 class="text-3xl font-bold text-center mb-12">Contáctanos</h2>
    <form class="bg-white p-8 rounded-xl shadow-lg space-y-6">
      <div>
        <label class="block text-gray-700 mb-2" for="name">Nombre</label>
        <input type="text" id="name" class="w-full border border-gray-300 p-3 rounded focus:ring-2 focus:ring-blue-600 focus:outline-none" placeholder="Su nombre">
      </div>
      <div>
        <label class="block text-gray-700 mb-2" for="email">Correo Electrónico</label>
        <input type="email" id="email" class="w-full border border-gray-300 p-3 rounded focus:ring-2 focus:ring-blue-600 focus:outline-none" placeholder="su@correo.com">
      </div>
      <div>
        <label class="block text-gray-700 mb-2" for="message">Mensaje</label>
        <textarea id="message" rows="5" class="w-full border border-gray-300 p-3 rounded focus:ring-2 focus:ring-blue-600 focus:outline-none" placeholder="Escriba su mensaje"></textarea>
      </div>
      <button type="submit" class="bg-blue-600 text-white w-full py-3 rounded-md font-semibold hover:bg-blue-700 transition duration-300">Enviar Mensaje</button>
    </form>
  </div>
</section>

<!-- Footer -->
<footer class="bg-blue-600 text-white py-12">
  <div class="container mx-auto grid md:grid-cols-3 gap-8 text-center md:text-left">
    <div>
      <h4 class="font-bold mb-4">Empresa</h4>
      <p>Desarrollo web, aplicaciones móviles y software empresarial.</p>
    </div>
    <div>
      <h4 class="font-bold mb-4">Servicios</h4>
      <p>Desarrollo Web</p>
      <p>Apps Móviles</p>
      <p>Software a Medida</p>
    </div>
    <div>
      <h4 class="font-bold mb-4">Contacto</h4>
      <p>info@empresa.com</p>
      <p>+34 000 000 000</p>
      <p>Ciudad, País</p>
    </div>
  </div>
</footer>

<!-- Scroll suave -->
<script>
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function(e) {
    e.preventDefault();
    const target = document.querySelector(this.getAttribute('href'));
    if (target) {
      const yOffset = -80; // Altura del header fijo
      const y = target.getBoundingClientRect().top + window.pageYOffset + yOffset;
      window.scrollTo({ top: y, behavior: 'smooth' });
    }
  });
});
</script>

</body>
</html>
