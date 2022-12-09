<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lecturer extends Model
{
    use HasFactory;

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function student()
    {
        return $this->hasMany(Student::class, 'id');
    }

    public function project()
    {
        return $this->belongsToMany(Project::class, 'id');
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }
}
