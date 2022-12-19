<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    // public $incrementing = false;
    // protected $keyType = 'student_id';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'student_id',
        'name',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function project()
    {
        return $this->hasOne(Project::class, 'id');
    }
}
