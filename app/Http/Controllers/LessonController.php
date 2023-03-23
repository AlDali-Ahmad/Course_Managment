<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    public function index()
    {
        return view('lessons.index',[
            'lessons' => Lesson::all(),
            'courses' => Course::all(),
        ]);
    }
    public function create()
    {
        return view('lessons.create',[
            'courses' => Course::all()
        ]);
    }
    public function store(Request $request)
    {
        $validate = $request->validate([
            'title' => 'Required|string|max:20',
            'description_lesson' => 'Required|min:10',
            'duration'=>'Required',
            'number_course'=>'Required',
            'course_id'=>'required|exists:courses,id'
        ]);
        Lesson::create($validate);
        /*$request->user()->create($validate);*/
        return redirect('lessons');
    }
    public function show(Lesson $lesson)
    {
        return view('lessons.show',[
            'lesson' => $lesson
        ]);
    }
    public function edit(Lesson $lesson)
    {
        return view('lessons.edit',[
            'lesson' => $lesson
        ]);
    }
    public function update(Request $request, Lesson $lesson)
    {
        $lesson->update([
            'title' => $request->title,
            'description_lesson' => $request->description_lesson,
            'duration'=>$request->duration,
            'number_course'=>$request->number_course,
            'course_id'=>$request->course_id
        ]);
        return redirect('/lessons/' .$lesson->id);
    }
    public function destroy(Lesson $lesson)
    {
        $lesson->delete();

    }
    public function course_lessons($id){

        $lessons=Lesson::all()->where('course_id',$id);
        return view('lessons.course_lessons',[
            'lessons'=>$lessons
        ]);
    }
}
