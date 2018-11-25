@extends('layout.adminlayout')

<!-- Script tab -->
<script>
document.onreadystatechange = () => {
  if(document.readyState === 'complete'){
    var header = document.getElementById("tabscript");
    var btns = header.getElementsByClassName("tabss");
    for (var i = 0; i < btns.length; i++) {
      btns[i].addEventListener("click", function() {
        var current = document.getElementsByClassName("active");
        current[0].className = current[0].className.replace(" active", "");
        this.className += " active";
      });
    }
  }
};
</script>

@section('content')

    <ul id="tabscript" class="nav nav-tabs" >
      <li class="tabss"><a data-toggle="tab" href="#karyawan">Daftar Karyawan</a></li>
      <li class="tabss"><a data-toggle="tab" href="#tambah">Tambah Karyawan</a></li>
    </ul>

    <div class="tab-content">

          <div id="karyawan" class="tab-pane active">
            <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Daftar</h4>
                  <p class="card-category">Daftar karyawan yang sudah terdaftar.</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          Nama
                        </th>
                        <th>
                          Umur
                        </th>
                        <th>
                          Jabatan
                        </th>
                        <th>
                          Status
                        </th>
                      </thead>
                      <tbody>
                      @foreach($staff as $human)
                        <tr>
                          <td>
                            {{$human->name}}
                          </td>
                          <td>
                            {{$human->age}}
                          </td>
                          <td>
                            {{$human->jabatan}}
                          </td>
                          <td>
                            <p><a href = "#"><i class="material-icons">edit</i></a> <a href = "#"><i class="material-icons">cancel</i></a></p>
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


          <div id="tambah" class="tab-pane">
            <div class="row">
            <div class="col-md-12">
              <div class="card card-plain">
                <div class="card-header card-header-primary">
                  <h4 class="card-title mt-0">Tambah Baru</h4>
                  <p class="card-category">Tambah karyawan baru ke daftar</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <form class="form-horizontal needs-validation" novalidate method="POST"  action="{{ url('/admin/staff/save') }}" enctype="multipart/form-data" >
                        {{ csrf_field() }}
                        <div class="row" style="margin-top: 20px;">
                          <div class="col-md-5">
                            <div class="form-group">
                              <label>Nama</label>
                              <input type="text" class="form-control" name="name">
                            </div>
                          </div>
                      </div>
                      <div class="row" style="margin-top: 20px;">
                        <div class="col-md-5">
                            <div class="form-group">
                              <label>Umur</label>
                              <input type="number" class="form-control" name = "age">
                            </div>
                          </div>
                      </div>
                      <div class="row">
                        <div class="col-md-5" style="margin-top: 20px;">
                            <div class="form-group">
                              <label>Jabatan</label>
                              <select style="margin-top: 20px;" name="jabatan" class="col-md-5">
                                <option value="CEO">CEO</option>
                                <option value="Chef">Chef</option>
                                <option value="Cleaning Service">Cleaning Service</option>
                                <option value="Kasir">Kasir</option>
                              </select>
                            </div>
                          </div>
                      </div><br><br>
                      <button type="submit" class="btn btn-primary pull-left">Tambah Karyawan</button>
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
