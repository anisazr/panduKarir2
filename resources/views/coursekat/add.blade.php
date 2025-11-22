@extends('layouts.app')

@section('content')
<div class="container">
    <h3 class="mb-4">Tambah Category</h3>

    <form action="{{ route('coursekat.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label>Nama Category</label>
            <input type="text" name="category" class="form-control" required>
        </div>

        <br>

        <button class="btn btn-success" type="submit">Save</button>
        <a href="{{ route('coursekat.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
