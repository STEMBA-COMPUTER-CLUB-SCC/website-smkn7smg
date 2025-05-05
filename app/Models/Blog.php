<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 
        'content', 
        'category', 
        'tags',
        'image',
    ];

    protected $casts = [
        'tags' => 'array',
        'image' => 'array'
    ];

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
