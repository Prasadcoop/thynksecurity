@extends('layout.app')
@section('slider_area')

<div class="slider_area">
        <div class="slider_active owl-carousel">
            <div class="single_slider  d-flex align-items-center slider_bg_1 overlay">
               <video autoplay loop  class="background-video" muted src="{{ asset('images/camera/cv1.mp4') }}"></video>
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-9 col-md-9 col-md-12">
                            <div class="slider_text text-center">
                                <h3>We Build Your Home
                                    Secure and Safe</h3>
                                <p>Build Your Home Secure and Safe with Professional Touch</p>
                                <a href="#services" class="boxed-btn3">Our Services</a>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
            <!-- <div class="single_slider  d-flex align-items-center slider_bg_2 overlay">
              <video autoplay loop muted src="{{ asset('images/camera/cv1.mp4') }}"></video>
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-9 col-md-9 col-md-12">
                            <div class="slider_text text-center">
                                <h3>We Build Your Home
                                    Secure and Safe</h3>
                                <p>Build Your Home Secure and Safe with Professional Touch</p>
                                <a href="services.html" class="boxed-btn3">Our Services</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider  d-flex align-items-center slider_bg_1 overlay">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-9 col-md-9 col-md-12">
                            <div class="slider_text text-center">
                                <h3>We Build Your Home
                                    Secure and Safe</h3>
                                <p>Build Your Home Secure and Safe with Professional Touch</p>
                                <a href="services.html" class="boxed-btn3">Our Services</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>

@endsection