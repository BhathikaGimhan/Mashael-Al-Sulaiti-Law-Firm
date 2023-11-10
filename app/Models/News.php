<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $table = 'news';

    protected $guarded = ['id'];

    protected $fillable = [
        'title',
        'content',
        'description',
        'image',
        'created_by',
        'tags',
        'lang_type',
    ];

    public function author()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}
