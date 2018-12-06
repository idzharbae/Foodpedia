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
    <li class="tabss"><a data-toggle="tab" href="#bahan">Daftar Bahan Baku</a></li>
    <li class="tabss"><a data-toggle="tab" href="#tambahbahan">Tambah Bahan Baku</a></li>
  </ul>

        <div class="tab-content">

        <div id="bahan" class="tab-pane {{ count($errors)==0 ? 'active' : '' }}">
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
                          Jumlah
                        </th>
                        <th>
                          Batas minimal
                        </th>
                        <th>
                          Terakhir Diupdate
                        </th>
                        <th>
                          Status
                        </th>
                      </thead>
                      <tbody>
                        @foreach($baku as $bahan)
                        <tr>
                          <td>
                            {{$bahan->name}}
                          </td>
                          <td>
                            {{$bahan->total}}
                          </td>
                          <td>
                            {{$bahan->batas}}
                          </td>
                          <td>
                            {{$bahan->updated_at}} 
                          </td>
                          <td>
                            <p><a href = "#" data-toggle="modal" data-target="#readArt-{{$bahan}}"><i class="material-icons">edit</i></a> <a href = "#" data-toggle="modal" data-target="#modal-delete-{{$bahan->id}}"><i class="material-icons">cancel</i></a></p>
                          </td>
                          <div id="readArt-{{$bahan}}" class="modal fade" role="dialog" >
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title">Edit {{ $bahan->name }} Data</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <form class="form-horizontal needs-validation" novalidate method="POST"  action="{{ url('/admin/bahan/update/'.$bahan->id) }}" enctype="multipart/form-data" >
                                      {{ csrf_field() }}
                                      <div class="row" style="margin-top: 20px;">
                                        <div class="col-md-5">
                                          <div class="form-group">
                                            <label>Nama</label>
                                            <input type="text" class="form-control" name = "name" value = "{{$bahan->name}}">
                                          </div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top: 20px;">
                                      <div class="col-md-5">
                                          <div class="form-group">
                                            <label>Jumlah</label>
                                            <input type="number" class="form-control" name="total" value = "{{$bahan->total}}">
                                          </div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top: 20px;">
                                      <div class="col-md-5">
                                          <div class="form-group">
                                            <label>Batas minimal</label>
                                            <input type="number" class="form-control" name="batas" value = "{{$bahan->batas}}">
                                          </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="submit" class="btn btn-primary pull-left">Update Data</button>
                                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                    </form>
                                  </div>
                                  
                                </div>
                              </div>
                            </div>

                              <div class="modal fade" id="modal-delete-{{$bahan->id}}" tabIndex="-1">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title">Delete {{ $bahan->name }}</h5>
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
                                        <a href="{{ url('/admin/bahan/delete/'.$bahan->id) }}" class="btn btn-danger">Delete</a>
                                        <button type="button" class="btn btn-default"
                                                data-dismiss="modal">Close</button>
                                    </div>
                                    </div>
                                    
                                  </div>
                                </div>
                              </div>
                            </div>
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


        <div id="tambahbahan" class="tab-pane {{ count($errors)>0 ? 'active' : '' }}">
          <div class="row">
            <div class="col-md-12">
              <div class="card card-plain">
                <div class="card-header card-header-primary">
                  <h4 class="card-title mt-0">Tambah Baru</h4>
                  <p class="card-category">Tambah data bahan baru ke daftar</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <form class="form-horizontal needs-validation" novalidate method="POST"  action="{{ url('admin/bahan/save') }}" enctype="multipart/form-data" >
                        {{ csrf_field() }}
                      	<div class="row" style="margin-top: 20px;">
                      		<div class="col-md-5">
                      		  <div class="form-group">
                      		    <label>Nama</label>
                      		    <input type="text" class="form-control" name = "name">
                      		  </div>
                      		</div>
                    	</div>
                    	<div class="row" style="margin-top: 20px;">
                        <div class="col-md-5">
                            <div class="form-group">
                              <label>Jumlah</label>
                              <input type="number" class="form-control" name="total">
                            </div>
                          </div>
                      </div>
                      <div class="row" style="margin-top: 20px;">
                        <div class="col-md-5">
                            <div class="form-group">
                              <label>Batas minimal</label>
                              <input type="number" class="form-control" name="batas">
                            </div>
                          </div>
                      </div>
                    </br>
                      <button type="submit" class="btn btn-primary pull-left">Tambah Bahan</button>
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
