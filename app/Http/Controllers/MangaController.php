<?php

namespace App\Http\Controllers;

use App\Models\Manga;
use Illuminate\Http\Request;

class MangaController extends Controller
{
    // Mostrar la lista de mangas
    public function index()
    {
        $mangas = Manga::all();  // Obtener todos los mangas
        return view('manga.index', compact('mangas'));
    }

    // Mostrar el formulario para agregar un nuevo manga
    public function create()
    {
        return view('manga.create');
    }

    // Almacenar un nuevo manga
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'autor' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'genero' => 'required|string|max:255',
            'numero_de_tomos' => 'required|integer',
            'fecha_lanzamiento' => 'required|date',
        ]);

        Manga::create($request->all());  // Crear el nuevo manga
        return redirect()->route('manga-crud.index');
    }

    // Mostrar el formulario para editar un manga
    public function edit(Manga $manga)
    {
        return view('manga.edit', compact('manga'));
    }

    // Actualizar un manga
    public function update(Request $request, Manga $manga)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'autor' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'genero' => 'required|string|max:255',
            'numero_de_tomos' => 'required|integer',
            'fecha_lanzamiento' => 'required|date',
        ]);

        $manga->update($request->all());  // Actualizar el manga
        return redirect()->route('manga-crud.index');
    }

    // Eliminar un manga
    public function destroy(Manga $manga)
    {
        $manga->delete();  // Eliminar el manga
        return redirect()->route('manga-crud.index');
    }
}
