@extends('layouts.main')

@section('title', 'Add Student')

@section('content')
    {{-- {{ $classList }} --}}
    <div class="mt-5 col-8" m-auto>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <h1>Add Student Data</h1>


        <form action="student-saved" method="post">
            @csrf
            @method('POST')
            <div class="mb-3">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" id="name" >
            </div>

            <div class= "mb-3">
                <label for="gender">Gender</label>
                <select name="gender" id="gender" name="gender" class="form-control" >
                    <option value="">Select One</option>
                    <option value="L">L</option>
                    <option value="P">P</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="nis">Nis</label>
                <input type="text" class="form-control" id="nis" name="nis">
            </div>
            {{-- name yang menjadi nama variabelnya --}}
            <div class="mb-3">
                <label for="class">Class</label>
                <select name="class_id" id="class" class="form-control" >
                    <option value="">Select one</option>
                    @foreach ($classList as $data)
                        <option value="{{ $data->id }}">{{ $data->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <button class="btn btn-success" type="submit">Save</button>
            </div>
        </form>

    </div>
@endsection
