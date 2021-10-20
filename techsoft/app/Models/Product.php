<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'price',
        'category_id'
    ];

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    public function image()
    {
        return $this->morphOne('App\Models\File', 'fileable')->where('category', 'image');
    }
}
