@extends('template')
@section('contain')
    <div class="col-md-12">
        <div class="row container-fluid">
            <div class="containcard row">
                @foreach ($favorite as $post)
                    <div class="card my-3">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{ url('/') }}/img/{{ $post->img }}" class="img-fluid rounded-start"
                                    alt="">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body ">
                                    <h5 class="card-title">{{ $post->title }}</h5>
                                    <p class="card-text">{{ $post->content }}</p>

                                    <div class="d-flex justify-content-end aling-items-start">
                                        <div class="d-flex flex-column">

                                            @if ($post->id_user == Auth::user()->id)
                                                <form action="{{ route('delete', $post->id) }}" method="post">
                                                    @method('Delete')
                                                    @csrf
                                                    <button type="submit" class="btn btn-danger">
                                                        <i class="bi bi-trash"></i>
                                                        Eliminar
                                                    </button>
                                                </form>
                                                <form action="{{ route('getupdate', $post->id) }}" class="edit-posts ">
                                                    @method('GET')
                                                    @csrf
                                                    <button type="submit" class="btn btn-warning text-secondary">
                                                        <i class="bi bi-pencil-square"></i>
                                                        Edit
                                                    </button>
                                                </form>

                                                <button hidden class="btn btn-warning btn-form_update"
                                                    data-bs-toggle="modal" data-bs-target="#editPosts"
                                                    value="{{ $post->id }}">Edit2</button>
                                                <form action="{{ route('favorite') }}" class="favorities-form">
                                                    @csrf
                                                    <input type="hiden" name="id_post" value="{{ $post->id }}"
                                                        class="d-none">
                                                    <button type="submit" class="btn btn-outline-warning text-dark">
                                                        <i class="bi bi-star-fill"></i>
                                                        Add Favotite
                                                    </button>
                                                </form>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
@endsection
