<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Blog extends Model
{
    use HasFactory;
 
    protected $fillable = ['name','description','image','category_id','user_id'];


    // RELATION BELONGS (1 Blog BelongsTo 1 Category)
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

        // RELATION BELONGS (1 Blog BelongsTo 1 User)
    public function user()
    {
        return $this->belongsTo(User::class);
    }

      // RELATION HasMany (1 Blog Has May Comments)
      public function comments()
      {
          return $this->hasMany(Comment::class);
      }
}
