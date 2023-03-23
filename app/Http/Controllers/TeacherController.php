<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        return view('teacher.index',[
            'teachers' => Teacher::all()
        ]);
    }
    public function create()
    {
        return view('teacher.create');
    }
    public function store(Request $request)
    {
        $validate = $request->validate([
            'Full_Name' => 'Required|string|max:30',
            'Phone_number' => 'Required',
            'Academic_education'=>'required|min:10',
        ]);
        Teacher::create($validate);
        return redirect('teacher');
    }
    public function show(Teacher $teacher)
    {
        //
    }
    public function edit(Teacher $teacher)
    {
        //
    }
    public function update(Request $request, Teacher $teacher)
    {
        //
    }
    public function destroy(Teacher $teacher)
    {
        //
    }
}
