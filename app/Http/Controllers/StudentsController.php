<?php

namespace App\Http\Controllers;

use App\Models\Project;
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
            'student_id' => $request->student_id,
            'name' => $request->name,
            'created_by_id' => auth()->user()->id,
        ]);

        return redirect(route('students.index'))->with('message', 'Student has been created');
    }

    public function edit($id)
    {
        $student = Student::findOrFail($id);

        return view('students.edit', compact('student'));
    }

    public function update(Request $request, $id)
    {
        Student::where('id', $id)->update([
            'name' => $request->name,
        ]);

        return redirect()->route('students.index')->with('message', 'Student has been updated');
    }

    public function destroy($id)
    {
        // Student::where('student_id', $id)->delete();
        Student::destroy($id);

        return redirect(route('students.index'))->with('message', 'Student has been deleted');
    }
}
