<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PublicationLine extends Model
{
    use HasFactory;

    protected $fillable = [
        'publication_id',
        'line_id',
        'assigned_at',
    ];

    // Relacionamento com Publication
    public function publication()
    {
        return $this->belongsTo(Publication::class);
    }

    // Relacionamento com ResearchLine
    public function researchLine()
    {
        return $this->belongsTo(ResearchLine::class, 'line_id');
    }
}
