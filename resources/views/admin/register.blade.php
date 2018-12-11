@extends('layout.adminlayout')
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
    <li class="tabss"><a data-toggle="tab" href="#register">Register Admin</a></li>
    <li class="tabss"><a data-toggle="tab" href="#list">List Admin</a></li>
</ul>
<div class="tab-content">

<div id="register" class="tab-pane {{ count($errors)==0 ? 'active' : '' }}">
  <div class="row">
    <div class="col-md-12">
      <div class="card card-plain">
        <div class="card-header card-header-primary">
          <h4 class="card-title mt-0">Admin Baru</h4>
          <p class="card-category">Tambah admin baru</p>
        </div>
        <div class="card-body">

          <div class="table-responsive">
            <table class="table table-hover">
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                        @if ($errors->has('name'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                        @if ($errors->has('email'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                        @if ($errors->has('password'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                    </div>
                </div>
                <div class="row" style="margin-left: 35px;">
                  <label>Akses ke fitur: </label>
                </div>

                <div class="row" style="margin-left: 20px;">
                  <div class="col-md-1">
                      <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="privileges[]" value="1">
                          <span class="form-check-sign">
                            <span class="check"></span>
                          </span>
                          Absen
                        </label>
                      </div>
                    </div>
                    <div class="col-md-1">
                      <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="privileges[]" value="2">
                          <span class="form-check-sign">
                            <span class="check"></span>
                          </span>
                          Register Admin
                        </label>
                      </div>
                    </div>

                    <div class="col-md-1">
                      <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="privileges[]" value="4">
                          <span class="form-check-sign">
                            <span class="check"></span>
                          </span>
                          Bahan Baku
                        </label>
                      </div>
                    </div>

                    <div class="col-md-1">
                      <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="privileges[]" value="8">
                          <span class="form-check-sign">
                            <span class="check"></span>
                          </span>
                          Message
                        </label>
                      </div>
                    </div>

                    <div class="col-md-1">
                      <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="privileges[]" value="16">
                          <span class="form-check-sign">
                            <span class="check"></span>
                          </span>
                          FAQ
                        </label>
                      </div>
                    </div>
                </div>
                <div class="row" style="margin-left: 20px;">
                  <div class="col-md-1">
                      <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="privileges[]" value="32">
                          <span class="form-check-sign">
                            <span class="check"></span>
                          </span>
                          Kolegial
                        </label>
                      </div>
                    </div>
                  <div class="col-md-1">
                      <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="privileges[]" value="64">
                          <span class="form-check-sign">
                            <span class="check"></span>
                          </span>
                          Menu
                        </label>
                      </div>
                    </div>
                    <div class="col-md-1">
                      <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="privileges[]" value="128">
                          <span class="form-check-sign">
                            <span class="check"></span>
                          </span>
                          Banner
                        </label>
                      </div>
                    </div>

                    <div class="col-md-1">
                      <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="privileges[]" value="256">
                          <span class="form-check-sign">
                            <span class="check"></span>
                          </span>
                          Staff
                        </label>
                      </div>
                    </div>

                    <div class="col-md-1">
                      <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="privileges[]" value="512">
                          <span class="form-check-sign">
                            <span class="check"></span>
                          </span>
                          Testimoni
                        </label>
                      </div>
                    </div>
                </div>
                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Register') }}
                        </button>
                    </div>
                </div>
            </form>
            </table>
          </div>
        
        </div>
      </div>
    </div>
  </div>
</div>
<div id="list" class="tab-pane {{ count($errors)>0 ? 'active' : '' }}">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-primary">
          <h4 class="card-title ">Daftar admin</h4>
          <p class="card-category">Daftar admin yang telah register.</p>
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
                          Status
                        </th>
              </thead>
              <tbody>
                      @foreach($human as $item)
                      @if(Auth::user()->id != $item->id)
                        
                <tr>
                  <td>
                            {{$item->name}}
                          </td>
                  <td>
                            {{$item->email}}
                          </td>
                  <td>
                    <p>
                      <a href = "#" data-toggle="modal" data-target="#readArt-{{$item}}">
                        <i class="material-icons">edit</i>
                      </a>
                      <a href = "#" data-toggle="modal" data-target="#modal-delete-{{$item->id}}">
                        <i class="material-icons">cancel</i>
                      </a>
                    </p>
                  </td>
                  <div id="readArt-{{$item}}" class="modal fade" role="dialog" >
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">Edit {{ $item->name }} Data</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form class="form-horizontal needs-validation" novalidate method="POST"  action="{{ url('/admin/register/update/'.$item->id) }}" enctype="multipart/form-data" >
                            @csrf
                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ $item->name }}" required autofocus>

                        @if ($errors->has('name'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $item->email }}" required>

                        @if ($errors->has('email'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('New Password') }}</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                        @if ($errors->has('password'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                    </div>
                </div>

                <div class="row" style="margin-left: 20px;">
                  <div class="col-md-4">
                      <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="privileges[]" value="1" 
                        @if(sprintf("%010d",decbin($item->privilege))[9] == '1')
                          checked
                        @endif
                        >
                          <span class="form-check-sign">
                            <span class="check"></span>
                          </span>
                          Absen
                        </label>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="privileges[]" value="2"
@if(sprintf("%010d",decbin($item->privilege))[8] == '1')
                          checked
                        @endif
                        >
                          <span class="form-check-sign">
                            <span class="check"></span>
                          </span>
                          Register Admin
                        </label>
                      </div>
                    </div>

                    <div class="col-md-4">
                      <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="privileges[]" value="4"
                        @if(sprintf("%010d",decbin($item->privilege))[7] == '1')
                          checked
                        @endif
                        >
                          <span class="form-check-sign">
                            <span class="check"></span>
                          </span>
                          Bahan Baku
                        </label>
                      </div>
                    </div>
</div>
<div class="row" style="margin-left: 20px;">
                    <div class="col-md-4">
                      <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="privileges[]" value="8"
@if(sprintf("%010d",decbin($item->privilege))[6] == '1')
                          checked
                        @endif
                        >
                          <span class="form-check-sign">
                            <span class="check"></span>
                          </span>
                          Message
                        </label>
                      </div>
                    </div>

                    <div class="col-md-4">
                      <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="privileges[]" value="16"
                        @if(sprintf("%010d",decbin($item->privilege))[5] == '1')
                          checked
                        @endif>
                          <span class="form-check-sign">
                            <span class="check"></span>
                          </span>
                          FAQ
                        </label>
                      </div>
                    </div>
                  </div>

                <div class="row" style="margin-left: 20px;">
                  <div class="col-md-4">
                      <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="privileges[]" value="32"
@if(sprintf("%010d",decbin($item->privilege))[4] == '1')
                          checked
                        @endif
                        >
                          <span class="form-check-sign">
                            <span class="check"></span>
                          </span>
                          Kolegial
                        </label>
                      </div>
                    </div>
                  <div class="col-md-4">
                      <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="privileges[]" value="64"
@if(sprintf("%010d",decbin($item->privilege))[3] == '1')
                          checked
                        @endif
                        >
                          <span class="form-check-sign">
                            <span class="check"></span>
                          </span>
                          Menu
                        </label>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="privileges[]" value="128"
@if(sprintf("%010d",decbin($item->privilege))[2] == '1')
                          checked
                        @endif
                        >
                          <span class="form-check-sign">
                            <span class="check"></span>
                          </span>
                          Banner
                        </label>
                      </div>
                    </div>
</div>
<div class="row" style="margin-left: 20px;">
                    <div class="col-md-4">
                      <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="privileges[]" value="256"
@if(sprintf("%010d",decbin($item->privilege))[1] == '1')
                          checked
                        @endif
                        >
                          <span class="form-check-sign">
                            <span class="check"></span>
                          </span>
                          Staff
                        </label>
                      </div>
                    </div>

                    <div class="col-md-4">
                      <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="privileges[]" value="512"
@if( sprintf("%010d",decbin($item->privilege))[0] == '1')
                          checked
                        @endif
                        >
                          <span class="form-check-sign">
                            <span class="check"></span>
                          </span>
                          Testimoni
                        </label>
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
                                <a href="{{ url('/admin/register/delete/'.$item->id) }}" class="btn btn-danger">Delete</a>
                                <button type="button" class="btn btn-default"
                                                data-dismiss="modal">Close</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    
                  </tr>
                        @endif
                      @endforeach
                      
                </tbody>
                 </table>
                </div>
             
            </div>
          </div>
        </div>
        <span style="color: white;">^ = Ya / Tidak</span>
      </div>
    </div>
</div>

@endsection
