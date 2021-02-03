@extends('layouts.master')

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                <div class="panel">
								<div class="panel-heading">
                                    <h3 class="panel-title">Edit Staff</h3>
								</div>
								<div class="panel-body">
									<form action="/staff/{{$staff->id}}/update" method="POST">
                                            {{csrf_field()}}
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Name</label>
                                                <input name="name" value="{{$staff->name}}" type="text" class="form-control" id="exampleInputEmail1" placeholder="Name" aria-describedby="emailHelp">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Username</label>
                                                <input name="username" value="{{$staff->username}}"  type="text" class="form-control" id="exampleInputEmail1" placeholder="Username" aria-describedby="emailHelp">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Password</label>
                                                <input name="password" value="{{$staff->password}}"  type="text" class="form-control" placeholder="Password" id="exampleInputPassword1">
                                            </div>
                                            <button type="submit" class="btn btn-warning">Update</button>
                                            <button href="/staff" class="btn btn-primary">Kembali</button>
                                    </form>
								</div>
							</div>
                </div>
            </div>
        </div>
    </div>
</div>


@stop