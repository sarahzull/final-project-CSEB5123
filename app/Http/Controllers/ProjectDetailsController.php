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

    public function destroy($id)
    {
        ProjectDetail::destroy($id);

        return back();
    }
}
