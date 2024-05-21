@extends('layouts.main')

@section('title', 'Extracurricular Title')

@section('content')
    <h1>Extracurricular Info {{ $extracurricularDetail->name }}</h1>


    <div class="my-5">
        <a href="" class="btn btn-primary">Add Data</a>
        
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Member</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>{{$extracurricularDetail->name }}</td>
                <td>
                    @foreach ($extracurricularDetail->students as $data )
                        - {{ $data->name }} <br>
                    @endforeach
                </td>

            </tr>
        </tbody>

    </table>

    
@endsection