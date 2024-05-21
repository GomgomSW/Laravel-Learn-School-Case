@extends('layouts.main')

@section('title', 'Add Class')

@section('content')
    <div class="mt-5 col-8">
        <form action="class-saved" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name">Class Name</label>
                <input type="text" class="form-control" id="mame" name="name" >
            </div>

            <div class="mb-3">
                <label for="teacher_id">Wali Kelas(teacher_id)</label>
                <select name="teacher_id" id="teacher" class="form-control" >
                    <option value="">Choose One</option>
                        @foreach ($teacherList as $data)
                            <option value="{{ $data->id }}">{{ $data->name }}</option>
                        @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="location">location</label>
                <input type="text" id="location" name="location" class="form-control">
            </div>

            <button type="submit" class="btn btn-success">Save</button>

        </form>
    </div>

    
@endsection