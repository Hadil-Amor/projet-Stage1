<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $table = 'tasks';

    protected $fillable = [
        'task_id',
        'user_id',
        'description',
        'deadline',
    ];

    public function user()
    {
        return $this->belongsTo(user::class, 'user_id', 'id');
    }
    
}