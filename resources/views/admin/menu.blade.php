@extends('layout.adminlayout')

@section('content')
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
                        	Harga
                        </th>
                        <th>
                          Status
                        </th>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            Spaghetti
                          </td>
                          <td>
                            Ya
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
                            Lasagna
                          </td>
                          <td>
                            Tidak
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
                            Roti Bakar
                          </td>
                          <td>
                            Ya
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
                            Mie Goreng
                          </td>
                          <td>
                            Ya
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
            </div>
            <div class="col-md-12">
              <div class="card card-plain">
                <div class="card-header card-header-primary">
                  <h4 class="card-title mt-0">Tambah Baru</h4>
                  <p class="card-category">Tambah menu baru ke daftar</p>
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
                    	<div class="row">
                    		<div class="col-md-5">
                      		  <div class="form-group">
                      		    <label>Rekomendasi^</label>
                      		    <select style="margin-top: 20px;" name="rekomendasi" class="col-md-2">
                      		    	<option value="yes">Ya</option>
                      		    	<option value="no">Tidak</option>
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
                    	</div>
                      </form>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
@endsection