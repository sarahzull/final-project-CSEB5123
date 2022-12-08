<?php

namespace App\Http\Controllers;

use App\Models\Lecturer;
use Illuminate\Http\Request;

class LecturersController extends Controller
{
    public function index()
    {
        $lecturers = Lecturer::all();

        return view('lecturers.index', compact('lecturers'));
    }
}
