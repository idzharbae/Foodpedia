<div id="special-offser" class="parallax pricing">
        <div class="container inner">
            <h2 class="section-title text-center">Menu</h2>
            <p class="lead main text-center">Daftar Menu Foodpedia</p>

            <div class="row">
                @foreach($menu as $item)

                <div class="col-md-6 col-sm-6">

                    <div class="pricing-item">

                        <a href="#"><img class="img-responsive img-thumbnail" src="{{asset($item->image)}}" alt="" style="width: 400px; height:150px;"></a>

                        <div class="pricing-item-details">
                            <h3><a href="#">{{$item->name}}</a></h3>
                            <p>{{$item->description}}</p>
                            <div style="text-align: center; width: 250px; padding: 10px; border: 5px solid white; margin: 0;">
                                    Rp. {{number_format($item->harga)}}.00-
                            </div>

                            <div class="clearfix"></div>
                        </div>
                        <!--price tag-->
                        <div class="clearfix"></div>
                    </div>
                </div>
                @endforeach
            </div>


        </div>

    </div><!--/#food-menu-->
