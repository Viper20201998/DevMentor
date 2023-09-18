@extends('template')
@section('tokens')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('content')
    <a href="{{ url('/registerPost') }}">Postear</a>

    @auth
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formPosts">Publish</button>
    @else
        <a href="{{ route('login') }}" class="btn btn-success">Login</a>
    @endauth
    <div class="col-md-12">
        <div class="row container-fluid">
            <div class="alertcont"></div>

            <div class="containcard row">
                @foreach ($posts as $post)
                    <div class="card col-md-5 d-flex justify-content-between mx-3">
                        <img src="{{ url('/') }}/img/{{ $post->img }}" class="card-img-top w-100" alt="" />
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <p class="card-text">
                                {{ $post->content }}
                            </p>
                            <form hidden action="{{ route('getupdate', $post->id) }}" class="edit-posts">
                                @method('GET')
                                @csrf
                                <button hidden type="submit" class="btn btn-warning">Edit</button>
                            </form>
                            <button class="btn btn-warning btn-form_update" data-bs-toggle="modal"
                                data-bs-target="#editPosts" value="{{ $post->id }}">Edit2</button>
                            <form action="{{ route('favorite') }}" class="favorities-form">
                                @csrf
                                <input type="hiden" name="id_post" value="{{ $post->id }}" class="d-none">
                                <button type="submit" class="btn btn-warning">Add Favotite</button>
                            </form>
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
                        <input type="hidden" name="id_post" id="id_post">
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
    @parent
    <script type="module" src="{{ asset('assets/js/favorite.js') }}"></script>
    <script type="module" src="{{ asset('assets/js/publish.js') }}"></script>
    <script type="module" src="{{ asset('assets/js/update.js') }}"></script>
@endsection
