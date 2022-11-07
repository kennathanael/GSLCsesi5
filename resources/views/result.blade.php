<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <title></title>
</head>

<body class="d-flex align-items-center justify-content-center text-bg-secondary" style="height: 100vh">
    <div class="card" style="width: 18rem;">
        @if($color == "red")
            <img src="{{asset('img/warning.png.png')}}" class="card-img-top" alt="...">
        @elseif ($color == "blue")
            <img src="{{asset('img/have a nice day.jpg')}}" class="card-img-top" alt="">
        @else
            <img src="{{asset('img/normal.png')}}" alt="">
        @endif
        <div class="card-body text-bg-light">
          <h5 class="card-title" style="text-align: center">
            @if ($color == "red")
                Stay Safe
            @elseif ($color == "blue")
                Amazing
            @else
                So-so
            @endif
          </h5>
          <p class="card-text" style="text-align: center">
            @if ($color == "red")
                Luck is not on your side today!
            @elseif ($color == "blue")
                You will have a nice day :>
            @else
                Today will be a normal for you.
            @endif
          </p>
          <a href="/" class="btn btn-primary d-flex justify-content-center">Pick Another</a>
        </div>
      </div>
</body>
</html>
