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
      <li class="tabss"><a data-toggle="tab" href="#karyawan">Daftar Banner</a></li>
      <li class="tabss"><a data-toggle="tab" href="#tambah">Tambah Banner</a></li>
    </ul>

    <div class="tab-content">

          <div id="karyawan" class="tab-pane {{ count($errors)==0 ? 'active' : '' }}">
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
                          No.
                        </th>
                        <th>
                          Foto
                        </th>
                        <th>
                          Action
                        </th>
                      </thead>
                      <tbody>
                      <?php
                        $counting = 0;
                      ?>
                      @foreach($ss as $item)
                        <tr>
                          <td>
                            {{$counting+1}}
                          </td>
                          <td>
                            <img class="img-responsive img-cover-profile" src="{{asset($item->image)}}" alt=""
                            style="max-width:100px; max-height:100px">
                          </td>
                          <td>
                            <p> <a href = "#" data-toggle="modal" data-target="#modal-delete-{{$item->id}}"><i class="material-icons">cancel</i></a></p>
                          </td>
                              <div class="modal fade" id="modal-delete-{{$item->id}}" tabIndex="-1">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                   <div class="modal-header">
                                    <h5 class="modal-title">Delete {{ $item->name }}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                    <div class="modal-body">
                                      <p class="lead">
                                        <i class="fa fa-question-circle fa-lg"></i>  
                                        Are you sure you want to delete this Court?
                                      </p>
                                    <div class="modal-footer">
                                        <a href="{{ url('/admin/ss/delete/'.$item->id) }}" class="btn btn-danger">Delete</a>
                                        <button type="button" class="btn btn-default"
                                                data-dismiss="modal">Close</button>
                                    </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </tr>
                        <?php
                        $counting++;
                        ?>
                      @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


          <div id="tambah" class="tab-pane {{ count($errors)>0 ? 'active' : '' }}">
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
                      <form class="form-horizontal needs-validation" novalidate method="POST"  action="{{ url('/admin/ss/save') }}" enctype="multipart/form-data" >
                        {{ csrf_field() }}
                        <div class="row">
                        <div class="col-md-5">
                            <div>
                              <label>Gambar</label><br>
                              <img class="img-responsive img-cover img-center mb-2" id="preview" src="" style="max-height:400px; max-width: 400px;" >
                             <input type="file" name="image" id="img" required>
                            </div>
                          </div>
                      </div><br><br>
                      <button type="submit" class="btn btn-primary pull-left">Tambah Banner</button>
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
