@extends('layouts.main')

@section('title', 'Add Teacher');

@section('content')

    <h3>Add Teacher Data</h3>

    <div class="mt-5 col-8">
        <form action="teacher-saved" method="post">
            @csrf @method('POST')
            <div class="mb-3">
                <label for="name">Teacher Name</label>
                <input type="text" class="form-control" name="name" id="name" required>
            </div>

            <button type="submit" class="btn btn-success">Save</button>
        </form>
    </div>
@endsection