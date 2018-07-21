<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Saudi Maritime Company</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <!--BootStrap-->
    <link rel="stylesheet" href="css/app.css">
    <!--Custom-->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
<!--Main Navigation Bar-->
    <nav class="navbar navbar-expand-md navbar-light text-dark bg-light font-weight-light px-5 ">
        <a class="navbar-brand px-5" href="#">SMC</a>
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
                    <a class="nav-link px-5" href="#">+966-13-813-8500</a>
                </li>
            </ul>
            <form class="form-inline">
                <button class="btn btn-lg btn-outline-primary" type="button">Contact us</button>
            </form>
        </div>
    </nav>
<!--Secondary NavBar-->
    <nav class="navbar navbar-expand-md navbar-light text-dark bg-light font-weight-light px-5 ">
        <div class="collapse navbar-collapse mr-auto px-5" id="navbarsExampleDefault">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-5" href="#">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Shipping</a>
                </li>
            </ul>
        </div>
    </nav>
    <!--Main Content Body-->
    <!--Main Carousel-->
    <div id="mainCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#mainCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#mainCarousel" data-slide-to="1"></li>
            <li data-target="#mainCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="img/broadcast/trucks.jpg" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Trucks Heading Out</h5>
                    <p>Trucks should be on tracks</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/broadcast/shipping.jpg" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Shipping Moving Faster than Usual</h5>
                    <p>We have to get going</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/broadcast/containers.jpg" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Stored amount of Parcels</h5>
                    <p>No one want their parcels delayed</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#mainCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#mainCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="container">
        SMC Website

    </div>

<script src="js/app.js"></script>
</body>
</html>

