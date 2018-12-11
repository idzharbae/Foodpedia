<section class="ss-style-top"></section>
  <div id="foodmenu" class="light-wrapper">
        <div class="container inner">
            <h2 class="section-title text-center">Menu</h2>
            <p class="lead main text-center">Menu Populer Kami</p>
            <div class="row">
              <div class="swiper-container main-slider" id="foodmenu" style="height: 500px">
                <div class="swiper-wrapper">
                  @foreach($recom as $item)
                    <div class="swiper-slide slider-bg-position" data-hash="slide1">
                      <div class="baner">
                        <strong>{{$item->name}}</strong>
                        <b>Rp. {{number_format($item->harga)}}.00-</b>
                        <p>
                          <span>{{$item->description}}</span>
                        </p>
                      </div>
                      <div class="gambar"><img src="{{$item->image}}" alt=""></div>
                    </div>
                  @endforeach
                </div>
                <div class="swiper-pagination"></div>
              </div>
                <!-- <div class="swiper-container main-slider" id="myCarousel">
                  <div class="swiper-wrapper">

                    <div class="swiper-slide slider-bg-position" style="background:url('img/nasgor.jpg');" data-hash="slide1">

                        <div class="recom-box">
                            <span>Nasi Goreng Telur
                            Nasi digoreng pake telor, nikmat.
                            Nasi digoreng pake telor, nikmat.
                            Nasi digoreng pake telor, nikmat.
                            <h3>IDR85.000,00</h3>
                            </span>


                        </div>
                    </div>

                    <div class="swiper-slide slider-bg-position" style="background:url('img/pk-banner.jpg')" data-hash="slide2">
                            <div class="recom-box">
                              <span>
                                  Martabak Foodpedia Mantabb
                                  Martabak Foodpedia Mantabb
                                <h3>IDR100.000,00</h3>
                              </span>
                            </div>
                    </div>
                  </div>

                  <div class="swiper-pagination"></div>

                  <div class="swiper-button-prev"><i class="fa fa-chevron-left"></i></div>
                  <div class="swiper-button-next"><i class="fa fa-chevron-right"></i></div>
                </div> -->
            </div>
          </br>
            <button onclick="location.href='{{ url('food') }}'"class="btn btn-danger btn-lg col-md-12" >Lihat Semua Menu</button>
        </div>

        <!-- /.container -->
        <section class="ss-style-bottom"></section>
    </div><!--/#food-menu-->
    <section class="ss-style-bottom"></section>
