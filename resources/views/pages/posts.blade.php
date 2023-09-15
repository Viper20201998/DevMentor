@extends('template')


<a href="{{ url('/registerPost') }}">Postear</a>

<div class="row">



    @foreach ($posts as $post)
        <img src="{{ url('/') }}/img/{{ $post->img }}" alt="">

        <h5>{{ $post->title }}</h5>
        <h5>{{ $post->name }}</h5>
        <p>{{ $post->content }}</p>

        <a href="{{ route('favorite', ['id' => $post->id]) }}">agregar a favoritos</a>
    @endforeach


</div>
