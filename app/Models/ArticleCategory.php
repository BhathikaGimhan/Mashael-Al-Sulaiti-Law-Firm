<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleCategory extends Model
{
    use HasFactory;

    protected $table = 'article_categories';

    protected $guarded = ['id'];

    protected $fillable = [
        'article_category_name',
        'article_category_slug',
        'articlecategory_image',
    ];

    public function articles()
    {
        return $this->hasMany(Article::class);
    }
}
