@extends('layouts.master')

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                <div class="panel">
								<div class="panel-heading">
                                    <h3 class="panel-title">Edit Users</h3>
								</div>
								<div class="panel-body">
									<form action="/users/{{$users->id}}/update" method="POST">
                                            {{csrf_field()}}
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Name</label>
                                                <input name="name" value="{{$users->name}}" type="text" class="form-control" id="exampleInputEmail1" placeholder="Name" aria-describedby="emailHelp">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Username</label>
                                                <input name="username" value="{{$users->username}}"  type="text" class="form-control" id="exampleInputEmail1" placeholder="Username" aria-describedby="emailHelp">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Password</label>
                                                <input name="password" value="{{$users->password}}"  type="text" class="form-control" placeholder="Password" id="exampleInputPassword1">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Role</label>
                                                <select name="role" class="form-control" id="example">
                                                    <option value="1" @if($users->role == '1')selected @endif>Super Admin</option>
                                                    <option value="2" @if($users->role == '2')selected @endif>Manager</option>
                                                    <option value="3" @if($users->role == '3')selected @endif>Staff</option>
                                                </select>
                                            </div>   
                                            <button type="submit" class="btn btn-warning">Update</button>
                                            <button href="/users" class="btn btn-primary">Kembali</button>
                                    </form>
								</div>
							</div>
                </div>
            </div>
        </div>
    </div>
</div>


@stop
@section('content1')
            <h1>Edit Data User</h1>
            @if(session('success'))
            <div class="alert alert-success" role="alert">
                {{session('success')}}
            </div>
            @endif
            <div class="row">
            <div class="col-lg-12">
                     
            <form action="/users/{{$users->id}}/update" method="POST">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input name="name" value="{{$users->name}}" type="text" class="form-control" id="exampleInputEmail1" placeholder="Name" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Username</label>
                        <input name="username" value="{{$users->username}}"  type="text" class="form-control" id="exampleInputEmail1" placeholder="Username" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input name="password" value="{{$users->password}}"  type="password" class="form-control" placeholder="Password" id="exampleInputPassword1">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Role</label>
                        <select name="role" class="form-control" id="example">
                            <option value="1" @if($users->role == '1')selected @endif>Super Admin</option>
                            <option value="2" @if($users->role == '2')selected @endif>Manager</option>
                            <option value="3" @if($users->role == '3')selected @endif>Staff</option>
                        </select>
                    </div>   
                    <button type="submit" class="btn btn-warning">Update</button>
            </form>

            </div>
            </div>
            @endsection
