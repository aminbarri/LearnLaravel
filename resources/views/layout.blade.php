<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

            <li class="nav-item">
                <a class="nav-link" href="{{route('home.index')}}">Home</a>

            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('home.contact')}}">Contact</a>
            </li>
          
            <li class="nav-item">
                 <a class="nav-link" href="{{route('computres.create')}}">create</a>
            </li>
            <li class="nav-item">
                 <a class="nav-link" href="{{route('computres.index')}}">Cumputres</a>
            </li>
            
            </ul>
           
           </div>

        </nav>
    </div>
   @yield('content')
</body>
</html>