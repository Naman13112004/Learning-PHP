<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreCourseRequest;
use App\Models\Course;

class CourseController extends Controller
{
    public function index()
    {
        // Get all courses info from db
        return response()->json([
            "course1-id" => ["name" => "CD", "totalMarks" => 100],
            "course2-id" => ["name" => "DWDM", "totalMarks" => 150],
            "course3-id" => ["name" => "GAI", "totalMarks" => 200],
        ]);
    }

    public function show(string $id)
    {
        // Extract info of course with id: $id from db 
        return response()->json([
            "$id" => ["CD", 100]
        ]);
    }

    public function store(StoreCourseRequest $request)
    {
        // Create a new course and store in db
        $course = Course::create(
            $request->validated()
        );

        return response()->json([
            "message" => "Courses created successfully",
            "course" => $course
        ], 201);
    }

    public function update(string $id)
    {
        // Update course info of $id in db
        return response()->json([
            "message" => "Course info of $id updated successfully"
        ], 200);
    }

    public function destroy(string $id)
    {
        // Delete course with $id from db
        return response()->json([
            "message" => "Course with $id deleted successfully"
        ], 200);
    }
}