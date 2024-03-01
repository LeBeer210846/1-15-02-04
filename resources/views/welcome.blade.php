@extends('layouts.master_fontend')
@section('con')
<!-- Start Latest Collection -->
<section class="bg-success py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8 text-white">
                    <h1>Tracker</h1>
                    <h2>
                        ขี่มันส์ ลุยทางไหนก็ได้ Gpx legend 200 cc
                    </h2>
                </div>
                <div class="col-md-4">
                    <img src="{{ asset ('fontend/assets/img/tracker.jpg')}}" alt=""  width="500">
                </div>
            </div>
        </div>
    </section>
    <section class="bg-success py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8 text-white">
                    <h1>Street club</h1>
                    <p>
                    </p>
                </div>
                <div class="col-md-4">
                    <img src="{{ asset ('fontend/assets/img/street.jpg') }}" alt="" height="450">
                </div>
            </div>
        </div>
    </section>
    <!-- End Latest Collection -->


    <!-- Start Feature -->
    
    <!-- End Feature -->
@endsection