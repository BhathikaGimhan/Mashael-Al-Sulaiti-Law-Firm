<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
    protected $table = 'bookings';
    protected $fillable = [
        'booking_date',
        'booking_time',
        'first_name',
        'last_name',
        'email',
        'phone'
    ];
}
