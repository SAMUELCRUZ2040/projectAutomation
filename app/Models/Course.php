<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        // Otras columnas
        'NameCourse',
        'featuredCourse',
        'descriptionCourse',
        'category_id'
    ];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
    
}
