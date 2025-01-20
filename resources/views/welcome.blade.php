@extends('layouts.guest')

@section('title', 'Bienvenido a AniManga')

@section('body')
    <div class="text-center">
        <!-- Título principal -->
        <h1 class="text-4xl font-bold text-white">Bienvenido a AniManga</h1>
        <!-- Descripción breve -->
        <p class="text-lg text-gray-300 mt-4">Disfruta de toda nuestra colección de Anime y Manga.</p>
        
        <!-- GIF animado -->
        <div class="mt-6">
            <img src="{{ asset('gifs/anime-logo.gif') }}" alt="Bienvenido a AniManga" class="rounded-lg shadow-md mx-auto" style="max-width: 100%; height: auto;">
        </div>
        
        <!-- Botones para iniciar sesión o registrarse -->
        <div class="mt-6">
            <!-- Botón que redirige a la vista de login -->
            <a href="{{ route('login') }}" class="ml-4 px-4 py-2 bg-gray-500 text-white rounded-md shadow hover:bg-gray-600">
                Iniciar sesión
            </a>
            <!-- Botón que redirige a la vista de registro -->
            <a href="{{ route('register') }}" class="ml-4 px-4 py-2 bg-gray-500 text-white rounded-md shadow hover:bg-gray-600">
                Registrarse
            </a>
        </div>
    </div>
@endsection
