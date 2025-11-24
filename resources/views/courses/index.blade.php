@extends('layouts.app')

@section('content')
<div class="min-h-screen py-10 px-4 bg-gray-100">

    <div class="max-w-6xl mx-auto bg-white shadow-xl rounded-3xl p-8">

        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold text-gray-800">Course List</h1>

            <a href="{{ route('courses.create') }}"
                class="bg-gradient-to-r from-purple-500 to-pink-500 text-white px-5 py-2 
                       rounded-xl shadow-lg hover:opacity-90 transition">
                + Add Course
            </a>
        </div>

        <table class="w-full border border-gray-300 rounded-xl overflow-hidden">
            <thead>
                <tr class="bg-gradient-to-r from-purple-200 to-pink-200 text-gray-800 text-sm">
                    <th class="py-3 px-4 border-b">No</th>
                    <th class="py-3 px-4 border-b">Course Name</th>
                    <th class="py-3 px-4 border-b">Description</th>
                    <th class="py-3 px-4 border-b">Category</th>
                    <th class="py-3 px-4 border-b">Action</th>
                </tr>
            </thead>

            <tbody class="bg-white">
                @foreach ($courses as $index => $course)
                <tr class="hover:bg-gray-50">
                    <td class="py-3 px-4 border-b text-center">{{ $index + 1 }}</td>
                    <td class="py-3 px-4 border-b font-semibold">{{ $course->name }}</td>
                    <td class="py-3 px-4 border-b">{{ $course->desc }}</td>
                    <td class="py-3 px-4 border-b">
                        {{ $course->category->name ?? '-' }}
                    </td>

                    <td class="py-3 px-4 border-b text-center flex gap-2 justify-center">

                        <a href="{{ route('courses.edit', $course->id) }}"
                            class="bg-yellow-400 text-gray-900 px-3 py-1 rounded-lg text-xs hover:bg-yellow-300 transition">
                            Edit
                        </a>

                        <form action="{{ route('courses.destroy', $course->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('Yakin mau hapus course ini?')"
                                class="bg-red-500 text-white px-3 py-1 rounded-lg text-xs hover:bg-red-600 transition">
                                Delete
                            </button>
                        </form>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
