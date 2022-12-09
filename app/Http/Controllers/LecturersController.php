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
        $roles = Role::pluck('name', 'id');

        return view('lecturers.create', compact('roles'));
    }

    public function store(Request $request)
    {
        Lecturer::create([
            'name' => $request->name,
        ]);

        return redirect(route('lecturers.index'));
    }

    public function destroy($id)
    {
        Lecturer::destroy($id);

        return redirect(route('lecturers.index'))->with('message', 'Lecturer has been deleted');
    }
}
