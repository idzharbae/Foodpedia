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
    <li class="tabss"><a data-toggle="tab" href="#menu">Daftar Menu</a></li>
    <li class="tabss"><a data-toggle="tab" href="#tambahmenu">Tambah Menu</a></li>
  </ul>

  <div class="tab-content">

      <div id="menu" class="tab-pane active">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Daftar</h4>
                  <p class="card-category">Daftar menu yang sudah dibuat.</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          Nama
                        </th>
                        <th>
                          Rekomendasi^
                        </th>
                        <th>
                          Kategori
                        </th>
                        <th>
                          Harga
                        </th>
                        <th>
                          Status
                        </th>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            Spaghetti Rasa Melon
                          </td>
                          <td>
                            Ya
                          </td>
                          <td>
                            Spaghetti
                          </td>
                          <td>
                            18.181
                          </td>
                          <td>
                            edit[x]
                          </td>
                        </tr>
                        <tr>
                          <td>
                            Lasagna Rasa Stroberi
                          </td>
                          <td>
                            Tidak
                          </td>
                          <td>
                            Lasagna
                          </td>
                          <td>
                            14.1414
                          </td>
                          <td>
                            edit[x]
                          </td>
                        </tr>
                        <tr>
                          <td>
                            Roti Bakar Keju
                          </td>
                          <td>
                            Ya
                          </td>
                          <td>
                            Roti Bakar
                          </td>
                          <td>
                            14.545
                          </td>
                          <td>
                            edit[x]
                          </td>
                        </tr>
                        <tr>
                          <td>
                            Mie Goreng Rendang
                          </td>
                          <td>
                            Ya
                          </td>
                          <td>
                            Rendang
                          </td>
                          <td>
                            1.337
                          </td>
                          <td>
                            edit[x]
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
               <span style="color: white;">^ = Ya / Tidak</span>
            </div>
          </div>
        </div>

        <div id="tambahmenu" class="tab-pane">
          <div class="row">
            <div class="col-md-12">
              <div class="card card-plain">
                <div class="card-header card-header-primary">
                  <h4 class="card-title mt-0">Tambah Baru</h4>
                  <p class="card-category">Tambah menu baru ke daftar</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <form class="form-horizontal needs-validation" novalidate method="POST"  action="{{ url('/admin/menu/save') }}" enctype="multipart/form-data" >
                        {{ csrf_field() }}
                        <div class="row" style="margin-top: 20px;">
                          <div class="col-md-5">
                            <div class="form-group">
                              <label>Nama</label>
                              <input type="text" class="form-control" name="name">
                            </div>
                          </div>
                      </div>
                      <div class="row">
                        <div class="col-md-5">
                            <div class="form-group">
                              <label>Rekomendasi^</label>
                              <select style="margin-top: 20px;" name="recommended" class="col-md-2">
                                <option value="Ya">Ya</option>
                                <option value="Tidak">Tidak</option>
                              </select>
                            </div>
                          </div>
                      </div>
                      <div class="row">
                        <div class="col-md-5">
                            <div class="form-group">
                              <label>Kategori</label>
                              <select style="margin-top: 20px;" name="rekomendasi" class="col-md-5">
                                <option value="roti-bakar">roti bakar</option>
                                <option value="spaghetti">spaghetti</option>
                                <option value="lasagna">lasagna</option>
                                <option value="rendang">rendang</option>
                              </select>
                            </div>
                          </div>
                      </div>
                      <div class="row" style="margin-top: 20px;">
                        <div class="col-md-5">
                            <div class="form-group">
                              <label>Harga</label>
                              <input type="number" class="form-control">
                            </div>
                          </div>
                      </div><br><br>
                      <button type="submit" class="btn btn-primary pull-left">Tambah Menu</button>
                      </form>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <span style="color: white;">^ = Ya / Tidak</span>
          </div>
        </div>

      </div>

@endsection
