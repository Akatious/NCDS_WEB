@extends('website.layouts.master')
@section('title')
    Images
@endsection

@section('content')
    <div class="container-fluid py-5">
        <div class="container ">
            <ol class="breadcrumb justify-content-start mb-4">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">CDS Visit</a></li>
                <li class="breadcrumb-item"><a href="#">CDS Visit</a></li>
            </ol>
        </div>
    </div>
    <div class="row g-4">
        <div class="col-lg-12">
            <div class="container">
                <div class="mb-4">
                    <h3 style="font-weight: bold;">Images of CDS Visit</h3>
                </div>
                <div class="row" style=" padding-bottom: 70px;">
                    <div class="col-md-4 mt-3 col-lg-6">
                        <img src="{{ asset('asset/img/images/cdsvisit/DV7A0238.jpg') }}" class="img-fluid" alt="image">
                    </div>
                    <div class="col-md-4 mt-3 col-lg-6">
                        <img src="{{ asset('asset/img/images/cdsvisit/DV7A0240.jpg') }}" class="img-fluid" alt="image">
                    </div>
                    <div class="col-md-4 mt-3 col-lg-6">
                        <img src="{{ asset('asset/img/images/cdsvisit/DV7A0253.jpg') }}" class="img-fluid" alt="image">
                    </div>
                    <div class="col-md-4 mt-3 col-lg-6">
                        <img src="{{ asset('asset/img/images/cdsvisit/DV7A0254.jpg') }}" class="img-fluid" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
