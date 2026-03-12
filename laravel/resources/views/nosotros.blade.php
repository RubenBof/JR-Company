@extends('layouts.app')
@section('title', 'Sobre nosotros')
@section('content')
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
        </div>
    </section>
@endsection
