<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Lesson;
use App\Models\Course;

class LessonApiController extends Controller
{
    public function getLessonWithCourse($lessonId)
    {
        $lesson = Lesson::find($lessonId);
        if(!$lesson) {
            return response()->json(['message' => 'Lesson not found'], 404);
        }
        $course = Course::find($lesson->course_id);
        if(!$course) {
            return response()->json(['message' => 'Course not found'], 404);
        }
        return response()->json([
            'lesson_title' => $lesson->title,
            'lesson_description' => $lesson->description_lesson,
            'lesson_duration' => $lesson->duration,
            'lesson_number_course' => $lesson->number_course,
            'course_name' => $course->Name_Courses,
            'course_description' => $course->description,
            'teacher_id' => $course->teacher_id,
            'course_type_id' => $course->course_type_id,
            'count_hours' => $course->count_hours,
            'user_id' => $course->user_id,
        ]);
    }

    public function index()
    {
        //
    }

    public function store(Request $request, $course_id)
    {
        $course = Course::findOrFail($course_id);

        $lesson = new Lesson();
        $lesson->title = $request->input('title');
        $lesson->description_lesson = $request->input('description_lesson');
        $lesson->duration = $request->input('duration');
        $lesson->number_course = $request->input('number_course');

        $course->lessons()->save($lesson);

        return response()->json([
            'message' => 'Lesson created successfully'
        ], 201);
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
        $lesson = Lesson::findOrFail($id);
        $lesson->delete();
        return response()->json(['message' => 'Lesson deleted successfully']);
    }
}
