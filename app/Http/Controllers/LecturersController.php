<?php

namespace App\Http\Controllers;

use App\Models\Lecturer;
use App\Models\Role;
use Illuminate\Http\Request;

class LecturersController extends Controller
{
    public function index()
    {
        $lecturers = Lecturer::all();

        return view('lecturers.index', compact('lecturers'));
    }

    public function create()
    {
        return view('lecturers.create');
    }

    public function store(Request $request)
    {
        Lecturer::create([
            'name' => $request->name,
        ]);

        return redirect(route('lecturers.index'));
    }

    public function edit($id)
    {
        $lecturer = Lecturer::findOrFail($id);
        
        return view('lecturers.edit', compact('lecturer'));
    }

    public function update(Request $request, $id)
    {
        Lecturer::where('id', $id)->update([
            'name' => $request->name,
        ]);

        return redirect()->route('lecturers.index')->with('message', 'Lecturer has been updated');
    }

    public function destroy($id)
    {
        Lecturer::destroy($id);

        return redirect(route('lecturers.index'))->with('message', 'Lecturer has been deleted');
    }
}
