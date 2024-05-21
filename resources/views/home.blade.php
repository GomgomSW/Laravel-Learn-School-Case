@extends('layouts.main')


@section('title', 'Home')

@section('content')
    <h1>Ini Halmana Home</h1>
    <h2>Selamat Datang {{ $name }}, anda adalah {{ $role }}</h2>


    {{-- Conditional --}}

    {{-- @if ($role == 'admin'){
            <a href="#"> Ke Halaman Admin </a>
        }
        @elseif($role == "staff"){
            <a href="#">Ke Halaman Staff</a>
        }@else{
            <a href="#">Ke Bagian Customer</a>
        }
        @endif --}}

    @switch($role)
        @case($role == 'admin')
            <a href="">Ke Hal aman Admin</a>
            <br>
        @break

        @case($role = 'staff')
            <a href="">ke Halaman Staff</a>
            <br>
        @break

        @default
            <a href="">Ke bagian Customer</a>
            <br>
        @break
    @endswitch

    {{-- Loop Directive --}}
    {{-- @for ($i = 0; $i < 5; $i++){
            {{ $i }} <br>
        }
        @endfor --}}

    {{-- @foreach ($buah as $data)
            {{ $data }} <br>
        @endforeach --}}

    <table class="table">
        <tr>
            <th>No.</th>
            <th>Nama</th>
        </tr>
        @foreach ($buah as $data)
            <tr>

            </tr>
            <tr>
                {{-- $loop itu dari dokumentasi. variable yang ada
                    jika kita pakai for each --}}
                <td>{{ $loop->iteration }}</td>
                <td>{{ $data }}</td>
            </tr>
        @endforeach

    </table>

@endsection
