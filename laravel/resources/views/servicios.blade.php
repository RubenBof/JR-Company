@extends('layouts.app')
@section('title', 'servicios')
@section('content')
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

@endsection
