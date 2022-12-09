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
        'duration',
        'progress',
        'status',
        'student_id',
        'supervisor_id',
        'examiner1_id',
        'examiner2_id',
        'start_date',
        'end_date',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id', 'student_id');
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
}
