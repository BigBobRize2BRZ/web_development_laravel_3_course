<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'slug', 'created_at', 'updated_at'];

    public function post():HasOne
    {
        return $this->hasOne(Post::class);
    }

    public function posts():HasMany
    {
        return $this->hasMany(Post::class);
    }
}
