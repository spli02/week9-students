@extends('layouts/main')

@section('content')
<div class="page page-student">

    <section class="info">

        <img class="portrait" src="{{ asset('img/'.$student->slug.'.jpg') }}" alt="">

        <div class="data">
            <h1>{{ $student->name }}</h1>

            <div class="story">
                {!! nl2br($student->history) !!}
            </div>
        </div>

        <div class="lessons">
            <h2>Lessons</h2>
            From {{ date('g:i A', strtotime($student->lessons_from)) }} to {{ date('g:i A', strtotime($student->lessons_until)) }}.

            <div class="status unavailable">Current status: <span>Not in class</span></div>
        </div>

    </section>

    <section class="detention-assign">
        <h2>Give detention</h2>

        <form action="" method="post">

            <input type="text" name="subject" placeholder="Reason for detention">

            <textarea name="description" placeholder="Thorough description"></textarea>

            <input type="submit" value="Send an owl">
        </form>
    </section>

</div>
@endsection
