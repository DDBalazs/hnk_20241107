<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Helységnévtár</title>
    <!-- Bootswatch Cosmo Theme -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <script src="{{asset('assets/js/bootstrap.bundle.js')}}"></script>
    <!-- Font Awesome Solid -->
    <link href="{{asset('assets/fontawesome/css/fontawesome.css')}}" rel="stylesheet">
    <link href="{{asset('assets/fontawesome/css/solid.css')}}" rel="stylesheet">
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg bg-dark py-2 sticky-top" data-bs-theme="dark">
        <div class="container">
            <a class="navbar-brand" href="/"><i class="fa-solid fa-map"></i>Helységnévtár</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#CosmoNavbar" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="CosmoNavbar">
                <ul class="navbar-nav me-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Települések</a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="/all">Összes település</a>
                      <a class="dropdown-item" href="/abc">Települések betűrendben</a>
                    </div>
                </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/varosok">Városok</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/nagykozseg">Nagyközség</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/kozseg">Községek</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

@yield('content')

<footer class="my-4 text-center">
    <p>Forrás: <a href="https://www.ksh.hu" target="_blank">KSH</p>
</footer>
</body>
</html>
