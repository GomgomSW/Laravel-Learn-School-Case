@extends('layouts.main')

@section('title', 'Student Detail')

@section(('content'))
    <h1>Student Detail</h1>

    <div class="mt-5">
        <table class="table">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Nis</th>
                    <th>Kelas</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $studentDetail->name }}</td>
                    <td>{{ $studentDetail->nis }}</td>
                    <td>
                        @if ($studentDetail->gender == 'P')
                            Perempuan
                        @elseif ($studentDetail->gender == 'L')
                            Laki Laki
                
                        @endif
                    </td>
                    <td>{{ $studentDetail->class['name'] }}</td>
                </tr>
            </tbody>
    
        </table>
    </div>

    <div class="mt-2">
        <h3>Ekstracurricular</h3>
        <ol>
            @foreach ($studentDetail->extracurriculars as $data )
                <li>{{ $data->name }}</li>
            @endforeach
        </ol>

    </div>
    
@endsection