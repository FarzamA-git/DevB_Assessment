<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;


class CourseController extends Controller
{
    public function create()
    {
        return view('courses.create');
    }
    public function edit($id)
    {
        $course = Course::find($id);
        return view('courses.edit', compact('course', 'id'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $course = Course::create($validatedData);

        return redirect('/courses');
    }

    public function index()
    {
        $courses = Course::all();

        return view('courses.index', compact('courses', $courses));
    }


    public function show($id)
    {
        $course = Course::findOrFail($id);

        return response()->json(['course' => $course]);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:15',
            'description' => 'required|string',
        ]);

        $course = Course::findOrFail($id);
        $course->update($validatedData);

        return redirect('/courses');
    }

    public function destroy($id)
    {
        $course = Course::findOrFail($id);
        $course->delete();

        return redirect('/courses');
    }
}
