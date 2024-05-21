@extends('layouts.main')

@section('content')
    <h1>ini Halaman Student</h1>

    <div class="my-5">
        <a href="/students-add" class="btn btn-primary">Add Student</a>
        
    </div>

    @if (Session::has('status'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('message') }}
        </div>
    @endif

    <h3>Student List</h3>

    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Nis</th>
                <th>Class</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($studentList as $data)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->name }}</td>
                    <td>
                        @if ($data->gender == 'L')
                            Laki - laki
                        @else
                            Perempuan
                        @endif
                    </td>
                    <td>{{ $data->nis }}</td>
                    {{-- Dari sini kita bisa ambil data dari table Class --}}
                    <td>  {{ $data->class['name'] }} <br></td>
                    {{-- yang homeroomTeacher contoh nested relation --}}
                    {{-- <td>{{ $data->class->homeroomTeacher['name'] }}</td> --}}
                    <td>
                        <a href="/student/{{ $data->id }}">Detail</a><br>
                        <a href="/student-edit/{{ $data->id }}">Edit</a>
                        <a href="/student-delete/{{ $data->id }}">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="my-3">
        {{ $studentList->links() }}
    </div>

@endsection