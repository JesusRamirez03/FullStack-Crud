@extends('layouts.guest')

@section('title', 'Login')

@section('body')
    <!-- Formulario de inicio de sesión -->
    <form method="POST" action="{{ route('login') }}" class="max-w-md mx-auto bg-blue-900 p-6 rounded-lg shadow-md">
        @csrf
        <!-- Campo de correo electrónico -->
        <div>
            <label for="email" class="block text-sm font-medium text-gray-200">Correo electrónico</label>
            <input 
                id="email" 
                name="email" 
                type="email" 
                required 
                autofocus 
                class="mt-1 block w-full bg-gray-800 text-white placeholder-gray-500 border-gray-700 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
        </div>

        <!-- Campo de contraseña -->
        <div class="mt-4">
            <label for="password" class="block text-sm font-medium text-gray-200">Contraseña</label>
            <input 
                id="password" 
                name="password" 
                type="password" 
                required 
                class="mt-1 block w-full bg-gray-800 text-white placeholder-gray-500 border-gray-700 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
        </div>

        <!-- Recordarme -->
        <div class="mt-4 flex items-center">
            <input 
                id="remember" 
                name="remember" 
                type="checkbox" 
                class="h-4 w-4 text-blue-500 bg-gray-800 border-gray-700 rounded focus:ring-blue-500">
            <label for="remember" class="ml-2 block text-sm text-gray-200">Recordarme</label>
        </div>

        <!-- Botón de iniciar sesión -->
        <div class="mt-6">
            <button 
                type="submit" 
                class="w-full px-4 py-2 bg-blue-600 text-white rounded-md shadow hover:bg-blue-700 focus:outline-none focus:ring focus:ring-blue-500">
                Iniciar sesión
            </button>
        </div>
    </form>
@endsection
