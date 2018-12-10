<div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">content_copy</i>
                  </div>
                  <p class="card-category">Tugas</p>
                  <h3 class="card-title">{{$task->where('status',0)->count()}}/{{$task->count()}}</h3><p class="card-category">Tugas belum terselesaikan</p>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    @if($task->where('status',0)->where('deadline', '<', date("Y-m-d"))->count() > 0)
                    <i class="material-icons text-danger">warning</i>
                    Beberapa tugas tidak selesai sebelum deadline.
                    @else
                    <i class="material-icons text-success">check</i>
                    Tidak ada tugas yang lewat deadline.
                    @endif
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
                  <p class="card-category">Kolegial</p>
                  <h3 class="card-title">{{$memberPending}}</h3><p class="card-category">Pendaftar Menunggu Konfirmasi</p>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">access_time</i> 
                    @php
                        if($lastMemberPending->isEmpty())
                           echo 'database kosong';
                        else{
                            echo 'terakhir dirubah ';
                            $diff = strtotime(date('Y-m-d H:i:s')) - strtotime($lastMemberPending[0]->updated_at);
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
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">mail</i>
                  </div>
                  <p class="card-category">Kotak Masuk</p>
                  <h3 class="card-title">{{$msgUnread}} / {{$msgAll->count()}}</h3><p class="card-category">pesan belum dibaca.</p>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">access_time</i> 
                    @php
                        if($msgAll->isEmpty())
                           echo 'database kosong';
                        else{
                            echo 'terakhir dirubah ';
                            $diff = strtotime(date('Y-m-d H:i:s')) - strtotime($msgAll[0]->updated_at);
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
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">how_to_reg</i>
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
