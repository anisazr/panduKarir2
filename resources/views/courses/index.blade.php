@extends('layouts.app')

@section('content')
<div class="flex justify-center mt-10">
    <div class="w-11/12 md:w-9/12 lg:w-7/12 bg-white shadow-xl rounded-2xl p-8">

        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-gray-800">Course List</h1>
            <a href="{{ route('courses.create') }}" 
                class="bg-sky-600 text-white px-4 py-2 rounded-lg hover:bg-sky-700 transition">
                + Add Course
            </a>
        </div>

        <table class="min-w-full border border-gray-300 rounded-lg overflow-hidden">
            <thead>
                <tr class="bg-gray-100 text-gray-700 text-sm">
                    <th class="py-3 px-4 border-b">No</th>
                    <th class="py-3 px-4 border-b">Course Name</th>
                    <th class="py-3 px-4 border-b">Description</th>
                    <th class="py-3 px-4 border-b">Category</th>
                    <th class="py-3 px-4 border-b">Action</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($courses as $index => $course)
                <tr class="hover:bg-gray-50 text-sm">
                    <td class="py-3 px-4 border-b text-center">{{ $index + 1 }}</td>
                    <td class="py-3 px-4 border-b font-semibold">{{ $course->name }}</td>
                    <td class="py-3 px-4 border-b">{{ $course->desc }}</td>
                    <td class="py-3 px-4 border-b">
                        {{ $course->category->category ?? '-' }}
                    </td>

                    <td class="py-3 px-4 border-b text-center flex gap-2 justify-center">

                        <!-- EDIT BUTTON -->
                        <a href="{{ route('courses.edit', $course->id) }}"
                            class="bg-amber-500 text-white px-3 py-1 rounded-lg text-xs hover:bg-amber-600 transition">
                            Edit
                        </a>

                        <!-- DELETE BUTTON -->
                        <form action="{{ route('courses.destroy', $course->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button 
                                onclick="return confirm('Yakin mau hapus course ini?')"
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
