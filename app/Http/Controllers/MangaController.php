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
        return view('manga-crud.index', compact('mangas'));
    }

    // Mostrar el formulario para agregar un nuevo manga
    public function create()
    {
        return view('manga-crud.create');
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

    public function edit($id)
    {
        $manga = Manga::findOrFail($id); // Busca el manga por su ID o lanza un error 404
        return view('manga-crud.edit', compact('manga')); // Retorna una vista para editar
    }
    
    public function update(Request $request, $id)
    {
        $manga = Manga::findOrFail($id);
    
        // Validar los datos enviados
        $request->validate([
            'titulo' => 'required|string|max:255',
            'autor' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'genero' => 'required|string|max:255',
            'numero_de_tomos' => 'required|integer|min:1',
            'fecha_lanzamiento' => 'required|date',
        ]);
    
        // Actualizar el manga con los nuevos datos
        $manga->update($request->all());
    
        // Redirigir al índice con un mensaje de éxito
        return redirect()->route('manga-crud.index')->with('success', 'Manga actualizado exitosamente.');
    }
    

    public function destroy($id)
    {
        $manga = Manga::findOrFail($id);
        $manga->delete();
    
        return redirect()->route('manga-crud.index')->with('success', 'Manga eliminado exitosamente.');
    }
    
}
