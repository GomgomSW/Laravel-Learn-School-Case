@extends('layouts.main')

@section('title', 'Extracurricular')

@section('content')
    <h1>Welcome to Extracurricular Page</h1>

    <div class="my-5">
        <a href="/extracurricular-add" class="btn btn-primary">Add Data</a>
        
    </div>

    <h4>Extracurricular List</h4>
    <table class="table">
        <thead>
            <tr>
                <th>No.</th>
                <th>Extracurricular Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ( $extraCurricularList as $data )
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->name }}</td>
                    {{-- <td>
                        @foreach ($data->students as $student)
                            - {{ $student['name']}} <br>
                        @endforeach
                    </td> --}}
                    <td><a href="/extracurricular/{{ $data->id }}">Detail</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection