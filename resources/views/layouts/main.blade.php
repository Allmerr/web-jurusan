<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Rekayasa Perangkat Lunak</title>
        {{-- favicon --}}
        <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
        {{-- icon --}}
        <script src="https://kit.fontawesome.com/c0bc3cdbee.js" crossorigin="anonymous"></script>
        <!-- css -->
        <link rel="stylesheet" href="{{ asset('/css/index.css') }}">
        {{-- boostrap --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    </head>
    <body>
        <div class="container p-0" style="background-color: #f5f5f7;">
        @include('partials.navbar')
        @yield('content')
        @include('partials.footer')
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
</html>