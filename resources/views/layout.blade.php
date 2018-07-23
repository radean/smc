<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Saudi Maritime Company</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet" type="text/css">
    <!--Icons-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <!-- Styles -->
    <!--BootStrap-->
    <link rel="stylesheet" href="css/app.css">
    <!--Custom-->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
<!--Main Navigation Bar-->
<nav class="navbar navbar-expand-md navbar-light text-dark bg-light font-weight-light px-5 font-weight-bold">
    <a class="navbar-brand px-5" href="/">
        <img src="img/logo.png" width="100%" height="100%" class="d-inline-block" alt="">
<!--        Saudi Maritime Company-->
    </a>
    <!--<a class="navbar-brand" href="#">Saudi Maritime Company</a>-->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end px-5" id="navbarsExampleDefault">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="#">Blogs & News</a>
            </li>
            <li class="nav-item">
                <a class="nav-link px-3" href="#">+966-13-813-8500</a>
            </li>
        </ul>
        <form class="form-inline">
            <a href="/contact">
            <button class="btn btn-lg btn-outline-primary" type="button">Contact us</button>
            </a>
        </form>
    </div>
</nav>
<!--Secondary NavBar-->
<nav class="navbar navbar-expand-md navbar-light text-dark bg-light px-5">
    <div class="collapse navbar-collapse mr-auto px-5" id="navbarsExampleDefault">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link {{ Request::path() == 'about' ? 'active' : '' }}" href="/about"> <h5 class="font-weight-bold">About</h5> </a>
            </li>
            <li class="nav-item">
                <a class="nav-link px-5 {{ Request::path() == 'services' ? 'active' : '' }}" href="/services"><h5 class="font-weight-bold">Services</h5></a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::path() == 'shipping' ? 'active' : '' }}" href="/shipping"><h5 class="font-weight-bold">Shipping</h5></a>
            </li>
        </ul>
    </div>
</nav>
<!--Main Content Body-->

@yield('content')

<!--Footer-->
<div class="container-fluid bg-light">
    <!--Header-->
    <div class="row border border-bottom-0 px-4">
        <div class="col-sm-6 p-5">
            <a class="navbar-brand " href="/">
                <img src="img/logo.png" width="100%" height="100%" class="d-inline-block" alt="">
            </a>
        </div>
        <div class="col-sm-3 p-5">
            <div class="row">
                <div class="col-sm-4">
                    <i class="fas fa-phone fa-4x secondary-text"></i>
                </div>
                <div class="col-sm-8">
                    <h4>Call Center</h4>
                    <h6>+966-13-813-8500</h6>
                    <h6>+966-81-645-6453</h6>
                </div>
            </div>
        </div>
        <div class="col-sm-3 p-5">
            <div class="row">
                <div class="col-sm-4">
                    <i class="fas fa-map-marked-alt fa-4x secondary-text"></i>
                </div>
                <div class="col-sm-8">
                    <h4>Locations</h4>
                    <h6>KSA</h6>
                </div>
            </div>
        </div>
    </div>
    <!--Body-->
    <div class="container-fluid">
        <div class="row border-top px-3">
            <div class="col-sm p-5 height">
                <h4 class="font-weight-bold">Head Office</h4>
                <h5>Dammam, Saudi Arabia</h5>
                <hr>
                Al-Barrak Tower, Najd Street, <br>
                P.O. Box 2384, Dammam 31451 <br>
                Saudi Arabia. Tel : +966-13-8199400 <br>
                Fax : +966-13-8274778 <br>
            </div>
            <div class="col-sm p-5">
                <h4 class="font-weight-bold">Riyadh Branch</h4>
                <h5>Al – Barrak building</h5>
                <hr>
                P.O.Box # 16127, <br>
                Riyadh – 11464, <br>
                Tel : +966-11 2067662 <br>
                Fax : +966-11 2067553 <br>
            </div>
            <div class="col-sm p-5">
                <h4 class="font-weight-bold">Branch-Jeddah</h4>
                <h5>Jeddah Branch</h5>
                <hr>
                Captain Barrak Commercial Tower, <br>
                Al Baghdadia Jeddah 21484, <br>
                Saudi Arabia <br>
                Tel : +966-12-6038000 <br>
                Fax : +966-12-6038022 <br>
            </div>
            <div class="col-sm p-5">
                <h4 class="font-weight-bold"> Notation</h4>
                <a class="text-dark " href="#">This is Footer</a>
                <div class="btn btn-dark btn-lg btn-outline-secondary mt-5"> Get a free rate</div>
            </div>
        </div>
    </div>
    <!--Footer-->
    <div class="row secondaryBG px-4">
        <div class="col-sm p-5">
            <h4 class="font-weight-bold"> Delivered on time with no hassle.</h4> <br>
            <a class="text-dark m-2" href="#"><i class="fab fa-facebook-f fa-2x"></i></a>
            <a class="text-dark m-2" href="#"><i class="fab fa-twitter fa-2x"></i></a>
            <a class="text-dark m-2" href="#"><i class="fab fa-linkedin-in fa-2x"></i></a>
            <a class="text-dark m-2" href="#"><i class="fab fa-google-plus-g fa-2x"></i></a>
            <a class="text-dark m-2" href="#"><i class="fab fa-youtube fa-2x"></i></a>
            <br>
            <h6 class="mt-5">&copy; 2018 SMC (Saudi Maritime Company) / All rights reserved</h6>
        </div>
        <div class="col-sm p-5">
            <h4 class="font-weight-bold"> BE UP TO DATE:</h4> <br>
            <form action="">
                <div class="input-group mb-3">
                    <input type="email" class="form-control" placeholder="Your Email Address" aria-label="Email Address" aria-describedby="button-signup">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="button" id="button-signup">Sign me up!</button>
                    </div>
                </div>
            </form>
            <br>
            <h6 class="mt-0"><a href="#"> About </a>| <a href="#">Services </a> | <a href="#">Term & Conditions </a> | <a href="#">Privacy Policy </a> </h6>
        </div>
    </div>
</div>

<script src="js/app.js"></script>
</body>
</html>

