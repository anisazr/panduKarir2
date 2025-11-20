<?php

namespace App\Http\Controllers;

use App\Models\CourseCategory;
use Illuminate\Http\Request;

class CourseCategoryController extends Controller
{
    public function index()
    {
        return response()->json(CourseCategory::all());
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $item = CourseCategory::create([
            'name' => $request->name
        ]);

        return response()->json($item, 201);
    }

    public function show($id)
    {
        $item = CourseCategory::findOrFail($id);
        return response()->json($item);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $item = CourseCategory::findOrFail($id);
        $item->update([
            'name' => $request->name
        ]);

        return response()->json($item);
    }

    public function destroy($id)
    {
        $item = CourseCategory::findOrFail($id);
        $item->delete();

        return response()->json([
            'message' => 'Course category deleted'
        ]);
    }
}
