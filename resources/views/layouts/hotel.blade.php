<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <nav class="navbar navbar-expand-sm bg-light navbar-light">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('hotels_f1') }}">1F</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('hotels_f2') }}">2F</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="{{ route('hotels_f3') }}">3F</a>
                </li>
            </ul>
        </div>
    </nav>

    <div>
        @yield('content')
    </div>
</body>

</html>
