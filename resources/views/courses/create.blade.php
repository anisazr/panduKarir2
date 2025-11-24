@extends('layouts.app')

@section('content')
<div class="min-h-screen py-12 px-4"
     style="background: linear-gradient(135deg, #6a5af9, #8b5cf6, #ec4899, #3b82f6); background-size: 400% 400%; animation: gradientBG 12s ease infinite;">

    <div class="max-w-3xl mx-auto bg-white/20 backdrop-blur-xl text-white shadow-2xl 
                rounded-3xl p-10 border border-white/20">

        <h1 class="text-3xl font-bold mb-8 text-center drop-shadow-lg">
            Tambah Course
        </h1>

        <form action="{{ route('courses.store') }}" method="POST" class="space-y-6">
            @csrf

            <div>
                <label class="block font-semibold">Nama Course</label>
                <input type="text" name="name"
                    class="mt-2 w-full bg-white/20 border border-white/30 text-white placeholder-gray-200 
                           rounded-xl p-3 focus:outline-none focus:ring-2 focus:ring-yellow-300" required>
            </div>

            <div>
                <label class="block font-semibold">Deskripsi</label>
                <textarea name="desc"
                    class="mt-2 w-full bg-white/20 border border-white/30 text-white placeholder-gray-200 
                           rounded-xl p-3 focus:outline-none focus:ring-2 focus:ring-yellow-300" required></textarea>
            </div>

            <div>
                <label class="block font-semibold">Kategori</label>
                <select name="category_id"
                    class="mt-2 w-full bg-white/20 border border-white/30 text-white 
                           rounded-xl p-3 focus:outline-none focus:ring-2 focus:ring-yellow-300">

                    <option disabled selected class="text-gray-700">-- Pilih Kategori --</option>

                    @foreach ($categories as $cat)
                        <option value="{{ $cat->id }}" class="text-gray-900">
                            {{ $cat->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="flex gap-3 justify-end mt-8">
                <button type="submit"
                    class="bg-yellow-400 text-gray-900 font-semibold px-6 py-2 rounded-xl 
                           hover:bg-yellow-300 transition shadow-lg">
                    Save
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

<style>
@keyframes gradientBG {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
}
</style>
