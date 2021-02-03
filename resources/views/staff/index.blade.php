@extends('layouts.master')


@section('content')

<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
							<!-- TABLE HOVER -->
							<div class="panel">
								<div class="panel-heading">
                                    <h3 class="panel-title">Data Staff</h3>
                                    <div class="right">
                                        <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal">
                                            <i class="lnr lnr-plus-circle"></i>
                                        </button>
                                    </div>
								</div>
								<div class="panel-body">
									<table class="table table-hover">
										<thead>
											<tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Username</th>
                                                <th>Role</th>
                                                <th>Aksi</th>
											</tr>
										</thead>
										<tbody>
                                            <?php $no = 0;?>
                                            @foreach($data_staff as $staff)
                                            <?php $no++ ;?>
                                            <tr>
                                                <td>{{$no}}</td>
                                                <td>{{$staff->name}}</td>
                                                <td>{{$staff->username}}</td>
                                                <td>
                                                    @if($staff->role == '1') Super Admin
                                                    @elseif($staff->role == '2') Manager
                                                    @elseif($staff->role == '3') Staff
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="/staff/{{$staff->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                                                    <a href="/staff/{{$staff->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Hapus data ?')">Delete</a>
                                                </td>
                                            </tr>
                                            @endforeach
										</tbody>
									</table>
								</div>
							</div>
                            <!-- END TABLE HOVER -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Staff</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    <form action="/staff/create" method="POST">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input name="name" type="text" class="form-control" id="exampleInputEmail1" placeholder="Name" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Username</label>
                        <input name="username" type="text" class="form-control" id="exampleInputEmail1" placeholder="Username" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input name="password" type="password" class="form-control" placeholder="Password" id="exampleInputPassword1">
                    </div>
                    
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    </div>
                    </div>
                </div>
                </div> 
@stop