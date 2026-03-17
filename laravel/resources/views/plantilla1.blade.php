@extends('layouts.plantillas_layout')

@section('title', 'Serenity Studio — Yoga & Mindfulness')

@section('content')

    <style>
        html { scroll-behavior: smooth; }
        body { font-family: 'Jost', sans-serif; }

        /* Fade in on load */
        @keyframes fadeUp {
            from { opacity: 0; transform: translateY(24px); }
            to   { opacity: 1; transform: translateY(0); }
        }
        .fade-up { animation: fadeUp 0.9s ease forwards; }
        .delay-1 { animation-delay: 0.15s; opacity: 0; }
        .delay-2 { animation-delay: 0.30s; opacity: 0; }
        .delay-3 { animation-delay: 0.45s; opacity: 0; }
        .delay-4 { animation-delay: 0.60s; opacity: 0; }

        /* Horizontal rule decorative */
        .rule::before, .rule::after {
            content: '';
            flex: 1;
            height: 1px;
            background: currentColor;
            opacity: 0.2;
        }

        /* Subtle hover underline */
        .nav-link {
            position: relative;
        }
        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 0;
            height: 1px;
            background: currentColor;
            transition: width 0.3s ease;
        }
        .nav-link:hover::after { width: 100%; }

        /* Card hover */
        .class-card:hover .class-card-img {
            transform: scale(1.04);
        }

        /* Grain overlay */
        .grain::after {
            content: '';
            position: absolute;
            inset: 0;
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)' opacity='0.04'/%3E%3C/svg%3E");
            pointer-events: none;
            border-radius: inherit;
        }
    </style>
