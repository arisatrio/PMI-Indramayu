<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="{{ asset('css/admin/login.css') }}" rel="stylesheet">
    <link href="{{ asset('fa/css/all.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="{{ asset('css/home.css') }}" rel="stylesheet" />
    <title>LOGIN | ADMIN PMI INDRAMAYU</title>
    <link rel="icon" href="{{ asset('/img/logo-pmi.png') }}">
</head>
<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto mt-5">
                <div class="card mt-3">
                    <div class="card-body">
                        <h5 class="card-title text-center">LOGIN</h5>
                        <hr>
                        <form action="{{ route('login') }}" method="POST">
                            {{ csrf_field() }}
                                @if(\Session::has('alert'))
                                <div class="alert alert-danger">
                                    <div>{{Session::get('alert')}}</div>
                                </div>
                                @endif
                                @if(\Session::has('alert-success'))
                                    <div class="alert alert-success">
                                        <div>{{Session::get('alert-success')}}</div>
                                    </div>
                                @endif
                            <div class="form-label-group mb-3">
                                <label for="email">{{ __('E-Mail') }}</label>
                                <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="E-mail" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <div class="form-label-group mb-3">
                                <label for="password">{{ __('Password') }}</label>
                                <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="custom-control custom-checkbox mb-3">
                                <input type="checkbox" class="custom-control-input" name="remember" {{ old('remember') ? 'checked' : '' }} id="remember">
                                <label class="custom-control-label" for="customCheck1">{{ __('Remember Me') }}</label>
                            </div>
                            <button class="btn btn-lg btn-danger btn-block text-uppercase" type="submit">
                                {{ __('Login') }}
                            </button>
                            <div class="text-center mt-3">
                                <a href="{{ route('password.request') }}">Lupa password?</a>
                            </div>
                        </form>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>