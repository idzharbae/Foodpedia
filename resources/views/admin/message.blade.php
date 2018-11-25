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
                            <p><a href = "#" data-toggle="modal" data-target="#modal-delete-{{$pesan->id}}"><i class="material-icons">cancel</i></a></p>
                          </td>
                          <div class="modal fade" id="modal-delete-{{$pesan->id}}" tabIndex="-1">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal">
                                        ×
                                      </button>
                                      <h4 class="modal-title">Please Confirm</h4>
                                    </div>
                                    <div class="modal-body">
                                      <p class="lead">
                                        <i class="fa fa-question-circle fa-lg"></i>  
                                        Are you sure you want to delete this Court?
                                      </p>
                                    </div>
                                    <div class="modal-footer">
				                                <a href="{{ url('/admin/message/delete/'.$pesan->id) }}" class="btn btn-secondary">Delete</a>
                                        <button type="button" class="btn btn-default"
                                                data-dismiss="modal">Close</button>
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
@endsection
