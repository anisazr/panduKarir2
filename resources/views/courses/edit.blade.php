@extends('layouts.app')

@section('content')
<div class="min-h-screen py-12 px-4"
    style="background: linear-gradient(135deg, #6a5af9, #8b5cf6, #ec4899, #3b82f6); background-size: 400% 400%; animation: gradientBG 12s ease infinite;">

    <div class="max-w-3xl mx-auto bg-white/20 backdrop-blur-xl text-white shadow-2xl 
                rounded-3xl p-10 border border-white/20">

        <h1 class="text-3xl font-bold mb-8 text-center">Edit Course</h1>

        <form action="{{ route('courses.update', $course->id) }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT')

            <div>
                <label class="font-semibold">Course Name</label>
                <input type="text" name="name" value="{{ $course->name }}" required
                    class="mt-2 w-full bg-white/20 border border-white/30 text-white rounded-xl p-3 
                           focus:outline-none focus:ring-2 focus:ring-yellow-300">
            </div>

            <div>
                <label class="font-semibold">Description</label>
                <textarea name="desc" required
                    class="mt-2 w-full bg-white/20 border border-white/30 text-white rounded-xl p-3 
                           focus:outline-none focus:ring-2 focus:ring-yellow-300">{{ $course->desc }}</textarea>
            </div>

            <div>
                <label class="font-semibold">Category</label>
                <select name="category_id"
                    class="mt-2 w-full bg-white/20 border border-white/30 text-white rounded-xl p-3 
                           focus:outline-none focus:ring-2 focus:ring-yellow-300">

                    @foreach ($categories as $cat)
                        <option value="{{ $cat->id }}" {{ $cat->id == $course->category_id ? 'selected' : '' }} class="text-gray-900">
                            {{ $cat->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="flex gap-3 justify-end mt-8">
                <button type="submit"
                    class="bg-yellow-400 text-gray-900 px-6 py-2 rounded-xl hover:bg-yellow-300 transition shadow-lg">
                    Update
                </button>

                <a href="{{ route('courses.index') }}"
                    class="bg-white/30 text-white px-6 py-2 rounded-xl hover:bg-white/40 transition">
                    Cancel
                </a>
            </div>

        </form>
    </div>
</div>
@endsection
