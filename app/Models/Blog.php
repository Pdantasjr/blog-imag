<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    Protected $table = 'posts';

    protected $fillable = [
        'title',
        'slug',
        'subtitle',
        'post_content',
        'author',
        'category',
        'image',
        'post_cover',
    ];

    public function postAuthor()
    {
        return $this->hasOne(User::class, 'id', 'author');
    }

    public function postCategory() {
        return $this->hasOne(Category::class, 'id', 'category');
    }

    public function category()
    {
        return $this->belongsToMany(Category::class, 'post_categories', 'post', 'category');
    }
}
