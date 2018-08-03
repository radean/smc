@extends('layout')


@section('content')
    <!--Page BGS Image-->
    <div class="row">
        <div class="col-sm-12 bgs servicesBG half-height p-5">
            <div class="mx-auto p-5 mt-5 text-dark" style="width: fit-content;">
                <h1 style="font-size: 3.25rem;" class="font-weight-bold text-white">Services</h1>
            </div>
        </div>
    </div>
    @component('services/services')
    @endcomponent
@endsection
