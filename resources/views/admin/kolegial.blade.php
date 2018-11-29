@extends('layout.adminlayout')

@section('content')
  <ul id="tabscript" class="nav nav-tabs" >
    <li class="tabss"><a data-toggle="tab" href="#member">Daftar Member</a></li>
    <li class="tabss"><a data-toggle="tab" href="#tambahmember">Tambah Member</a></li>
  </ul>

    <div class="tab-content">

      <div id="member" class="tab-pane {{ count($errors)==0 ? 'active' : '' }}">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Daftar</h4>
                  <p class="card-category">Daftar member kolegial yang sudah terdaftar.</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          Nama Depan
                        </th>
                        <th>
                          Nama Belakang
                        </th>
                        <th>
                          email
                        </th>
                        <th>
                          Telepon
                        </th>
                        <th>
                          Rank
                        </th>
                        <th>
                          Status
                        </th>
                        <th>
                          Action
                        </th>
                      </thead>
                      <tbody>
                      @foreach($kolegial as $human)
                        <tr>
                          <td>
                            {{$human->Fname}}
                          </td>
                          <td>
                            {{$human->Lname}}
                          </td>
                          <td>
                            {{$human->email}}
                          </td>
                          <td>
                            {{$human->phone}}
                          </td>
                          <td>
                            {{$human->rank}}
                          </td>
                          <td>
                            @if($human->status == 0)
                              Not Approved
                            @else
                              Approved
                            @endif
                          </td>
                          <td>
                            <p><a href = "{{ url('/admin/kolegial/approve/'.$human->id) }}"><i class="material-icons">check_circle_outline</i></a><a href = "#" data-toggle="modal" data-target="#readArt-{{$human}}"><i class="material-icons">edit</i></a> <a href = "#" data-toggle="modal" data-target="#modal-delete-{{$human->id}}"><i class="material-icons">cancel</i></a></p>
                          </td>
                          <div id="readArt-{{$human}}" class="modal fade" role="dialog" >
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title">Edit {{ $human->name }} Data</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <form class="form-horizontal needs-validation" novalidate method="POST"  action="{{ url('/admin/kolegial/update/'.$human->id) }}" enctype="multipart/form-data" >
                                      {{ csrf_field() }}
                                      <div class="row" style="margin-top: 20px;">
                                        <div class="col-md-5">
                                          <div class="form-group">
                                            <label>Nama Depan</label>
                                            <input type="text" class="form-control" name="Fname" value = "{{$human->Fname}}">
                                          </div>
                                        </div>
                                        <div class="col-md-5">
                                          <div class="form-group">
                                            <label>Nama Belakang</label>
                                            <input type="text" class="form-control" name="Lname" value = "{{$human->Lname}}">
                                          </div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top: 20px;">
                                      <div class="col-md-5">
                                          <div class="form-group">
                                            <label>email</label>
                                            <input type="text" class="form-control" name = "email" value = "{{$human->email}}">
                                          </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-5" style="margin-top: 20px;">
                                          <div class="form-group">
                                            <label>Telepon</label>
                                            <input type="number" class="form-control" name="phone" value = "{{$human->phone}}">
                                          </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-5" style="margin-top: 20px;">
                                          <div class="form-group">
                                            <label>Rank</label>
                                            <select style="margin-top: 20px;" name="rank" class="col-md-5">
                                            @if($human->rank == "Silver")
                                              <option value="Silver" selected>Silver</option>
                                            @else
                                              <option value="Silver">Silver</option>
                                            @endif
                                            @if($human->rank == "Gold")
                                              <option value="Gold" selected>Gold</option>
                                            @else
                                              <option value="Gold">Gold</option>
                                            @endif
                                            </select>
                                          </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-5" style="margin-top: 20px;">
                                          <div class="form-group">
                                            <label>Status</label>
                                            <select style="margin-top: 20px;" name="status" class="col-md-5">
                                            @if($human->status == 1)
                                              <option value="1" selected>Approved</option>
                                            @else
                                              <option value="1">Approved</option>
                                            @endif
                                            @if($human->status == 0)
                                              <option value="0" selected>Not Approved</option>
                                            @else
                                              <option value="0">Not Approved</option>
                                            @endif
                                            </select>
                                          </div>
                                        </div>
                                    </div><br><br>
                                    <div class="modal-footer">
                                      <button type="submit" class="btn btn-primary pull-left">Update Data</button>
                                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                    </form>
                                  </div>
                                  
                                </div>
                              </div>
                            </div>
                              <div class="modal fade" id="modal-delete-{{$human->id}}" tabIndex="-1">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title">Delete {{ $human->name }}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                    <div class="modal-body">
                                      <p class="lead">
                                        <i class="fa fa-question-circle fa-lg"></i>  
                                        Are you sure you want to delete this Court?
                                      </p>
                                      <div class="modal-footer">
                                        <a href="{{ url('/admin/kolegial/delete/'.$human->id) }}" class="btn btn-danger">Delete</a>
                                        <button type="button" class="btn btn-default"
                                                data-dismiss="modal">Close</button>
                                    </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </tr>
                      @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div id="tambahmember" class="tab-pane {{ count($errors)>0 ? 'active' : '' }}">
          <div class="row">
            <div class="col-md-12">
              <div class="card card-plain">
                <div class="card-header card-header-primary">
                  <h4 class="card-title mt-0">Tambah Baru</h4>
                  <p class="card-category">Tambah member kolegial baru ke daftar</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <form class="form-horizontal needs-validation" novalidate method="POST"  action="{{ url('/admin/kolegial/save') }}" enctype="multipart/form-data" >
                        {{ csrf_field() }}
                      	<div class="row" style="margin-top: 20px;">
                      		<div class="col-md-5">
                      		  <div class="form-group">
                      		    <label>Nama Depan</label>
                      		    <input type="text" class="form-control" name="Fname">
                      		  </div>
                      		</div>
                      		<div class="col-md-5">
                      		  <div class="form-group">
                      		    <label>Nama Belakang</label>
                      		    <input type="text" class="form-control" name="Lname">
                      		  </div>
                      		</div>
                    	</div>
                    	<div class="row" style="margin-top: 20px;">
                    		<div class="col-md-5">
                      		  <div class="form-group">
                      		    <label>email</label>
                      		    <input type="text" class="form-control" name = "email">
                      		  </div>
                      		</div>
                    	</div>
                      <div class="row">
                        <div class="col-md-5" style="margin-top: 20px;">
                            <div class="form-group">
                              <label>Telepon</label>
                              <input type="number" class="form-control" name="phone">
                            </div>
                          </div>
                      </div>
                      <div class="row">
                        <div class="col-md-5" style="margin-top: 20px;">
                            <div class="form-group">
                              <label>Rank</label>
                              <select style="margin-top: 20px;" name="rank" class="col-md-5">
                                <option value="Silver">Silver</option>
                                <option value="Gold">Gold</option>
                              </select>
                            </div>
                          </div>
                      </div><br><br>
                      <button type="submit" class="btn btn-primary pull-left">Tambah Member Kolegial</button>
                      </form>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection
