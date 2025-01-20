<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manga extends Model
{
    use HasFactory;

    // Define el nombre de la tabla si no sigue la convención
    // protected $table = 'mangas'; // Descomenta esto si el nombre de la tabla no es plural por convención.

    // Define los campos que son asignables de manera masiva (Mass Assignment)
    protected $fillable = [
        'titulo',
        'autor',
        'descripcion',
        'genero',
        'numero_de_tomos',
        'fecha_lanzamiento',
    ];

    // Si necesitas manejar fechas como Carbon, puedes usar el siguiente atributo:
    protected $dates = ['fecha_lanzamiento'];
}
