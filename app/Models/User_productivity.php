<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_productivity extends Model
{
    use HasFactory;

    public $table = 'user_productivity';

    protected $fillable = [
        'project_id',
        'task_id',
        'user_id',
        'subject',
        'comment',
        'start_time',
        'end_time',
    ];

}
