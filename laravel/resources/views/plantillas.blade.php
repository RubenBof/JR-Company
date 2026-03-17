@extends('layouts.app')

@section('title', 'Plantillas')

@section('content')
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;1,300;1,400&family=Jost:wght@300;400;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        stone: {
                            50: '#fafaf9',
                            100: '#f5f5f4',
                            200: '#e7e5e4',
                            300: '#d6d3d1',
                            400: '#a8a29e',
                            500: '#78716c',
                            600: '#57534e',
                            700: '#44403c',
                            800: '#292524',
                            900: '#1c1917',
                        },
                        sage: {
                            100: '#f0f4f0',
                            200: '#dce8dc',
                            300: '#b8d0b8',
                            400: '#8ab48a',
                            500: '#6a9a6a',
                            600: '#4e7a4e',
                        },
                        sand: {
                            100: '#fdf8f2',
                            200: '#f5ead8',
                            300: '#e8d5b7',
                            400: '#d4b896',
                        },
                        velvet: {
                            900: '#0a0a0f',
                            800: '#13131c',
                            700: '#1c1c2e',
                            600: '#252540',
                            500: '#2e2e52',
                        },
                        gold: {
                            300: '#f5d68a',
                            400: '#e8bc5a',
                            500: '#c9952a',
                            600: '#9a6e18',
                        },
                        mist: {
                            400: '#9b9bbf',
                            500: '#7070a0',
                            600: '#505078',
                        },
                        noir: {
                            950: '#080808',
                            900: '#0f0f0f',
                            800: '#1a1a1a',
                            700: '#252525',
                            600: '#333333',
                            500: '#444444',
                        },
                        champagne: {
                            300: '#f7e8c8',
                            400: '#e8cfa0',
                            500: '#c9a96e',
                            600: '#a07840',
                        },
                        pearl: {
                            100: '#f9f7f4',
                            200: '#ede8e0',
                            300: '#d4ccc0',
                            400: '#b0a594',
                        }
                    },
                    fontFamily: {
                        serenity: ['Cormorant Garamond', 'serif'],
                        serenityBody: ['Jost', 'sans-serif'],

                        velvet: ['DM Serif Display', 'serif'],
                        velvetBody: ['DM Sans', 'sans-serif'],

                        sarto: ['Playfair Display', 'serif'],
                        sartoBody: ['Outfit', 'sans-serif'],
                    }
                }
            }
        }
    </script>
<section class="py-20 bg-white">
    <div class="max-w-6xl mx-auto text-center px-6">
    <h2 class="text-4xl font-bold mb-4">Plantillas</h2>
    <p class="text-gray-500 mb-12">
        Diferentes estilos de diseño y desarrollo frontend
    </p>

    <div class="grid md:grid-cols-3 gap-8">

        {{-- SERENITY (Yoga / claro / minimal) --}}
        <div class="rounded-2xl overflow-hidden shadow-lg p-6 bg-stone-100 text-stone-700 hover:shadow-2xl transition flex flex-col justify-between">
            <div class="text-left">
                <h3 class="text-2xl mb-2 font-serenity text-xl tracking-wide text-stone-800 italic">Serenity Studio</h3>
                <p class="text-gray-500 text-sm mb-6">
                    Diseño limpio, tipografía elegante y enfoque minimalista
                </p>

                    <a href="#reservar" class="inline-flex items-center justify-center gap-2 px-8 py-3.5 bg-stone-800 text-stone-50 text-xs tracking-widest uppercase hover:bg-stone-700 transition-colors duration-300">
                        Reserva tu clase
                    </a>
            </div>

            <a href="/plantilla1" class="mt-6 text-sm text-gray-600 hover:underline">
                Ver demo →
            </a>
        </div>


        {{-- VELVET (oscuro / app música) --}}
        <div class="rounded-2xl overflow-hidden shadow-lg p-6 bg-velvet-900 text-white hover:shadow-2xl transition flex flex-col justify-between">
            <div class="text-left">
                <h3 class="font-velvet bold text-2xl text-gold-400 italic tracking-wide">Velvet</h3>
                <p class="text-gray-400 text-sm mb-6">
                    Interfaz oscura, moderna y centrada en contenido multimedia
                </p>

                <button class="px-4 py-2 bg-gold-400 text-black text-sm rounded-full hover:bg-yellow-400 transition">
                    Reproducir
                </button>
            </div>

            <a href="/plantilla2" class="mt-6 text-sm text-gray-400 hover:text-white">
                Ver demo →
            </a>
        </div>


        {{-- SARTO (lujo / elegante) --}}
        <div class="rounded-2xl overflow-hidden shadow-lg p-6 bg-[#1a1a1a] text-white hover:shadow-2xl transition flex flex-col justify-between border border-gray-800">
            <div class="text-left">
                <h3 class="text-2xl font-sarto mb-2 tracking-wide">SARTO</h3>
                <p class="text-gray-400 text-sm mb-6">
                    Estética premium con tonos oscuros y tipografía refinada
                </p>

                <button class="px-4 py-2 border border-white text-sm uppercase tracking-wider hover:bg-white hover:text-black transition">
                    Explorar colección
                </button>
            </div>

            <a href="/plantilla3" class="mt-6 text-sm text-gray-400 hover:text-white">
                Ver demo →
            </a>
        </div>

    </div>
</div>
```

</section>
@endsection
