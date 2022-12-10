<?php

namespace App\Http\Controllers;

use App\Models\Lecturer;
use App\Models\Project;
use App\Models\Student;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = Project::with(['student', 'supervisor', 'examinerOne', 'examinerTwo'])->get();

        return view('projects.index', compact('projects'));
    }

    public function create()
    {
        $students = Student::all();
        $lecturers = Lecturer::all();

        return view('projects.create', compact('students', 'lecturers'));
    }

    public function store(Request $request)
    {
        Project::create([
            'title' => $request->title,
            'student_id' => $request->student,
            'supervisor_id' => $request->supervisor,
            'examiner1_id' => $request->examinerOne,
            'examiner2_id' => $request->examinerTwo,
        ]);

        // Project::create($request->all());

        return redirect(route('projects.index'));
    }

    public function show($id) 
    {
        $project = Project::with(['student', 'supervisor', 'examinerOne', 'examinerTwo'])->findOrFail($id);
        return view('projects.show', compact('project'));
    }

    public function edit($id) 
    {
        $project = Project::with(['student', 'supervisor', 'examinerOne', 'examinerTwo'])->findOrFail($id);
        return view('projects.edit', compact('project'));
    }


    public function destroy($id)
    {
        Project::destroy($id);

        return redirect(route('projects.index'))->with('message', 'Project has been deleted');
    }
}
