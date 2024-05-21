@extends('layouts.main')

@section('title' ,'Edit Students')

@section('content')

{{-- {{ $student }}
{{ $classList }} --}}
    <div mt-5 col-8>
        <form action="/student-edited/{{ $student->id }}" method="post">
            @method('PUT')
            @csrf
            <div class="mb3">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" id="name" value="{{ $student->name }}">
            </div>

            <div class="mb-3">
                <label for="gender">gender</label>
                <select name="gender" id="gender" name="gender" class="form-control">
                    <option value="{{ $student->gender }}"> {{ $student->gender }}</option>
                    @if ($student->gender == 'L')
                        <option value="P">P</option>
                    @else
                        <option value="L">L</option>
                    @endif
                    
                </select>
            </div>

            <div class="mb-3">
                <label for="nis">Nis</label>
                <input type="text" class="form-control" id="nis" name="nis" value="{{ $student->nis }}"> 
            </div>

            <div class="mb-3">
                <label for="class">Class</label>
                <select name="class_id" id="class" class="form-control" required>
                    <option value="{{ $student->class->id }}">{{ $student->class->name }}</option>
                    @foreach ($classList as $data )
                        <option value="{{ $data->id }}">{{ $data->name }}</option>
                    @endforeach

                    
                </select>
            </div>

            <button type="submit" lass="btn btn-submit">Update</button>

        </form>


    </div>
@endsection