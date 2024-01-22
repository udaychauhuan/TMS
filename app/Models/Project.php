<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'p_name',
        'description',
        'p_status',
        'start_date',
        'end_date',
        'manager_id',
        'assigned_users',
    ];
}
