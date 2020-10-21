<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>

    <link rel="icon" href="{{ asset('/img/logo-pmi.png') }}">

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/simple-line-icons/css/simple-line-icons.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/landing-page.min.css') }}" rel="stylesheet">

</head>
<body>
    
    <div class="header" >
        <div class="container mt-2">
            <div class="row">
                <div class="col-6">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="{{ asset('/img/Logo-PMI-im.png') }}" class="navbar-brand" width="100%" height="80" class="d-inline-block align-top" alt="" >
                    </a>
                </div>
               
            </div>
        </div>
    </div>
    
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light static-top font-weight-bold text-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="container">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('index') }}">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('profil') }}">Profil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('agenda') }}">Agenda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('informasi') }}">Informasi</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Formulir
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('permintaan-mobil-donor') }}">Formulir Permintaan Mobil Unit Donor</a>
                            <a class="dropdown-item" href="{{ route('registrasi-donor') }}">Formulir Registrasi Donor</a>
                            <a class="dropdown-item" href="{{ route('donor-rhesus-negatif') }}">Formulir Donor Rhesus Negatif</a>
                            <a class="dropdown-item" href="{{ route('komunikasi') }}">Formulir Komunikasi (Pertanyaan & Saran)</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('hubungi-kami') }}">Hubungi Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('faq') }}">FAQ</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="bg-danger" style="height: 5px"></div>

    <!-- Masthead -->
    @yield('content')

    <!-- Footer -->
    <div class="bg-danger mt-2" style="height: 5px"></div>
        <footer class="footer bg-dark">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 h-100 text-center text-lg-left text-white my-auto">
                        <ul class="list-inline mb-2">
                            <li class="list-inline-item">
                                <a href="{{ route('profil') }}"class="text-white">About</a>
                            </li>
                            <li class="list-inline-item">&sdot;</li>
                            <li class="list-inline-item">
                                <a href="{{ route('hubungi-kami') }}" class="text-white">Contact</a>
                            </li>
                            <li class="list-inline-item">&sdot;</li>
                            <li class="list-inline-item">
                                <a href="#" class="text-white">Terms of Use</a>
                            </li>
                            <li class="list-inline-item">&sdot;</li>
                            <li class="list-inline-item">
                                <a href="#" class="text-white">Privacy Policy</a>
                            </li>
                        </ul>
                        <p class="text-muted small mb-4 mb-lg-0">&copy; PMI Indramayu. All Rights Reserved.</p>
                    </div>
                    <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item mr-3">
                            <a href="https://www.facebook.com/pages/PMI-Kabupaten-Indramayu/144454002617502" class="text-white">
                                <i class="fab fa-facebook fa-2x fa-fw"></i>
                            </a>
                            </li>
                            <li class="list-inline-item mr-3">
                            <a href="#" class="text-white">
                                <i class="fab fa-twitter-square fa-2x fa-fw"></i>
                            </a>
                            </li>
                            <li class="list-inline-item">
                            <a href="#" class="text-white">
                                <i class="fab fa-instagram fa-2x fa-fw"></i>
                            </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
