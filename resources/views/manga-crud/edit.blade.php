@extends('layouts.app')
@section('title', 'Editar Manga')
@section('body')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-gray-800 text-white shadow-sm sm:rounded-lg">
            <div class="p-6">
                <h2 class="text-xl font-semibold mb-4">Editar Manga</h2>

                <form method="POST" action="{{ route('manga-crud.update', $manga->id) }}">
                    @csrf
                    @method('PUT')

                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                        <div>
                            <label for="titulo" class="block text-sm font-medium text-gray-300">Título</label>
                            <input id="titulo" name="titulo" type="text" value="{{ $manga->titulo }}" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-orange-500 focus:border-orange-500 text-gray-900">
                        </div>

                        <div>
                            <label for="autor" class="block text-sm font-medium text-gray-300">Autor</label>
                            <input id="autor" name="autor" type="text" value="{{ $manga->autor }}" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-orange-500 focus:border-orange-500 text-gray-900">
                        </div>

                        <div>
                            <label for="descripcion" class="block text-sm font-medium text-gray-300">Descripción</label>
                            <textarea id="descripcion" name="descripcion" rows="3" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-orange-500 focus:border-orange-500 text-gray-900">{{ $manga->descripcion }}</textarea>
                        </div>

                        <div>
                            <label for="genero" class="block text-sm font-medium text-gray-300">Género</label>
                            <input id="genero" name="genero" type="text" value="{{ $manga->genero }}" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-orange-500 focus:border-orange-500 text-gray-900">
                        </div>

                        <div>
                            <label for="numero_de_tomos" class="block text-sm font-medium text-gray-300">Número de Tomos</label>
                            <input id="numero_de_tomos" name="numero_de_tomos" type="number" value="{{ $manga->numero_de_tomos }}" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-orange-500 focus:border-orange-500 text-gray-900">
                        </div>

                        <div>
                            <label for="fecha_lanzamiento" class="block text-sm font-medium text-gray-300">Fecha de Lanzamiento</label>
                            <input id="fecha_lanzamiento" name="fecha_lanzamiento" type="date" value="{{ $manga->fecha_lanzamiento }}" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-orange-500 focus:border-orange-500 text-gray-900">
                        </div>
                    </div>

                    <button type="submit" class="mt-4 px-6 py-2 bg-orange-500 text-white rounded-md hover:bg-orange-600">Guardar Cambios</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
