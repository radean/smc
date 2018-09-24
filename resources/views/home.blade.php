@extends('layout')


@section('content')
    <!--Main Carousel-->
    <div id="MainCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="d-block main-bg-truck text-center">
                    <div class="d-none d-md-block mx-auto bg-caption">
<!--                        <h5 id="heading" class="big-headings">TRANSPORTATION</h5>-->
                        <!--                        <p id="subHeading" class="big-captions">Captions</p>-->
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="d-block main-bg-air text-center">
                    <div class="d-none d-md-block mx-auto bg-caption">
<!--                        <h5 id="heading" class="big-headings">AIR FREIGHT</h5>-->
                        <!--                        <p id="subHeading" class="big-captions">Captions</p>-->
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="d-block main-bg-ocean text-center">
                    <div class="d-none d-md-block mx-auto bg-caption">
<!--                        <h5 id="heading" class="big-headings">OCEAN CARGO</h5>-->
                        <!--                        <p id="subHeading" class="big-captions">Captions</p>-->
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="d-block main-bg-warehouse text-center">
                    <div class="d-none d-md-block mx-auto bg-caption">
<!--                        <h5 id="heading" class="big-headings">WAREHOUSE</h5>-->
                        <!--                        <p id="subHeading" class="big-captions">Captions</p>-->
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#MainCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#MainCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!--Extra Content-->
<!--    <div class="container-fluid bg-light">-->
<!--        <div class="container">-->
<!--            <div class="row">-->
<!--                <div class="col-sm-3 p-4">-->
<!--                    <div class="row">-->
<!--                        <div class="col-sm-4">-->
<!--                            <i class="fas fa-phone fa-4x secondary-text pt-2"></i>-->
<!--                        </div>-->
<!--                        <div class="col-sm-8">-->
<!--                            <h4>Call Center</h4>-->
<!--                            <h6>+966-13-813-8500</h6>-->
<!--                            <h6>+966-81-645-6453</h6>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-sm-3 p-4">-->
<!--                    <div class="row">-->
<!--                        <div class="col-sm-4">-->
<!--                            <i class="fas fa-map-marked-alt fa-4x secondary-text pt-2"></i>-->
<!--                        </div>-->
<!--                        <div class="col-sm-8">-->
<!--                            <h4>Locations</h4>-->
<!--                            <h6>Al-Barrak Tower, Najd Street, Dammam, Saudi Arabia</h6>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-sm-6 p-4 ">-->
<!--                    <h4 class="font-weight-bold">Let us help you</h4> <br>-->
<!--                    <form action="">-->
<!--                        <div class="input-group mb-3">-->
<!--                            <input type="email" class="form-control" placeholder="Your Email Address" aria-label="Email Address" aria-describedby="button-signup">-->
<!--                            <div class="input-group-append">-->
<!--                                <button class="btn btn-outline-secondary" type="button" id="button-signup">contact me</button>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </form>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
    <!--About-->
    <div class="container">
        <!--About Heading-->
        <div class="mx-auto p-5 mt-2 text-dark center-element">
            <h2>About <span class="font-weight-bold"> SMC </span></h2>
            <hr class="mx-4">
        </div>
        <!--Text About-->
        <h5 class="text-justify">
            Saudi Maritime Company was established in 1988 by setting up an office in Dammam
            at Kingdom of Saudi Arabia by an enterprising Saudi Marine Captain, Ibrahim Barrak Al
            Omani, educated in United Kingdom and served as senior Ranking Officer on board reputed
            international shipping lines. Within a short span of time we have grown regionally covering
            Western and Eastern region of KSA. Our unique business model and enduring commitment
            propels us forward, we reach our goals. Saudi Maritime became part of ABSA (ALBARRAK GROUP)
            in 1988 serving Principals and Agents worldwide.
        </h5>
        <h5 class="text-justify">
            Saudi Maritime Company has grown enormously and gained the reputation of being one of
            the leading Shipping Agencies in this region handling Mega Containers &amp; RORO Carriers. The
            HQ of SAUDI MARITIME COMPANY is situated at Dammam and having well established
            offices at Jeddah and Riyadh. SMC is a renowned name in the shipping sphere locally and
            globally.
        </h5>
    </div>
    <!--Services-->
    @component('services/services')
    @endcomponent
@endsection

