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
                                    <h3 class="panel-title">Data Users</h3>
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
                                                <th>Nama</th>
                                                <th>Username</th>
                                                <th>Password</th>
                                                <th>role</th>
                                                <th>Aksi</th>
											</tr>
										</thead>
										<tbody>
                                            @foreach($data_users as $users)
                                            <tr>
                                                <td>{{$users->name}}</td>
                                                <td>{{$users->username}}</td>
                                                <td>{{$users->password}}</td>
                                                <td>{{$users->role}}</td>
                                                <td>
                                                    <a href="/users/{{$users->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                                                    <a href="/users/{{$users->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Hapus data ?')">Delete</a>
                                                <td>
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
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    <form action="/users/create" method="POST">
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
                    <div class="form-group">
                        <label for="exampleInputPassword1">Role</label>
                        <select name="role" class="form-control" id="example">
                            <option value="1">Super Admin</option>
                            <option value="2">Manager</option>
                            <option value="3">Staff</option>
                        </select>
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