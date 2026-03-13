@extends('layouts.app')
@section('title', 'Sobre nosotros')
@section('content')
    <section id="plantillas" class="py-20 bg-white">
    <div class="container mx-auto text-center">
        <h2 class="text-3xl font-bold mb-12">Nuestras plantillas</h2>
        <div class="grid md:grid-cols-3 gap-3">
            <div class="relative group rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition">
                <img src="assets/project1.jpg" alt="Plantilla 1" class="w-full h-64 object-cover transform group-hover:scale-110 transition duration-500">
                <div class="absolute inset-0 bg-black bg-opacity-40 flex flex-col justify-center items-center opacity-0 group-hover:opacity-100 transition duration-500">
                    <h4 class="text-white font-bold mb-2">Web Corporativa</h4>
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
@endsection
