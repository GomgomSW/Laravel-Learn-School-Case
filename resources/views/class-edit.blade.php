@extends('layouts.main')

@section('title', 'Edit Class')

@section('content')



    <div mt-5 col-8>
        <form action="/classroom-edited/{{ $class->id }}" method="post">
            @method('PUT')
            @csrf 


            <div class="mb3">
                <label for="name">Class Name</label>
                <input type="text" class="form-control" name="name" id="name" value="{{ $class->name }}">
            </div>

            <div class="mb-3">
                <label for="name">Teacher Name</label>
                <select name="teacher_id" id="teacher" class="form-control" required>
                    <option value="{{ $class->teacher_id }}">{{ $class->homeroomTeacher->name}}</option>
                    @foreach ($teacherList as $data )
                        <option value="{{ $data->id }}">{{ $data->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="location">location</label>
                <input type="text" name="location" id="location" class="form-control" required value="{{ $class->location }}">
            </div>

            <button type="submit" class="btn btn-success">edit class</button>

        </form>

    </div>

@endsection