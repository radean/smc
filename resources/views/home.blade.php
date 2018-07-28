@extends('layout')


@section('content')
    <!--Main Carousel-->
    <div class="full-screen" data-ride="carousel">
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="truck" role="tabpanel" aria-labelledby="truck-tab">
                <div class="d-block main-bg-truck text-center">
                    <div class="d-none d-md-block mx-auto bg-caption">
                        <h5 id="heading" class="big-headings">Trucks </h5>
                        <p id="subHeading" class="big-captions">Captions</p>
                    </div>
                </div>
<!--                <img class="d-block w-100" src="img/broadcast/trucks.jpg" alt="First slide">-->
<!--                <h3 class="mx-auto " >Heading</h3>-->
            </div>
            <div class="tab-pane fade" id="air" role="tabpanel" aria-labelledby="air-tab">
                <div class="d-block main-bg-air text-center">
                    <div class="d-none d-md-block mx-auto bg-caption">
                        <h5 id="heading" class="big-headings">Planes</h5>
                        <p id="subHeading" class="big-captions">Captions</p>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="ocean" role="tabpanel" aria-labelledby="ocean-tab">
                <div class="d-block main-bg-ocean text-center">
                    <div class="d-none d-md-block mx-auto bg-caption">
                        <h5 id="heading" class="big-headings">Containers </h5>
                        <p id="subHeading" class="big-captions">Captions</p>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="warehouse" role="tabpanel" aria-labelledby="warehouse-tab">
                <div class="d-block main-bg-warehouse text-center">
                    <div class="d-none d-md-block mx-auto bg-caption">
                        <h5 id="heading" class="big-headings">Warehouses </h5>
                        <p id="subHeading" class="big-captions">Captions</p>
                    </div>
                </div>
            </div>
            <ul class="nav nav-tabs bg-transparent nav-justified text-dark" id="myTab" role="tablist">
                <li class="nav-item active">
                    <a class="nav-link text-dark active" id="truck-tab" data-toggle="tab" href="#truck" role="tab" aria-controls="truck" aria-selected="true">
                        <img src="{{ url('/') }}/img/icons/truck.png" alt="">
                        <h3>Land Transport</h3>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" id="air-tab" data-toggle="tab" href="#air" role="tab" aria-controls="air" aria-selected="false">
                        <img src="{{ url('/') }}/img/icons/airFreight.png" alt="">
                        <h3>Air Freight</h3>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" id="ocean-tab" data-toggle="tab" href="#ocean" role="tab" aria-controls="ocean" aria-selected="false">
                        <img src="{{ url('/') }}/img/icons/cargoShip.png" alt="">
                        <h3>Ocean Cargo</h3>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" id="warehouse-tab" data-toggle="tab" href="#warehouse" role="tab" aria-controls="warehouse" aria-selected="false">
                        <img src="{{ url('/') }}/img/icons/warehouse.png" alt="">
                        <h3>Warehouse & Logistics</h3>
                    </a>
                </li>
            </ul>
        </div>
