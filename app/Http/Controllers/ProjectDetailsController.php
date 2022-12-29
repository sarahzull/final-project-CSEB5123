<?php

namespace App\Http\Controllers;

use App\Models\ProjectDetail;
use Illuminate\Http\Request;

class ProjectDetailsController extends Controller
{
    public function create()
    {
        return view('projects.details-add');
    }

    public function store(Request $request)
    {
    	ProjectDetail::create([
            'start_date' => $request->start_date,
            'end_date'  => $request->end_date,
            'duration' => $request->duration,
            'progress' => $request->progress,
            'status'  => $request->status,
            'project_id'  => $request->project_id,
        ]);
   
        return back();
    }

    public function edit($id) 
    {
        $details = ProjectDetail::findOrFail($id);

        return view('projects.details-edit', compact('details'));
    }

    public function update(Request $request, $id)
    {
        ProjectDetail::where('id', $id)->update([
            'start_date' => $request->start_date,
            'end_date'  => $request->end_date,
            'duration' => $request->duration,
            'progress' => $request->progress,
            'status'  => $request->status,
        ]);

        return back()->with('message', 'Project activity has been updated');
    }

    public function destroy($id)
    {
        ProjectDetail::destroy($id);

        return back();
    }
}
