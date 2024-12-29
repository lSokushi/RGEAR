<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    use HasFactory;

    // Campos que podem ser preenchidos em massa
    protected $fillable = [
        'title',
        'author',
        'resume',
        'item_type',
        'status',
        'research_lines',
        'images',
        'year',
        'location',
        'file', // Certifique-se de incluir 'file' aqui
    ];

    // Para armazenar linhas de pesquisa como JSON
    protected $casts = [
        'research_lines' => 'array',
        'images' => 'array', // Se você armazena múltiplas imagens em formato JSON
    ];
    
    public function scopeSearch($query, $term)
{
    $term = "%{$term}%";
    return $query->where('title', 'like', $term)
                 ->orWhere('resume', 'like', $term)
                 ->orWhere('author', 'like', $term);
}
}
