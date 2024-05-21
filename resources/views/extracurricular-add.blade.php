@extends('layouts.main')

@section('title', 'Add Extracurricular')

@section('content')
    <h2>Add Extracurricular</h2>
    
    <div class="mt-5 col-8">
        <form action="/extracurricular-saved" method="post">
            @csrf
            <div class="mb-3">
                <label for="name">Extracurricular Name</label>
                <input type="text" name="name" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-success">Save</button>
        </form>

    </div>

@endsection