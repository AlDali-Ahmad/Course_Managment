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
        $validatedData = $request->validate([
            'Name_Courses' => 'required|string|max:255',
            'description' => 'required|string',
            'teacher_id' => 'required|integer',
            'course_type_id' => 'required|integer',
            'count_hours' => 'required|integer',
            'user_id' => 'required|string|max:255',
        ]);

        $course = Course::create($validatedData);

        return response()->json([
            'message' => 'Course created successfully',
            'data' => $course
        ], 201);
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
        $course = Course::findOrFail($id);

        $validatedData = $request->validate([
            'Name_Courses' => 'required|string|max:255',
            'description' => 'required|string',
            'teacher_id' => 'required|integer',
            'course_type_id' => 'required|integer',
            'count_hours' => 'required|integer',
            'user_id' => 'required|string|max:255',
        ]);

        $course->update($validatedData);

        return response()->json([
            'message' => 'Course updated successfully',
            'data' => $course
        ], 200);
    }

    public function destroy(string $id)
    {
        //
    }
}
