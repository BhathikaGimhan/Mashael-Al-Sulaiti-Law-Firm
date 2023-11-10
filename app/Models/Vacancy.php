<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    use HasFactory;

    protected $table = 'vacancies';

    protected $guarded = ['id'];

    protected $fillable = [
        'position',
        'opening_date',
        'closing_date'
    ];
}
