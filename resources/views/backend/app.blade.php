<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Orchitek">
    <title>@yield('backend_title')</title>
    <link href="/css/backend.css" rel="stylesheet">
</head>
<body>
@include("backend.includes.sidebar")
<div class="wrapper d-flex flex-column min-vh-100 bg-light">
    @include('backend.includes.header')
    <div class="body flex-grow-1 px-3">
        <div class="container-lg">
            @yield('backend_content')
        </div>
    </div>
    @include("backend.includes.footer")
</div>
<script src="/js/backend.js"></script>
<script>
</script>
</body>
</html>
