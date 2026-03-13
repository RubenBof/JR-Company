@extends('layouts.app')
@section('title', 'Inicio')
@section('content')
<section class="relative bg-white pt-[120px] pb-[110px] lg:pt-[150px]">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap items-center -mx-4">
                <div class="w-full px-4 lg:w-1/2">
                    <div class="hero-content">
                        <h1 class="mb-5 text-4xl font-bold !leading-[1.2] text-dark sm:text-[42px] lg:text-[40px] xl:text-[45px]">
                            Transformamos tus ideas en <span class="text-blue-600">Software de Alto Impacto</span>
                        </h1>
                        <p class="mb-8 max-w-[480px] text-base text-body-color text-gray-600">
                            En <b>BOF Tech</b>, desarrollamos soluciones digitales a medida que escalan tu negocio. Desde aplicaciones web complejas hasta interfaces de usuario intuitivas.
                        </p>
                        <ul class="flex flex-wrap items-center space-x-4">
                            <li>
                                <a href="{{ url('/contacto') }}" class="inline-flex items-center justify-center px-6 py-3 text-base font-medium text-center text-white bg-blue-600 rounded-md hover:bg-blue-700 transition duration-300">
                                    Empezar Proyecto
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/portfolio') }}" class="inline-flex items-center justify-center px-6 py-3 text-base font-medium text-center text-gray-700 bg-gray-100 rounded-md hover:bg-gray-200 transition duration-300">
                                    Ver Portfolio
                                </a>
                            </li>
                                                        <li>
                                <a href="{{ url('/plantillas') }}" class="inline-flex items-center justify-center px-6 py-3 text-base font-medium text-center text-gray-700 bg-gray-100 rounded-md hover:bg-gray-200 transition duration-300">
                                    Ver Plantillas
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="w-full px-4 lg:w-1/2">
                    <div class="relative z-10 lg:ml-auto mt-12 lg:mt-0">
                        <div class="rounded-xl shadow-lg border border-gray-100 overflow-hidden group hover:shadow-2xl transition duration-500">
                            <img src="{{ asset('cabecera1.png') }}" alt="AUREON Minimalist Concept" class="w-full h-full object-cover">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pb-20">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="p-8 border border-gray-100 rounded-2xl bg-white shadow-sm hover:shadow-md transition">
                    <div class="w-12 h-12 bg-blue-100 text-blue-600 rounded-lg flex items-center justify-center mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Velocidad</h3>
                    <p class="text-gray-600">Optimizamos cada línea de código para un rendimiento máximo.</p>
                </div>

                <div class="p-8 border border-gray-100 rounded-2xl bg-white shadow-sm hover:shadow-md transition">
                    <div class="w-12 h-12 bg-blue-100 text-blue-600 rounded-lg flex items-center justify-center mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Seguridad</h3>
                    <p class="text-gray-600">Implementamos los más altos estándares de protección de datos.</p>
                </div>

                <div class="p-8 border border-gray-100 rounded-2xl bg-white shadow-sm hover:shadow-md transition">
                    <div class="w-12 h-12 bg-blue-100 text-blue-600 rounded-lg flex items-center justify-center mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.172-1.172a4 4 0 015.656 5.656L10 17.657l-6.828-6.829a4 4 0 015.656-5.656l1.172 1.172z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Diseño UX</h3>
                    <p class="text-gray-600">Interfaces centradas en el usuario para una experiencia fluida.</p>
                </div>
            </div>
        </div>
    </section>
  @endsection




