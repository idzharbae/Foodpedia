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
  <li class="tabss"><a data-toggle="tab" href="#absen">Kehadiran</a></li>
  <li class="tabss"><a data-toggle="tab" href="#absendulu">List Kehadiran</a></li>
</ul>

<div class="tab-content">

<div id="absen" class="tab-pane active">
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

<div id="absendulu" class="tab-pane">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-primary">
          <h4 class="card-title">Daftar</h4>
          <p class="card-category">Daftar testimoni yang sudah dibuat.</p>
        </div>

        <div class="card-body">
          <form class="form-horizontal needs-validation" novalidate method="POST"  action="{{ url('/admin/absen/get') }}" enctype="multipart/form-data" >
            {{ csrf_field() }}
            <div class="row" style="margin-top: 20px;">
              <div class="col-md-1">
                <div class="form-group">
                  <input id="absen" type="date" value="BULAN/HARI/TAHUN" name="date"/>
                </div>
              </div>
              <button type="submit" class="btn btn-primary pull-left">Cek Kehadiran</button>
          </div>
          </form>


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
                  Kehadiran StaffController
                </th>
                <th>
                  Status
                </th>
              </thead>
              <tbody>
                <tr>
                  <td>
                    Alvin Reinaldo
                  </td>
                  <td>
                    Jam 8
                  </td>
                  <td>
                    Jam 9
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
</div>

</div>
@endsection
