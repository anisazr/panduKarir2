<?php

namespace App\Http\Controllers;

use App\Models\CourseCategory;
use Illuminate\Http\Request;

class CourseCategoryController extends Controller
{
    public function index()
    {
        $categories = CourseCategory::all();
        return view('coursekat.index', compact('categories'));
    }

    public function create()
    {
        return view('coursekat.add');
    }

    public function store(Request $request)
    {
        CourseCategory::create([
            'category' => $request->category,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('coursekat.index');
    }

    public function edit($id)
    {
        $category = CourseCategory::findOrFail($id);
        return view('coursekat.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $category = CourseCategory::findOrFail($id);

        $category->update([
            'category' => $request->category,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('coursekat.index');
    }

    public function destroy($id)
    {
        $category = CourseCategory::findOrFail($id);
        $category->delete();

        return redirect()->route('coursekat.index');
    }
}
