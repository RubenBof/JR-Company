<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini Wikipedia del Jazz</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</head>
<body class="bg-[#343541] font-sans text-gray-200">

    <div class="container mx-auto py-12">
        <!-- Título -->
        <h1 class="text-4xl font-bold text-center mb-8 text-blue-400">Leyendas del Jazz</h1>

        <!-- Grid 4x4 con separación uniforme -->
        <div class="grid grid-cols-4 gap-4 justify-items-center max-w-full mx-auto">

            <!-- Bloque 1 -->
            <div class="relative group cursor-pointer rounded-xl overflow-hidden shadow-lg aspect-square w-[180px]" x-data="{ open: false }" @click="open = !open">
                <img src="images/frank_sinatra.jpg" alt="Frank Sinatra" class="w-full h-full object-cover transform transition-transform duration-300 group-hover:scale-105">
                <div x-show="open" x-transition.opacity x-transition.scale class="absolute inset-0 bg-black bg-opacity-80 text-white p-2 flex flex-col justify-center items-center text-sm">
                    <h2 class="text-lg font-bold mb-1 text-center">Frank Sinatra</h2>
                    <p class="mb-1 text-center">Cantante y actor estadounidense, "La Voz".</p>
                    <ul class="list-disc list-inside text-center space-y-1">
                        <li>My Way</li>
                        <li>Fly Me to the Moon</li>
                        <li>New York, New York</li>
                    </ul>
                </div>
            </div>

            <!-- Bloque 2 -->
            <div class="relative group cursor-pointer rounded-xl overflow-hidden shadow-lg aspect-square w-[180px]" x-data="{ open: false }" @click="open = !open">
                <img src="images/louis_armstrong.jpg" alt="Louis Armstrong" class="w-full h-full object-cover transform transition-transform duration-300 group-hover:scale-105">
                <div x-show="open" x-transition.opacity x-transition.scale class="absolute inset-0 bg-black bg-opacity-80 text-white p-2 flex flex-col justify-center items-center text-sm">
                    <h2 class="text-lg font-bold mb-1 text-center">Louis Armstrong</h2>
                    <p class="mb-1 text-center">Trompetista y cantante estadounidense, pionero del jazz.</p>
                    <ul class="list-disc list-inside text-center space-y-1">
                        <li>What a Wonderful World</li>
                        <li>A Kiss To Build A Dream</li>
                        <li>La Vie En Rose</li>
                    </ul>
                </div>
            </div>

            <!-- Bloque 3 -->
            <div class="relative group cursor-pointer rounded-xl overflow-hidden shadow-lg aspect-square w-[180px]" x-data="{ open: false }" @click="open = !open">
                <img src="images/nina_simone.jpg" alt="Nina Simone" class="w-full h-full object-cover transform transition-transform duration-300 group-hover:scale-105">
                <div x-show="open" x-transition.opacity x-transition.scale class="absolute inset-0 bg-black bg-opacity-80 text-white p-2 flex flex-col justify-center items-center text-sm">
                    <h2 class="text-lg font-bold mb-1 text-center">Nina Simone</h2>
                    <p class="mb-1 text-center">Cantante y pianista estadounidense, destacada por su voz y activismo.</p>
                    <ul class="list-disc list-inside text-center space-y-1">
                        <li>Feeling Good</li>
                        <li>My Baby Just Cares for Me</li>
                        <li>Love Me Or Leave Me</li>
                    </ul>
                </div>
            </div>

            <!-- Bloque 4 -->
            <div class="relative group cursor-pointer rounded-xl overflow-hidden shadow-lg aspect-square w-[180px]" x-data="{ open: false }" @click="open = !open">
                <img src="images/nat_king_cole.jpg" alt="Nat King Cole" class="w-full h-full object-cover transform transition-transform duration-300 group-hover:scale-105">
                <div x-show="open" x-transition.opacity x-transition.scale class="absolute inset-0 bg-black bg-opacity-80 text-white p-2 flex flex-col justify-center items-center text-sm">
                    <h2 class="text-lg font-bold mb-1 text-center">Nat King Cole</h2>
                    <p class="mb-1 text-center">Pianista y cantante estadounidense, famoso por su suave voz de barítono.</p>
                    <ul class="list-disc list-inside text-center space-y-1">
                        <li>Unforgettable</li>
                        <li>Mona Lisa</li>
                        <li>L-O-V-E</li>
                    </ul>
                </div>
            </div>

            <!-- Bloque 5 -->
            <div class="relative group cursor-pointer rounded-xl overflow-hidden shadow-lg aspect-square w-[180px]" x-data="{ open: false }" @click="open = !open">
                <img src="images/andrea_bocelli.jpg" alt="Artista 5" class="w-full h-full object-cover transform transition-transform duration-300 group-hover:scale-105">
                <div x-show="open" x-transition.opacity x-transition.scale class="absolute inset-0 bg-black bg-opacity-80 text-white p-2 flex flex-col justify-center items-center text-sm">
                    <h2 class="text-lg font-bold mb-1 text-center">Artista 5</h2>
                    <p class="mb-1 text-center">Descripción del artista 5.</p>
                    <ul class="list-disc list-inside text-center space-y-1">
                        <li>Canción 1</li>
                        <li>Canción 2</li>
                        <li>Canción 3</li>
                    </ul>
                </div>
            </div>

            <!-- Bloque 6 -->
            <div class="relative group cursor-pointer rounded-xl overflow-hidden shadow-lg aspect-square w-[180px]" x-data="{ open: false }" @click="open = !open">
                <img src="images/charles_aznavour.jpg" alt="Artista 6" class="w-full h-full object-cover transform transition-transform duration-300 group-hover:scale-105">
                <div x-show="open" x-transition.opacity x-transition.scale class="absolute inset-0 bg-black bg-opacity-80 text-white p-2 flex flex-col justify-center items-center text-sm">
                    <h2 class="text-lg font-bold mb-1 text-center">Artista 6</h2>
                    <p class="mb-1 text-center">Descripción del artista 6.</p>
                    <ul class="list-disc list-inside text-center space-y-1">
                        <li>Canción 1</li>
                        <li>Canción 2</li>
                        <li>Canción 3</li>
                    </ul>
                </div>
            </div>

            <!-- Bloque 7 -->
            <div class="relative group cursor-pointer rounded-xl overflow-hidden shadow-lg aspect-square w-[180px]" x-data="{ open: false }" @click="open = !open">
                <img src="images/imagen7.jpg" alt="Artista 7" class="w-full h-full object-cover transform transition-transform duration-300 group-hover:scale-105">
                <div x-show="open" x-transition.opacity x-transition.scale class="absolute inset-0 bg-black bg-opacity-80 text-white p-2 flex flex-col justify-center items-center text-sm">
                    <h2 class="text-lg font-bold mb-1 text-center">Artista 7</h2>
                    <p class="mb-1 text-center">Descripción del artista 7.</p>
                    <ul class="list-disc list-inside text-center space-y-1">
                        <li>Canción 1</li>
                        <li>Canción 2</li>
                        <li>Canción 3</li>
                    </ul>
                </div>
            </div>

            <!-- Bloque 8 -->
            <div class="relative group cursor-pointer rounded-xl overflow-hidden shadow-lg aspect-square w-[180px]" x-data="{ open: false }" @click="open = !open">
                <img src="images/imagen8.jpg" alt="Artista 8" class="w-full h-full object-cover transform transition-transform duration-300 group-hover:scale-105">
                <div x-show="open" x-transition.opacity x-transition.scale class="absolute inset-0 bg-black bg-opacity-80 text-white p-2 flex flex-col justify-center items-center text-sm">
                    <h2 class="text-lg font-bold mb-1 text-center">Artista 8</h2>
                    <p class="mb-1 text-center">Descripción del artista 8.</p>
                    <ul class="list-disc list-inside text-center space-y-1">
                        <li>Canción 1</li>
                        <li>Canción 2</li>
                        <li>Canción 3</li>
                    </ul>
                </div>
            </div>

            <!-- Bloque 9 -->
            <div class="relative group cursor-pointer rounded-xl overflow-hidden shadow-lg aspect-square w-[180px]" x-data="{ open: false }" @click="open = !open">
                <img src="images/imagen9.jpg" alt="Artista 9" class="w-full h-full object-cover transform transition-transform duration-300 group-hover:scale-105">
                <div x-show="open" x-transition.opacity x-transition.scale class="absolute inset-0 bg-black bg-opacity-80 text-white p-2 flex flex-col justify-center items-center text-sm">
                    <h2 class="text-lg font-bold mb-1 text-center">Artista 9</h2>
                    <p class="mb-1 text-center">Descripción del artista 9.</p>
                    <ul class="list-disc list-inside text-center space-y-1">
                        <li>Canción 1</li>
                        <li>Canción 2</li>
                        <li>Canción 3</li>
                    </ul>
                </div>
            </div>

            <!-- Bloque 10 -->
            <div class="relative group cursor-pointer rounded-xl overflow-hidden shadow-lg aspect-square w-[180px]" x-data="{ open: false }" @click="open = !open">
                <img src="images/imagen10.jpg" alt="Artista 10" class="w-full h-full object-cover transform transition-transform duration-300 group-hover:scale-105">
                <div x-show="open" x-transition.opacity x-transition.scale class="absolute inset-0 bg-black bg-opacity-80 text-white p-2 flex flex-col justify-center items-center text-sm">
                    <h2 class="text-lg font-bold mb-1 text-center">Artista 10</h2>
                    <p class="mb-1 text-center">Descripción del artista 10.</p>
                    <ul class="list-disc list-inside text-center space-y-1">
                        <li>Canción 1</li>
                        <li>Canción 2</li>
                        <li>Canción 3</li>
                    </ul>
                </div>
            </div>

            <!-- Bloque 11 -->
            <div class="relative group cursor-pointer rounded-xl overflow-hidden shadow-lg aspect-square w-[180px]" x-data="{ open: false }" @click="open = !open">
                <img src="images/imagen11.jpg" alt="Artista 11" class="w-full h-full object-cover transform transition-transform duration-300 group-hover:scale-105">
                <div x-show="open" x-transition.opacity x-transition.scale class="absolute inset-0 bg-black bg-opacity-80 text-white p-2 flex flex-col justify-center items-center text-sm">
                    <h2 class="text-lg font-bold mb-1 text-center">Artista 11</h2>
                    <p class="mb-1 text-center">Descripción del artista 11.</p>
                    <ul class="list-disc list-inside text-center space-y-1">
                        <li>Canción 1</li>
                        <li>Canción 2</li>
                        <li>Canción 3</li>
                    </ul>
                </div>
            </div>

            <!-- Bloque 12 -->
            <div class="relative group cursor-pointer rounded-xl overflow-hidden shadow-lg aspect-square w-[180px]" x-data="{ open: false }" @click="open = !open">
                <img src="images/imagen12.jpg" alt="Artista 12" class="w-full h-full object-cover transform transition-transform duration-300 group-hover:scale-105">
                <div x-show="open" x-transition.opacity x-transition.scale class="absolute inset-0 bg-black bg-opacity-80 text-white p-2 flex flex-col justify-center items-center text-sm">
                    <h2 class="text-lg font-bold mb-1 text-center">Artista 12</h2>
                    <p class="mb-1 text-center">Descripción del artista 12.</p>
                    <ul class="list-disc list-inside text-center space-y-1">
                        <li>Canción 1</li>
                        <li>Canción 2</li>
                        <li>Canción 3</li>
                    </ul>
                </div>
            </div>

            <!-- Bloque 13 -->
            <div class="relative group cursor-pointer rounded-xl overflow-hidden shadow-lg aspect-square w-[180px]" x-data="{ open: false }" @click="open = !open">
                <img src="images/imagen13.jpg" alt="Artista 13" class="w-full h-full object-cover transform transition-transform duration-300 group-hover:scale-105">
                <div x-show="open" x-transition.opacity x-transition.scale class="absolute inset-0 bg-black bg-opacity-80 text-white p-2 flex flex-col justify-center items-center text-sm">
                    <h2 class="text-lg font-bold mb-1 text-center">Artista 13</h2>
                    <p class="mb-1 text-center">Descripción del artista 13.</p>
                    <ul class="list-disc list-inside text-center space-y-1">
                        <li>Canción 1</li>
                        <li>Canción 2</li>
                        <li>Canción 3</li>
                    </ul>
                </div>
            </div>

            <!-- Bloque 14 -->
            <div class="relative group cursor-pointer rounded-xl overflow-hidden shadow-lg aspect-square w-[180px]" x-data="{ open: false }" @click="open = !open">
                <img src="images/imagen14.jpg" alt="Artista 14" class="w-full h-full object-cover transform transition-transform duration-300 group-hover:scale-105">
                <div x-show="open" x-transition.opacity x-transition.scale class="absolute inset-0 bg-black bg-opacity-80 text-white p-2 flex flex-col justify-center items-center text-sm">
                    <h2 class="text-lg font-bold mb-1 text-center">Artista 14</h2>
                    <p class="mb-1 text-center">Descripción del artista 14.</p>
                    <ul class="list-disc list-inside text-center space-y-1">
                        <li>Canción 1</li>
                        <li>Canción 2</li>
                        <li>Canción 3</li>
                    </ul>
                </div>
            </div>

            <!-- Bloque 15 -->
            <div class="relative group cursor-pointer rounded-xl overflow-hidden shadow-lg aspect-square w-[180px]" x-data="{ open: false }" @click="open = !open">
                <img src="images/imagen15.jpg" alt="Artista 15" class="w-full h-full object-cover transform transition-transform duration-300 group-hover:scale-105">
                <div x-show="open" x-transition.opacity x-transition.scale class="absolute inset-0 bg-black bg-opacity-80 text-white p-2 flex flex-col justify-center items-center text-sm">
                    <h2 class="text-lg font-bold mb-1 text-center">Artista 15</h2>
                    <p class="mb-1 text-center">Descripción del artista 15.</p>
                    <ul class="list-disc list-inside text-center space-y-1">
                        <li>Canción 1</li>
                        <li>Canción 2</li>
                        <li>Canción 3</li>
                    </ul>
                </div>
            </div>

            <!-- Bloque 16 -->
            <div class="relative group cursor-pointer rounded-xl overflow-hidden shadow-lg aspect-square w-[180px]" x-data="{ open: false }" @click="open = !open">
                <img src="images/imagen16.jpg" alt="Artista 16" class="w-full h-full object-cover transform transition-transform duration-300 group-hover:scale-105">
                <div x-show="open" x-transition.opacity x-transition.scale class="absolute inset-0 bg-black bg-opacity-80 text-white p-2 flex flex-col justify-center items-center text-sm">
                    <h2 class="text-lg font-bold mb-1 text-center">Artista 16</h2>
                    <p class="mb-1 text-center">Descripción del artista 16.</p>
                    <ul class="list-disc list-inside text-center space-y-1">
                        <li>Canción 1</li>
                        <li>Canción 2</li>
                        <li>Canción 3</li>
                    </ul>
                </div>
            </div>

        </div>
    </div>

</body>
</html>