@extends('/template')


@section('content')
    <form action="{{ route('update', $posts->id) }}" method="post" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <label for="title">Titulo</label>
        <input type="text" name="title" id="title" value="{{ $posts->title }}">

        <label for="img">Imagen</label>
        <input type="file" name="img" id="img">
        <input type="hidden" name="img_prev" value="{{ $posts->img }}">

        <label for="content">Contenido</label>
        <input type="text" name="content" id="content" value="{{ $posts->content }}">

        <input type="submit" class="btn btn-success my-4" value="Registrar">
    </form>
@endsection
