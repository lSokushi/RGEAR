<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResearchLine extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
    ];

    // Relacionamento com Publications
    public function publications()
    {
        return $this->hasMany(Publication::class);
    }

    // Relacionamento com Sub Research Lines
    public function subResearchLines()
    {
        return $this->hasMany(SubResearchLine::class);
    }
}
