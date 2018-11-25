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
        <p class="card-category">Daftar absen yang sudah berlalu.</p>
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
          <form class="form-horizontal needs-validation" novalidate method="POST"  action="{{ url('/admin/absen/cek') }}" enctype="multipart/form-data" >
            {{ csrf_field() }}
            <div class="row" style="margin-top: 20px;">
              <div class="col-md-1">
                <div class="form-group">
                <input type="date" id="absen" name="timereq" value="<?php echo date('Y-m-d'); ?>" min="2018-01-01" max="2018-12-31">
                </div>
              </div>
          </div>
              <button type="submit" class="btn btn-primary pull-left">Cek Kehadiran</button>
          </form>


          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <th>
                  Nama
                </th>
                <th>
                  Jam Datang
                </th>
                <th>
                  Jam Pulang
                </th>
                <th>
                  Status
                </th>
              </thead>
              <tbody>
                @if($test!=null)
                @foreach($test as $write)
                <tr>
                  <td>
                    {{App\Staff::find($write->id_staff)->name}}
                  </td>
                  <td>
                  @if($write!=null && $write->status >= 1)
                  {{$write->jam_dateng}}
                  @else
                  Staff Tidak Hadir
                  @endif
                  </td>
                  <td>
                  @if($write!=null && $write->status >= 2)
                  {{$write->jam_pulang}}
                  @elseif($haha!=null)
                  Staff Belum Pulang
                  @else
                  Staff Tidak Hadir
                  @endif
                  </td>
                  <td>
                  <p><a href = "#"><i class="material-icons">edit</i></a> <a href = "#"><i class="material-icons">cancel</i></a></p>
                  </td>
                @endforeach
                @endif
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
