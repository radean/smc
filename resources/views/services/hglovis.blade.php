@extends('layout')


@section('content')
    <!--HMS-->
    <div class="container-fluid" style="padding: 0px">
        <!--Page BGS Image-->
        <div class="row">
            <div class="col-sm-12 bgs glovisBG half-height p-5">
                <div class="mx-auto p-5 mt-5 text-dark center-element" style="width: fit-content;">
                    <h1 style="font-size: 3.25rem;" class="font-weight-bold text-white">Hyundai Glovis</h1>
                </div>
            </div>
        </div>
        <div class="container">
            <!--Pictured-Text-->
            <!--Glovis About-->
            <div class="row mt-5">
<!--                <div class="col-sm-8">-->
<!--                    <img class="shadow" src="{{ url('/') }}/img/bg/glovisLogistics.jpg" width="100%" height="100%" class="d-inline-block" alt="">-->
<!--                </div>-->
                <div class="col-sm-12 ">
<!--                    <h1>-->
<!--                        <span class="font-weight-bold"> About </span> Hyundai Glovis.-->
<!--                    </h1>-->
<!--                    <hr class="m-5">-->
                    <h5 class="text-justify">
                        By reinforcing global key capacities through “selection and concentration”, we will provide differentiated value in logistics and distribution.
                        We will actively secure a new momentum for sustainable growth and reinforce corporate social responsibility.
                        To create customer value, the sense of challenge and innovation at Hyundai Glovis will continue.
                    </h5> <br>
                    <h3>
                        <span class="font-weight-bold"> Finished Vehicle shipping </span> <br> Major services
                    </h3>
                    <ul>
                        <li>Operate about 60 PCC (Pure Car Carrier) and PCTC (Pure Car and Truck Carrier)</li>
                        <li>Service quality management using global systems and global networks</li>
                    </ul>
                    <h3>
                        Service route and ship status
                    </h3>
                    <ul>
                        <li>Hyundai Glovis has over 60 vessels of various sizes to optimize the operation of all service routes.</li>
                    </ul>
                </div>
            </div>
            <!--Explore Websites-->
            <div class="row">
                <div class="col-sm-12 py-5">
                    <h3>
                        Related Links
                    </h3>
                    <a href="http://www.glovis.net"> <button type="button" class="btn btn-outline-primary">Glovis Website</button> </a>
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




