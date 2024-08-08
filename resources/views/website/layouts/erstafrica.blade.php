@extends('website.layouts.master')
@section('title')
    Images
@endsection

@section('content')
    <div class="container-fluid py-5">
        <div class="container ">
            <ol class="breadcrumb justify-content-start mb-4">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">ERST - Africa</a></li>
                <li class="breadcrumb-item"><a href="#">ERST - Africa</a></li>
            </ol>

        </div>
    </div>
    <div class="row g-4">
        <div class="col-lg-12">
            <div class="container">
                <div class="mb-4">
                    <h3 style="font-weight: bold;">Images of ERST - Nigeria</h3>
                </div>
                <div class="row" style=" padding-bottom: 70px;">
                    <div class="col-md-4 mt-3 col-lg-4">
                        <img src="{{ asset('asset/img/images/ers_africa/ng1.jpg') }}" class="img-fluid" alt="image">
                    </div>
                    <div class="col-md-4 mt-3 col-lg-4">
                        <img src="{{ asset('asset/img/images/ers_africa/ng2.jpg') }}" class="img-fluid" alt="image">
                    </div>
                    <div class="col-md-4 mt-3 col-lg-4">
                        <img src="{{ asset('asset/img/images/ers_africa/afr2.jpg') }}" class="img-fluid" alt="image">
                    </div>
                    <br><br>
                    <hr style="margin: 5%"> <br>
                    <div class="mb-4">
                        <h3 style="font-weight: bold;">Images of ERST - Africa</h3>
                    </div>
                    <div class="col-md-4 mt-3 col-lg-4">
                        <img src="{{ asset('asset/img/images/ers_africa/afr1.jpg') }}" class="img-fluid" alt="image">
                    </div>
                    <div class="col-md-4 mt-3 col-lg-4">
                        <img src="{{ asset('asset/img/images/ers_africa/afr3.jpg') }}" class="img-fluid" alt="image">
                    </div>
                    <div class="col-md-4 mt-3 col-lg-4">
                        <img src="{{ asset('asset/img/images/ers_africa/ethiop1.jpg') }}" class="img-fluid" alt="image">
                    </div>

                    <br><br>
                    <hr style="margin: 5%">

                    <br>
                    <div class="mb-4">
                        <h3 style="font-weight: bold;">Images of ERST - Ethiopia</h3>
                    </div>
                    <div class="col-md-4 mt-3 col-lg-4">
                        <img src="{{ asset('asset/img/images/ers_africa/ethiop2.jpg') }}" class="img-fluid" alt="image">
                    </div>
                    <div class="col-md-4 mt-3 col-lg-4">
                        <img src="{{ asset('asset/img/images/ers_africa/ethiop3.jpg') }}" class="img-fluid" alt="image">
                    </div>
                    <div class="col-md-4 mt-3 col-lg-4">
                        <img src="{{ asset('asset/img/images/ers_africa/ethiop4.jpg') }}" class="img-fluid" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
