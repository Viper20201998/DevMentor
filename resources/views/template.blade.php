<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('tokens')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" media="all" href="https://labs.mysql.com/common/css/main-20230830.min.css">
    <link rel="stylesheet" media="all" href="https://labs.mysql.com/common/css/page-20230830.min.css">


    <link rel="stylesheet" media="print" href="https://labs.mysql.com/common/css/print-20230830.min.css">
    <link rel="alternate" type="application/rss+xml" title="RSS feed" href="/mysql.rss">

    <link rel="alternate" hreflang="en" href="https://www.mysql.com/">
    <link rel="alternate" hreflang="de" href="https://www.mysql.com/de/">
    <link rel="alternate" hreflang="fr" href="https://www.mysql.com/fr/">
    <link rel="alternate" hreflang="it" href="https://www.mysql.com/it/">
    <link rel="alternate" hreflang="ja" href="https://www.mysql.com/jp/">
    <link rel="alternate" hreflang="zh" href="https://www.mysql.com/cn/">
    <link rel="shortcut icon" href="https://labs.mysql.com/common/themes/sakila/favicon.ico">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ url('/') }}/css/app.css">
    <link rel="stylesheet" href="{{ url('/') }}/css/mysql.css">
    <link rel="stylesheet" href="{{ url('/') }}/js/mysql.js">
    <!--<link rel="stylesheet" href="{//{/* url('/') }}/css/style.css">-->
    <title>Proyect</title>
</head>

<body>
    @include('modulos.header')
    <div class="container">
        @yield('content')
    </div>
    @include('modulos.sidebar')



    @include('modulos.footer');
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
</script>

@yield('script')

</html>
