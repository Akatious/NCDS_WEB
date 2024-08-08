@extends('website.layouts.master')
@section('title')
    Images
@endsection

@section('content')
    <div class="container-fluid py-5">
        <div class="container ">
            <ol class="breadcrumb justify-content-start mb-4">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">ERST - Ghana</a></li>
                <li class="breadcrumb-item"><a href="#">ERST - Ghana</a></li>
            </ol>

        </div>
    </div>
    <div class="row g-4">
        <div class="col-lg-12">
            <div class="container">
                <div class="mb-4">
                    <h3 style="font-weight: bold;">Images of ERST - Ghana</h3>
                </div>
                <div class="row" style=" padding-bottom: 70px;">
                    <div class="col-md-4 mt-3 col-lg-4">
                        <img src="{{ asset('asset/img/images/t1/t10.jpeg') }}" class="img-fluid" alt="image">
                    </div>
                    <div class="col-md-4 mt-3 col-lg-4">
                        <img src="{{ asset('asset/img/images/t1/t2.jpeg') }}" class="img-fluid" alt="image">
                    </div>
                    <div class="col-md-4 mt-3 col-lg-4">
                        <img src="{{ asset('asset/img/images/t1/t3.jpeg') }}" class="img-fluid" alt="image">
                    </div>
                    <div class="col-md-4 mt-3 col-lg-6">
                        <img src="{{ asset('asset/img/images/t1/t4.jpeg') }}" class="img-fluid" alt="image">
                    </div>
                    <div class="col-md-4 mt-3 col-lg-6">
                        <img src="{{ asset('asset/img/images/t1/t5.jpeg') }}" class="img-fluid" alt="image">
                    </div>
                    <div class="col-md-4 mt-3 col-lg-3">
                        <img src="{{ asset('asset/img/images/t1/t6.jpeg') }}" class="img-fluid" alt="image">
                    </div>
                    <div class="col-md-4 mt-3 col-lg-3">
                        <img src="{{ asset('asset/img/images/t1/t7.jpeg') }}" class="img-fluid" alt="image">
                    </div>
                    <div class="col-md-4 mt-3 col-lg-3">
                        <img src="{{ asset('asset/img/images/t1/t8.jpeg') }}" class="img-fluid" alt="image">
                    </div>
                    <div class="col-md-4 mt-3 col-lg-3">
                        <img src="{{ asset('asset/img/images/t1/t9.jpeg') }}" class="img-fluid" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-4">
        <div class="col-lg-12">
            <div class="container">
                <div class="mb-4">
                    <h3 style="font-weight: bold;">Images of GTEC Visit</h3>
                </div>
                <div class="row" style=" padding-bottom: 70px;">
                    <div class="col-md-4 mt-3 col-lg-4">
                        <img src="{{ asset('asset/img/images/gtecvisit/DV7A0711.jpg') }}" class="img-fluid" alt="image">
                    </div>
                    <div class="col-md-4 mt-3 col-lg-4">
                        <img src="{{ asset('asset/img/images/gtecvisit/DV7A0718.jpg') }}" class="img-fluid" alt="image">
                    </div>
                    <div class="col-md-4 mt-3 col-lg-4">
                        <img src="{{ asset('asset/img/images/gtecvisit/DV7A0726.jpg') }}" class="img-fluid" alt="image">
                    </div>
                    <div class="col-md-4 mt-3 col-lg-6">
                        <img src="{{ asset('asset/img/images/gtecvisit/DV7A0746.jpg') }}" class="img-fluid" alt="image">
                    </div>
                    <div class="col-md-4 mt-3 col-lg-6">
                        <img src="{{ asset('asset/img/images/gtecvisit/DV7A0747.jpg') }}" class="img-fluid" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
