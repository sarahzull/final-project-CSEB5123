<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function index()
    {
        $students = Student::all();

        return view('students.index', compact('students'));
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        Student::create([
            'student_id' => $request->id,
            'name' => $request->name
        ]);

        return redirect(route('students.index'));
    }

    public function destroy($id)
    {
        //Student::where('id', $id)->delete();
        Student::destroy($id);

        return redirect(route('students.index'))->with('message', 'Student has been deleted');
    }
}
