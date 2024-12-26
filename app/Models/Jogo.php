<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jogo extends Model
{
    use HasFactory;

    protected $table = 'jogos';

    protected $fillable = [
        'title',
        'resume',
        'description', // Adicione aqui
        'images',
        'author',
    ];
}
