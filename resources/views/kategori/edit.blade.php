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
									<form action="/kategori/{{$kategori->id}}/update" method="POST">
                                            {{csrf_field()}}
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Nama</label>
                                                <input name="nama" value="{{$kategori->nama}}" type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama" aria-describedby="emailHelp">
                                            </div>
                                            <button type="submit" class="btn btn-warning">Update</button>
                                            <button href="/kategori" class="btn btn-primary">Kembali</button>
                                    </form>
								</div>
							</div>
                </div>
            </div>
        </div>
    </div>
</div>


@stop