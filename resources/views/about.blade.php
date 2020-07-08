@extends('layouts.code')

@section('content')

<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
          <h1 class="mb-2 bread">Haqimizda</h1>
        <p class="breadcrumbs"><span class="mr-2"><a href="{{ url('/') }}">Bosh Menu <i class="ion-ios-arrow-forward"></i></a></span> <span>Haqimizda <i class="ion-ios-arrow-forward"></i></span></p>
        </div>
      </div>
    </div>
  </section>
      
      <section class="ftco-section ftco-no-pt ftc-no-pb">
          <div class="container">
              <div class="row">
                  <div class="col-md-5 order-md-last wrap-about py-5 wrap-about bg-light">
                      <div class="text px-4 ftco-animate">
                <h2 class="mb-4">118-sonli maktabgacha ta'lim muassasasiga xush kelibsiz!</h2>
                          <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word.</p>
                          <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. And if she hasn’t been rewritten, then they are still using her.</p>
                          {{-- <p><a href="#" class="btn btn-secondary px-4 py-3">Ko'proq o'qish</a></p> --}}
                      </div>
                  </div>
                  <div class="col-md-7 wrap-about py-5 pr-md-4 ftco-animate">
            <h2 class="mb-4">Biz nimani taklif qilamiz</h2>
                      <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word.</p>
                      <div class="row mt-5">
                          <div class="col-lg-6">
                              <div class="services-2 d-flex">
                                  <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-security"></span></div>
                                  <div class="text">
                                      <h3>Birinchidan xavfsizlik</h3>
                                      <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                                  </div>
                              </div>
                          </div>
                          <div class="col-lg-6">
                              <div class="services-2 d-flex">
                                  <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-reading"></span></div>
                                  <div class="text">
                                      <h3>Doimiy darslar</h3>
                                      <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                                  </div>
                              </div>
                          </div>
                          <div class="col-lg-6">
                              <div class="services-2 d-flex">
                                  <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-diploma"></span></div>
                                  <div class="text">
                                      <h3>Oliy toifali o'qituvchilar</h3>
                                      <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                                  </div>
                              </div>
                          </div>
                          <div class="col-lg-6">
                              <div class="services-2 d-flex">
                                  <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-education"></span></div>
                                  <div class="text">
                                      <h3>Sinf xonalar yetarli</h3>
                                      <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                                  </div>
                              </div>
                          </div>
                          <div class="col-lg-6">
                              <div class="services-2 d-flex">
                                  <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-jigsaw"></span></div>
                                  <div class="text">
                                      <h3>Ijodiy darslar</h3>
                                      <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                                  </div>
                              </div>
                          </div>
                          <div class="col-lg-6">
                              <div class="services-2 d-flex">
                                  <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-kids"></span></div>
                                  <div class="text">
                                      <h3>Sport inshootlari</h3>
                                      <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>

  <section class="ftco-section testimony-section bg-light">
    <div class="container">
      <div class="row justify-content-center mb-5 pb-2">
        <div class="col-md-8 text-center heading-section ftco-animate">
            <h2>Tavsiyanoma</h2>
          <h2 class="mb-4"><span>Ota-onalar biz haqimizda nima deyishadi</span></h2>
          <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
        </div>
      </div>
      <div class="row ftco-animate justify-content-center">
        <div class="col-md-12">
          <div class="carousel-testimony owl-carousel">
              @include('parents.parentspart')
          </div>
        </div>
      </div>
    </div>
  </section>

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

@endsection()