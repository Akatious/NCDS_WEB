@extends('website.layouts.master')

@section('title')
    Courses
@endsection

@section('content')
    <!-- Admission Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <ol class="breadcrumb justify-content-start mb-4">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Courses</a></li>
            </ol>
            <div class="row g-4">
                <div class="col-lg-8">
                    <div class="mb-4">
                        <h3 style="font-weight: bold;">AWARD OF FELLOWSHIP/MASTER OF ARTS IN STRATEGIC STUDIES DEGREE</h3>
                    </div>
                    <p class="my-4" style="text-align: justify;">
                        The NCDS runs strategic level courses leading to the conferment of the
                        “Fellow of the National College of Defence Studies (fncds)” on participants
                        upon successful completion of the programme in addition to a Certificate. Participants are also
                        awarded a Master of Arts Degree in Strategic Studies (MASS) upon satisfying all requirements of the
                        College.
                    </p>
                    <p>
                        The Programme has a 41-week duration spanning 4 terms. Term 1 is 11 weeks and covers orientation and
                        the contemporary strategic context while Term 2 deals with Policy and Strategy and lasts for 12
                        weeks. Term 3, lasting 9 weeks, covers Regional, Continental and Global Studies. Finally, Term 4
                        focuses on Peace Operations, Defence Diplomacy and other cross-cutting issues for 9 weeks.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Admission End -->

    <h1> </h1>
@endsection
