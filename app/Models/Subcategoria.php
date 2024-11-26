<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategoria extends Model
{
    // Permite crear objetos para realizar pruebas del modelo
    use HasFactory;

    // Campos que se pueden asignar masivamente
    protected $fillable = [
        'nombre',
        'descripcion',
        'categoria_id'
    ];

    /**
     * Indica que una subcategoria pertenece a una sola categoria
     */
    public function categoria() {
        return $this->belongsTo('App\Models\Categoria');
    }

    /**
     * Indica que una subcategoria puede tener varios anuncios asociados a ella
     */
    public function anuncios() {
        return $this->hasMany('App\Models\Anuncio');
    }

}
