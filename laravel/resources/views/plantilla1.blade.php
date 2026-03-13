<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>BOF - Plantilla 1</title>
<script src="https://cdn.tailwindcss.com"></script>
<script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</head>
    <body class="bg-gray-50 text-gray-800 font-sans">

    <!-- Header -->
        <header class="p-4">
            <div class="container mx-auto flex justify-between items-center px-4">
                <div class="text-2xl font-bold text-blue-600 transition-transform duration-300 hover:scale-105">BOF</div>
                <nav class="space-x-6 hidden md:flex">
                    <a href="{{ url('/') }}" class="hover:text-blue-600 transition-colors duration-300">Inicio</a>
                    <a href="{{ url('/servicios') }}" class="hover:text-blue-600 transition-colors duration-300">Servicios</a>
                    <a href="{{ url('/nosotros') }}" class="hover:text-blue-600 transition-colors duration-300">Nosotros</a>
                    <a href="{{ url('/portfolio') }}" class="hover:text-blue-600 transition-colors duration-300">Portfolio</a>
                    <a href="{{ url('/contacto') }}"class="hover:text-blue-600 transition-colors duration-300">Contacto</a>
                </nav>
                <a href="#contacto" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition-all duration-300">Contáctanos</a>
            </div>
        </header>

    <!-- Main -->
        <main>
            <div class="p-8 m-8 bg-red-100">
                locote
            </div>
        </main>
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
    </body>
</html>
