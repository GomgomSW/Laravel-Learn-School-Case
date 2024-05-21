@extends('layouts.main')

@section('title', "Class Detail")

@section('content')
    <h1>Halaman Detail Class</h1>

    <table class="table">
        <thead>
            <tr>
                <th>Class</th>
                <th>Location</th>
                <th>Students</th>
                <th>Homeroom Teacher</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>{{ $classDetail->name }}</td>
                <td>{{ $classDetail->location }}</td>
                <td>
                    @foreach ($classDetail->students as $data )
                        - {{ $data->name }} <br>
                    @endforeach
                </td>
                <td>{{ $classDetail->homeroomTeacher['name'] }}</td>
            </tr>
        </tbody>

    </table>

@endsection