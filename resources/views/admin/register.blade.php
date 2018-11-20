@extends('layout.adminlayout')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="card card-plain">
        <div class="card-header card-header-primary">
          <h4 class="card-title mt-0">Admin Baru</h4>
          <p class="card-category">Tambah admin baru</p>
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
@endsection
