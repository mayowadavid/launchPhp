<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Site Title Here</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="#">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/tagify.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
</head>
<body>
    <div class="auths-area-two">
        <div class="auth-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <img src="{{asset('img/b-logo2.png')}}" alt="logo">
                    </div>
                </div>
            </div>
        </div>
        <div class="auth-bottom">

            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <form method="post" id="login-form" class="auths_g_auth needs-validation" action="{{ route('auth.authentication.verify') }}" novalidate>
                        @csrf

                            <label for="email">
                                Email
                                <input type="text" id="email" placeholder="emailadres@gmail.com" name="email">
                                <div class="invalid-feedback">Email is required</div>
                            </label>
                            <label for="authCode">
                                Google Authentication Code
                                <input type="text" id="authCode" placeholder="090011" name="secret">
                                <div class="invalid-feedback"><i class="fal fa-info-circle"></i> De ingevoerde gegevens zijn incorrect, probeer het nog een keer.</div>
                            </label>
                            <button type="submit" class="themebtn">Inloggen</button>
                            <a href="#">Alle inlog opties bekijken</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
    <script src="{{asset('js/jquery-ui.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/tagify.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
</body>
</html>