<!--        <ol class="carousel-indicators">-->
<!--            <li data-target="#mainCarousel" data-slide-to="0" class="active"></li>-->
<!--            <li data-target="#mainCarousel" data-slide-to="1"></li>-->
<!--            <li data-target="#mainCarousel" data-slide-to="2"></li>-->
<!--        </ol>-->
<!--        <div class="carousel-inner">-->
<!--            <div class="carousel-item active">-->
<!--                <img class="d-block w-100" src="img/broadcast/trucks.jpg" alt="First slide">-->
<!--                <div class="carousel-caption d-none d-md-block">-->
<!--                    <h5>Trucks Heading Out</h5>-->
<!--                    <p class="text-justify">Trucks should be on tracks</p>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="carousel-item">-->
<!--                <img class="d-block w-100" src="img/broadcast/shipping.jpg" alt="Second slide">-->
<!--                <div class="carousel-caption d-none d-md-block">-->
<!--                    <h5>Shipping Moving Faster than Usual</h5>-->
<!--                    <p class="text-justify">We have to get going</p>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="carousel-item">-->
<!--                <img class="d-block w-100" src="img/broadcast/containers.jpg" alt="Third slide">-->
<!--                <div class="carousel-caption d-none d-md-block">-->
<!--                    <h5>Stored amount of Parcels</h5>-->
<!--                    <p class="text-justify">No one want their parcels delayed</p>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <a class="carousel-control-prev" href="#mainCarousel" role="button" data-slide="prev">-->
<!--            <span class="carousel-control-prev-icon" aria-hidden="true"></span>-->
<!--            <span class="sr-only">Previous</span>-->
<!--        </a>-->
<!--        <a class="carousel-control-next" href="#mainCarousel" role="button" data-slide="next">-->
<!--            <span class="carousel-control-next-icon" aria-hidden="true"></span>-->
<!--            <span class="sr-only">Next</span>-->
<!--        </a>-->
    </div>
    <!--Extra Content-->
    <div class="container-fluid bg-light">
        <div class="container">
            <div class="row">
                <div class="col-sm-3 p-4">
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
                <div class="col-sm-3 p-4">
                    <div class="row">
                        <div class="col-sm-4">
                            <i class="fas fa-map-marked-alt fa-4x secondary-text pt-2"></i>
                        </div>
                        <div class="col-sm-8">
                            <h4>Locations</h4>
                            <h6>Al-Barrak Tower, Najd Street, Dammam, Saudi Arabia</h6>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 p-4 ">
                    <h4 class="font-weight-bold">Let us help you</h4> <br>
                    <form action="">
                        <div class="input-group mb-3">
                            <input type="email" class="form-control" placeholder="Your Email Address" aria-label="Email Address" aria-describedby="button-signup">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="button" id="button-signup">contact me</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--About-->
    <div class="container">
        <!--About Heading-->
        <div class="mx-auto p-5 mt-2 text-dark" style="width: fit-content;">
            <h2>About <span class="font-weight-bold"> SMC</span></h2>
            <hr class="mx-5">
        </div>
        <!--Text About-->
        <p class="text-justify">
            Saudi Maritime Company was established in early 1970’s by setting up an office in Dammam
            at Kingdom of Saudi Arabia by an enterprising Saudi Marine Captain, Ibrahim Barrak Al
            Omani, educated in United Kingdom and served as senior Ranking Officer on board reputed
            international shipping lines. Within a short span of time we have grown regionally covering
            Western and Eastern region of KSA. Our unique business model and enduring commitment
            propels us forward, we reach our goals. Saudi Maritime became part of absco.com (ABSA
            Group) in 1988 serving Principals and Agents worldwide.
        </p>
        <p class="text-justify">
            Saudi Maritime Company has grown enormously and gained the reputation of being one of
            the leading Shipping Agencies in this region handling Mega Containers &amp; RORO Carriers. The
            HQ of SAUDI MARITIME COMPANY is situated at Dammam and having well established
            offices at Jeddah and Riyadh. SMC is a renowned name in the shipping sphere locally and
            globally.
        </p>
    </div>
    <!--Services-->
    <div class="container">
        <!--Services Heading-->
        <div class="mx-auto p-5 mt-2 text-dark" style="width: fit-content;">
            <h2>Our <span class="font-weight-bold"> Services </span></h2>
            <hr class="mx-5">
        </div>
        <!--Text Services-->
        <p class="text-justify">
            Saudi Maritime Company has grown enormously and gained the reputation of being one of
            the leading Shipping Agencies in this region handling Mega Carrier Hyundai Merchant
            Marine ( <a href="http://hmm21.com">www.hmm21.com</a> ) . The HQ of SMC is situated at Dammam and having well
            established offices at Jeddah and Riyadh. SMC is a renowned name in the shipping sphere
            locally and globally.
        </p>
        <p class="text-justify">
            SMC is perfectly situated to provide you a full range of Ocean Freight, Air Freight and Land
            Transportation Services for both import and export along with warehousing, distribution
            through our group ABSA. Our mission is to provide to our clients “Quality and problem-
            solving logistics” and “Supply chain freight management solutions”.
        </p>
        <div class="container">
            <div class="row">
                <div class="col-sm p-3">
                    <div class="card text-center" style="width: 14rem;">
                        <div class="card-body">
                            <img src="{{ url('/') }}/img/icons/cargoShip.png" alt="">
                            <h5 class="card-title">Ocean Freight</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm p-3">
                    <div class="card text-center" style="width: 14rem;">
                        <div class="card-body">
                            <img src="{{ url('/') }}/img/icons/airFreight.png" alt="">
                            <h5 class="card-title">Air Freight</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm p-3">
                    <div class="card text-center" style="width: 14rem;">
                        <div class="card-body">
                            <img src="{{ url('/') }}/img/icons/truck.png" alt="">
                            <h5 class="card-title">Land Transport</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm p-3">
                    <div class="card text-center" style="width: 14rem;">
                        <div class="card-body">
                            <img src="{{ url('/') }}/img/icons/warehouse.png" alt="">
                            <h5 class="card-title"> Warehousing & Distribution</h5>
                            <p class="card-text">With supporting text below as a natural lead-in.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!--        <div class="mx-auto p-2 m-2 text-dark" style="width: fit-content;">-->
