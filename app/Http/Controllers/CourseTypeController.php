<?php

namespace App\Http\Controllers;

use App\Models\Course_type;
use Illuminate\Http\Request;

class CourseTypeController extends Controller
{
    public function index()
    {
        return view('coursetypes.index',[
            'coursetypes' => Course_type::all()
        ]);
    }
    public function create()
    {
        return view('coursetypes.create');
    }
    public function welcome()
    {
        return view('welcome');
    }
    public function store(Request $request)
    {
        $validate = $request->validate([
            'Name' => 'Required|string|max:56',
        ]);
        Course_type::create($validate);
        return redirect('coursetypes');
    }
    public function show(Course_type $course_type)
    {
        return view('coursetypes.show',[
            'coursetype' => $course_type
        ]);
    }
    public function edit(Course_type $course_type)
    {
        return view('coursetypes.edit',[
            'coursetype' => $course_type
        ]);
    }
    public function update(Request $request, Course_type $course_type)
    {
        $course_type->update([
            'Name' => $request->Name,

        ]);
        return redirect('/coursetypes/' .$course_type->id);
    }
    public function destroy(Course_type $course_type)
    {
        $course_type->delete();
        return redirect('/coursetypes');
    }
}
