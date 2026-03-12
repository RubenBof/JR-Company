@extends('layouts.app')
@section('title', 'Contacto')
@section('content')
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
@endsection
