<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>AUREON - @yield('title', 'Software Premium')</title>
<script src="https://cdn.tailwindcss.com"></script>
<script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</head>
    <body class="bg-gray-50 text-gray-800 font-sans">

    <!-- Header -->
        <header class="p-4">
            <div class="container mx-auto flex justify-between items-center px-4">
                <div class="text-2xl font-bold text-blue-600 transition-transform duration-300 hover:scale-105">AUREON</div>
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
    <!-- Joan, socio, te explico la movida. Basicamente esto es la plantilla default, unicamente con el header y el footer, dentro del div "main", aqui abajo, va toda la movida, como ves, llamamos a 'content'. Con 'content' le decimos al controlador que el contenido especifico de una ruta (/) va aqui. --> 
        <main>
            @yield('content')
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
