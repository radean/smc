@extends('layout')


@section('content')
    <!--HMS-->
    <div class="container-fluid" style="padding: 0px">
        <!--Page BGS Image-->
        <div class="row">
            <div class="col-sm-12 bgs permaBG half-height p-5">
                <div class="mx-auto p-5 mt-5 text-dark center-element" style="width: fit-content;">
                    <h1 style="font-size: 3.25rem;" class="font-weight-bold text-white">Perma Shipping Line.</h1>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-4 text-center center-block">
                </div>
                <div class="col-sm-4 text-center center-block">
                    <img src="{{ url('/') }}/img/logos/perma.png" alt="">
                </div>
                <div class="col-sm-4 text-center center-block">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 px-5">
<!--                    <h5 class="font-weight-bold text-justify">-->
<!--                        Perma Shipping Line has been on the forefront of providing service into niche markets such as Um Qasr in Iraq.-->
<!--                    </h5>-->
                    <h5 class="text-justify">
                        Perma Shipping Line has been on the forefront of providing service into niche markets such as Um Qasr in Iraq.
                        With its dedicated office in Iraq, Perma Shipping Line has been able to provide inland destinations for its customers.
                    </h5>
                </div>
            </div>
        </div>
        <div class="container px-5">
            <!--Pictured-Text-->
            <!--Perma About-->
            <div class="row ">
<!--                <div class="col-sm-8">-->
<!--                    <img class="shadow" src="{{ url('/') }}/img/bg/permaSingapore.jpg" width="100%" height="100%" class="d-inline-block" alt="">-->
<!--                </div>-->
                <div class="col-sm-12">
<!--                    <h2>-->
<!--                        <span class="font-weight-bold"> About </span> Perma Shipping.-->
<!--                    </h2>-->
<!--                    <hr class="m-5">-->
                    <h5 class="text-justify">
                        About Perma Shipping.
                        Perma Shipping Line, is a Singapore registered shipping company, began life in 2000 as a small container operator in the Middle East.
                        The company grew steadily within a short span of time and has developed itself into a sizable container and logistics company operating a large fleet of containers, focusing on Middle East, Indian Sub Continent, South East Asia and very recently forays into China.
                    </h5> <br>
                </div>
            </div>
            <!--Pictured-Text-->
            <!--Perma Global Service Network-->
            <div class="row text-dark ">
                <div class="col-sm-12">
<!--                    <h2>-->
<!--                        <span class="font-weight-bold"> we </span> are constantly <span class="font-weight-bold"> striving </span> to-->
<!--                        <span class="font-weight-bold"> expanding </span>.-->
<!--                    </h2> <br>-->
                    <h5 class="text-justify">
                        We are constantly striving to expanding.
                        Today the company has over 20 offices in Southeast Asia, Indian Sub Continent and the Middle East to ensure a very dedicated and personal service to its customers. The logistics arm of the company, Perma Logistics specializes in marine logistics, air freight as well as land based activities and it is very active in CIS countries.
                        At Perma, we constantly strive to broaden and expand our operations and services to provide a better and more reliable business solutions to our customers
                    </h5> <br>
                </div>
            </div>
            <!--Explore Websites-->
            <div class="row">
                <div class="col-sm-12 py-5">
                    <h3>
                        Related Links
                    </h3>
                    <a href="http://www.permashippingline.com"> <button type="button" class="btn btn-outline-primary">Perma Website</button> </a>
                </div>
            </div>
            <!--Eplore Other Services Button-->
<!--            <div class="mx-auto p-5 text-dark" style="width: fit-content;">-->
<!--                <a href="{{ route('service') }}">-->
<!--                    <button type="button" class="btn btn-lg btn-outline-primary">Explore other services</button>-->
<!--                </a>-->
<!--            </div>-->
        </div>
    </div>
@endsection




