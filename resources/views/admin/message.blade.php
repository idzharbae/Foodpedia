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
                          Nama
                        </th>
                        <th>
                          email
                        </th>
                        <th>
                          Subjek
                        </th>
                        <th>
                          Isi Pesan
                        </th>
                        <th>
                          Tanggal
                        </th>
                      </thead>
                      <tbody>
                        @foreach($contact as $pesan)
                        <tr>
                          <td>
                          	{{$pesan->name}}
                          </td>
                          <td>
                            {{$pesan->email}}
                          </td>
                          <td>
                            {{$pesan->subject}}
                          </td>
                          <td>
                            {{$pesan->message}}
                          </td>
                          <td>
                            {{$pesan->created_at}}
                          </td>
                          <td>
                            edit[x]
                          </td>
                        </tr>
                        @endforeach
                        <tr>
                          <td>
                            Mr Tajir
                          </td>
                          <td>
                            tajirbanget@yahuu.com
                          </td>
                          <td>
                            Tambah menu baru dong
                          </td>
                          <td>
                            Tadi saya pesen semua menu ternyata uang saya masih sisa.
                          </td>
                          <td>
                            10 September 2018
                          </td>
                          <td>
                            edit[x]
                          </td>
                        </tr>
                        <tr>
                          <td>
                            Mr Kere
                          </td>
                          <td>
                            kere@kere.com
                          </td>
                          <td>
                            Boleh ngutang?
                          </td>
                          <td>
                            Mau makan di Foodpedia tapi gak punya uang hehe.
                          </td>
                          <td>
                            1 Agustus 2018
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
          </div>
@endsection
