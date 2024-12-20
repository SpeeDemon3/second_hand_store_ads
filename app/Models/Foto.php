<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    use HasFactory;

    protected $fillable = ['path', 'anuncio_id'];

    public function anuncio() {
        return $this->belongsTo(Anuncio::class);
    }
}
