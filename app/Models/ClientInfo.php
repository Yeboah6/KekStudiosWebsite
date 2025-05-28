<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClientInfo extends Model
{
    protected $table = 'client_infos';

    protected $fillable = [
        'full_name',
        'phone',
        'email',
        'address',
        'company_name',
    ];
}
