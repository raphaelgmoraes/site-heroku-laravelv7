@extends('front.master.master')

@section('content')


<div class="jumbotron jumbotron-single d-flex align-items-center" style="background-image: url(img/bg.jpg)">
  <div class="container text-center">
    <h1 class="display-2 mb-4">Contato</h1>
  </div>
</div>		<!-- Contact Form Section -->
<section id="contact-form" class="bg-white">
    <div class="container">
        <div class="section-content">
            <!-- Section Title -->
            <div class="title-wrap" data-aos="fade-up">
                <h2 class="section-title">Entre em contato</h2>
                <p class="section-sub-title"><br></p>
            </div>
            <!-- End of Section Title -->
            <div class="row">
                <!-- Contact Form Holder -->
                <div class="col-md-8 offset-md-2 contact-form-holder mt-4" data-aos="fade-up">
                    @include('front.includes.form_email')
                </div>
                <!-- End of Contact Form Holder -->
            </div>
        </div>
        <div class="section-content pt-0">
            <div class="title-wrap" data-aos="fade-up">
                <h2 class="section-title">Where To Find Us?</h2>
            </div>
            <div class="row text-center mt-4">
                <div class="col-md-3" data-aos="fade-up">
                    <span class="lnr lnr-location fs-40 py-4 d-block"></span>
                    <h5>LOCATION</h5>
                    <p>{{ env('CLIENT_DATA_CITY') }}</p>
                </div>
                <div class="col-md-3" data-aos="fade-up" data-aos-delay="200">
                    <span class="lnr lnr-clock fs-40 py-4 d-block"></span>
                    <h5>WORKING TIME</h5>
                    <p>Monday - Sunday</p>
                </div>
                <div class="col-md-3" data-aos="fade-up" data-aos-delay="400">
                    <span class="lnr lnr-phone fs-40 py-4 d-block"></span>
                    <h5>CALL US</h5>
                    <p>{{ env('CLIENT_DATA_TELEPHONE') }}</p>
                </div>
                <div class="col-md-3" data-aos="fade-up" data-aos-delay="600">
                    <span class="lnr lnr-phone fs-40 py-4 d-block"></span>
                    <h5>EMAIL</h5>
                    <p>{{ env('CLIENT_DATA_EMAIL') }}</p>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- End of Contact Form Section -->
@endsection