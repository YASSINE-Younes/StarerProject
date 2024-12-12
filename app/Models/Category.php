<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Blog;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    // RELATION HASMANY (1 Category hasMany  Blog)
    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }

  
}
