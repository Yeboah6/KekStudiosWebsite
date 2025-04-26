<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'bookings';

    protected $fillable = [
        'booking_id',
        'service',
        'work',
        'name',
        'email',
        'phone',
        'company',
        'project_title',
        'project_description',
        'budget',
        'deadline',
        'reference',
        'additional_notes',
        'terms'
    ];
}
