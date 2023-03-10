<?php

namespace App\Http\Controllers;


use App\Models\Course;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class CourseController extends Controller
{
    public function index(): JsonResponse
    {
        $courses = Course::all();
        return response()
            ->json($courses);
    }


    public function show(int $courseId): JsonResponse
    {
        $course = Course::find($courseId);
        return response()->json($course);
    }

    public function create(Request $request): JsonResponse
    {
        $course = Course::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
         ]);
        return response()->json($course);
    }

    public function update(Request $request, int $courseId): JsonResponse
    {
        $course = Course::find($courseId);
        $course->update([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
        ]);
        $course->save();
        return response()->json($course);
    }  
    
    public function delete(int $courseId): JsonResponse
    {
        Course::destroy($courseId);
        return response()->json();

    }


}

