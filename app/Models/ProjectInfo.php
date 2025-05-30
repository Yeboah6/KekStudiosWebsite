<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectInfo extends Model
{
    use HasFactory;

    protected $table = 'project_infos';

    protected $fillable = [
        'project_id',
        'client_infos_id',
        'service_type',
        'category',
        'order_service',
        'project_title',
        'project_description',
        'attachment',
        'budget',
        'deadline',
        'out_source_expert',
        'add_notes',
        'agreement'
    ];

    protected $casts = [
        'deadline' => 'date'
    ];

    /**
     * Get the client that owns the project.
     */
    public function client()
    {
        return $this->belongsTo(ClientInfo::class,  'client_infos_id');
    }
}
