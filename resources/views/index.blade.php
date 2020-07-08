@extends('layouts.code')

@section('content')
    
<section class="home-slider owl-carousel">
    <div class="slider-item" style="background-image:url(images/bg_1.jpg);">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
        <div class="col-md-8 text-center ftco-animate">
          <h1 class="mb-4">Bolalar dunyodagi <span>eng yaxshi tadqiqotchilar</span></h1>
        <p><a href="{{ route('about') }}" class="btn btn-secondary px-4 py-3 mt-3">Ko'proq o'qish</a></p>
        </div>
      </div>
      </div>
    </div>
  
    <div class="slider-item" style="background-image:url(images/bg_2.jpg);">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
        <div class="col-md-8 text-center ftco-animate">
          <h1 class="mb-4">Farzandingiz uchun<span> mukammal o'rganildi</span></h1>
          <p><a href="#" class="btn btn-secondary px-4 py-3 mt-3">Ko'proq o'qish</a></p>
        </div>
      </div>
      </div>
    </div>
  </section>
  
  <section class="ftco-services ftco-no-pb">
    <div class="container-wrap">
      <div class="row no-gutters">
        <div class="col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-primary">
          <div class="media block-6 d-block text-center">
            <div class="icon d-flex justify-content-center align-items-center">
              <span class="flaticon-teacher"></span>
            </div>
            <div class="media-body p-2 mt-3">
              <h3 class="heading">Oliy toifali o'qituvchilar</h3>
              <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
            </div>
          </div>      
        </div>
        <div class="col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-tertiary">
          <div class="media block-6 d-block text-center">
            <div class="icon d-flex justify-content-center align-items-center">
              <span class="flaticon-reading"></span>
            </div>
            <div class="media-body p-2 mt-3">
              <h3 class="heading">Maxsus ta'lim</h3>
              <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
            </div>
          </div>    
        </div>
        <div class="col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-fifth">
          <div class="media block-6 d-block text-center">
            <div class="icon d-flex justify-content-center align-items-center">
              <span class="flaticon-books"></span>
            </div>
            <div class="media-body p-2 mt-3">
              <h3 class="heading">Kitoblar &amp; Kutubxona</h3>
              <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
            </div>
          </div>      
        </div>
        <div class="col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-quarternary">
          <div class="media block-6 d-block text-center">
            <div class="icon d-flex justify-content-center align-items-center">
              <span class="flaticon-diploma"></span>
            </div>
            <div class="media-body p-2 mt-3">
              <h3 class="heading">Sertifikat</h3>
              <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
            </div>
          </div>      
        </div>
      </div>
    </div>
  </section>
  
  <section class="ftco-intro" style="background-image: url(images/bg_3.jpg);" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-9">
          <h2>Farzandingizga odob-axloq qoidalarini o'rgatish</h2>
          <p class="mb-0">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
        </div>
        <div class="col-md-3 d-flex align-items-center">
        <p class="mb-0"><a href="{{ route('courses') }}" class="btn btn-secondary px-4 py-3">Kursga topshirish</a></p>
        </div>
      </div>
    </div>
  </section>
 
  
  <section class="ftco-section bg-light">
    <div class="container">
      <div class="row justify-content-center mb-5 pb-2">
        <div class="col-md-8 text-center heading-section ftco-animate fadeInUp ftco-animated">
          <h2 class="mb-4"><span>Recent</span> Blog</h2>
          <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
        </div>
      </div>
      <div class="row">
        @include('kinder_news.latestNews');
        
      </div>
    </div>
  </section>


  {{-- <section class="ftco-section bg-light">
    <div class="container">
      <div class="row justify-content-center mb-5 pb-2">
        <div class="col-md-8 text-center heading-section ftco-animate">
          <h2 class="mb-4"><span>So'nggi</span> Blog</h2>
          <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 ftco-animate">
          @include('kinder_news.latestNews');
        </div>  
      </div>  
    </div>
  </section> --}}
  
  <section class="ftco-gallery">
    <div class="container-wrap">
      <div class="row no-gutters">
        <div class="col-md-3 ftco-animate">
          <a href="images/image_1.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/course-1.jpg);">
            <div class="icon mb-4 d-flex align-items-center justify-content-center">
              <span class="icon-instagram"></span>
            </div>
          </a>
        </div>
        <div class="col-md-3 ftco-animate">
          <a href="images/image_2.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/image_2.jpg);">
            <div class="icon mb-4 d-flex align-items-center justify-content-center">
              <span class="icon-instagram"></span>
            </div>
          </a>
        </div>
        <div class="col-md-3 ftco-animate">
          <a href="images/image_3.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/image_3.jpg);">
            <div class="icon mb-4 d-flex align-items-center justify-content-center">
              <span class="icon-instagram"></span>
            </div>
          </a>
        </div>
        <div class="col-md-3 ftco-animate">
          <a href="images/image_4.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/image_4.jpg);">
            <div class="icon mb-4 d-flex align-items-center justify-content-center">
              <span class="icon-instagram"></span>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>

  @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
  @endif

      <section class="ftco-section ftco-no-pt ftco-no-pb contact-section mt-4">
          <div class="container">
              <div class="row d-flex align-items-stretch no-gutters">
                  <div class="col-md-6 p-4 p-md-5 order-md-last bg-light">
                    <form method="post" action="/stores">
                      @csrf
                      <div class="form-group">
                        <input type="text" class="form-control" id="" name="name" placeholder="Ism-familiyangiz">
                      </div>
                      <div class="form-group">
                        <input type="email" class="form-control" id="" name="email" placeholder="Emailingiz">
                      </div>
                      <div class="form-group">
                        <input type="number" class="form-control" id="" name="phone" placeholder="Telefon nomeringiz">
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" id="" name="subject" placeholder="Mavzu">
                      </div>
                      <div class="form-group">
                        <input name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Xabar">
                      </div>
                      <div class="form-group">
                        <button type="submit" value="" class="btn btn-primary py-3 px-5">Xabar jo'natish</button>
                      </div>
                  </form>
                  </div>
                  <div class="col-md-6 d-flex align-items-stretch">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5989.458633137701!2d69.21610407537068!3d41.358236870072915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38ae8c41349811d7%3A0xce2aaa0754d0e9f5!2zUW9yYXFhbWlzaCwg0KLQvtGI0LrQtdC90YIsIE9gemJla2lzdG9u!5e0!3m2!1suz!2s!4v1593410115700!5m2!1suz!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                  </div>
              </div>
          </div>
      </section>  

@endsection()