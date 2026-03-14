<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SARTO — Sastrería de lujo</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,700;1,400;1,500&family=Outfit:wght@200;300;400;500&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
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
                        display: ['Playfair Display', 'serif'],
                        body: ['Outfit', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    <style>
        html { scroll-behavior: smooth; }
        body { font-family: 'Outfit', sans-serif; background: #0f0f0f; color: #ede8e0; }

        /* Scrollbar */
        ::-webkit-scrollbar { width: 4px; }
        ::-webkit-scrollbar-track { background: #0f0f0f; }
        ::-webkit-scrollbar-thumb { background: #333; border-radius: 2px; }

        /* Fade up */
        @keyframes fadeUp {
            from { opacity: 0; transform: translateY(20px); }
            to   { opacity: 1; transform: translateY(0); }
        }
        .fade-up { animation: fadeUp 0.8s ease forwards; }
        .d1 { animation-delay: 0.1s; opacity: 0; }
        .d2 { animation-delay: 0.2s; opacity: 0; }
        .d3 { animation-delay: 0.3s; opacity: 0; }
        .d4 { animation-delay: 0.4s; opacity: 0; }

        /* Nav link */
        .nav-link { position: relative; }
        .nav-link::after { content: ''; position: absolute; bottom: -2px; left: 0; width: 0; height: 1px; background: #e8cfa0; transition: width 0.3s ease; }
        .nav-link:hover::after { width: 100%; }

        /* Product card */
        .product-card .product-img { transition: transform 0.7s cubic-bezier(0.25, 0.46, 0.45, 0.94); }
        .product-card:hover .product-img { transform: scale(1.06); }
        .product-card .product-overlay { opacity: 0; transition: opacity 0.3s ease; }
        .product-card:hover .product-overlay { opacity: 1; }
        .product-card .product-tag { transform: translateY(8px); transition: transform 0.3s ease, opacity 0.3s ease; opacity: 0; }
        .product-card:hover .product-tag { transform: translateY(0); opacity: 1; }

        /* Size selector */
        .size-btn { transition: all 0.2s ease; }
        .size-btn:hover, .size-btn.active { background: #e8cfa0; color: #0f0f0f; border-color: #e8cfa0; }

        /* Noise grain */
        body::before {
            content: '';
            position: fixed;
            inset: 0;
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.85' numOctaves='4'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.025'/%3E%3C/svg%3E");
            pointer-events: none;
            z-index: 9999;
        }

        /* Cart badge */
        .cart-badge { animation: fadeUp 0.3s ease; }

        /* Marquee */
        @keyframes marquee { from { transform: translateX(0); } to { transform: translateX(-50%); } }
        .marquee-inner { animation: marquee 20s linear infinite; white-space: nowrap; display: flex; }

        /* Hover underline gold */
        .gold-hover:hover { color: #e8cfa0; transition: color 0.2s; }

        /* Image zoom modal */
        #modal { display: none; }
        #modal.open { display: flex; }
    </style>
</head>
<body class="antialiased">

@php
$categorias = ['Todo', 'Trajes', 'Americanas', 'Pantalones', 'Accesorios'];

$productos = [
    [
        'id' => 1, 'nombre' => 'Traje Príncipe de Gales', 'categoria' => 'Trajes',
        'precio' => '890', 'precio_antes' => null,
        'descripcion' => 'Lana Super 120s con patrón príncipe de Gales en gris antracita. Chaqueta de dos botones con solapa en pico y pantalón de pinzas. Forro completo en seda italiana.',
        'tallas' => ['46','48','50','52','54'], 'colores' => ['#2a2a2a','#3b3b3b','#1a1a2e'],
        'nuevo' => true, 'agotado' => false,
        'img' => 'https://images.unsplash.com/photo-1507679799987-c73779587ccf?w=600&q=80',
        'img2' => 'https://images.unsplash.com/photo-1617137968427-85924c800a22?w=600&q=80',
    ],
    [
        'id' => 2, 'nombre' => 'Traje Tuxedo Medianoche', 'categoria' => 'Trajes',
        'precio' => '1.150', 'precio_antes' => '1.490',
        'descripcion' => 'Esmoquin en lana y mohair con solapa chal en seda shantung. Pantalón con galón lateral. La elegancia absoluta para las noches más especiales.',
        'tallas' => ['46','48','50','52'], 'colores' => ['#0a0a0a','#1a1a2e'],
        'nuevo' => false, 'agotado' => false,
        'img' => 'https://images.unsplash.com/photo-1600091166971-7f9faad6c498?w=600&q=80',
        'img2' => 'https://images.unsplash.com/photo-1617137968427-85924c800a22?w=600&q=80',
    ],
    [
        'id' => 3, 'nombre' => 'Americana Flanela Carbón', 'categoria' => 'Americanas',
        'precio' => '550', 'precio_antes' => null,
        'descripcion' => 'Flanela de lana inglesa en tono carbón. Corte slim con hombreras naturales y bolsillos de vivo. Versátil para el día y la noche.',
        'tallas' => ['46','48','50','52','54','56'], 'colores' => ['#2a2a2a','#1c1c2e','#3d2b1f'],
        'nuevo' => true, 'agotado' => false,
        'img' => 'https://images.unsplash.com/photo-1593030761757-71fae45fa0e7?w=600&q=80',
        'img2' => 'https://images.unsplash.com/photo-1617137968427-85924c800a22?w=600&q=80',
    ],
    [
        'id' => 4, 'nombre' => 'Pantalón Sastre Gabardina', 'categoria' => 'Pantalones',
        'precio' => '245', 'precio_antes' => null,
        'descripcion' => 'Gabardina de lana peinada con caída impecable. Pinzas dobles y cinturilla con trabillas. Combinable con cualquier americana de la colección.',
        'tallas' => ['44','46','48','50','52','54'], 'colores' => ['#1a1a1a','#2a2a2a','#3b3b3b'],
        'nuevo' => false, 'agotado' => false,
        'img' => 'https://images.unsplash.com/photo-1473966968600-fa801b869a1a?w=600&q=80',
        'img2' => 'https://images.unsplash.com/photo-1473966968600-fa801b869a1a?w=600&q=80',
    ],
    [
        'id' => 5, 'nombre' => 'Corbata Seda Jacquard', 'categoria' => 'Accesorios',
        'precio' => '95', 'precio_antes' => null,
        'descripcion' => 'Seda jacquard italiana tejida a mano. Patrón geométrico discreto sobre fondo negro. El complemento definitivo del traje de caballero.',
        'tallas' => ['Única'], 'colores' => ['#1a1a1a','#2d1b1b','#1a1a2e'],
        'nuevo' => false, 'agotado' => false,
        'img' => 'https://images.unsplash.com/photo-1589756823695-278bc923f962?w=600&q=80',
        'img2' => 'https://images.unsplash.com/photo-1589756823695-278bc923f962?w=600&q=80',
    ],
    [
        'id' => 6, 'nombre' => 'Traje Lino Verano Slate', 'categoria' => 'Trajes',
        'precio' => '720', 'precio_antes' => '950',
        'descripcion' => 'Lino irlandés de alta gramaje en tono pizarra. Chaqueta de un botón con solapa ancha y pantalón de corte recto. Edición limitada primavera-verano.',
        'tallas' => ['46','48','50'], 'colores' => ['#3a3a4a'],
        'nuevo' => false, 'agotado' => true,
        'img' => 'https://images.unsplash.com/photo-1622290291468-a28f7a7dc6a8?w=600&q=80',
        'img2' => 'https://images.unsplash.com/photo-1622290291468-a28f7a7dc6a8?w=600&q=80',
    ],
];

$productoDestacado = $productos[0];
@endphp

{{-- ─── ANNOUNCEMENT BAR ───────────────────────────────── --}}
<div class="bg-champagne-500 text-noir-950 py-2 overflow-hidden">
    <div class="marquee-inner">
        @for($i = 0; $i < 2; $i++)
        <span class="text-xs font-body font-300 tracking-widest uppercase mx-12">Envío gratuito en pedidos superiores a 300€</span>
        <span class="text-champagne-600 mx-4">·</span>
        <span class="text-xs font-body font-300 tracking-widest uppercase mx-12">Nueva colección sastrería Otoño–Invierno disponible</span>
        <span class="text-champagne-600 mx-4">·</span>
        <span class="text-xs font-body font-300 tracking-widest uppercase mx-12">Arreglos y ajustes incluidos en cada traje</span>
        <span class="text-champagne-600 mx-4">·</span>
        <span class="text-xs font-body font-300 tracking-widest uppercase mx-12">Atención al cliente · hola@sarto-studio.es</span>
        <span class="text-champagne-600 mx-4">·</span>
        @endfor
    </div>
</div>

{{-- ─── NAVBAR ─────────────────────────────────────────── --}}
<nav class="sticky top-0 z-50 bg-noir-900/95 backdrop-blur-md border-b border-noir-700/50">
    <div class="max-w-7xl mx-auto px-6 lg:px-12 flex items-center justify-between h-16">
        {{-- Logo --}}
        <a href="#" class="font-display text-2xl tracking-[0.2em] text-pearl-100 font-400">SARTO</a>

        {{-- Nav links --}}
        <ul class="hidden md:flex gap-10 text-xs font-body font-300 tracking-widest uppercase text-pearl-300">
            @foreach(['Novedades', 'Trajes', 'Americanas', 'Pantalones', 'Accesorios', 'Sale'] as $item)
            <li><a href="#catalogo" class="nav-link hover:text-pearl-100 transition-colors {{ $item === 'Sale' ? 'text-champagne-400' : '' }}">{{ $item }}</a></li>
            @endforeach
        </ul>

        {{-- Actions --}}
        <div class="flex items-center gap-5">
            <button class="text-pearl-300 hover:text-pearl-100 transition-colors">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.35-4.35"/></svg>
            </button>
            <button class="text-pearl-300 hover:text-pearl-100 transition-colors">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"/></svg>
            </button>
            <button class="relative text-pearl-300 hover:text-pearl-100 transition-colors" onclick="toggleCart()">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path d="M6 2L3 6v14a2 2 0 002 2h14a2 2 0 002-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/><path d="M16 10a4 4 0 01-8 0"/></svg>
                <span class="absolute -top-1.5 -right-1.5 w-4 h-4 rounded-full bg-champagne-500 text-noir-950 text-xs flex items-center justify-center font-500 cart-badge" id="cart-count">2</span>
            </button>
            <button class="md:hidden text-pearl-300" onclick="document.getElementById('mobile-nav').classList.toggle('hidden')">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5M3.75 17.25h16.5"/></svg>
            </button>
        </div>
    </div>

    {{-- Mobile nav --}}
    <div id="mobile-nav" class="hidden md:hidden bg-noir-800 border-t border-noir-700 px-6 py-4 space-y-3">
        @foreach(['Novedades', 'Trajes', 'Americanas', 'Pantalones', 'Accesorios', 'Sale'] as $item)
        <a href="#catalogo" class="block text-xs tracking-widest uppercase text-pearl-300">{{ $item }}</a>
        @endforeach
    </div>
</nav>

{{-- ─── HERO ────────────────────────────────────────────── --}}
<section class="relative min-h-[90vh] flex items-end overflow-hidden bg-noir-950">
    {{-- Background image --}}
    <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1617137968427-85924c800a22?w=1400&q=80"
             alt="Hero sastrería"
             class="w-full h-full object-cover object-top opacity-50">
        <div class="absolute inset-0 bg-gradient-to-t from-noir-950 via-noir-950/40 to-transparent"></div>
        <div class="absolute inset-0 bg-gradient-to-r from-noir-950/80 via-transparent to-transparent"></div>
    </div>

    {{-- Content --}}
    <div class="relative max-w-7xl mx-auto px-6 lg:px-12 pb-20 w-full">
        <div class="max-w-xl">
            <p class="fade-up text-xs tracking-[0.3em] uppercase text-champagne-400 font-body font-300 mb-5">Sastrería — Colección Otoño · Invierno 2024</p>
            <h1 class="fade-up d1 font-display text-6xl lg:text-7xl xl:text-8xl text-pearl-100 leading-none mb-6">
                El traje<br><em class="text-champagne-400">lo dice todo.</em>
            </h1>
            <p class="fade-up d2 font-body font-200 text-pearl-300 text-lg leading-relaxed mb-10 max-w-md">
                Sastrería de precisión. Tejidos europeos seleccionados. Cada traje, una declaración de intenciones.
            </p>
            <div class="fade-up d3 flex flex-col sm:flex-row gap-4">
                <a href="#catalogo" class="inline-flex items-center justify-center px-8 py-4 bg-champagne-500 text-noir-950 text-xs tracking-widest uppercase font-body font-500 hover:bg-champagne-400 transition-colors duration-300">
                    Ver colección
                </a>
                <a href="#" class="inline-flex items-center justify-center px-8 py-4 border border-pearl-300/30 text-pearl-300 text-xs tracking-widest uppercase font-body font-300 hover:border-pearl-200 hover:text-pearl-100 transition-all duration-300">
                    Lookbook
                </a>
            </div>
        </div>

        {{-- Scroll indicator --}}
        <div class="absolute right-12 bottom-0 flex flex-col items-center gap-2 pb-8 hidden lg:flex">
            <span class="text-xs tracking-widest uppercase text-pearl-400 font-body" style="writing-mode:vertical-rl">Scroll</span>
            <div class="w-px h-12 bg-gradient-to-b from-pearl-400 to-transparent"></div>
        </div>
    </div>
</section>

{{-- ─── FEATURED PRODUCT ────────────────────────────────── --}}
<section class="py-24 bg-noir-900">
    <div class="max-w-7xl mx-auto px-6 lg:px-12 grid lg:grid-cols-2 gap-16 items-center">
        {{-- Image --}}
        <div class="relative group overflow-hidden">
            <img src="{{ $productoDestacado['img'] }}" alt="{{ $productoDestacado['nombre'] }}"
                 class="w-full aspect-[3/4] object-cover object-top transition-transform duration-700 group-hover:scale-105">
            <div class="absolute top-6 left-6">
                <span class="bg-champagne-500 text-noir-950 text-xs tracking-widest uppercase px-3 py-1.5 font-body font-500">Nuevo</span>
            </div>
        </div>

        {{-- Info --}}
        <div>
            <p class="text-xs tracking-widest uppercase text-champagne-400 font-body font-300 mb-4">Traje destacado</p>
            <h2 class="font-display text-5xl text-pearl-100 leading-tight mb-4">{{ $productoDestacado['nombre'] }}</h2>
            <div class="flex items-center gap-4 mb-6">
                <span class="font-display text-3xl text-champagne-400">€{{ $productoDestacado['precio'] }}</span>
                @if($productoDestacado['precio_antes'])
                <span class="text-pearl-400 line-through font-body font-300 text-lg">€{{ $productoDestacado['precio_antes'] }}</span>
                @endif
            </div>
            <p class="font-body font-300 text-pearl-300 leading-relaxed mb-8 text-sm">{{ $productoDestacado['descripcion'] }}</p>

            {{-- Colors --}}
            <div class="mb-6">
                <p class="text-xs tracking-widest uppercase text-pearl-400 font-body mb-3">Color</p>
                <div class="flex gap-3">
                    @foreach($productoDestacado['colores'] as $i => $color)
                    <button class="w-7 h-7 rounded-full border-2 {{ $i === 0 ? 'border-champagne-400' : 'border-transparent hover:border-pearl-400' }} transition-all"
                            style="background-color: {{ $color }}"></button>
                    @endforeach
                </div>
            </div>

            {{-- Sizes --}}
            <div class="mb-8">
                <div class="flex items-center justify-between mb-3">
                    <p class="text-xs tracking-widest uppercase text-pearl-400 font-body">Talla</p>
                    <button class="text-xs text-champagne-400 underline underline-offset-2 font-body font-300">Guía de tallas</button>
                </div>
                <div class="flex gap-2 flex-wrap">
                    @foreach($productoDestacado['tallas'] as $talla)
                    <button class="size-btn w-12 h-10 border border-noir-600 text-pearl-300 text-xs font-body font-300 hover:border-champagne-400 transition-all">{{ $talla }}</button>
                    @endforeach
                </div>
            </div>

            {{-- CTA --}}
            <div class="flex gap-4">
                <button class="flex-1 py-4 bg-champagne-500 text-noir-950 text-xs tracking-widest uppercase font-body font-500 hover:bg-champagne-400 transition-colors duration-300">
                    Añadir al carrito
                </button>
                <button class="w-14 h-14 border border-noir-600 flex items-center justify-center text-pearl-400 hover:border-champagne-400 hover:text-champagne-400 transition-all">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"/></svg>
                </button>
            </div>

            {{-- Trust --}}
            <div class="mt-8 pt-8 border-t border-noir-700 grid grid-cols-3 gap-4 text-center">
                @foreach([['✂️','Arreglos incluidos','Ajuste personalizado'], ['↩','30 días','Devolución gratuita'], ['🔒','Pago seguro','SSL certificado']] as $trust)
                <div>
                    <p class="text-lg mb-1">{{ $trust[0] }}</p>
                    <p class="text-xs font-body font-400 text-pearl-200">{{ $trust[1] }}</p>
                    <p class="text-xs font-body font-300 text-pearl-400">{{ $trust[2] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

{{-- ─── CATALOGO ────────────────────────────────────────── --}}
<section id="catalogo" class="py-24 bg-noir-950">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">

        {{-- Header + filters --}}
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-12">
            <div>
                <p class="text-xs tracking-widest uppercase text-champagne-400 font-body mb-2">Colección completa</p>
                <h2 class="font-display text-5xl text-pearl-100">Todos los trajes.</h2>
            </div>
            <div class="flex items-center gap-3 flex-wrap">
                @foreach($categorias as $cat)
                <button onclick="filterCat('{{ $cat }}')"
                        class="cat-btn px-5 py-2 text-xs tracking-widest uppercase font-body font-300 border transition-all duration-200
                        {{ $cat === 'Todo' ? 'border-champagne-500 text-champagne-400 bg-champagne-500/10' : 'border-noir-600 text-pearl-400 hover:border-pearl-400' }}">
                    {{ $cat }}
                </button>
                @endforeach
                {{-- Sort --}}
                <select class="ml-4 bg-noir-800 border border-noir-600 text-pearl-400 text-xs font-body font-300 px-4 py-2 focus:outline-none focus:border-champagne-500 transition-colors">
                    <option>Más recientes</option>
                    <option>Precio: menor a mayor</option>
                    <option>Precio: mayor a menor</option>
                </select>
            </div>
        </div>

        {{-- Grid --}}
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-px bg-noir-800" id="product-grid">
            @foreach($productos as $producto)
            <div class="product-card bg-noir-950 relative group cursor-pointer" data-cat="{{ $producto['categoria'] }}">
                {{-- Image --}}
                <div class="overflow-hidden aspect-[3/4] relative bg-noir-800">
                    <img src="{{ $producto['img'] }}" alt="{{ $producto['nombre'] }}"
                         class="product-img w-full h-full object-cover object-top"
                         {{ $producto['agotado'] ? 'style=filter:grayscale(0.5)' : '' }}>

                    {{-- Overlay --}}
                    <div class="product-overlay absolute inset-0 bg-noir-950/40 flex flex-col items-center justify-end pb-8 gap-3">
                        @if(!$producto['agotado'])
                        <button class="product-tag w-48 py-3 bg-champagne-500 text-noir-950 text-xs tracking-widest uppercase font-body font-500 hover:bg-champagne-400 transition-colors">
                            Añadir al carrito
                        </button>
                        <button class="product-tag w-48 py-3 border border-pearl-200/50 text-pearl-100 text-xs tracking-widest uppercase font-body font-300 hover:border-pearl-100 transition-colors" style="transition-delay:0.05s">
                            Vista rápida
                        </button>
                        @endif
                    </div>

                    {{-- Badges --}}
                    <div class="absolute top-4 left-4 flex flex-col gap-2">
                        @if($producto['nuevo'])
                        <span class="bg-champagne-500 text-noir-950 text-xs tracking-widest uppercase px-2.5 py-1 font-body font-500">Nuevo</span>
                        @endif
                        @if($producto['precio_antes'])
                        <span class="bg-red-900/80 text-pearl-100 text-xs tracking-widest uppercase px-2.5 py-1 font-body font-400">Sale</span>
                        @endif
                        @if($producto['agotado'])
                        <span class="bg-noir-700 text-pearl-400 text-xs tracking-widest uppercase px-2.5 py-1 font-body font-300">Agotado</span>
                        @endif
                    </div>

                    {{-- Wishlist --}}
                    <button class="absolute top-4 right-4 w-8 h-8 bg-noir-900/80 flex items-center justify-center text-pearl-400 hover:text-champagne-400 transition-colors opacity-0 group-hover:opacity-100">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"/></svg>
                    </button>
                </div>

                {{-- Info --}}
                <div class="p-5 bg-noir-950">
                    <div class="flex items-start justify-between gap-2">
                        <div>
                            <p class="text-xs tracking-widest uppercase text-pearl-400 font-body font-300 mb-1">{{ $producto['categoria'] }}</p>
                            <h3 class="font-body font-400 text-pearl-100 text-sm leading-snug">{{ $producto['nombre'] }}</h3>
                        </div>
                        <div class="text-right flex-shrink-0">
                            <p class="font-display text-lg text-champagne-400">€{{ $producto['precio'] }}</p>
                            @if($producto['precio_antes'])
                            <p class="text-xs text-pearl-500 line-through font-body">€{{ $producto['precio_antes'] }}</p>
                            @endif
                        </div>
                    </div>
                    {{-- Color dots --}}
                    <div class="flex gap-1.5 mt-3">
                        @foreach($producto['colores'] as $color)
                        <div class="w-3 h-3 rounded-full border border-noir-600" style="background-color: {{ $color }}"></div>
                        @endforeach
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        {{-- Load more --}}
        <div class="text-center mt-16">
            <button class="px-12 py-4 border border-noir-600 text-pearl-300 text-xs tracking-widest uppercase font-body font-300 hover:border-champagne-500 hover:text-champagne-400 transition-all duration-300">
                Cargar más piezas
            </button>
        </div>
    </div>
</section>

{{-- ─── EDITORIAL BANNER ────────────────────────────────── --}}
<section class="relative py-0 overflow-hidden">
    <div class="grid md:grid-cols-2 min-h-[60vh]">
        <div class="relative overflow-hidden">
            <img src="https://images.unsplash.com/photo-1598808503746-f34c53b9323e?w=800&q=80"
                 alt="Editorial sastrería" class="w-full h-full object-cover object-top hover:scale-105 transition-transform duration-700">
            <div class="absolute inset-0 bg-gradient-to-t from-noir-950/80 to-transparent flex items-end p-10">
                <div>
                    <p class="text-xs tracking-widest uppercase text-champagne-400 font-body mb-2">Nueva entrega</p>
                    <h3 class="font-display text-3xl text-pearl-100 mb-4">Americanas & Pantalones</h3>
                    <a href="#catalogo" class="text-xs tracking-widest uppercase text-pearl-200 underline underline-offset-4 font-body font-300 hover:text-champagne-400 transition-colors">Ver todo →</a>
                </div>
            </div>
        </div>
        <div class="relative overflow-hidden">
            <img src="https://images.unsplash.com/photo-1589756823695-278bc923f962?w=800&q=80"
                 alt="Accesorios sastrería" class="w-full h-full object-cover object-top hover:scale-105 transition-transform duration-700">
            <div class="absolute inset-0 bg-gradient-to-t from-noir-950/80 to-transparent flex items-end p-10">
                <div>
                    <p class="text-xs tracking-widest uppercase text-champagne-400 font-body mb-2">Accesorios</p>
                    <h3 class="font-display text-3xl text-pearl-100 mb-4">El detalle que te define</h3>
                    <a href="#catalogo" class="text-xs tracking-widest uppercase text-pearl-200 underline underline-offset-4 font-body font-300 hover:text-champagne-400 transition-colors">Descubrir →</a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ─── TESTIMONIOS ─────────────────────────────────────── --}}
<section class="py-24 bg-noir-900">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
        <div class="text-center mb-16">
            <p class="text-xs tracking-widest uppercase text-champagne-400 font-body mb-3">Lo que dicen</p>
            <h2 class="font-display text-5xl text-pearl-100">Nuestros clientes.</h2>
        </div>
        <div class="grid md:grid-cols-3 gap-8">
            @php
            $reviews = [
                ['texto' => 'El traje príncipe de Gales es perfecto. La calidad del tejido se nota desde el primer momento y el ajuste es impecable. Sin duda la mejor inversión que he hecho en años.', 'nombre' => 'Carlos M.', 'ciudad' => 'Madrid', 'rating' => 5],
                ['texto' => 'Compré el tuxedo para mi boda y todos los invitados me preguntaron dónde lo había conseguido. El servicio de arreglos incluido es un detalle que marca la diferencia.', 'nombre' => 'Alejandro P.', 'ciudad' => 'Barcelona', 'rating' => 5],
                ['texto' => 'La americana de flanela carbón es extraordinaria. Ya la he llevado tanto en el trabajo como en eventos de noche. Versátil y elegante a partes iguales.', 'nombre' => 'Javier R.', 'ciudad' => 'Valencia', 'rating' => 5],
            ];
            @endphp
            @foreach($reviews as $review)
            <div class="border border-noir-700 p-8 hover:border-champagne-500/30 transition-colors">
                <div class="flex gap-1 mb-4">
                    @for($i = 0; $i < $review['rating']; $i++)
                    <span class="text-champagne-400 text-sm">★</span>
                    @endfor
                </div>
                <p class="font-body font-300 text-pearl-300 text-sm leading-relaxed mb-6">
                    "{{ $review['texto'] }}"
                </p>
                <div class="flex items-center gap-3">
                    <div class="w-8 h-px bg-champagne-500/50"></div>
                    <div>
                        <p class="text-xs font-body font-400 text-pearl-200">{{ $review['nombre'] }}</p>
                        <p class="text-xs font-body font-300 text-pearl-500">{{ $review['ciudad'] }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ─── NEWSLETTER ──────────────────────────────────────── --}}
<section class="py-20 bg-noir-950 border-t border-noir-800">
    <div class="max-w-xl mx-auto px-6 text-center">
        <p class="text-xs tracking-widest uppercase text-champagne-400 font-body mb-4">Únete al círculo</p>
        <h2 class="font-display text-4xl text-pearl-100 mb-4">Acceso anticipado<br><em>a nueva sastrería.</em></h2>
        <p class="font-body font-300 text-pearl-400 text-sm mb-8">Suscríbete y sé el primero en conocer los nuevos lanzamientos. 10% de descuento en tu primer traje.</p>
        <form class="flex gap-0" onsubmit="return false">
            <input type="email" placeholder="tu@email.com"
                   class="flex-1 bg-noir-800 border border-noir-600 border-r-0 px-5 py-4 text-sm font-body font-300 text-pearl-200 placeholder-pearl-500 focus:outline-none focus:border-champagne-500 transition-colors">
            <button class="px-8 py-4 bg-champagne-500 text-noir-950 text-xs tracking-widest uppercase font-body font-500 hover:bg-champagne-400 transition-colors flex-shrink-0">
                Suscribirse
            </button>
        </form>
        <p class="text-xs text-pearl-500 mt-3 font-body font-300">Sin spam. Puedes darte de baja cuando quieras.</p>
    </div>
</section>

{{-- ─── FOOTER ──────────────────────────────────────────── --}}
<footer class="bg-noir-950 border-t border-noir-800 pt-16 pb-8">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
        <div class="grid md:grid-cols-4 gap-10 mb-16">
            <div class="md:col-span-1">
                <h3 class="font-display text-2xl text-pearl-100 tracking-[0.2em] mb-4">SARTO</h3>
                <p class="font-body font-300 text-pearl-400 text-sm leading-relaxed mb-6">Sastrería de lujo artesanal. Trajes construidos con los mejores tejidos europeos para el hombre que cuida cada detalle.</p>
                <div class="flex gap-4">
                    @foreach(['IG', 'TK', 'PI'] as $social)
                    <a href="#" class="w-8 h-8 border border-noir-600 flex items-center justify-center text-xs text-pearl-400 hover:border-champagne-500 hover:text-champagne-400 transition-all font-body">{{ $social }}</a>
                    @endforeach
                </div>
            </div>

            @php
            $footerLinks = [
                'Tienda' => ['Novedades', 'Trajes', 'Americanas', 'Pantalones', 'Accesorios', 'Sale'],
                'Ayuda' => ['Mi cuenta', 'Pedidos', 'Devoluciones', 'Guía de tallas', 'Contacto'],
                'Empresa' => ['Sobre SARTO', 'Sostenibilidad', 'Prensa', 'Trabaja con nosotros'],
            ];
            @endphp

            @foreach($footerLinks as $titulo => $links)
            <div>
                <p class="text-xs tracking-widest uppercase text-pearl-400 font-body font-400 mb-5">{{ $titulo }}</p>
                <ul class="space-y-3">
                    @foreach($links as $link)
                    <li><a href="#" class="text-sm font-body font-300 text-pearl-500 gold-hover transition-colors">{{ $link }}</a></li>
                    @endforeach
                </ul>
            </div>
            @endforeach
        </div>

        <div class="border-t border-noir-800 pt-8 flex flex-col md:flex-row items-center justify-between gap-4">
            <p class="text-xs font-body font-300 text-pearl-500">© {{ date('Y') }} SARTO Studio. Todos los derechos reservados.</p>
            <div class="flex gap-6 text-xs font-body font-300 text-pearl-500">
                <a href="#" class="gold-hover">Privacidad</a>
                <a href="#" class="gold-hover">Cookies</a>
                <a href="#" class="gold-hover">Aviso legal</a>
            </div>
            {{-- Payment icons --}}
            <div class="flex gap-3 items-center">
                @foreach(['VISA', 'MC', 'AMEX', 'PAYPAL'] as $pay)
                <span class="px-2 py-1 border border-noir-700 text-xs text-pearl-500 font-body">{{ $pay }}</span>
                @endforeach
            </div>
        </div>
    </div>
</footer>

{{-- ─── CART DRAWER ─────────────────────────────────────── --}}
<div id="cart-drawer" class="fixed inset-y-0 right-0 w-96 bg-noir-900 border-l border-noir-700 z-50 transform translate-x-full transition-transform duration-300 ease-out flex flex-col">
    <div class="flex items-center justify-between p-6 border-b border-noir-700">
        <h3 class="font-display text-xl text-pearl-100">Tu carrito</h3>
        <button onclick="toggleCart()" class="text-pearl-400 hover:text-pearl-100 transition-colors">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg>
        </button>
    </div>

    <div class="flex-1 overflow-y-auto p-6 space-y-6">
        {{-- Cart item example --}}
        @foreach(array_slice($productos, 0, 2) as $item)
        <div class="flex gap-4">
            <div class="w-20 h-24 flex-shrink-0 overflow-hidden bg-noir-800">
                <img src="{{ $item['img'] }}" alt="{{ $item['nombre'] }}" class="w-full h-full object-cover object-top">
            </div>
            <div class="flex-1 min-w-0">
                <p class="text-xs tracking-widest uppercase text-pearl-400 font-body">{{ $item['categoria'] }}</p>
                <p class="text-sm font-body font-400 text-pearl-100 mt-0.5">{{ $item['nombre'] }}</p>
                <p class="text-xs font-body font-300 text-pearl-400 mt-1">Talla: M</p>
                <div class="flex items-center justify-between mt-3">
                    <div class="flex items-center gap-2 border border-noir-600">
                        <button class="w-7 h-7 flex items-center justify-center text-pearl-400 hover:text-pearl-100 text-lg">−</button>
                        <span class="text-xs font-body text-pearl-200 w-4 text-center">1</span>
                        <button class="w-7 h-7 flex items-center justify-center text-pearl-400 hover:text-pearl-100 text-lg">+</button>
                    </div>
                    <p class="font-display text-champagne-400">€{{ $item['precio'] }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="p-6 border-t border-noir-700">
        <div class="flex justify-between items-center mb-2">
            <span class="text-sm font-body font-300 text-pearl-400">Subtotal</span>
            <span class="font-display text-champagne-400 text-xl">€715</span>
        </div>
        <p class="text-xs font-body font-300 text-pearl-500 mb-6">Envío e impuestos calculados en el checkout</p>
        <button class="w-full py-4 bg-champagne-500 text-noir-950 text-xs tracking-widest uppercase font-body font-500 hover:bg-champagne-400 transition-colors mb-3">
            Finalizar compra
        </button>
        <button onclick="toggleCart()" class="w-full py-3 border border-noir-600 text-pearl-400 text-xs tracking-widest uppercase font-body font-300 hover:border-pearl-400 transition-all">
            Seguir comprando
        </button>
    </div>
</div>
<div id="cart-overlay" class="fixed inset-0 bg-noir-950/70 z-40 hidden" onclick="toggleCart()"></div>

<script>
    function toggleCart() {
        const drawer = document.getElementById('cart-drawer');
        const overlay = document.getElementById('cart-overlay');
        const isOpen = !drawer.classList.contains('translate-x-full');
        drawer.classList.toggle('translate-x-full', isOpen);
        overlay.classList.toggle('hidden', isOpen);
    }

    function filterCat(cat) {
        document.querySelectorAll('.cat-btn').forEach(btn => {
            const active = btn.textContent.trim() === cat;
            btn.classList.toggle('border-champagne-500', active);
            btn.classList.toggle('text-champagne-400', active);
            btn.classList.toggle('bg-champagne-500/10', active);
            btn.classList.toggle('border-noir-600', !active);
            btn.classList.toggle('text-pearl-400', !active);
        });

        document.querySelectorAll('.product-card').forEach(card => {
            if (cat === 'Todo' || card.dataset.cat === cat) {
                card.style.display = '';
            } else {
                card.style.display = 'none';
            }
        });
    }
</script>

</body>
</html>