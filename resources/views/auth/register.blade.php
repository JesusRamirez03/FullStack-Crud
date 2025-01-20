@extends('layouts.guest')
@section('title', 'Registrarse')
@section('body')
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <!-- Nombre -->
        <div>
            <label for="name" class="block text-sm font-medium text-gray-300">Nombre</label>
            <input id="name" name="name" type="text" value="{{ old('name') }}" required autofocus
                   class="mt-1 block w-full bg-gray-800 text-white placeholder-gray-500 border-transparent rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
            @error('name')
                <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Correo -->
        <div class="mt-4">
            <label for="email" class="block text-sm font-medium text-gray-300">Correo electrónico</label>
            <input id="email" name="email" type="email" value="{{ old('email') }}" required
                   class="mt-1 block w-full bg-gray-800 text-white placeholder-gray-500 border-transparent rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
            @error('email')
                <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Contraseña -->
        <div class="mt-4">
            <label for="password" class="block text-sm font-medium text-gray-300">Contraseña</label>
            <input id="password" name="password" type="password" required
                   class="mt-1 block w-full bg-gray-800 text-white placeholder-gray-500 border-transparent rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
            @error('password')
                <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Confirmar Contraseña -->
        <div class="mt-4">
            <label for="password_confirmation" class="block text-sm font-medium text-gray-300">Confirmar contraseña</label>
            <input id="password_confirmation" name="password_confirmation" type="password" required
                   class="mt-1 block w-full bg-gray-800 text-white placeholder-gray-500 border-transparent rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
        </div>

        <!-- Botón para registrarse -->
        <div class="mt-6">
            <button type="submit"
                    class="ml-4 px-4 py-2 bg-blue-600 text-white rounded-md shadow hover:bg-blue-700">
                Registrarse
            </button>
        </div>
    </form>
@endsection
