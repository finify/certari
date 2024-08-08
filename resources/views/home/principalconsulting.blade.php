@extends('home.layout.layout')

@section('content')
<!--===== WELCOME STARTS=======-->
<div class="welcome-inner-section-area" style="background-image: url(/homeassets/assets/img/bacground/inner-bg.png); background-position: center; background-repeat: no-repeat; background-size: cover;">
      <img src="/homeassets/assets/img/elements/elementor40.png" alt="" class="elementor40 keyframe3 d-lg-block d-none">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 m-auto">
                    <div class="welcome-inner-header text-center">
                        <h1>Principal Consulting</h1>
                        <a href="/">Home <span><i class="fa-light fa-angle-right"></i></span> Principal Consulting</a>
                        <img src="/homeassets/assets/img/elements/elementor20.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
  <!--===== WELCOME ENDS=======-->

  <!--===== ABOUT STARTS =======-->
  <div class="about1-section-area " id="about">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
            <img src="/homeassets/assets/img/images/about-img1.png" alt="">
        </div>

        <div class="col-lg-6">
          <div class="about-textarea-section">
            <!-- <span  data-aos="fade-left" data-aos-duration="600">About Us</span> -->
            <h3 data-aos="fade-left" data-aos-duration="800">We offer expertise, resources & guidelines to help our clients
            (Certarians) succeed in their industry.</h3>
            <p data-aos="fade-left" data-aos-duration="900">Our specialization covers a variety of sectors such as project management, finance, insurance, and sustainable real estate ecosystems.</p>
           
            <a href="#" class="welcome6-btn">What We Offer</a>
          </div>
        </div>
      </div>
    </div>
  </div>
<!--===== ABOUT ENDS =======-->
@endsection