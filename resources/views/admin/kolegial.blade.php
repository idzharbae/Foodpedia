@extends('layout.adminlayout')

@section('content')

  <ul id="tabscript" class="nav nav-tabs" >
    <li class="tabss"><a data-toggle="tab" href="#member">Daftar Member</a></li>
    <li class="tabss"><a data-toggle="tab" href="#tambahmember">Tambah Member</a></li>
  </ul>

    <div class="tab-content">

      <div id="member" class="tab-pane active">
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
                            edit[x]
                          </td>
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

        <div id="tambahmember" class="tab-pane">
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
