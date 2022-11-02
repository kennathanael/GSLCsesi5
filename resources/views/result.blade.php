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

<body class="d-flex align-items-center" style="height: 100vh">
    <div class="d-flex justify-content-center" style="width: 100%">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <div class="d-flex justify-content-center">
                    <h5 class="card-title">
                        @if ($color === "red")
                            Have a nice day :>
                         @elseif ($color === "blue")
                            Good Luck!
                         @else
                            Have fun
                        @endif
                      </h5>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
