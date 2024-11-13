<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class PublicationTypeAssignment extends Pivot
{
    use HasFactory;

    protected $fillable = [
        'publication_id',
        'type_id',
    ];
}
