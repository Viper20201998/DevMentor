@extends('template')
@section('tokens')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
<a hidden href="{{ url('/registerPost') }}">Postear</a>
@auth
    @section('favorite')
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Favorites
            </a>
            <ul class="dropdown-menu dropdown-menu-dark">
                @foreach ($favorites as $item)
                    <li class="d-flex"><a class="dropdown-item" href="#">{{ $item->title }}</a>
                        <button type="submit" class="btn text-danger"
                            onclick="event.preventDefault(); document.getElementById('delete-favorite').submit();">
                            <i class="bi bi-trash"></i>
                        </button>
                    </li>
                    <form action="{{ route('deletefavorite', $item->id) }}" id="delete-favorite" class="d-none" method="post">
                        @method('Delete')
                        @csrf
                        </a>
                    </form>
                @endforeach
            </ul>
        </li>
    @endsection
@endauth


@section('publish')
    @auth
        <button type="button" class="btn btn-outline-primary ms-2" data-bs-toggle="modal"
            data-bs-target="#formPosts">Publish</button>
    @endauth
@endsection
@section('contain')
    <div class="col-md-12">
        <div class="row container-fluid">
            <div class="alertcont"></div>

            <div class="containcard row">
                @foreach ($posts as $post)
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
                                            @auth

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

                                            @endauth
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

    <!-- posts -->
    <div class="modal fade" id="formPosts" tabindex="-1" aria-labelledby="exampleModalLabel" style="display: none;"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Make your new publication</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('publish') }}" id="formpublic">
                        @csrf
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Title:</label>
                            <input type="text" class="form-control" name="title" required>
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Image</label>
                            <input type="file" class="form-control" name="img" required>
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Content:</label>
                            <textarea class="form-control" id="message-text" name="content" required></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" id="sendform">Post</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- end posts -->

    <!-- edit posts -->
    <div class="modal fade" id="editPosts" tabindex="-1" aria-labelledby="exampleModalLabel" style="display: none;"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit your post</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" id="update_form" method="post">
                        @method('PUT')
                        @csrf
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Title:</label>
                            <input type="text" class="form-control" id="title2" name="title2">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Image</label>

                            <input type="file" class="form-control" id="img" name="img2">
                            <input type="hidden" name="img_prev" id="img_prev">
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Content:</label>
                            <input class="form-control" id="content2" name="content2">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="sendupdate_form">Post</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- end edit posts -->
@endsection

@section('script')
    <script type="module" src="{{ asset('assets/js/favorite.js') }}"></script>
    <script type="module" src="{{ asset('assets/js/publish.js') }}"></script>
    <script type="module" src="{{ asset('assets/js/update.js') }}"></script>
@endsection
