<div class="row">
  <div class="col-lg-6 col-md-12">
    <div class="card">
      <div class="card-header card-header-tabs card-header-primary">
        <div class="nav-tabs-navigation">
          <div class="nav-tabs-wrapper">
            <span class="nav-tabs-title">Tasks:</span>
            <ul class="nav nav-tabs" data-tabs="tabs">
              <li class="nav-item">
                <a class="nav-link active" href="#profile" data-toggle="tab">
                  <i class="material-icons">bug_report</i> Bugs
                            
                  <div class="ripple-container"></div>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#messages" data-toggle="tab">
                  <i class="material-icons">code</i> Website
                            
                  <div class="ripple-container"></div>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#settings" data-toggle="tab">
                  <i class="material-icons">cloud</i> Server
                            
                  <div class="ripple-container"></div>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div class="tab-content">
          <div class="tab-pane active" id="profile">
            <table class="table">
              <tbody>
                  @foreach($task->where('group',1) as $tugas)
                  <tr>
                  <td>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input onclick="foo({{$tugas->id}})" class="form-check-input" type="checkbox" value="" @if($tugas->status == 1) checked @endif>
                          <span class="form-check-sign">
                            <span class="check"></span>
                          </span>
                        </label>
                      </div>
                    </td>
                    <td>{{$tugas->description}}</td>
                    <td class="td-actions text-right">
                              <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                <i class="material-icons">edit</i>
                              </button>
                              <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">close</i>
                              </button>
                            </td>
                  </tr>
                    @endforeach
                      </tbody>
                    </table>
                  </div>
                  <div class="tab-pane" id="messages">
                    <table class="table">
                      <tbody>
                        @foreach($task->where('group',2) as $tugas)
                        <tr>
                  <td>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input onclick="foo({{$tugas->id}})" class="form-check-input" type="checkbox" value="" @if($tugas->status == 1) checked @endif>
                          <span class="form-check-sign">
                            <span class="check"></span>
                          </span>
                        </label>
                      </div>
                    </td>
                    <td>{{$tugas->description}}</td>
                    <td class="td-actions text-right">
                              <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                <i class="material-icons">edit</i>
                              </button>
                              <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">close</i>
                              </button>
                            </td>
                  </tr>
                    @endforeach
                          </tbody>
                        </table>
                      </div>
                  <div class="tab-pane" id="settings">
                    <table class="table">
                      <tbody>
                        @foreach($task->where('group',3) as $tugas)
                        <tr>
                  <td>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input onclick="foo({{$tugas->id}})" class="form-check-input" type="checkbox" value="" @if($tugas->status == 1) checked @endif>
                          <span class="form-check-sign">
                            <span class="check"></span>
                          </span>
                        </label>
                      </div>
                    </td>
                    <td>{{$tugas->description}}</td>
                    <td class="td-actions text-right">
                              <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                <i class="material-icons">edit</i>
                              </button>
                              <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">close</i>
                              </button>
                            </td>
                  </tr>
                    @endforeach
                                </tbody>
                              </table>
                            </div>
                          </div>
                          <p><a href = "#" data-toggle="modal" data-target="#addTask"><i class="material-icons">add_circle</i> Tambah Tugas</a></p>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                      <div class="card">
                        <div class="card-header card-header-warning">
                          <h4 class="card-title">Absensi Hari Ini</h4>
                          <p class="card-category">tanggal {{date("d-m-Y")}}</p>
                        </div>
                        <div class="card-body table-responsive">
                          <table class="table table-hover">
                            <thead class="text-warning">
                              <th>Nama</th>
                              <th>Jam Datang</th>
                              <th>Jam Pulang</th>
                            </thead>
                            <tbody>
                              @foreach($staff as $human)
                                <?php
                                $haha = App\Absen::where('id_staff',$human->id)->where('save_date',date("Y-m-d"))->first()
                                ?>
                                <tr>
                                  <td>
                                    {{$human->name}}
                                  </td>
                                  <td>
                                  @if($haha!=null && $haha->status >= 1)
                                  {{$haha->jam_dateng}}
                                  @else
                                  Staff belum hadir.
                                  @endif

                                  </td>
                                  <td>
                                  @if($haha!=null && $haha->status >= 2)
                                  {{$haha->jam_pulang}}
                                  @elseif($haha!=null)
                                    Staff belum pulang.
                                  @else
                                    Staff belum pulang.
                                  @endif
                                  </td>
                                </tr>
                              @endforeach
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                    <div id="addTask" class="modal fade" role="dialog" >
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <form class="form-horizontal needs-validation" novalidate method="POST"  action="{{ url('/admin/dashboard/addTask') }}" enctype="multipart/form-data" >
                                    {{ csrf_field() }}
                                    <div class="row" style="margin-top: 20px;">
                                      <div class="col-md-5">
                                        <div class="form-group">
                                          <label>Deskripsi</label>
                                          <input type="text" class="form-control" name="description">
                                        </div>
                                      </div>
                                      </div>
                                      <div class="row" style="margin-top: 20px;">
                                      <div class="col-md-5">
                                        <div class="form-group">
                                            <label>Tipe</label>
                                            <select style="margin-top: 20px;" name="group" class="col-md-8">
                                              <option value="1" selected>Bugs</option>}
                                              <option value="2">Website</option>
                                              <option value="3">Server</option>
                                            </select>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="row" style="margin-top: 20px;">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                          <label>Deadline</label>
                                          <input style="margin-top: 20px;" type="date" id="deadline" name="deadline" value='{{date("Y-m-d")}}' min='{{date("Y-m-d")}}' max='2100-01-01'>
                                        </div>
                                      </div>
                                  </div><br><br>
                                  <button type="submit" class="btn btn-primary pull-left">Tambah Tugas</button>
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                  </form>
                                  </div>
                                  </div>
                                  
                                  
                                </div>
                              </div>
                            </div>


                    