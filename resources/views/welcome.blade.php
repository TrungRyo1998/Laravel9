<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
</head>
<body class="antialiased">
<div style="display: flex;
    min-height: 100vh;
    justify-content: center;
    align-items: center;">
    <div>
        <form action="{{ route('upload') }}" method="post" enctype="multipart/form-data" style="display: flex; justify-content: space-around;">
            @csrf
            <input type="file" name="image">
            <button type="submit">Upload</button>
        </form>
        @if(isset($url))
            <div class="preview" style="margin-top:20px">
                <img src="{{ $url }}" alt="" width="400">
            </div>
        @endif
    </div>
</div>
</body>
</html>
