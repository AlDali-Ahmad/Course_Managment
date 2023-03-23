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
        $validatedData=$request->validate([
            'Name_Courses' => 'Required|string|max:20',
            'description' => 'Required|min:10',
            'teacher_id' => 'required|integer|exists:teachers,id',
            'course_type_id' => 'required|integer|exists:course_types,id',
            'count_hours' => 'Required',
        ]);
        //$course=Course::create($request->all());
        $course=$request->user()->create($validatedData);
        return[
            "status"=>1,
            "data"=>$course
        ];
    }
    public function show(string $id)
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
