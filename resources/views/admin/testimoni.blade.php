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
      <li class="tabss"><a data-toggle="tab" href="#testimoni">Daftar Testimoni</a></li>
      <li class="tabss"><a data-toggle="tab" href="#tambahtestimoni">Tambah Testimoni</a></li>
    </ul>


      <div class="tab-content">

        <div id="testimoni" class="tab-pane active">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Daftar</h4>
                  <p class="card-category">Daftar testimoni yang sudah dibuat.</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          Nama
                        </th>
                        <th>
                          Message
                        </th>
                        <th>
                          Gambar
                        </th>
                        <th>
                          Status
                        </th>
                      </thead>
                      <tbody>
                        @foreach($testimoni as $item)
                        <tr>
                          <td>
                            {{$item->name}}
                          </td>
                          <td>
                            {{$item->message}}
                          </td>
                          <td>
                            <img class="img-responsive img-cover-profile" src="{{asset($item->image)}}" alt="">
                          </td>
                          <td>
                            edit[x]
                          </td>
                        </tr>
                        @endforeach
                        <tr>
                          <td>
                            Alvin Reinaldo
                          </td>
                          <td>
                            Keren banget webnya
                          </td>
                          <td>
                            img
                          </td>
                          <td>
                            edit[x]
                          </td>
                        </tr>
                        <tr>
                          <td>
                            Pencinta Nasgor
                          </td>
                          <td>
                            Nasgor disini enak.
                          </td>
                          <td>
                            img
                          </td>
                          <td>
                            edit[x]
                          </td>
                        </tr>
                        <tr>
                          <td>
                            Netizen
                          </td>
                          <td>
                            Web kayak gini anak sd juga bisa bikin.
                          </td>
                          <td>
                            img
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

        <div id="tambahtestimoni" class="tab-pane">
          <div class="row">
            <div class="col-md-12">
              <div class="card card-plain">
                <div class="card-header card-header-primary">
                  <h4 class="card-title mt-0">Tambah Baru</h4>
                  <p class="card-category">Tambah testimoni baru ke daftar</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <form class="form-horizontal needs-validation" novalidate method="POST"  action="{{ url('admin/testimoni/save') }}" enctype="multipart/form-data" >
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
                      		<div class="col-md-12">
                      		  <div class="form-group">
                      		    <label>Message</label>
                      		    <textarea class="form-control" rows="5" name = "message"></textarea>
                      		  </div>
                      		</div>
                    	</div>
                    	<div class="row">
                    		<div class="col-md-5">
                      		  <div>
                      		    <label>Gambar</label><br>
                      		    <img class="img-responsive img-cover img-center mb-2" id="preview" src="" style="display:none;" >
                      		   <input type="file" name="image" id="img" required>
                      		  </div>
                      		</div>
                    	</div><br><br>
                    	<button type="submit" class="btn btn-primary pull-left">Tambah Testimoni</button>
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

@section('script')
 <script type="text/javascript">
    function preview(input) {
        if (input.files && input.files[0]) {
            var freader = new FileReader();
            freader.onload = function (e) {
                $("#preview").show();
                $('#preview').attr('src', e.target.result);
            }
            freader.readAsDataURL(input.files[0]);
        }
    }

    $("#img").change(function(){
        preview(this);
    });
</script>
@endsection
