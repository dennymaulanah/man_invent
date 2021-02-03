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
                                            @foreach($data_ruangan as $ruangan)
                                            <?php $no++ ;?>
                                            <tr>
                                                <td>{{$no}}</td>
                                                <td>{{$ruangan->nama}}</td>
                                                <td>{{$ruangan->kategori}}</td>
                                                <td>{{$ruangan->jumlah}}</td>
                                            </tr>
                                            @endforeach
										</tbody>
									</table>