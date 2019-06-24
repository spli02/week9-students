@extends('layouts/main')

@section('content')
<h1>The students list</h1>

    @foreach($students as $student)
    {{ $student->name }}<br>
    @endforeach

@endsection
