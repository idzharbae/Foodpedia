<div id="header">
        <div class="bg-overlay"></div>
        
        <div class="swiper-container main-slider" id="myCarousel">
      <div class="swiper-wrapper">
        <!-- LIST ITEM BUAT NGELOOP -->
        
        <div class="swiper-slide slider-bg-position" style="background:url('img/fp-banner.jpg')" data-hash="slide1">
        </div>
      
      @foreach($ss as $item)
        <div class="swiper-slide slider-bg-position" style="background-image: url(../{{$item->image}});" data-hash="slide{{$item->id+1}}">
        </div>
      @endforeach
      </div>
      <!-- Add Pagination -->
      <div class="swiper-pagination"></div>
      <!-- Add Navigation -->
      <div class="swiper-button-prev"><i class="fa fa-chevron-left"></i></div>
      <div class="swiper-button-next"><i class="fa fa-chevron-right"></i></div>
    </div>

    </div>