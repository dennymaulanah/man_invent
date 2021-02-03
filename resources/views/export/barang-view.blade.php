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