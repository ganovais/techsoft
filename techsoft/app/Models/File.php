<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{

    protected $fillable = [
        'fileable_type',
        'fileable_id',
        'path',
        'category'
    ];
}
