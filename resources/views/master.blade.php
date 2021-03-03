<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/styles.css">

    {{--  Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>

    <nav class="nav">
        <a class="nav-link" href="/">Link 1</a>
        <a class="nav-link" href="/test/2">Link 2</a>
        <a class="nav-link" href="/first">Link 3</a>
        <a class="nav-link" href="/about">About me</a>
    </nav>

@yield('content')

</body>
</html>
