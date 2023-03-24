<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseAPiController extends Controller
{

    public function index()
    {
        $courses=Course::all();
        return response()->json($courses);
    }

    public function store(Request $request)
    {
        $course = Course::create([
            'Name_Courses' => $request->Name_Courses,
            'description' => $request->description,
            'teacher_id' => $request->teacher_id,
            'course_type_id' => $request->course_type_id,
            'count_hours' => $request->count_hours,
        ]);
        return new Course($course);
    }
    public function show(C $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
