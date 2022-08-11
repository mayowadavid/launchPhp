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


<!-- Auths-area STARTED -->
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
                <div class="col-lg-4 offset-lg-4">
                    <div class="auths_wrps">
                        <p>Scan de code met de Google Authenticator app en maak je koppelcode aan.</p>
                        <img class="logo" src="data:image/png;base64, {{$qrcode}} "/>
                        <button type="button" class="themebtn">Ga naar de inlog pagina</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Auths-area END -->


<!-- JS here -->
<script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
<script src="{{asset('js/jquery-ui.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/tagify.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
</body>
</html>
