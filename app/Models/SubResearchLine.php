<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubResearchLine extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'line_id',
    ];

    // Relacionamento com ResearchLine
    public function researchLine()
    {
        return $this->belongsTo(ResearchLine::class, 'line_id');
    }
}
