@extends('layouts.main')

@section('title', 'classroom')

@section('content')
    <h1>Ini Halamaan Class</h1>

    <div class="my-5">
        <a href="/classroom-add" class="btn btn-primary">Add Class</a>
        
    </div>

    <h3>Class List</h3>


    <table class="table">
        <thead>
            <tr>
                <th>No.</th>
                <th>Name</th>
                <th>Location</th>
                <th>Action</th>


            </tr>
        </thead>
        <tbody>
            @foreach ($classList as $data )
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->location }}</td>
                    <td>
                        <a href="/class/{{ $data->id }}">Details</a>
                        <br>
                        <a href="/classroom-edit/{{ $data->id }}">Edit</a>
                    
                    </td>
                </tr>

            @endforeach
        </tbody>
    </table>

    

@endsection
