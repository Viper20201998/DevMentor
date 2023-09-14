@extends('/template')


@section('content')
    <form action={{ route('publish') }} method="post" enctype="multipart/form-data">
        @csrf
        <label for="title">Titulo</label>
        <input type="text" name="title" id="title">

        <label for="img">Imagen</label>
        <input type="file" name="img" id="img">

        <label for="content">Contenido</label>
        <input type="text" name="content" id="content">

        <input type="submit" class="btn btn-success my-4" value="Registrar">
    </form>
@endsection
