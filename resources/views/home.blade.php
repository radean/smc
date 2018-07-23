@extends('layout')


@section('content')
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
    <!--Extra Content-->
    <div class="container">
        <div class="row">
            <div class="col-sm-3 p-5">
                <h2><i class="fas fa-phone"></i> Call Center</h2>
                0300-23568956 <br>
                0300-23568956 <br>
                0300-23568956 <br>
            </div>
            <div class="col-sm-3 p-5">
                <h2><i class="fas fa-map-marked-alt"></i> Locations</h2>
                <ul>
                    <li>Australia</li>
                    <li>Canad</li>
                    <li>France</li>
                </ul>
            </div>
            <div class="col-sm-6 p-5 ">
                <h2><i class="fas fa-life-ring"></i> Support</h2>
            </div>
        </div>
    </div>
    <!--About-->
    <div class="container">
        <!--About Heading-->
        <div class="mx-auto p-5 mt-5 text-dark" style="width: fit-content;">
            <h2>About <span class="font-weight-bold"> SMC</span></h2>
            <hr class="mx-5">
        </div>
        <!--Text About-->
        <p>
            Saudi Maritime Company was established in early 1970’s by setting up an office in Dammam
            at Kingdom of Saudi Arabia by an enterprising Saudi Marine Captain, Ibrahim Barrak Al
            Omani, educated in United Kingdom and served as senior Ranking Officer on board reputed
            international shipping lines. Within a short span of time we have grown regionally covering
            Western and Eastern region of KSA. Our unique business model and enduring commitment
            propels us forward, we reach our goals. Saudi Maritime became part of absco.com (ABSA
            Group) in 1988 serving Principals and Agents worldwide.
        </p>
        <p>
            Saudi Maritime Company has grown enormously and gained the reputation of being one of
            the leading Shipping Agencies in this region handling Mega Containers &amp; RORO Carriers. The
            HQ of SAUDI MARITIME COMPANY is situated at Dammam and having well established
            offices at Jeddah and Riyadh. SMC is a renowned name in the shipping sphere locally and
            globally.
        </p>
        <!--Services Heading-->
        <div class="mx-auto p-5 mt-5 text-dark" style="width: fit-content;">
            <h2>Our <span class="font-weight-bold"> Services </span></h2>
            <hr class="mx-5">
        </div>
        <!--Text Services-->
        <p>
            Saudi Maritime Company has grown enormously and gained the reputation of being one of
            the leading Shipping Agencies in this region handling Mega Carrier Hyundai Merchant
            Marine ( <a href="http://hmm21.com">www.hmm21.com</a> ) . The HQ of SMC is situated at Dammam and having well
            established offices at Jeddah and Riyadh. SMC is a renowned name in the shipping sphere
            locally and globally.
        </p>
        <p>
            SMC is perfectly situated to provide you a full range of Ocean Freight, Air Freight and Land
            Transportation Services for both import and export along with warehousing, distribution
            through our group ABSA. Our mission is to provide to our clients “Quality and problem-
            solving logistics” and “Supply chain freight management solutions”.
        </p>
    </div>
@endsection
