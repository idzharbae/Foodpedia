@extends('layout.adminlayout')

@section('content')
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Daftar</h4>
                  <p class="card-category">Daftar FAQ yang sudah dibuat.</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          Judul
                        </th>
                        <th>
                          Deskripsi
                        </th>
                        <th>
                          Status
                        </th>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                          	Bagaimana cara makan?
                          </td>
                          <td>
                            Masukan makanan kemulut lalu kunyah dan telan setelah lunak.
                          </td>
                          <td>
                            edit[x]
                          </td>
                        </tr>
                        <tr>
                          <td>
                            Harga parkir berapa?
                          </td>
                          <td>
                            Seikhlasnya.
                          </td>
                          <td>
                            edit[x]
                          </td>
                        </tr>
                        <tr>
                          <td>
                            Webnya bagus siapa sih yang buat?
                          </td>
                          <td>
                            Kontak saja idzharbae@gmail.com
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
            </div>
            <div class="col-md-12">
              <div class="card card-plain">
                <div class="card-header card-header-primary">
                  <h4 class="card-title mt-0">Tambah Baru</h4>
                  <p class="card-category">Tambah FAQ baru ke daftar</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <form class="form-horizontal needs-validation" novalidate method="POST"  action="{{ url('/save') }}" enctype="multipart/form-data" >
                        {{ csrf_field() }}
                        <div class="row" style="margin-top: 20px;">
                          <div class="col-md-5">
                            <div class="form-group">
                              <label>Judul</label>
                              <input type="text" class="form-control">
                            </div>
                          </div>
                      </div>
                      <div class="row" style="margin-top: 20px;">
                        <div class="col-md-5">
                            <div class="form-group">
                              <label>Deskripsi</label>
                               <input type="text" class="form-control">
                            </div>
                          </div>
                      </div><br><br>
                      <button type="submit" class="btn btn-primary pull-left">Tambah FAQ</button>
                      </form>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
@endsection