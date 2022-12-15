<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>home</title>
</head>

<body>
    <header>
        <nav class="nav justify-content-center">
            <a class="nav-link active" href="{{route('home')}}">Home</a>
            <a class="nav-link" href="{{route('services')}}">Services</a>
            <a class="nav-link" href="{{route('about')}}">About</a>
        </nav>
    </header>
    <h1 class="text-center">Hello World</h1>

    <div class="container">
        <h2>{{$name}}</h2>
        <p>Language used: {{$language}}</p>
        <h3>Framework list</h3>
        @if (count($frameworks) > 0)
        <ul>
            @foreach ($frameworks as $framework)
            <li>{{$framework}}</li>
            @endforeach
        </ul>
        @else
        <p>No frameworks available</p>
        @endif
    </div>
</body>

</html>