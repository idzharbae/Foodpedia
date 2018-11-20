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
            @foreach($staff as $human)
              <?php
              $haha = App\Absen::where('id_staff',$human->id)->first()
              ?>
              <tr>
                <td>
                  {{$human->name}}
                </td>
                <td>
                @if($haha!=null && $haha->status >= 1)
                {{$haha->jam_dateng}}
                @else
                <a  href='{{ url("/admin/datang/{$human->id}") }}'>Datang</a>
                @endif

                </td>
                <td>
                @if($haha!=null && $haha->status >= 2)
                {{$haha->jam_pulang}}
                @elseif($haha!=null)
                <a  href='{{ url("/admin/pulang/{$haha->id}") }}' name="pagi">Pulang</a>
                @else
                STAFF BELUM HADIR
                @endif
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
@endsection
