<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $dates = [
        'start_date',
        'end_date',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'title',
        'category',
        'stud_id',
        'supervisor_id',
        'examiner1_id',
        'examiner2_id',
        'created_by_id',
        'duration',
        'progress',
        'status',
        'start_date',
        'end_date',
        'created_by_id',
        'updated_at',
        'deleted_at',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class, 'stud_id', 'id');
    }

    public function lecturer()
    {
        return $this->hasMany(Lecturer::class, 'id');
    }

    public function supervisor()
    {
        return $this->belongsTo(Lecturer::class, 'supervisor_id', 'id');
    }

    public function examinerOne()
    {
        return $this->belongsTo(Lecturer::class, 'examiner1_id', 'id');
    }

    public function examinerTwo()
    {
        return $this->belongsTo(Lecturer::class, 'examiner2_id', 'id');
    }

    public function created_by()
    {
        return $this->belongsTo(User::class, 'created_by_id');
    }
}
