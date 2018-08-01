@extends('layout')


@section('content')
    <!--HMS-->
    <div class="container-fluid" style="padding: 0px">
        <!--Page BGS Image-->
        <div class="row">g
            <div class="col-sm-12 bgs hmmBG half-height p-5">
                <div class="mx-auto p-5 mt-5 text-dark" style="width: fit-content;">
                    <h1 style="font-size: 3.25rem;" class="font-weight-bold text-white">EUKOR Car Carriers Inc.</h1>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm p-5 baseColor text-center">
                    <h1 class="font-weight-bold big-headings-Style text-justify">
                        Perma Shipping Line has been on the forefront of providing service into niche markets such as Um Qasr in Iraq.
                    </h1>
                </div>
                <div class="col-sm patternized">
                    <h5 class="text-justify pl-5 p-5">
                        With its dedicated office in Iraq, Perma Shipping Line has been able to provide inland destinations for its customers.
                    </h5>
                </div>
            </div>
        </div>
        <div class="container p-5">
            <!--Pictured-Text-->
            <!--Eukor About-->
            <div class="row mt-5">
                <div class="col-sm-8">
                    <img class="shadow" src="{{ url('/') }}/img/bg/eukorHauler.jpg" width="100%" height="100%" class="d-inline-block" alt="">
                </div>
                <div class="col-sm-4 text-center">
                    <h2>
                        <span class="font-weight-bold"> About </span> EUKOR Car Carriers Inc.
                    </h2>
                    <hr class="m-5">
                    <h5 class="text-justify">
                        We deliver tailor-made ocean transport and logistics services of the highest quality to our customers in the field of auto, rolling equipment and breakbulk.
                        One of our key business is the export of ’Hyundai and Kia Motors’ vehicles from their plants in Korea. We also serve most of the other global automotive leaders.
                    </h5> <br>
                </div>
            </div>
            <!--Pictured-Text-->
            <!--Perma Global Service Network-->
            <div class="row mt-5 shadow eukorGlobalBG text-white p-5">
                <div class="col-sm-4 text-center">
                    <img src="{{ url('/') }}/img/logos/eukor.png" alt="">
                </div>
                <div class="col-sm-8">
                    <h2>
                        <span class="font-weight-bold"> Worldwide </span> Network
                    </h2> <br>
                    <h5 class="text-justify">
                        EUKOR operates a large and modern fleet of specialised Pure Car and Truck Carriers (PCTC),
                        embracing some of the largest vessels in the world - annually transporting around four million car equivalent units worldwide through our global network of offices and agents.
                    </h5> <br>
                </div>
            </div>
            <!--Pictured-Text-->
            <!--Eukor Quality Service-->
            <div class="row mt-5">
                <div class="col-sm-4 text-center">
                    <h2>
                        <span class="font-weight-bold">Quality</span> Services
                    </h2>
                    <hr class="m-5">
                    <h5 class="text-justify">
                        Through continuous expansion of our route network and an emphasis on quality of service, we deliver total customer satisfaction. We aim to become the industry’s most preferred operator.
                    </h5> <br>
                </div>
                <div class="col-sm-8">
                    <img class="shadow" src="{{ url('/') }}/img/bg/eukorHauler.jpg" width="100%" height="100%" class="d-inline-block" alt="">
                </div>
            </div>
            <!--Pictured-Text-->
            <!--Eukor About-->
            <div class="row mt-5">
                <div class="col-sm-12">
                    <img class="shadow" src="{{ url('/') }}/img/bg/eukorHauler.jpg" width="100%" height="100%" class="d-inline-block" alt="">
                </div>
                <div class="col-sm-12 text-center">
                    <h2>
                        <span class="font-weight-bold">Quality</span> Service
                    </h2>
                    <hr class="m-5">
                    <h5 class="text-justify">
                        We combine the best of what Korea and Europe have to offer. Having the Hyundai Motor Company and Kia Motors as shareholders (20%)
                        gives us a unique growth platform within the industry. while being part of the Wallenius Wilhelmsen group (80%) means building
                        on a 157-year heritage of driving change in shipping and logistics. The group consists of EUKOR, Wallenius Wilhelmsen Ocean,
                        Wallenius Wilhelmsen Solutions and ARC. It owns and operates around 130 vessels servicing 32 trade routes to six continents,
                        and operates a global inland distribution network, 77 technical service and processing centers, and 13 marine terminals.
                    </h5> <br>
                </div>
            </div>


            <!--Eplore Other Services Button-->
            <div class="mx-auto p-5 text-dark" style="width: fit-content;">
                <a href="{{ route('service') }}">
                    <button type="button" class="btn btn-lg btn-outline-primary">Explore other services</button>
                </a>
            </div>
        </div>
    </div>
@endsection




