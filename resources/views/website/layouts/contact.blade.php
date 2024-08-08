@extends('website.layouts.master')

@section('title')
    Contact
@endsection

@section('content')
    <!-- Contact Us Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="bg-light rounded p-5">
                <div class="row g-4">
                    <div class="col-lg-5">
                        <div class="">
                            <h1 class="mb-4">National College of Defence Studies (NCDS)</h1>
                            <p class="mb-4" style="text-align: justify;">For any information about NCDS, kindly fill up this
                                contact form with accurate information.
                            </p>
                            <div class="rounded">
                                <iframe class="rounded w-100" style="height: 425px;"
                                    src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d849.6707663200756!2d-0.1548741054673475!3d5.58643462327603!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sgh!4v1719395495654!5m2!1sen!2sgh"
                                    loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <form action="" class="mb-4">
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <input type="text" class="w-100 form-control border-0 py-3" name="name"
                                        placeholder="Your Name">
                                </div>
                                <div class="col-lg-6">
                                    <input type="email" class="w-100 form-control border-0 py-3" name="email"
                                        placeholder="Enter Your Email">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" class="w-100 form-control border-0 py-3" name="phone"
                                        placeholder="Enter Your Phone">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" class="w-100 form-control border-0 py-3" name="subject"
                                        placeholder="Subject">
                                </div>
                                <div class="col-12">
                                    <textarea class="w-100 form-control border-0" rows="6" cols="10" placeholder="Your Message"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="w-100 btn btn-primary form-control py-3" type="submit"><a
                                            href="mailto:asst.chiefcoord@ncdsmil.edu.gh">Submit</button>
                                </div>
                            </div>
                        </form>
                        <div class="row g-4">
                            <div class="col-xl-6">
                                <div class="d-flex p-4 rounded bg-white">
                                    <i class="fas fa-map-marker-alt fa-2x text-primary me-4"></i>
                                    <div>
                                        <h4>Address</h4>
                                        <p class="mb-0">Burma Camp<br>Accra, Ghana.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="d-flex p-4 rounded bg-white">
                                    <i class="fas fa-envelope fa-2x text-primary me-4"></i>
                                    <div>
                                        <h4>Mail Us</h4>
                                        <p class="mb-0"><a
                                                href="mailto:asst.chiefcoord@ncdsmil.edu.gh">asst.chiefcoord@ncdsmil.edu.gh</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="d-flex p-4 rounded bg-white">
                                    <i class="fa fa-phone-alt fa-2x text-primary me-4"></i>
                                    <div>
                                        <h4>Telephone</h4>
                                        <p class="mb-0"> +233274738813</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="d-flex p-4 rounded bg-white">
                                    <i class="fa fa-fax-alt fa-2x text-primary me-4"></i>
                                    <div>
                                        <h4>Fax</h4>
                                        <div class="d-flex">
                                            <p class="mb-0"> +233274738813</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="d-flex p-4 rounded bg-white">
                                    <i class="fa fa-envelope-alt fa-2x text-primary me-4"></i>
                                    <div>
                                        <h4>Academic Division</h4>
                                        <div class="d-flex">
                                            <p class="mb-0"><a href="mailto:dean@ncdsmil.edu.gh">Email:
                                                    dean@ncdsmil.edu.gh</a><br>Tel: +233553058176</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="d-flex p-4 rounded bg-white">
                                    <i class="fa fa-envelope-alt fa-2x text-primary me-4"></i>
                                    <div>
                                        <h4>Academic Division</h4>
                                        <div class="d-flex">
                                            <p class="mb-0"><a
                                                    href="mailto:registrar@ncdsmil.edu.gh">registrar@ncdsmil.edu.gh</a><br>Tel:
                                                +2333134753</p><br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Us End -->
@endsection
