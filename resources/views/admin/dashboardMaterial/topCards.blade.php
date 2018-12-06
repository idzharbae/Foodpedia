<div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">content_copy</i>
                  </div>
                  <p class="card-category">Used Space</p>
                  <h3 class="card-title">49/50
                    <small>GB</small>
                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons text-danger">warning</i>
                    <a href="#pablo">Get More Space...</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">store</i>
                  </div>
                  <p class="card-category">Revenue</p>
                  <h3 class="card-title">$34,245</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">date_range</i> Last 24 Hours
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">info_outline</i>
                  </div>
                  <p class="card-category">Fixed Issues</p>
                  <h3 class="card-title">75</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">local_offer</i> Tracked from Github
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                  <div class="card-icon">
                    <i class="fa fa-twitter"></i>
                  </div>
                  <p class="card-category">Member Kolegial</p>
                  <h3 class="card-title">{{$memberCount}}</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">access_time</i>
                      @php
                        if($lastMember->isEmpty())
                           echo 'database kosong';
                        else{
                            echo 'terakhir dirubah ';
                            $diff = strtotime(date('Y-m-d H:i:s')) - strtotime($lastMember[0]->updated_at);
                            if($diff < 60)
                              echo $diff.' detik lalu.' ;
                            else if(intdiv($diff, 60) < 60)
                              echo intdiv($diff, 60).' menit lalu.';
                            else if(intdiv($diff, 3600) < 24)
                              echo intdiv($diff, 3600).' jam lalu.';
                            else if(intdiv($diff, 86400) < 30)
                              echo intdiv($diff, 86400).' hari lalu.';
                            else if(intdiv($diff, 2592000) < 12)
                              echo intdiv($diff, 2592000).' bulan lalu.';
                            else
                              echo '>1 tahun lalu.';
                          }
                      @endphp
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
