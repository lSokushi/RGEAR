<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artigo extends Model
{
    use HasFactory;

    // Nome da tabela no banco de dados (opcional, caso siga a convenção no plural)
    protected $table = 'artigos';

    // Atributos que podem ser atribuídos em massa
    protected $fillable = [
        'title',
        'description',
        'author',
        'image_url'
    ];
}
