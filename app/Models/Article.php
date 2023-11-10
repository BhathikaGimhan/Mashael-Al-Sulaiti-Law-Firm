<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $table = 'articles';

    protected $guarded = ['id'];

    protected $fillable = [
        'article_title',
        'article_slug',
        'featured_image_public_path',
        'article_content',
        'created_by',
        'article_category_id',
        'lang_type',
    ];

    public function articleCategory()
    {
        return $this->belongsTo(ArticleCategory::class);
    }

    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

}
