@extends('layouts.app')

@section('title', 'Contacto - AUREON')

@section('content')
<section class="py-24 bg-white">
    <div class="container mx-auto max-w-2xl px-4">
        <h2 class="text-3xl font-bold text-center mb-8 text-gray-900">Contactanos</h2>

        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('contact.store') }}" method="POST" class="space-y-6">
            @csrf
            <div>
                <label class="block text-sm font-medium text-gray-700">Nombre</label>
                <input type="text" name="name" value="{{ old('name') }}" class="w-full mt-1 p-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-blue-600 outline-none">
                @error('name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" name="email" value="{{ old('email') }}" class="w-full mt-1 p-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-blue-600 outline-none">
                @error('email') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Mensaje</label>
                <textarea name="message" rows="5" class="w-full mt-1 p-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-blue-600 outline-none">{{ old('message') }}</textarea>
                @error('message') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            <button type="submit" class="w-full bg-blue-600 text-white font-bold py-4 rounded-lg hover:bg-blue-700 transition duration-300">
                Enviar Mensaje
            </button>
        </form>
    </div>
</section>
@endsection