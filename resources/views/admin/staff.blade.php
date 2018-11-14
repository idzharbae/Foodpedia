@extends('layout.adminlayout')

@section('content')
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
                        <tr>
                          <td>
                            Gill Bates
                          </td>
                          <td>
                            65
                          </td>
                          <td>
                            Cleaning Service
                          </td>
                          <td>
                            edit[x]
                          </td>
                        </tr>
                        <tr>
                          <td>
                            Beff Jezos
                          </td>
                          <td>
                            50
                          </td>
                          <td>
                            Kasir
                          </td>
                          <td>
                            edit[x]
                          </td>
                        </tr>
                        <tr>
                          <td>
                            Barren Wuffet
                          </td>
                          <td>
                            70
                          </td>
                          <td>
                            Chef
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
            <div class="col-md-12">
              <div class="card card-plain">
                <div class="card-header card-header-primary">
                  <h4 class="card-title mt-0">Tambah Baru</h4>
                  <p class="card-category">Tambah karyawan baru ke daftar</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <form>
                      	<div class="row" style="margin-top: 20px;">
                      		<div class="col-md-5">
                      		  <div class="form-group">
                      		    <label>Nama</label>
                      		    <input type="text" class="form-control">
                      		  </div>
                      		</div>
                    	</div>
                    	<div class="row" style="margin-top: 20px;">
                    		<div class="col-md-5">
                      		  <div class="form-group">
                      		    <label>Umur</label>
                      		    <input type="number" class="form-control">
                      		  </div>
                      		</div>
                    	</div>
                      <div class="row">
                        <div class="col-md-5" style="margin-top: 20px;">
                            <div class="form-group">
                              <label>Jabatan</label>
                              <select style="margin-top: 20px;" name="rekomendasi" class="col-md-5">
                                <option value="ceo">CEO</option>
                                <option value="chef">Chef</option>
                                <option value="cleaning-service">Cleaning Service</option>
                                <option value="kasir">Kasir</option>
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
            <span style="color: white;">^ = Ya / Tidak</span>
          </div>
@endsection