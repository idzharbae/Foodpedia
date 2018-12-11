<div id="special-offser" class="parallax pricing">
        <div class="container inner">
            <h2 class="section-title text-center">Menu</h2>
            <p class="lead main text-center">Daftar Menu Foodpedia</p>

            <div class="row">
                @foreach($menu as $item)
                
                <div class="col-md-6 col-sm-6">

                    <div class="pricing-item">

                        <a href="#" data-toggle="modal" data-target="#readArt-{{$item->id}}" ><img class="img-responsive img-thumbnail" src="{{asset($item->image)}}" data-toggle="modal" alt="" style="width: 400px; height:150px;"></a>

                        <div class="pricing-item-details">
                            <h3><a href="#" data-toggle="modal" data-target="#readArt-{{$item->id}}" >{{$item->name}}</a></h3>
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
                

                <div id="readArt-{{$item->id}}" class="modal fade" role="dialog" >
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title">{{ $item->name }}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <div class="row">
                                      <div class="col-md-8">
                                          <div>
                                            <label>{{ $item->name }}</label><br>
                                            <img class="img-responsive img-cover img-center mb-2" id="preview" src="{{asset($item->image)}}" style="max-height:400px; max-width: 400px;" >
                                          </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-8">
                                          <div>
                                            <p>{{$item->description}}</p>
                                          </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                  </div>
                                  
                                </div>
                              </div>
                            </div>
                @endforeach
            </div>


        </div>

    </div><!--/#food-menu-->
