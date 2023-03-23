<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Course_type;
use App\Models\Teacher;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function Adminindex(){
        return view('courses.Adminindex',[
            'courses' => Course::all(),
            'course_types'=>Course_type::all(),
            'techares'=>Teacher::all(),
        ]);
    }
    public function index()
    {
        return view('courses.index',[
            'courses' => Course::all(),
            'course_types'=>Course_type::all(),
            'techares'=>Teacher::all(),
        ]);
    }
    public function create()
    {
        return view('courses.create',[
            'teachers'=>Teacher::all(),
            'coursetypes'=>Course_type::all(),
        ]);
    }
    public function store(Request $request)
    {
        $validate = $request->validate([
            'Name_Courses' => 'Required|string|max:20',
            'description' => 'Required|min:10',
            'teacher_id' => 'required|integer|exists:teachers,id',
            'course_type_id' => 'required|integer|exists:course_types,id',
            'count_hours' => 'Required',
        ]);
        /*Course::create($validate);*/
        $request->user()->courses()->create($validate);
        return redirect('coursetypes');
    }
    public function show(Course $course)
    {
        return view('courses.show',[
            'course' => $course,
            'course_types'=>Course_type::all(),
            'techares'=>Teacher::all(),
        ]);
    }
    public function edit(Course $course)
    {
        return view('courses.edit',[
            'course' => $course,
            'course_types'=>Course_type::all(),
            'techares'=>Teacher::all(),
        ]);
    }
    public function update(Request $request, Course $course)
    {
        $course->update([
            'Name_Courses' => $request->Name_Courses,
            'description' => $request->description,
            'teacher_id'=>$request->teacher_id,
            'course_type_id'=>$request->course_type_id,
            'count_hours' => $request->count_hours,

        ]);
        return redirect('/courses/' .$course->id);
    }
    public function destroy(Course $course)
    {
        $course->delete();
        return redirect('/courses');
    }
    public function Gategore_courses($id){

        $courses=Course::all()->where('course_type_id',$id);
        return view('courses.gategore_course',[
            'courses'=>$courses,
            'techares'=>Teacher::all(),
        ]);
    }
}
