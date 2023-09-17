@extends('template')
@section('content')
    <a href="{{ url('/registerPost') }}">Postear</a>
    <div class="col-md-12">
        <div class="row container-fluid">
            <div class="alertcont"></div>
            @foreach ($posts as $post)
                <div class="card col-md-5 d-flex justify-content-between mx-3">
                    <img src="{{ url('/') }}/img/{{ $post->img }}" class="card-img-top" alt="" />
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <p class="card-text">
                            {{ $post->content }}
                        </p>
                        <form action="{{ route('favorite') }}" class="favorities-form">
                            @csrf
                            <input type="hiden" name="id_post" value="{{ $post->id }}" class="d-none">
                            <button type="submit" class="btn btn-warning">Add Favotite</button>
                        </form>
                    </div>
                </div>
            @endforeach
            <div class="containcard"></div>
        </div>
    </div>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Publish</button>


    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" style="display: none;"
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
@endsection

@section('script')
    @parent
    <script type="module" src="{{ asset('assets/js/favorite.js') }}"></script>
    <script type="module" src="{{ asset('assets/js/publish.js') }}"></script>
@endsection
