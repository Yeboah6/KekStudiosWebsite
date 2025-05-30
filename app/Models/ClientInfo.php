<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientInfo extends Model
{
    use HasFactory;
    
    protected $table = 'client_infos';

    protected $fillable = [
        'client_id',
        'full_name',
        'phone',
        'email',
        'address',
        'company_name',
    ];

    /**
     * Get the projects for the client.
     */
    public function projects()
    {
        return $this->hasMany(ProjectInfo::class);
    }
}
