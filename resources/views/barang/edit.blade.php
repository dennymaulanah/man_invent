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
									<form action="/barang/{{$barang->id}}/update" method="POST">
                                            {{csrf_field()}}
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Nama</label>
                                                <input name="nama" value="{{$barang->nama}}" type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama" aria-describedby="emailHelp">
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Kategori</label>
                                                <select name="kategori" class="form-control" id="example">
                                                    @foreach($kategori as $kategori)
                                                    <option value="{{$kategori->nama}}" {{ $kategori->nama == $barang->kategori ? 'selected' : ''  }} >{{$kategori->nama}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Jumlah</label>
                                                <input name="jumlah" value="{{$barang->jumlah}}"  type="text" class="form-control" id="exampleInputEmail1" placeholder="Jumlah" aria-describedby="emailHelp">
                                            </div>
                                            <button type="submit" class="btn btn-warning">Update</button>
                                            <button href="/barang" class="btn btn-primary">Kembali</button>
                                    </form>
								</div>
							</div>
                </div>
            </div>
        </div>
    </div>
</div>


@stop