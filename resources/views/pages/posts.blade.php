@extends('template')


<a href="{{ url('/registerPost') }}">Postear</a>

<div class="row">



    @foreach ($posts as $post)
        <img src="{{ url('/') }}/img/{{ $post->img }}" alt="">

        <h5>{{ $post->title }}</h5>

        <p>{{ $post->content }}</p>
    @endforeach


</div>
