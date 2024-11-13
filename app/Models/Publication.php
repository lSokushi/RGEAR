<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'authors',
        'year',
        'summary',
        'publication_location',
        'user_id',
        'line_id',
    ];

    // Relacionamento com User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relacionamento com ResearchLine
    public function researchLine()
    {
        return $this->belongsTo(ResearchLine::class, 'line_id');
    }

    // Relacionamento com PublicationTypeAssignment
    public function publicationTypes()
    {
        return $this->belongsToMany(PublicationType::class, 'publication_type_assignments');
    }
}
