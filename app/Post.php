<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'manchete', 'noticia', 'urlImagem','urlVideo','urlFonte', 'palavraChave', 'idUser',
    ];
}
