@extends('template')

@section('contain')
    <div class="row container">
    <h1 class="home">Welcome You will learn a lot about programming</h1>
    
    <div class="col-5">
        <img class="w-75 home-img" src="{{url('/')}}/img/developer-3461405_1920.png" alt="">
    </div>
    <div class="col-7">
        <p>On our page you will find a lot of information related to languages, technologies, framework, etc. You will learn how to program step by step and most importantly at your own pace</p>
        <p>Do not worry if you think it is difficult, you will go step by step from the easiest to the most complex, shape the time you will develop new skills, techniques and good practices.</p>
        <p>It is important that first of bases in a specific branch, to then move to the other and continue and achieve your dream of being a programmer</p>
    </div>

    <div class="col-6 row align-items-center justify-content-center">
        <p>
            First learn computer science and all the theory. Then develop a programming style. Finally forget everything and just hack. <strong>George Carrette</strong>
        </p>
    </div>
    <div class="col-6 home-img1">
        <img class="w-100" src="{{url('/')}}/img/software-developer-6521720_1280.jpg" alt="">
    </div>

    </div>
    
@endsection