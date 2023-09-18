@extends('/template')


@section('contain')
    <div class="container my-5">
        <div class="card w-25 mx-auto my-3">
            <img src="{{ url('/') }}/img/{{ $posts->img }}" class="card-img img-thumbnail rounded-circle"
                alt="">
        </div>
        <form action="{{ route('update', $posts->id) }}" method="post" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Title</label>
                    <input type="text" class="form-control my-3" value="{{ $posts->title }}" name="title"
                        placeholder="title">
                </div>
                <div class="form-group col-md-6 px-3">
                    <label for="inputPassword4">Image</label>
                    <input type="file" class="form-control my-3" id="inputPassword4" name="img">
                    <input type="hidden" name="img_prev" value="{{ $posts->img }}" class="form-control" />
                </div>
            </div>
            <div class="form-group">
                <label for="inputAddress">Content</label>
                <textarea class="form-control my-3" id="inputAddress" name="content" rows="4">{{ $posts->content }}</textarea>
            </div>
            <button type="submit" class="btn btn-warning">Update</button>
        </form>
    </div>
@endsection
