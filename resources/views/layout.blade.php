<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Saudi Maritime Company</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet" type="text/css">
    <!--Icons-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <!-- Styles -->
    <!--BootStrap-->
<!--    <link rel="stylesheet" href="{{ secure_asset('css/app.css') }}">-->
    <link rel="stylesheet" href="{{ url('/') }}/css/app.css ">
    <!--Custom-->
<!--    <link rel="stylesheet" href="{{ secure_asset('css/style.css') }}">-->
    <link rel="stylesheet" href="{{ url('/') }}/css/style.css ">
    <script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
</head>

<body >


<!--Main Navigation Bar-->

<div class="container-fluid">
    <div class="row">
        <div class="col-sm position-absolute" style="z-index: 10">
            <nav class="navbar navbar-expand-md text-white bg-transparent font-weight-light px-5 font-weight-bold">
                <a class="navbar-brand px-5" href="/">
                    <img src="{{ url('/') }}/img/logo.png" width="100%" class="d-inline-block" alt="">
                    <!--        Saudi Maritime Company-->
                </a>
                <!--<a class="navbar-brand" href="#">Saudi Maritime Company</a>-->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end px-5" id="navbarsExampleDefault">
                </div>
            </nav>
            <!--HR-->
            <hr class="navigation">
            <!--Secondary NavBar-->
            <nav class="navbar navbar-expand-md text-white font-weight-light bg-transparent px-5">
                <div class="collapse navbar-collapse mr-auto px-5" id="navbarsExampleDefault">
                    <ul class="navbar-nav" data-hover="dropdown" data-animations="fadeInDown fadeInRight fadeInUp fadeInLeft>
                        <li class="nav-item px-2">
                            <a class="nav-link {{ Request::path() == 'about' ? 'active' : '' }}" href="/about"> <h5 class="font-weight-light">About</h5> </a>
                        </li>
                        <li class="nav-item px-2">
                            <a class="nav-link {{ Request::path() == 'services' ? 'active' : '' }}" href="{{ route('service') }}"> <h5 class="font-weight-light">Services</h5> </a>
                        </li>
                        <li class="nav-item px-2 dropdown" >
                            <h5 class="font-weight-light" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><a href="{{ route('service') }}" class="nav-link dropdown-toggle">Shipping</a></h5>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{ route('hmm') }}"><h5 class="font-weight-light">HMM (Hyundai Merchant Marine)</h5></a>
                                <a class="dropdown-item" href="{{ route('hglovis') }}"><h5 class="font-weight-light">Hyundai Glovis</h5></a>
                                <a class="dropdown-item" href="{{ route('eukor') }}"><h5 class="font-weight-light">EUKOR Car Carrier Inc</h5></a>
                                <a class="dropdown-item" href="{{ route('perma') }}"><h5 class="font-weight-light">Perma Shipping Line</h5></a>
                            </div>
                        </li>
                        <li class="nav-item px-2">
                            <a class="nav-link {{ Request::path() == 'transportation' ? 'active' : '' }}" href="{{ route('transportation') }}"> <h5 class="font-weight-light">Transportation</h5> </a>
                        </li>
                        <li class="nav-item px-2">
                            <a class="nav-link {{ Request::path() == 'logistics' ? 'active' : '' }}" href="{{ route('logistics') }}"> <h5 class="font-weight-light">Logistics</h5> </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link {{ Request::path() == 'contact' ? 'active' : '' }}" href="/contact"><button type="button" class="btn btn-sm btn-primary">Contact us</button></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>
<!--Main Content Body-->
@yield('content')

