<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Researcher extends Model
{
    protected $table = "researchers";

    protected $fillable = [
        "name",
        "email",
        "image",
        "area_of_expertise",
        "direction",
        "status"
    ];
    

}