<!--            <a href="/services">-->
<!--                <button type="button" class="btn btn-outline-primary">All Services</button>-->
<!--            </a>-->
<!--        </div>-->
        <!--Companies Cards-->
        <div class="container">
            <div class="row">
                <div class="col-sm p-5 m-4 bg-dark half-height backgroundImage" style="background-image: url('{{ url('/') }}/img/bg/001.jpg'); b">
                    <a href="services/hmm">
                        <div class="mx-auto text-white text-center" style="width: fit-content;">
                            <img class="blockLogo" src="{{ url('/') }}/img/logos/hmm.png" alt="">
                            <h6>Hyundai Merchant Marine CO., LTD.</h6>
                            <hr class="mx-5">
                            <h6 class="mb-3">
                                HMM is a global integrated
                                logistics company providing
                                the best transport services. <br>
                            </h6>
                            <p class="text-justify">
                                Our professionally skilled and experienced staffs
                                provide customers with world-class transportation
                                services via more than 100 state-of-art vessels and
                                various logistics facilities that span a worldwide
                                network of ports together with industry-leading
                                IT systems.
                            </p>
                        </div>
                    </a>
                </div>
                <div class="col-sm p-5 m-4 bg-dark half-height backgroundImage" style="background-image: url('{{ url('/') }}/img/bg/002.jpg');">
                    <div class="mx-auto text-white text-center" style="width: fit-content;">
                        <img class="blockLogo" src="{{ url('/') }}/img/logos/perma.png" alt="">
                        <h6>Shipping simplified</h6>
                        <hr class="mx-5">
                        <h6 class="mb-3">
                            Perma Shipping Line , is a Singapore registered shipping company, began life in 2000 as a small container
                            operator in the Middle East. <br>
                        </h6>
                        <p class="text-justify">
                            Perma Shipping Line has been on the forefront of providing service into niche markets such as Um
                            Qasr in Iraq. With its dedicated office in Iraq, Perma Shipping Line has been able to provide inland
                            destinations for its customers.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm p-5 m-4 bg-dark half-height backgroundImage" style="background-image: url('{{ url('/') }}/img/bg/003.jpg');">
                    <div class="mx-auto text-white text-center" style="width: fit-content;">
                        <img class="blockLogo" src="{{ url('/') }}/img/logos/eurok.png" alt="">
                        <h6>Eurok Car Carrier</h6>
                        <hr class="mx-5">
                        <h6 class="mb-3">
                            We deliver tailor-made ocean transport and logistics services of the highest quality to
                            our customers in the field of auto, rolling equipment and breakbulk. <br>
                        </h6>
                        <p class="text-justify">
                            EUKOR operates a large and modern fleet of specialised Pure Car and Truck Carriers
                            (PCTC), embracing some of the largest vessels in the world - annually transporting
                            around four million car equivalent units worldwide through our global network of offices
                            and agents.
                        </p>
                    </div>
                </div>
                <div class="col-sm p-5 m-4 bg-dark half-height backgroundImage" style="background-image: url('{{ url('/') }}/img/bg/004.jpg');">
                    <div class="mx-auto text-white text-center" style="width: fit-content;">
                        <img class="blockLogo" src="{{ url('/') }}/img/logos/glovis.png" alt="">
                        <h6>Hyundai Glovis</h6>
                        <hr class="mx-5">
                        <h6 class="mb-3">
                            By reinforcing global key capacities through “selection and concentration”, we will
                            provide differentiated value in logistics and distribution. <br>
                        </h6>
                        <p class="text-justify">
                            We will actively secure a new momentum for sustainable growth and reinforce
                            corporate social responsibility.
                            To create customer value, the sense of challenge and innovation at Hyundai
                            Glovis will continue.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
