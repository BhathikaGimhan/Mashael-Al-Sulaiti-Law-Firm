<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QatariLaw extends Model
{
    use HasFactory;

    protected $table = 'qatari_laws';

    protected $guarded = ['id'];

    protected $fillable = [
        'title',
        'description',
        'content',
        'image',
        'created_by'
    ];

    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}
