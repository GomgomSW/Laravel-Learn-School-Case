@extends('layouts.main')

@section('title', 'Teacher Detail')

@section('content')
    <h2>This is Teacher Detail</h2>

    <h3 class="mt-5">{{ $teacherDetail->name }}</h3>

    <div class="mt-5">

        <h3>Class:
            @if ($teacherDetail->class)
                {{ $teacherDetail->class->name }}
            @else
                -
            @endif
        </h3>

        <ol class="mt-4">
            @if ($teacherDetail->class)
                @foreach ($teacherDetail->class->students as $data)
                    <li>{{ $data->name }}</li>
                @endforeach
            @else
                -
            @endif

        </ol>

    </div>
@endsection
