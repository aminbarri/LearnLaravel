<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div>
        <nav >
            <a href="{{route('home.index')}}">Home</a>
            <a href="{{route('home.contact')}}">Contact</a>
            <a href="{{route('home.hello')}}">hello</a>
            <a href="{{route('computres.create')}}">create</a>
            <a href="{{route('computres.index')}}">Cumputres</a>
        </nav>
    </div>
   @yield('content')
</body>
</html>