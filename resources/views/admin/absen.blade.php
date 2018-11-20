@extends('layout.adminlayout')

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header card-header-primary">
        <h4 class="card-title ">Daftar</h4>
        <p class="card-category">Daftar bahan yang sudah terdaftar.</p>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table">
            <thead class=" text-primary">
              <th>
                Nama
              </th>
              <th>
                Kehadiran Pagi
              </th>
              <th>
                Kehadiran Sore
              </th>
              <th>
                Status
              </th>
            </thead>
            <tbody>
              <tr>
                <td>
                  John Linville
                </td>
                <td>
                  <button type="button" name="pagi">Hadir Pagi</button>
                </td>
                <td>
                  08:00 11/20/2018
                </td>
                <td>
                  edit[x]
                </td>
              </tr>
              <tr>
                <td>
                  Wadidaw
                </td>
                <td>
                  16:00 11/20/2018
                </td>
                <td>
                  <button type="button" name="sore">Hadir Sore</button>
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
