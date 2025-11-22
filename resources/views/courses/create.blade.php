@extends('layouts.app')

@section('content')
<div class="container">

    <h3 class="mb-4">Tambah Course</h3>

    <form action="{{ route('courses.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label>Nama Course</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="form-group mt-3">
            <label>Deskripsi</label>
            <textarea name="desc" class="form-control" required></textarea>
        </div>

        <div class="form-group mt-3">
            <label>Keterangan</label>
            <input type="text" name="ket" class="form-control">
        </div>

        <br>

        <button class="btn btn-success" type="submit">Save</button>
        <a href="{{ route('courses.index') }}" class="btn btn-secondary">Cancel</a>

    </form>

</div>
@endsection
