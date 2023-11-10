<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    use HasFactory;

    protected $table = 'publications';

    protected $guarded = ['id'];

    protected $fillable = [
       'publication_title',
       'publication_slug',
       'featured_image_public_path',
       'publication_file_path',
       'description',
       'content',
       'lang_type',
    ];
}
