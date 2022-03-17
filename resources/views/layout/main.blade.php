<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="icon" href="https://cdn.iconscout.com/icon/free/png-256/google-play-movies-tv-2038775-1721662.png">
    <title>Movies</title>
</head>

<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <h1>Movies.cracked</h1>
                </div>
                <div class="col-8 nav-bar">
                    <ul>
                        <li><a href="{{ route('home') }}">HOME</a></li>
                        <li><a href="{{ route('movies') }}">ALL MOVIES</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <main>
        @yield('content')
    </main>
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('scripts')
</body>

</html>
