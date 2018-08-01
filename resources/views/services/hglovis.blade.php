@extends('layout')


@section('content')
    <!--HMS-->
    <div class="container-fluid" style="padding: 0px">
        <!--Page BGS Image-->
        <div class="row">
            <div class="col-sm-12 bgs hmmBG half-height p-5">
                <div class="mx-auto p-5 mt-5 text-dark" style="width: fit-content;">
                    <h1 style="font-size: 3.25rem;" class="font-weight-bold text-white">Hyundai Glovis.</h1>
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
            <!--Perma About-->
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
                        By reinforcing global key capacities through “selection and concentration”, we will provide differentiated value in logistics and distribution.
                        We will actively secure a new momentum for sustainable growth and reinforce corporate social responsibility.
                        To create customer value, the sense of challenge and innovation at Hyundai Glovis will continue.
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
            <!--Eplore Other Services Button-->
            <div class="mx-auto p-5 text-dark" style="width: fit-content;">
                <a href="{{ route('service') }}">
                    <button type="button" class="btn btn-lg btn-outline-primary">Explore other services</button>
                </a>
            </div>
        </div>
    </div>
@endsection




