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
                                    <h3 class="panel-title">Data Barang</h3>
                                    <div class="right">
                                    <a href="/barang-excel" class="btn btn-warning btn-sm">Excel</a>
                                    <a href="/barang-pdf" class="btn btn-danger btn-sm">PDF</a>
                                    </div>
								</div>
								<div class="panel-body">
									<table class="table table-hover">
										<thead>
											<tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Kategori</th>
                                                <th>Jumlah</th>
											</tr>
										</thead>
										<tbody>
                                            <?php $no = 0;?>
                                            @foreach($data_barang as $barang)
                                            <?php $no++ ;?>
                                            <tr>
                                                <td>{{$no}}</td>
                                                <td>{{$barang->nama}}</td>
                                                <td>{{$barang->kategori}}</td>
                                                <td>{{$barang->jumlah}}</td>
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
@stop