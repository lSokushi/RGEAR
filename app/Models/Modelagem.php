<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modelagem extends Model
{
    use HasFactory;

    protected $table = 'modelagens';

    protected $fillable = [
        'title',
        'description',
        'author',
        'image_url'
    ];
}
