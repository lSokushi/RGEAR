<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PublicationType extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    // Relacionamento com Publications por meio de PublicationTypeAssignment
    public function publications()
    {
        return $this->belongsToMany(Publication::class, 'publication_type_assignments');
    }
}