<!--Footer-->
<div class="container-fluid bg-light">
    <!--Body-->
    <div class="container-fluid">
        <div class="row border-top px-3">
            <div class="col-sm p-5">
                <h4 class="font-weight-bold">Get in touch</h4>
                <a class="text-dark " href="#">We will contact you soon.</a>
                <form>
                    @csrf
                    <div class="form-group">
                        <input name="contactFormEmail" type="email" class="form-control form-control-sm" id="emailAddress" aria-describedby="emailHelp" placeholder="Email*">
                    </div>
                    <div class="form-group">
                        <select name="contactFormBranch" class="form-control form-control-sm">
                            <option value="1">Head Office - Dammam</option>
                            <option value="2">Riyadh Branch</option>
                            <option value="3">Jeddah Branch</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <textarea name="contactFormMessage" class="form-control form-control-sm" id="message" rows="3" placeholder="Message"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="col-sm p-5">
                <h4 class="font-weight-bold">Head Office</h4>
                <h5>Dammam, Saudi Arabia</h5>
                <hr>
                Al-Barrak Tower, Najd Street, <br>
                P.O. Box 2384, Dammam 31451 <br>
                Saudi Arabia. Tel : +966-13-8199400 <br>
                Fax : +966-13-8274778 <br>
            </div>
            <div class="col-sm p-5">
                <h4 class="font-weight-bold">Riyadh</h4>
                <h5>Al – Barrak building</h5>
                <hr>
                P.O.Box # 16127, <br>
                Riyadh – 11464, <br>
                Tel : +966-11 2067662 <br>
                Fax : +966-11 2067553 <br>
            </div>
            <div class="col-sm p-5">
                <h4 class="font-weight-bold">Jeddah</h4>
                <h5>Jeddah</h5>
                <hr>
                Captain Barrak Commercial Tower, <br>
                Al Baghdadia Jeddah 21484, <br>
                Saudi Arabia <br>
                Tel : +966-12-6038000 <br>
                Fax : +966-12-6038022 <br>
            </div>
        </div>
    </div>
    <!--Header-->
    <div class="row border border-bottom-0 px-4">
        <div class="col-sm-6 p-5">
            <a class="navbar-brand " href="/">
                <img src="{{ url('/') }}/img/logoB.png" width="100%" class="d-inline-block" alt="">
            </a>
        </div>
        <div class="col-sm-3 p-5">
            <div class="row">
                <div class="col-sm-4">
                    <i class="fas fa-phone fa-4x secondary-text pt-2"></i>
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
                    <i class="fas fa-calendar-alt fa-4x secondary-text pt-2"></i>
                </div>
                <div class="col-sm-8">
                    <h4>Timing</h4>
                    <h6>Sun - Thursday</h6>
                    <h6>08:00 - 17:00</h6>
                </div>
            </div>
        </div>
    </div>
    <!--Footer-->
<!--    <div class="row secondaryBG px-4">-->
<!--        <div class="col-sm p-5">-->
<!--            <h4 class="font-weight-bold"> Delivered on time with no hassle.</h4> <br>-->
<!--            <a class="text-dark m-2" href="#"><i class="fab fa-facebook-f fa-2x"></i></a>-->
<!--            <a class="text-dark m-2" href="#"><i class="fab fa-twitter fa-2x"></i></a>-->
<!--            <a class="text-dark m-2" href="#"><i class="fab fa-linkedin-in fa-2x"></i></a>-->
<!--            <a class="text-dark m-2" href="#"><i class="fab fa-google-plus-g fa-2x"></i></a>-->
<!--            <a class="text-dark m-2" href="#"><i class="fab fa-youtube fa-2x"></i></a>-->
<!--            <br>-->
<!--            <h6 class="mt-5">&copy; 2018 SMC (Saudi Maritime Company) / All rights reserved / version 0.16 Beta</h6>-->
<!--        </div>-->
<!--        <div class="col-sm p-5">-->
<!--            <h4 class="font-weight-bold"> BE UP TO DATE:</h4> <br>-->
<!--            <form action="">-->
<!--                @csrf-->
<!--                <div class="input-group mb-3">-->
<!--                    <input type="email" class="form-control" placeholder="Your Email Address" aria-label="Email Address" aria-describedby="button-signup">-->
<!--                    <div class="input-group-append">-->
<!--                        <button class="btn btn-outline-secondary" type="button" id="button-signup">Sign me up!</button>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </form>-->
<!--            <br>-->
<!--            <h6 class="mt-0"><a href="#"> About </a>| <a href="#">Services </a> | <a href="#">Term & Conditions </a> | <a href="#">Privacy Policy </a> </h6>-->
<!--        </div>-->
<!--    </div>-->
</div>
<!--Jquery-->

<!--GSAP-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.1/TweenMax.min.js"></script>
<!--CUSTOM-->

<script src="{{ url('/') }}/js/app.js"></script>
<script src="{{ url('/') }}/js/main.js"></script>
<script>
    $('.carousel').carousel({
        interval: 4000
    })
</script>


<!--<script src="{{ secure_asset('css/js/app.js') }}"></script>-->
<!--<script src="{{ secure_asset('js/app.js') }}"></script>-->
</body>
</html>

