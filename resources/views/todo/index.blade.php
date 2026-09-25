<h1>Daftar Todo</h1>

@foreach ($todos as $todo)
    <p>
        <strong>{{ $todo['judul'] }}</strong>
        - {{ $todo['status'] }}
    </p>
@endforeach

@extends('layout.app')

@section('content')
    <h2>Daftar Todo</h2>

    @foreach ($todos as $index => $todo)
        <a href="{{ route('todo.detail', $index) }}">{{ $todo->judul }}</a>
    @endforeach

@endsection

