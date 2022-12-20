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
            'title'         => $request->title,
            'category'      => $request->status,
            'student_id'    => $request->student,
            'supervisor_id' => $request->supervisor,
            'examiner1_id'  => $request->examinerOne,
            'examiner2_id'  => $request->examinerTwo,
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
        $lecturers = Lecturer::all();
        $project = Project::with(['student', 'supervisor', 'examinerOne', 'examinerTwo'])->findOrFail($id);

        return view('projects.edit', compact('project', 'lecturers'));
    }

    public function update(Request $request, $id)
    {
        Project::where('id', $id)->update([
            'title' => $request->title,
            'category'  => $request->category,
            'supervisor_id' => $request->supervisor,
            'examiner1_id'  => $request->examinerOne,
            'examiner2_id'  => $request->examinerTwo,
            'start_date'  => $request->start_date,
            'end_date'  => $request->end_date,
            'duration'  => $request->duration,
            'progress'  => $request->progress,
            'status'  => $request->status,
        ]);

        return redirect()->route('projects.show', [$id]);
    }

    public function destroy($id)
    {
        Project::destroy($id);

        return redirect(route('projects.index'))->with('message', 'Project has been deleted');
    }
}
