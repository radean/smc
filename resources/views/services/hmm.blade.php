@extends('layout')


@section('content')
    <!--HMS-->
    <div class="container-fluid">
        <!--Page BGS Image-->
        <div class="row">
            <div class="col-sm-12 bgs hmmBG half-height p-5">
                <div class="mx-auto p-5 mt-5 text-dark" style="width: fit-content;">
                    <h1 style="font-size: 3.25rem;" class="font-weight-bold text-white">Hyundai Merchant Marine CO., LTD.</h1>
                </div>
            </div>
        </div>
        <div class="container p-5">
            <div class="row">
                <div class="col-sm">
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
            </div>
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
            <div class="mx-auto p-2 m-2 text-dark" style="width: fit-content;">
                <button type="button" class="btn btn-outline-primary">All Services</button>
            </div>
        </div>
    </div>
@endsection