</head>
<body class="bg-stone-50 text-stone-700 antialiased">

    {{-- ─── NAVBAR ─────────────────────────────────────────── --}}
    <nav class="fixed top-0 left-0 right-0 z-50 bg-stone-50/90 backdrop-blur-md border-b border-stone-200/60">
        <div class="max-w-7xl mx-auto px-6 lg:px-12 flex items-center justify-between h-16">
            <a href="#" class="font-display text-xl tracking-wide text-stone-800 italic">Serenity Studio</a>
            <ul class="hidden md:flex gap-10 text-xs font-body font-300 tracking-widest uppercase text-stone-500">
                <li><a href="#clases" class="nav-link hover:text-stone-800 transition-colors">Clases</a></li>
                <li><a href="#nosotros" class="nav-link hover:text-stone-800 transition-colors">Nosotros</a></li>
                <li><a href="#horarios" class="nav-link hover:text-stone-800 transition-colors">Horarios</a></li>
                <li><a href="#contacto" class="nav-link hover:text-stone-800 transition-colors">Contacto</a></li>
            </ul>
            <a href="#reservar" class="hidden md:inline-flex text-xs tracking-widest uppercase font-300 px-5 py-2.5 border border-stone-700 text-stone-700 hover:bg-stone-700 hover:text-stone-50 transition-all duration-300">
                Reservar clase
            </a>
            {{-- Mobile menu button --}}
            <button class="md:hidden text-stone-600" onclick="document.getElementById('mobile-menu').classList.toggle('hidden')">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5M3.75 17.25h16.5"/>
                </svg>
            </button>
        </div>
        {{-- Mobile menu --}}
        <div id="mobile-menu" class="hidden md:hidden bg-stone-50 border-t border-stone-200/60 px-6 py-4 space-y-3">
            <a href="#clases" class="block text-xs tracking-widest uppercase text-stone-500">Clases</a>
            <a href="#nosotros" class="block text-xs tracking-widest uppercase text-stone-500">Nosotros</a>
            <a href="#horarios" class="block text-xs tracking-widest uppercase text-stone-500">Horarios</a>
            <a href="#contacto" class="block text-xs tracking-widest uppercase text-stone-500">Contacto</a>
            <a href="#reservar" class="block text-xs tracking-widest uppercase text-stone-700 font-500 pt-2">Reservar clase →</a>
        </div>
    </nav>

    {{-- ─── HERO ────────────────────────────────────────────── --}}
    <section class="relative min-h-screen flex items-center pt-16 overflow-hidden bg-sand-100">
        {{-- Background decorative circles --}}
        <div class="absolute top-1/4 right-[-8rem] w-[36rem] h-[36rem] rounded-full bg-sage-200/40 blur-3xl pointer-events-none"></div>
        <div class="absolute bottom-[-4rem] left-[-6rem] w-[28rem] h-[28rem] rounded-full bg-sand-300/50 blur-3xl pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-6 lg:px-12 w-full grid lg:grid-cols-2 gap-16 items-center py-24">
            {{-- Text --}}
            <div>
                <p class="fade-up text-xs tracking-widest uppercase text-sage-600 font-body font-400 mb-6">Barcelona · Est. 2018</p>
                <h1 class="fade-up delay-1 font-display text-6xl lg:text-7xl xl:text-8xl leading-none text-stone-800 mb-8">
                    Encuentra<br>
                    <em class="font-light">tu centro.</em>
                </h1>
                <p class="fade-up delay-2 font-body font-300 text-stone-500 text-lg leading-relaxed max-w-md mb-10">
                    Un espacio de práctica consciente donde el movimiento y la respiración se convierten en presencia pura. Clases para todos los niveles.
                </p>
                <div class="fade-up delay-3 flex flex-col sm:flex-row gap-4">
                    <a href="#reservar" class="inline-flex items-center justify-center gap-2 px-8 py-3.5 bg-stone-800 text-stone-50 text-xs tracking-widest uppercase hover:bg-stone-700 transition-colors duration-300">
                        Primera clase gratis
                    </a>
                    <a href="#clases" class="inline-flex items-center justify-center gap-2 px-8 py-3.5 border border-stone-300 text-stone-600 text-xs tracking-widest uppercase hover:border-stone-600 transition-colors duration-300">
                        Ver clases
                    </a>
                </div>
                {{-- Stats --}}
                <div class="fade-up delay-4 flex gap-10 mt-14 pt-10 border-t border-stone-200">
                    <div>
                        <p class="font-display text-4xl text-stone-800">6+</p>
                        <p class="text-xs tracking-wider uppercase text-stone-400 mt-1">Años de práctica</p>
                    </div>
                    <div>
                        <p class="font-display text-4xl text-stone-800">12</p>
                        <p class="text-xs tracking-wider uppercase text-stone-400 mt-1">Tipos de clase</p>
                    </div>
                    <div>
                        <p class="font-display text-4xl text-stone-800">400+</p>
                        <p class="text-xs tracking-wider uppercase text-stone-400 mt-1">Alumnos activos</p>
                    </div>
                </div>
            </div>

            {{-- Image placeholder --}}
            <div class="relative fade-up delay-2">
                <div class="relative aspect-[3/4] bg-sage-200 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1506126613408-eca07ce68773?w=800&q=80"
                         alt="Yoga pose"
                         class="w-full h-full object-cover object-center opacity-90">
                    {{-- Decorative frame --}}
                    <div class="absolute inset-0 ring-1 ring-inset ring-white/20"></div>
                </div>
                {{-- Floating badge --}}
                <div class="absolute -bottom-6 -left-6 bg-stone-50 shadow-lg p-5 w-44">
                    <p class="font-display text-3xl text-stone-800">∞</p>
                    <p class="text-xs tracking-wider uppercase text-stone-500 mt-1">Práctica sin límites</p>
                </div>
            </div>
        </div>
    </section>

    {{-- ─── CLASES ──────────────────────────────────────────── --}}
    <section id="clases" class="py-28 bg-stone-50">
        <div class="max-w-7xl mx-auto px-6 lg:px-12">
            {{-- Section header --}}
            <div class="flex items-center gap-6 rule text-stone-300 mb-6">
                <span class="text-xs tracking-widest uppercase text-stone-400 whitespace-nowrap font-body">Nuestras clases</span>
            </div>
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-16 gap-6">
                <h2 class="font-display text-5xl lg:text-6xl text-stone-800 leading-tight">
                    Un estilo<br><em>para cada uno.</em>
                </h2>
                <p class="font-body font-300 text-stone-500 max-w-xs leading-relaxed">
                    Desde la calma del Yin hasta la energía del Vinyasa, encontrarás la práctica que tu cuerpo necesita.
                </p>
            </div>

            {{-- Classes grid --}}
            <div class="grid md:grid-cols-3 gap-px bg-stone-200">
                @php
                $clases = [
                    ['nombre' => 'Hatha Yoga', 'nivel' => 'Todos los niveles', 'duracion' => '60 min', 'descripcion' => 'La base de toda práctica. Posturas clásicas con atención plena a la respiración y la alineación.', 'img' => 'https://images.unsplash.com/photo-1545389336-cf090694435e?w=600&q=80'],
                    ['nombre' => 'Vinyasa Flow', 'nivel' => 'Intermedio', 'duracion' => '75 min', 'descripcion' => 'Secuencias fluidas sincronizadas con la respiración. Movimiento dinámico y meditativo.', 'img' => 'https://images.unsplash.com/photo-1599447421416-3414500d18a5?w=600&q=80'],
                    ['nombre' => 'Yin Yoga', 'nivel' => 'Todos los niveles', 'duracion' => '75 min', 'descripcion' => 'Posturas pasivas mantenidas para liberar la fascia y calmar el sistema nervioso.', 'img' => 'https://images.unsplash.com/photo-1588286840104-8957b019727f?w=600&q=80'],
                ];
                @endphp

                @foreach($clases as $clase)
                <div class="class-card bg-stone-50 group cursor-pointer overflow-hidden">
                    <div class="overflow-hidden aspect-[4/3]">
                        <img src="{{ $clase['img'] }}" alt="{{ $clase['nombre'] }}"
                             class="class-card-img w-full h-full object-cover transition-transform duration-700 ease-out grayscale group-hover:grayscale-0">
                    </div>
                    <div class="p-8">
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-xs tracking-widest uppercase text-sage-600">{{ $clase['nivel'] }}</span>
                            <span class="text-xs text-stone-400">{{ $clase['duracion'] }}</span>
                        </div>
                        <h3 class="font-display text-2xl text-stone-800 mb-3">{{ $clase['nombre'] }}</h3>
                        <p class="font-body font-300 text-stone-500 text-sm leading-relaxed mb-6">{{ $clase['descripcion'] }}</p>
                        <a href="#reservar" class="text-xs tracking-widest uppercase text-stone-700 hover:text-stone-900 transition-colors group-hover:underline underline-offset-4">
                            Reservar →
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ─── NOSOTROS ────────────────────────────────────────── --}}
    <section id="nosotros" class="py-28 bg-sand-100 relative overflow-hidden">
        <div class="absolute top-0 right-0 w-80 h-80 rounded-full bg-sage-200/30 blur-3xl pointer-events-none translate-x-1/2 -translate-y-1/2"></div>
        <div class="max-w-7xl mx-auto px-6 lg:px-12 grid lg:grid-cols-2 gap-20 items-center">
            {{-- Images collage --}}
            <div class="relative">
                <div class="aspect-square bg-sage-200 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1593164842249-d74fc06dae05?w=700&q=80"
                         alt="Instructora de yoga"
                         class="w-full h-full object-cover">
                </div>
                <div class="absolute -bottom-8 -right-8 w-48 h-56 bg-stone-200 overflow-hidden border-4 border-stone-50">
                    <img src="https://images.unsplash.com/photo-1518611012118-696072aa579a?w=400&q=80"
                         alt="Espacio de yoga"
                         class="w-full h-full object-cover">
                </div>
            </div>
            {{-- Text --}}
            <div>
                <div class="flex items-center gap-6 rule text-stone-300 mb-6">
                    <span class="text-xs tracking-widest uppercase text-stone-400 whitespace-nowrap">Sobre nosotros</span>
                </div>
                <h2 class="font-display text-5xl text-stone-800 leading-tight mb-8">
                    Más que un<br><em>estudio de yoga.</em>
                </h2>
                <p class="font-body font-300 text-stone-500 leading-relaxed mb-6">
                    Serenity Studio nació en 2018 con la convicción de que el yoga es para todos. Nuestro espacio en el corazón de Barcelona es un refugio de calma en medio de la ciudad.
                </p>
                <p class="font-body font-300 text-stone-500 leading-relaxed mb-10">
                    Nuestros profesores son practicantes apasionados con formación internacional, comprometidos con acompañarte en cada paso de tu práctica.
                </p>
                {{-- Profesores --}}
                <div class="flex gap-6">
                    @php
                    $profes = [
                        ['nombre' => 'Marta Serra', 'especialidad' => 'Hatha & Yin', 'img' => 'https://images.unsplash.com/photo-1544005313-94ddf0286df2?w=200&q=80'],
                        ['nombre' => 'Laia Puig', 'especialidad' => 'Vinyasa Flow', 'img' => 'https://images.unsplash.com/photo-1531746020798-e6953c6e8e04?w=200&q=80'],
                        ['nombre' => 'Jordi Mas', 'especialidad' => 'Meditación', 'img' => 'https://images.unsplash.com/photo-1547425260-76bcadfb4f2c?w=200&q=80'],
                    ];
                    @endphp
                    @foreach($profes as $profe)
                    <div class="text-center">
                        <div class="w-14 h-14 rounded-full overflow-hidden mb-2 mx-auto ring-2 ring-stone-200">
                            <img src="{{ $profe['img'] }}" alt="{{ $profe['nombre'] }}" class="w-full h-full object-cover grayscale">
                        </div>
                        <p class="text-xs font-body font-500 text-stone-700">{{ $profe['nombre'] }}</p>
                        <p class="text-xs font-body font-300 text-stone-400">{{ $profe['especialidad'] }}</p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    {{-- ─── HORARIOS ────────────────────────────────────────── --}}
    <section id="horarios" class="py-28 bg-stone-50">
        <div class="max-w-7xl mx-auto px-6 lg:px-12">
            <div class="flex items-center gap-6 rule text-stone-300 mb-6">
                <span class="text-xs tracking-widest uppercase text-stone-400 whitespace-nowrap">Horarios semanales</span>
            </div>
            <h2 class="font-display text-5xl text-stone-800 mb-16">Esta semana.</h2>

            <div class="overflow-x-auto">
                <table class="w-full text-sm font-body font-300">
                    <thead>
                        <tr class="border-b border-stone-200">
                            <th class="text-left text-xs tracking-widest uppercase text-stone-400 pb-4 pr-8 font-400">Horario</th>
                            @foreach(['Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'] as $dia)
                            <th class="text-left text-xs tracking-widest uppercase text-stone-400 pb-4 px-4 font-400">{{ $dia }}</th>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $horarios = [
                            '07:30' => ['Hatha', '', 'Hatha', '', 'Hatha', 'Vinyasa'],
                            '09:00' => ['Vinyasa', 'Yin', '', 'Vinyasa', '', 'Hatha'],
                            '11:00' => ['', 'Hatha', 'Vinyasa', 'Yin', 'Vinyasa', 'Meditación'],
                            '18:00' => ['Yin', 'Vinyasa', 'Hatha', 'Vinyasa', 'Yin', ''],
                            '19:30' => ['Vinyasa', 'Hatha', 'Yin', 'Hatha', 'Vinyasa', ''],
                        ];
                        $colores = ['Hatha' => 'bg-sage-100 text-sage-600', 'Vinyasa' => 'bg-sand-200 text-stone-600', 'Yin' => 'bg-stone-100 text-stone-500', 'Meditación' => 'bg-stone-200 text-stone-600'];
                        @endphp
                        @foreach($horarios as $hora => $clasesDia)
                        <tr class="border-b border-stone-100 hover:bg-stone-50/80 transition-colors">
                            <td class="py-4 pr-8 text-xs tracking-wider text-stone-400 font-400">{{ $hora }}</td>
                            @foreach($clasesDia as $clase)
                            <td class="py-4 px-4">
                                @if($clase)
                                <span class="inline-block text-xs px-3 py-1 tracking-wide {{ $colores[$clase] ?? 'bg-stone-100 text-stone-500' }}">
                                    {{ $clase }}
                                </span>
                                @else
                                <span class="text-stone-200">—</span>
                                @endif
                            </td>
                            @endforeach
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    {{-- ─── TESTIMONIOS ─────────────────────────────────────── --}}
    <section class="py-28 bg-stone-800 text-stone-100">
        <div class="max-w-7xl mx-auto px-6 lg:px-12">
            <div class="flex items-center gap-6 rule text-stone-600 mb-6">
                <span class="text-xs tracking-widest uppercase text-stone-400 whitespace-nowrap">Testimonios</span>
            </div>
            <h2 class="font-display text-5xl text-stone-100 mb-16">Lo que dicen<br><em class="font-light">nuestros alumnos.</em></h2>

            <div class="grid md:grid-cols-3 gap-px bg-stone-700">
                @php
                $testimonios = [
                    ['texto' => 'Llevar más de dos años practicando aquí y cada clase sigue siendo una sorpresa. Marta tiene una manera de enseñar que te hace sentir en casa desde el primer día.', 'nombre' => 'Carmen López', 'desde' => 'Alumna desde 2022'],
                    ['texto' => 'Empecé sin saber nada de yoga y ahora es la parte del día que más espero. El ambiente del estudio es único, muy diferente a los gimnasios convencionales.', 'nombre' => 'David Roca', 'desde' => 'Alumno desde 2023'],
                    ['texto' => 'Las clases de Yin Yoga de Laia son terapéuticas. Noto la diferencia en mi espalda y en mi estado de ánimo. 100% recomendable.', 'nombre' => 'Núria Ferrer', 'desde' => 'Alumna desde 2021'],
                ];
                @endphp
                @foreach($testimonios as $t)
                <div class="bg-stone-800 p-10">
                    <p class="font-display text-3xl text-stone-300 mb-2">"</p>
                    <p class="font-body font-300 text-stone-400 leading-relaxed mb-8 text-sm">{{ $t['texto'] }}</p>
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-px bg-stone-600"></div>
                        <div>
                            <p class="text-xs font-body font-500 text-stone-300 tracking-wide">{{ $t['nombre'] }}</p>
                            <p class="text-xs font-body font-300 text-stone-600">{{ $t['desde'] }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ─── PRECIOS ─────────────────────────────────────────── --}}
    <section class="py-28 bg-stone-50">
        <div class="max-w-7xl mx-auto px-6 lg:px-12">
            <div class="flex items-center gap-6 rule text-stone-300 mb-6">
                <span class="text-xs tracking-widest uppercase text-stone-400 whitespace-nowrap">Bonos & tarifas</span>
            </div>
            <h2 class="font-display text-5xl text-stone-800 mb-16">Elige tu<br><em>ritmo.</em></h2>

            <div class="grid md:grid-cols-3 gap-8">
                @php
                $bonos = [
                    ['nombre' => 'Clase suelta', 'precio' => '18', 'desc' => 'Ven cuando quieras, sin compromisos.', 'incluye' => ['Acceso a 1 clase', 'Todos los estilos', 'Mat incluido'], 'destacado' => false],
                    ['nombre' => 'Bono 10 clases', 'precio' => '140', 'desc' => 'El favorito de nuestros alumnos. Sin caducidad.', 'incluye' => ['10 clases a elegir', 'Todos los estilos', 'Mat incluido', 'Sin caducidad'], 'destacado' => true],
                    ['nombre' => 'Mensual ilimitado', 'precio' => '79', 'desc' => 'Practica todos los días del mes.', 'incluye' => ['Clases ilimitadas', 'Todos los estilos', 'Mat incluido', 'Acceso a workshops'], 'destacado' => false],
                ];
                @endphp
                @foreach($bonos as $bono)
                <div class="relative border {{ $bono['destacado'] ? 'border-stone-800 bg-stone-800 text-stone-100' : 'border-stone-200 bg-stone-50 text-stone-700' }} p-10 transition-shadow hover:shadow-lg">
                    @if($bono['destacado'])
                    <span class="absolute -top-3 left-8 text-xs tracking-widest uppercase bg-sage-400 text-white px-3 py-1">Más popular</span>
                    @endif
                    <p class="text-xs tracking-widest uppercase {{ $bono['destacado'] ? 'text-stone-400' : 'text-stone-400' }} mb-4">{{ $bono['nombre'] }}</p>
                    <p class="font-display text-5xl {{ $bono['destacado'] ? 'text-stone-100' : 'text-stone-800' }} mb-1">€{{ $bono['precio'] }}</p>
                    <p class="text-xs font-300 {{ $bono['destacado'] ? 'text-stone-400' : 'text-stone-400' }} mb-8">{{ $bono['desc'] }}</p>
                    <ul class="space-y-2 mb-10">
                        @foreach($bono['incluye'] as $item)
                        <li class="flex items-center gap-2 text-sm font-300 {{ $bono['destacado'] ? 'text-stone-300' : 'text-stone-500' }}">
                            <span class="{{ $bono['destacado'] ? 'text-sage-300' : 'text-sage-500' }}">✓</span> {{ $item }}
                        </li>
                        @endforeach
                    </ul>
                    <a href="#reservar" class="block text-center text-xs tracking-widest uppercase py-3 border {{ $bono['destacado'] ? 'border-stone-500 text-stone-200 hover:bg-stone-700' : 'border-stone-700 text-stone-700 hover:bg-stone-700 hover:text-stone-50' }} transition-all duration-300">
                        Empezar
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ─── RESERVAR / CTA ──────────────────────────────────── --}}
    <section id="reservar" class="py-28 bg-sage-100">
        <div class="max-w-2xl mx-auto px-6 text-center">
            <p class="text-xs tracking-widest uppercase text-sage-600 mb-6">Primera clase gratuita</p>
            <h2 class="font-display text-5xl lg:text-6xl text-stone-800 mb-6 leading-tight">
                Tu práctica<br><em>empieza hoy.</em>
            </h2>
            <p class="font-body font-300 text-stone-500 mb-10 leading-relaxed">
                Déjanos tus datos y te contactamos para encontrar la clase perfecta para ti. Sin compromisos.
            </p>
            <form class="space-y-4 text-left">
                <div class="grid sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs tracking-widest uppercase text-stone-400 mb-2">Nombre</label>
                        <input type="text" placeholder="Tu nombre" class="w-full border border-stone-300 bg-transparent px-4 py-3 text-sm font-body font-300 text-stone-700 placeholder-stone-300 focus:outline-none focus:border-stone-600 transition-colors">
                    </div>
                    <div>
                        <label class="block text-xs tracking-widest uppercase text-stone-400 mb-2">Teléfono</label>
                        <input type="tel" placeholder="612 345 678" class="w-full border border-stone-300 bg-transparent px-4 py-3 text-sm font-body font-300 text-stone-700 placeholder-stone-300 focus:outline-none focus:border-stone-600 transition-colors">
                    </div>
                </div>
                <div>
                    <label class="block text-xs tracking-widest uppercase text-stone-400 mb-2">Email</label>
                    <input type="email" placeholder="hola@example.com" class="w-full border border-stone-300 bg-transparent px-4 py-3 text-sm font-body font-300 text-stone-700 placeholder-stone-300 focus:outline-none focus:border-stone-600 transition-colors">
                </div>
                <div>
                    <label class="block text-xs tracking-widest uppercase text-stone-400 mb-2">¿Qué tipo de clase te interesa?</label>
                    <select class="w-full border border-stone-300 bg-transparent px-4 py-3 text-sm font-body font-300 text-stone-500 focus:outline-none focus:border-stone-600 transition-colors appearance-none">
                        <option value="">Selecciona una opción</option>
                        <option>Hatha Yoga</option>
                        <option>Vinyasa Flow</option>
                        <option>Yin Yoga</option>
                        <option>No lo sé aún</option>
                    </select>
                </div>
                <div class="pt-2">
                    <button type="submit" class="w-full bg-stone-800 text-stone-50 text-xs tracking-widest uppercase py-4 hover:bg-stone-700 transition-colors duration-300">
                        Quiero mi clase gratis
                    </button>
                </div>
                <p class="text-xs text-stone-400 text-center font-300">Te responderemos en menos de 24 horas</p>
            </form>
        </div>
    </section>

    {{-- ─── CONTACTO ────────────────────────────────────────── --}}
    <section id="contacto" class="py-20 bg-stone-50 border-t border-stone-200">
        <div class="max-w-7xl mx-auto px-6 lg:px-12 grid md:grid-cols-3 gap-12 text-center md:text-left">
            <div>
                <p class="text-xs tracking-widest uppercase text-stone-400 mb-3">Dirección</p>
                <p class="font-body font-300 text-stone-600 text-sm leading-relaxed">Carrer de Provença, 234<br>08008 Barcelona</p>
            </div>
            <div>
                <p class="text-xs tracking-widest uppercase text-stone-400 mb-3">Contacto</p>
                <p class="font-body font-300 text-stone-600 text-sm">hola@serenitystudio.es</p>
                <p class="font-body font-300 text-stone-600 text-sm">+34 932 123 456</p>
            </div>
            <div>
                <p class="text-xs tracking-widest uppercase text-stone-400 mb-3">Horario de recepción</p>
                <p class="font-body font-300 text-stone-600 text-sm">Lun – Vie: 7:00 – 21:00</p>
                <p class="font-body font-300 text-stone-600 text-sm">Sábados: 8:30 – 14:00</p>
            </div>
        </div>
    </section>

    {{-- ─── FOOTER ──────────────────────────────────────────── --}}
    <footer class="bg-stone-900 text-stone-500 py-10">
        <div class="max-w-7xl mx-auto px-6 lg:px-12 flex flex-col md:flex-row items-center justify-between gap-4">
            <a href="#" class="font-display text-xl text-stone-300 italic">Serenity Studio</a>
            <p class="text-xs font-body font-300 tracking-wide">© {{ date('Y') }} Serenity Studio · Barcelona</p>
            <div class="flex gap-6 text-xs tracking-widest uppercase">
                <a href="#" class="hover:text-stone-300 transition-colors">Instagram</a>
                <a href="#" class="hover:text-stone-300 transition-colors">Privacidad</a>
                <a href="#" class="hover:text-stone-300 transition-colors">Aviso legal</a>
            </div>
        </div>
    </footer>

</body>
</html>
@endsection