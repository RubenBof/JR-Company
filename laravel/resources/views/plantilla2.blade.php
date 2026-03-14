<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Velvet — Music for the soul</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
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
                        }
                    },
                    fontFamily: {
                        display: ['DM Serif Display', 'serif'],
                        body: ['DM Sans', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    <style>
        * { box-sizing: border-box; }
        body { font-family: 'DM Sans', sans-serif; background: #0a0a0f; overflow: hidden; height: 100vh; }

        /* Scrollbar */
        ::-webkit-scrollbar { width: 4px; }
        ::-webkit-scrollbar-track { background: transparent; }
        ::-webkit-scrollbar-thumb { background: #2e2e52; border-radius: 2px; }

        /* Vinyl spin */
        @keyframes spin-slow { from { transform: rotate(0deg); } to { transform: rotate(360deg); } }
        .vinyl-spin { animation: spin-slow 8s linear infinite; }
        .vinyl-paused { animation-play-state: paused; }

        /* Progress bar */
        .progress-bar { -webkit-appearance: none; appearance: none; height: 3px; border-radius: 2px; background: #252540; outline: none; cursor: pointer; }
        .progress-bar::-webkit-slider-thumb { -webkit-appearance: none; width: 12px; height: 12px; border-radius: 50%; background: #e8bc5a; cursor: pointer; }
        .progress-bar::-webkit-slider-runnable-track { border-radius: 2px; }

        /* Volume bar */
        .volume-bar { -webkit-appearance: none; appearance: none; height: 3px; border-radius: 2px; background: #252540; outline: none; cursor: pointer; width: 80px; }
        .volume-bar::-webkit-slider-thumb { -webkit-appearance: none; width: 10px; height: 10px; border-radius: 50%; background: #9b9bbf; cursor: pointer; }

        /* Song row hover */
        .song-row:hover { background: rgba(46,46,82,0.4); }
        .song-row.active { background: rgba(232,188,90,0.08); }
        .song-row.active .song-title { color: #e8bc5a; }

        /* Glow effect */
        .album-glow { box-shadow: 0 0 60px rgba(232,188,90,0.15), 0 0 120px rgba(232,188,90,0.05); }

        /* Sidebar active */
        .nav-item.active { background: rgba(232,188,90,0.1); color: #e8bc5a; }
        .nav-item:hover:not(.active) { background: rgba(46,46,82,0.5); color: #9b9bbf; }

        /* Fade in */
        @keyframes fadeIn { from { opacity: 0; transform: translateY(8px); } to { opacity: 1; transform: translateY(0); } }
        .fade-in { animation: fadeIn 0.5s ease forwards; }
        .d1 { animation-delay: 0.05s; opacity: 0; }
        .d2 { animation-delay: 0.1s;  opacity: 0; }
        .d3 { animation-delay: 0.15s; opacity: 0; }
        .d4 { animation-delay: 0.2s;  opacity: 0; }
        .d5 { animation-delay: 0.25s; opacity: 0; }

        /* Noise texture overlay */
        .noise::before {
            content: '';
            position: fixed;
            inset: 0;
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.03'/%3E%3C/svg%3E");
            pointer-events: none;
            z-index: 100;
        }

        /* Equalizer bars */
        @keyframes eq1 { 0%,100%{height:4px} 50%{height:14px} }
        @keyframes eq2 { 0%,100%{height:10px} 50%{height:4px} }
        @keyframes eq3 { 0%,100%{height:7px} 50%{height:16px} }
        .eq-bar:nth-child(1) { animation: eq1 0.8s ease-in-out infinite; }
        .eq-bar:nth-child(2) { animation: eq2 0.6s ease-in-out infinite; }
        .eq-bar:nth-child(3) { animation: eq3 0.9s ease-in-out infinite; }
        .eq-paused .eq-bar { animation-play-state: paused; }
    </style>
</head>
<body class="noise text-white select-none">

@php
$playlists = [
    ['nombre' => 'Jazz Nocturno', 'canciones' => 18, 'color' => 'from-amber-900 to-stone-900'],
    ['nombre' => 'Clásicos del Soul', 'canciones' => 24, 'color' => 'from-blue-950 to-slate-900'],
    ['nombre' => 'Grandes Voces', 'canciones' => 31, 'color' => 'from-rose-950 to-stone-900'],
    ['nombre' => 'Piano & Whiskey', 'canciones' => 12, 'color' => 'from-emerald-950 to-slate-900'],
    ['nombre' => 'Mis favoritas', 'canciones' => 9, 'color' => 'from-purple-950 to-stone-900'],
];

$canciones = [
    ['id' => 1, 'titulo' => 'What a Wonderful World', 'artista' => 'Louis Armstrong', 'album' => 'What a Wonderful World', 'duracion' => '2:21', 'year' => '1967', 'genero' => 'Jazz', 'activa' => true,
     'cover' => asset('images/louis_armstrong.jpg')],
    ['id' => 2, 'titulo' => 'La Vie en Rose', 'artista' => 'Louis Armstrong', 'album' => 'Ambassador Satch', 'duracion' => '3:05', 'year' => '1956', 'genero' => 'Jazz', 'activa' => false,
     'cover' => asset('images/louis_armstrong.jpg')],
    ['id' => 3, 'titulo' => 'Unforgettable', 'artista' => 'Nat King Cole', 'album' => 'Unforgettable', 'duracion' => '3:22', 'year' => '1951', 'genero' => 'Jazz', 'activa' => false,
     'cover' => asset('images/nat_king_cole.jpg')],
    ['id' => 4, 'titulo' => 'Fly Me to the Moon', 'artista' => 'Frank Sinatra', 'album' => 'It Might as Well Be Swing', 'duracion' => '2:28', 'year' => '1964', 'genero' => 'Jazz', 'activa' => false,
     'cover' => asset('images/frank_sinatra.jpg')],
    ['id' => 5, 'titulo' => "The Way You Look Tonight", 'artista' => 'Frank Sinatra', 'album' => 'Songs for Swingin\' Lovers', 'duracion' => '3:21', 'year' => '1956', 'genero' => 'Jazz', 'activa' => false,
     'cover' => asset('images/frank_sinatra.jpg')],
    ['id' => 6, 'titulo' => 'Levitating', 'artista' => 'Dua Lipa', 'album' => 'Future Nostalgia', 'duracion' => '3:23', 'year' => '2020', 'genero' => 'Pop', 'activa' => false,
     'cover' => asset('images/dua_lipa.jpg')],
    ['id' => 7, 'titulo' => 'Don\'t Start Now', 'artista' => 'Dua Lipa', 'album' => 'Future Nostalgia', 'duracion' => '3:03', 'year' => '2019', 'genero' => 'Pop', 'activa' => false,
     'cover' => asset('images/dua_lipa.jpg')],
    ['id' => 8, 'titulo' => 'Con te partirò', 'artista' => 'Andrea Bocelli', 'album' => 'Bocelli', 'duracion' => '4:03', 'year' => '1995', 'genero' => 'Clásica', 'activa' => false,
     'cover' => asset('images/andrea_bocelli.jpg')],
    ['id' => 9, 'titulo' => 'Ave Maria', 'artista' => 'Andrea Bocelli', 'album' => 'Sacred Arias', 'duracion' => '5:42', 'year' => '1999', 'genero' => 'Clásica', 'activa' => false,
     'cover' => asset('images/andrea_bocelli.jpg')],
    ['id' => 10, 'titulo' => 'Mona Lisa', 'artista' => 'Nat King Cole', 'album' => 'Mona Lisa', 'duracion' => '3:24', 'year' => '1950', 'genero' => 'Jazz', 'activa' => false,
     'cover' => asset('images/nat_king_cole.jpg')],
    ['id' => 11, 'titulo' => 'New York, New York', 'artista' => 'Frank Sinatra', 'album' => 'Trilogy', 'duracion' => '3:45', 'year' => '1980', 'genero' => 'Jazz', 'activa' => false,
     'cover' => asset('images/frank_sinatra.jpg')],
    ['id' => 12, 'titulo' => 'Physical', 'artista' => 'Dua Lipa', 'album' => 'Future Nostalgia', 'duracion' => '3:13', 'year' => '2020', 'genero' => 'Pop', 'activa' => false,
     'cover' => asset('images/dua_lipa.jpg')],
];

$cancionActiva = collect($canciones)->firstWhere('activa', true);
@endphp

<div class="flex h-screen overflow-hidden bg-velvet-900">

    {{-- ── SIDEBAR ─────────────────────────────────────────── --}}
    <aside class="w-60 flex-shrink-0 flex flex-col bg-velvet-900 border-r border-velvet-600/30 py-6">
        {{-- Logo --}}
        <div class="px-6 mb-8">
            <h1 class="font-display text-2xl text-gold-400 italic tracking-wide">Velvet</h1>
            <p class="text-xs text-mist-500 font-body font-300 mt-0.5">Music for the soul</p>
        </div>

        {{-- Nav --}}
        <nav class="px-3 space-y-1 mb-8">
            <a href="#" class="nav-item active flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm font-body font-400 transition-all">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"/></svg>
                Inicio
            </a>
            <a href="#" class="nav-item flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm font-body font-400 text-mist-500 transition-all">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.35-4.35"/></svg>
                Descubrir
            </a>
            <a href="#" class="nav-item flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm font-body font-400 text-mist-500 transition-all">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3"/></svg>
                Mi música
            </a>
            <a href="#" class="nav-item flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm font-body font-400 text-mist-500 transition-all">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
                Favoritas
            </a>
        </nav>

        {{-- Divider --}}
        <div class="px-6 mb-4">
            <p class="text-xs tracking-widest uppercase text-mist-600 font-body">Mis playlists</p>
        </div>

        {{-- Playlists --}}
        <div class="flex-1 overflow-y-auto px-3 space-y-0.5">
            @foreach($playlists as $i => $pl)
            <a href="#" class="flex items-center gap-3 px-3 py-2 rounded-md hover:bg-velvet-600/40 transition-colors group">
                <div class="w-8 h-8 rounded flex-shrink-0 bg-gradient-to-br {{ $pl['color'] }} flex items-center justify-center">
                    <svg class="w-3 h-3 text-white/60" fill="currentColor" viewBox="0 0 20 20"><path d="M18 3a1 1 0 00-1.196-.98l-10 2A1 1 0 006 5v9.114A4.369 4.369 0 005 14c-1.657 0-3 .895-3 2s1.343 2 3 2 3-.895 3-2V7.82l8-1.6v5.894A4.37 4.37 0 0015 12c-1.657 0-3 .895-3 2s1.343 2 3 2 3-.895 3-2V3z"/></svg>
                </div>
                <div class="min-w-0">
                    <p class="text-xs font-body font-400 text-mist-400 group-hover:text-white transition-colors truncate">{{ $pl['nombre'] }}</p>
                    <p class="text-xs font-body font-300 text-mist-600">{{ $pl['canciones'] }} canciones</p>
                </div>
            </a>
            @endforeach
        </div>

        {{-- User --}}
        <div class="px-4 pt-4 border-t border-velvet-600/30 mt-2">
            <div class="flex items-center gap-3">
                <div class="w-8 h-8 rounded-full bg-gradient-to-br from-gold-400 to-gold-600 flex items-center justify-center text-xs font-body font-500 text-velvet-900">JM</div>
                <div class="flex-1 min-w-0">
                    <p class="text-xs font-body font-400 text-white truncate">Joan Martí</p>
                    <p class="text-xs font-body font-300 text-mist-500">Premium</p>
                </div>
                <svg class="w-4 h-4 text-mist-500 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/><circle cx="12" cy="12" r="3"/></svg>
            </div>
        </div>
    </aside>

    {{-- ── MAIN CONTENT ────────────────────────────────────── --}}
    <main class="flex-1 flex flex-col overflow-hidden">

        {{-- Top bar --}}
        <div class="flex items-center justify-between px-8 py-4 bg-velvet-900/80 backdrop-blur-md border-b border-velvet-600/20 flex-shrink-0">
            <div class="flex items-center gap-2">
                <button class="w-8 h-8 rounded-full bg-velvet-700 flex items-center justify-center hover:bg-velvet-600 transition-colors">
                    <svg class="w-4 h-4 text-mist-400" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/></svg>
                </button>
                <button class="w-8 h-8 rounded-full bg-velvet-700 flex items-center justify-center hover:bg-velvet-600 transition-colors">
                    <svg class="w-4 h-4 text-mist-400" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
                </button>
            </div>

            {{-- Search --}}
            <div class="relative w-72">
                <svg class="absolute left-3 top-1/2 -translate-y-1/2 w-4 h-4 text-mist-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.35-4.35"/></svg>
                <input type="text" placeholder="Buscar artista, canción, álbum..."
                       class="w-full bg-velvet-700 border border-velvet-600/50 rounded-full pl-9 pr-4 py-2 text-xs font-body font-300 text-white placeholder-mist-600 focus:outline-none focus:border-gold-500/50 transition-colors">
            </div>

            {{-- Filters --}}
            <div class="flex gap-2">
                @foreach(['Todo', 'Jazz', 'Clásica', 'Pop'] as $filtro)
                <button class="px-4 py-1.5 rounded-full text-xs font-body font-400 transition-all {{ $filtro === 'Todo' ? 'bg-gold-400 text-velvet-900' : 'bg-velvet-700 text-mist-400 hover:bg-velvet-600' }}">
                    {{ $filtro }}
                </button>
                @endforeach
            </div>
        </div>

        {{-- Content area --}}
        <div class="flex-1 overflow-y-auto">

            {{-- Featured / Hero --}}
            <div class="relative overflow-hidden bg-gradient-to-br from-amber-950/80 via-velvet-800 to-velvet-900 px-8 py-8">
                {{-- BG blur blobs --}}
                <div class="absolute top-0 right-24 w-64 h-64 bg-gold-500/10 rounded-full blur-3xl pointer-events-none"></div>
                <div class="absolute bottom-0 left-0 w-48 h-48 bg-amber-900/20 rounded-full blur-3xl pointer-events-none"></div>

                <div class="relative flex items-center gap-8">
                    {{-- Album cover --}}
                    <div class="relative flex-shrink-0">
                        <div class="w-28 h-28 rounded-xl overflow-hidden album-glow">
                            <img src="{{ $cancionActiva['cover'] }}" alt="{{ $cancionActiva['album'] }}" class="w-full h-full object-cover">
                        </div>
                        {{-- Vinyl behind --}}
                        <div id="vinyl" class="absolute -right-6 top-1/2 -translate-y-1/2 w-24 h-24 rounded-full bg-gradient-to-br from-stone-900 to-stone-800 vinyl-spin flex items-center justify-center shadow-2xl" style="z-index: -1;">
                            <div class="w-6 h-6 rounded-full bg-gold-500/30 border border-gold-500/20 flex items-center justify-center">
                                <div class="w-2 h-2 rounded-full bg-gold-400/60"></div>
                            </div>
                        </div>
                    </div>

                    {{-- Info --}}
                    <div class="flex-1">
                        <p class="text-xs tracking-widest uppercase text-gold-400 font-body mb-1">Reproduciendo ahora</p>
                        <h2 class="font-display text-3xl text-white mb-0.5">{{ $cancionActiva['titulo'] }}</h2>
                        <p class="text-sm font-body font-300 text-mist-400">{{ $cancionActiva['artista'] }} · <em class="text-mist-500">{{ $cancionActiva['album'] }}</em></p>
                        <div class="flex items-center gap-4 mt-4">
                            <span class="px-2.5 py-0.5 rounded-full text-xs bg-velvet-600/80 text-mist-400 font-body">{{ $cancionActiva['genero'] }}</span>
                            <span class="text-xs text-mist-600 font-body">{{ $cancionActiva['year'] }}</span>
                        </div>
                    </div>

                    {{-- Quick actions --}}
                    <div class="flex items-center gap-3">
                        <button class="w-10 h-10 rounded-full bg-velvet-600/60 hover:bg-velvet-500 flex items-center justify-center transition-colors">
                            <svg class="w-4 h-4 text-mist-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
                        </button>
                        <button class="w-10 h-10 rounded-full bg-velvet-600/60 hover:bg-velvet-500 flex items-center justify-center transition-colors">
                            <svg class="w-4 h-4 text-mist-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M12 4v16m8-8H4"/></svg>
                        </button>
                        <button class="w-10 h-10 rounded-full bg-velvet-600/60 hover:bg-velvet-500 flex items-center justify-center transition-colors">
                            <svg class="w-4 h-4 text-mist-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="18" cy="5" r="3"/><circle cx="6" cy="12" r="3"/><circle cx="18" cy="19" r="3"/><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"/><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"/></svg>
                        </button>
                    </div>
                </div>
            </div>

            {{-- Song list --}}
            <div class="px-8 py-6">
                {{-- Header --}}
                <div class="grid grid-cols-[2rem_1fr_1fr_5rem_2.5rem] gap-4 px-4 mb-3 border-b border-velvet-600/30 pb-3">
                    <span class="text-xs tracking-widest uppercase text-mist-600">#</span>
                    <span class="text-xs tracking-widest uppercase text-mist-600">Título</span>
                    <span class="text-xs tracking-widest uppercase text-mist-600">Álbum</span>
                    <span class="text-xs tracking-widest uppercase text-mist-600 text-right">Duración</span>
                    <span></span>
                </div>

                {{-- Songs --}}
                <div class="space-y-0.5">
                    @foreach($canciones as $i => $cancion)
                    <div class="song-row {{ $cancion['activa'] ? 'active' : '' }} grid grid-cols-[2rem_1fr_1fr_5rem_2.5rem] gap-4 px-4 py-2.5 rounded-lg transition-colors cursor-pointer group fade-in d{{ min($i+1, 5) }}"
                         onclick="setActive({{ $cancion['id'] }})">

                        {{-- Number / EQ --}}
                        <div class="flex items-center">
                            @if($cancion['activa'])
                            <div class="eq-bars flex items-end gap-0.5 h-4" id="eq">
                                <div class="eq-bar w-1 bg-gold-400 rounded-sm"></div>
                                <div class="eq-bar w-1 bg-gold-400 rounded-sm"></div>
                                <div class="eq-bar w-1 bg-gold-400 rounded-sm"></div>
                            </div>
                            @else
                            <span class="text-xs font-body text-mist-600 group-hover:hidden">{{ str_pad($i+1, 2, '0', STR_PAD_LEFT) }}</span>
                            <svg class="w-4 h-4 text-white hidden group-hover:block" fill="currentColor" viewBox="0 0 20 20"><path d="M6.3 2.841A1.5 1.5 0 004 4.11V15.89a1.5 1.5 0 002.3 1.269l9.344-5.89a1.5 1.5 0 000-2.538L6.3 2.84z"/></svg>
                            @endif
                        </div>

                        {{-- Title + Artist --}}
                        <div class="flex items-center gap-3 min-w-0">
                            <div class="w-9 h-9 rounded flex-shrink-0 overflow-hidden">
                                <img src="{{ $cancion['cover'] }}" alt="{{ $cancion['album'] }}" class="w-full h-full object-cover">
                            </div>
                            <div class="min-w-0">
                                <p class="song-title text-sm font-body font-400 text-white truncate">{{ $cancion['titulo'] }}</p>
                                <p class="text-xs font-body font-300 text-mist-500 truncate">{{ $cancion['artista'] }}</p>
                            </div>
                        </div>

                        {{-- Album --}}
                        <div class="flex items-center min-w-0">
                            <p class="text-xs font-body font-300 text-mist-500 truncate hover:text-white transition-colors">{{ $cancion['album'] }}</p>
                        </div>

                        {{-- Duration --}}
                        <div class="flex items-center justify-end">
                            <span class="text-xs font-body font-300 text-mist-500">{{ $cancion['duracion'] }}</span>
                        </div>

                        {{-- Actions --}}
                        <div class="flex items-center justify-end">
                            <button class="w-6 h-6 rounded flex items-center justify-center opacity-0 group-hover:opacity-100 hover:text-white text-mist-500 transition-all">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"/></svg>
                            </button>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- ── PLAYER BAR ──────────────────────────────────────── --}}
        <div class="flex-shrink-0 border-t border-velvet-600/30 bg-velvet-900/95 backdrop-blur-xl px-8 py-4">
            <div class="flex items-center gap-6">

                {{-- Current song --}}
                <div class="flex items-center gap-3 w-56 flex-shrink-0">
                    <div class="w-11 h-11 rounded overflow-hidden flex-shrink-0">
                        <img src="{{ $cancionActiva['cover'] }}" alt="" class="w-full h-full object-cover" id="player-cover">
                    </div>
                    <div class="min-w-0">
                        <p class="text-xs font-body font-400 text-white truncate" id="player-title">{{ $cancionActiva['titulo'] }}</p>
                        <p class="text-xs font-body font-300 text-mist-500 truncate" id="player-artist">{{ $cancionActiva['artista'] }}</p>
                    </div>
                    <button class="text-mist-500 hover:text-gold-400 transition-colors flex-shrink-0">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
                    </button>
                </div>

                {{-- Controls --}}
                <div class="flex-1 flex flex-col items-center gap-2">
                    <div class="flex items-center gap-5">
                        {{-- Shuffle --}}
                        <button class="text-mist-600 hover:text-mist-400 transition-colors">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M16 3h5v5M4 20L21 3M21 16v5h-5M15 15l6 6"/></svg>
                        </button>
                        {{-- Prev --}}
                        <button class="text-mist-400 hover:text-white transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M8.445 14.832A1 1 0 0010 14v-2.798l5.445 3.63A1 1 0 0017 14V6a1 1 0 00-1.555-.832L10 8.798V6a1 1 0 00-1.555-.832l-6 4a1 1 0 000 1.664l6 4z"/></svg>
                        </button>
                        {{-- Play/Pause --}}
                        <button id="play-btn" onclick="togglePlay()" class="w-10 h-10 rounded-full bg-white flex items-center justify-center hover:scale-105 transition-transform shadow-lg">
                            <svg id="play-icon" class="w-4 h-4 text-velvet-900 ml-0.5" fill="currentColor" viewBox="0 0 20 20"><path d="M6.3 2.841A1.5 1.5 0 004 4.11V15.89a1.5 1.5 0 002.3 1.269l9.344-5.89a1.5 1.5 0 000-2.538L6.3 2.84z"/></svg>
                            <svg id="pause-icon" class="w-4 h-4 text-velvet-900 hidden" fill="currentColor" viewBox="0 0 20 20"><path d="M5.75 3a.75.75 0 00-.75.75v12.5c0 .414.336.75.75.75h1.5a.75.75 0 00.75-.75V3.75A.75.75 0 007.25 3h-1.5zM12.75 3a.75.75 0 00-.75.75v12.5c0 .414.336.75.75.75h1.5a.75.75 0 00.75-.75V3.75a.75.75 0 00-.75-.75h-1.5z"/></svg>
                        </button>
                        {{-- Next --}}
                        <button class="text-mist-400 hover:text-white transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M11.555 5.168A1 1 0 0010 6v2.798L4.555 5.168A1 1 0 003 6v8a1 1 0 001.555.832L10 11.202V14a1 1 0 001.555.832l6-4a1 1 0 000-1.664l-6-4z"/></svg>
                        </button>
                        {{-- Repeat --}}
                        <button class="text-mist-600 hover:text-mist-400 transition-colors">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><polyline points="17 1 21 5 17 9"/><path d="M3 11V9a4 4 0 014-4h14M7 23l-4-4 4-4"/><path d="M21 13v2a4 4 0 01-4 4H3"/></svg>
                        </button>
                    </div>

                    {{-- Progress --}}
                    <div class="flex items-center gap-3 w-full max-w-lg">
                        <span class="text-xs font-body font-300 text-mist-600 w-8 text-right" id="current-time">1:03</span>
                        <input type="range" id="progress" class="progress-bar flex-1" value="47" min="0" max="100"
                               style="background: linear-gradient(to right, #e8bc5a 47%, #252540 47%);"
                               oninput="updateProgress(this)">
                        <span class="text-xs font-body font-300 text-mist-600 w-8" id="total-time">{{ $cancionActiva['duracion'] }}</span>
                    </div>
                </div>

                {{-- Volume & extra --}}
                <div class="flex items-center gap-3 w-48 justify-end flex-shrink-0">
                    <button class="text-mist-500 hover:text-mist-300 transition-colors">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M9 18V5l12-2v13"/><circle cx="6" cy="18" r="3"/><circle cx="18" cy="16" r="3"/></svg>
                    </button>
                    <button class="text-mist-500 hover:text-mist-300 transition-colors">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><line x1="9" y1="9" x2="15" y2="9"/><line x1="9" y1="12" x2="15" y2="12"/><line x1="9" y1="15" x2="12" y2="15"/></svg>
                    </button>
                    <svg class="w-4 h-4 text-mist-500" fill="currentColor" viewBox="0 0 20 20"><path d="M9.383 3.076A1 1 0 0110 4v12a1 1 0 01-1.707.707L4.586 13H2a1 1 0 01-1-1V8a1 1 0 011-1h2.586l3.707-3.707a1 1 0 011.09-.217zM14.657 2.929a1 1 0 011.414 0A9.972 9.972 0 0119 10a9.972 9.972 0 01-2.929 7.071 1 1 0 01-1.414-1.414A7.971 7.971 0 0017 10c0-2.21-.894-4.208-2.343-5.657a1 1 0 010-1.414zm-2.829 2.828a1 1 0 011.415 0A5.983 5.983 0 0115 10a5.984 5.984 0 01-1.757 4.243 1 1 0 01-1.415-1.415A3.984 3.984 0 0013 10a3.983 3.983 0 00-1.172-2.828 1 1 0 010-1.415z"/></svg>
                    <input type="range" class="volume-bar" value="75" min="0" max="100"
                           style="background: linear-gradient(to right, #9b9bbf 75%, #252540 75%);"
                           oninput="updateVolume(this)">
                </div>
            </div>
        </div>
    </main>
</div>

<script>
    let isPlaying = false;

    function togglePlay() {
        isPlaying = !isPlaying;
        document.getElementById('play-icon').classList.toggle('hidden', isPlaying);
        document.getElementById('pause-icon').classList.toggle('hidden', !isPlaying);
        const vinyl = document.getElementById('vinyl');
        vinyl.classList.toggle('vinyl-paused', !isPlaying);
        const eq = document.getElementById('eq');
        if (eq) eq.classList.toggle('eq-paused', !isPlaying);
    }

    function updateProgress(input) {
        const val = input.value;
        input.style.background = `linear-gradient(to right, #e8bc5a ${val}%, #252540 ${val}%)`;
        // Simulate time display
        const total = 141; // 2:21 in seconds
        const current = Math.floor((val / 100) * total);
        const m = Math.floor(current / 60);
        const s = current % 60;
        document.getElementById('current-time').textContent = `${m}:${s.toString().padStart(2,'0')}`;
    }

    function updateVolume(input) {
        const val = input.value;
        input.style.background = `linear-gradient(to right, #9b9bbf ${val}%, #252540 ${val}%)`;
    }

    function setActive(id) {
        document.querySelectorAll('.song-row').forEach(r => r.classList.remove('active'));
        // In a real Laravel app this would be a route/AJAX call
    }
</script>

</body>
</html>