<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Musica extends Model
{
    protected $fillable = [
    	'artista', 'titulo', 'genero','preco','audio','ano','foto'
    ];
}

