<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anuncio extends Model
{
    use HasFactory; 

    protected $fillable = [
        'titulo',
        'description',
        'imagen',
        'precio',
        'user_id',
        'subcategoria_id',
        'telefono',
        'estado_id',
        'provincia',
        'cod_postal'
    ];

    public function user () {
        return $this -> belongsTo(User::class);
    }

    public function subcategoria () {
        return $this -> belongsTo(Subcategoria::class);
    }

    public function estado () {
        return $this -> belongsTo(Estado::class);
    }

    public function fotos() {
        return $this -> hasMany(Foto::class);
    }

    public function tags () {
        return $this->belongsToMany(Tag::class);
    }

}
