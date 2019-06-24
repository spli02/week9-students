@extends('layouts/main')

@section('content')
<div class="page page-home">
    
    <img src="img/hogwarts-logo.png" alt="" class="logo">
    <h1>Hogwarts<br><small>Detention system</small></h1>

    <div class="desc">
        Did a student do something wrong? Give him detention, the number 1 punishment at Hogwarts School of Witchcraft & Wizardry.
    </div>

    <a href="#" class="report">Give detention to someone</a>

    <div class="students">
        <a href="student/harry">
            <img src="img/harry.jpg" alt="">
        </a>
        <a href="student/hermione">
            <img src="img/hermione.jpg" alt="">
        </a>
        <a href="student/ron">
            <img src="img/ron.jpg" alt="">
        </a>
        <a href="student/tom">
            <img src="img/tom.jpg" alt="">
        </a>
        <a href="student/luna">
            <img src="img/luna.jpg" alt="">
        </a>
    </div>

</div>
@endsection
