@extends('layout')


@section('content')
    <!--HMS-->
    <div class="container-fluid" style="padding: 0px">
        <!--Page BGS Image-->
        <div class="row">
            <div class="col-sm-12 bgs logisticsBG half-height p-5">
                <div class="mx-auto p-5 mt-5 text-dark" style="width: fit-content;">
                    <h1 style="font-size: 3.25rem;" class="font-weight-bold text-white">Logistics</h1>
                </div>
            </div>
        </div>
        <div class="container p-5">
            <!--Pictured-Text-->
            <!--Glovis About-->
            <div class="row mt-5">
                <div class="col-sm-12">
                    <img class="shadow" src="{{ url('/') }}/img/bg/logistics.jpg" width="100%" height="100%" class="d-inline-block" alt="">
                </div>
            </div>
            <!--Pictured-Text-->
            <!--Services Logistics-->
            <div class="row mt-5">
                <div class="col-sm-12 text-center">
                    <h5 class="text-justify">
                        Being part of ABSA Group, the Logistics infrastructure embraces purchasing, supplier management,
                        materials management, manufacturing, inventory management, warehousing, distribution, transport and customer service.Today Logistics,
                        is a key consideration in new product development with logistics professionals playing their part
                        in multi-disciplinary teams to ensure products are designed with efficient supply-chain management in mind.
                        Absa Logisitc covers a range of functions, each with its own challenges and skills, they are all interdependent and function
                        like clock-work through the whole supply-chain to deliver results.
                        <br>
                        We manage, coordinate and continuously improve the total supply-chain demands and have developed
                        high-level managerial skills to play a key part in meeting a company's long term strategic objectives.
                        All areas of Logistics make use of information technology to process, tailor and deliver real-time information
                        to when and where it is needed. The ability to use advanced IT packages and electronic communication methods is our key competency.
                        If you require through the line efficiency when it comes to logistics think Absa Logistic.
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




