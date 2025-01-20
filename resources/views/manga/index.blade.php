@extends('layouts.app')

@section('title', 'Mangas')

@section('body')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Gestión de Mangas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-800 text-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <!-- Formulario para agregar un nuevo manga -->
                    <form method="POST" action="{{ route('manga-crud.store') }}">
                        @csrf
                        <h3 class="text-xl font-semibold mb-6">Agregar Manga</h3>

                        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                            <div>
                                <label for="titulo" class="block text-sm font-medium text-gray-300">Título</label>
                                <input id="titulo" name="titulo" type="text" required class="mt-1 block w-full border border-gray-600 rounded-md shadow-sm focus:ring-orange-500 focus:border-orange-500 text-gray-900">
                            </div>

                            <div>
                                <label for="autor" class="block text-sm font-medium text-gray-300">Autor</label>
                                <input id="autor" name="autor" type="text" required class="mt-1 block w-full border border-gray-600 rounded-md shadow-sm focus:ring-orange-500 focus:border-orange-500 text-gray-900">
                            </div>

                            <div>
                                <label for="descripcion" class="block text-sm font-medium text-gray-300">Descripción</label>
                                <textarea id="descripcion" name="descripcion" rows="3" required class="mt-1 block w-full border border-gray-600 rounded-md shadow-sm focus:ring-orange-500 focus:border-orange-500 text-gray-900"></textarea>
                            </div>

                            <div>
                                <label for="genero" class="block text-sm font-medium text-gray-300">Género</label>
                                <input id="genero" name="genero" type="text" required class="mt-1 block w-full border border-gray-600 rounded-md shadow-sm focus:ring-orange-500 focus:border-orange-500 text-gray-900">
                            </div>

                            <div>
                                <label for="numero_de_tomos" class="block text-sm font-medium text-gray-300">Número de Tomos</label>
                                <input id="numero_de_tomos" name="numero_de_tomos" type="number" required class="mt-1 block w-full border border-gray-600 rounded-md shadow-sm focus:ring-orange-500 focus:border-orange-500 text-gray-900">
                            </div>

                            <div>
                                <label for="fecha_lanzamiento" class="block text-sm font-medium text-gray-300">Fecha de Lanzamiento</label>
                                <input id="fecha_lanzamiento" name="fecha_lanzamiento" type="date" required class="mt-1 block w-full border border-gray-600 rounded-md shadow-sm focus:ring-orange-500 focus:border-orange-500 text-gray-900">
                            </div>
                        </div>

                        <button type="submit" class="mt-4 px-6 py-2 bg-orange-500 text-white rounded-md hover:bg-orange-600">Agregar Manga</button>
                    </form>
                </div>

                <!-- Tabla de mangas -->
                <div class="mt-8">
                    <h3 class="text-xl font-semibold mb-4">Lista de Mangas</h3>

                    <div class="overflow-x-auto mx-auto">
                        <table class="min-w-full table-auto text-white text-center">
                            <thead>
                                <tr class="border-b">
                                    <th class="px-6 py-2 text-sm font-medium text-gray-300">Título</th>
                                    <th class="px-6 py-2 text-sm font-medium text-gray-300">Autor</th>
                                    <th class="px-6 py-2 text-sm font-medium text-gray-300">Género</th>
                                    <th class="px-6 py-2 text-sm font-medium text-gray-300">Número de Tomos</th>
                                    <th class="px-6 py-2 text-sm font-medium text-gray-300">Fecha de Lanzamiento</th>
                                    <th class="px-6 py-2 text-sm font-medium text-gray-300">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($mangas as $manga)
                                    <tr class="border-b">
                                        <td class="px-6 py-2 text-sm">{{ $manga->titulo }}</td>
                                        <td class="px-6 py-2 text-sm">{{ $manga->autor }}</td>
                                        <td class="px-6 py-2 text-sm">{{ $manga->genero }}</td>
                                        <td class="px-6 py-2 text-sm">{{ $manga->numero_de_tomos }}</td>
                                        <td class="px-6 py-2 text-sm">{{ $manga->fecha_lanzamiento }}</td>
                                        <td class="px-6 py-2 text-sm">
                                            <!-- Formulario para eliminar un manga -->
                                            <form method="POST" action="{{ route('manga-crud.destroy', $manga->id) }}" class="inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-500 hover:text-red-700">Eliminar</button>
                                            </form>
                                            <!-- Botón para editar el manga -->
                                            <a href="{{ route('manga-crud.edit', $manga->id) }}" class="text-blue-500 hover:text-blue-700 ml-4">Editar</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
