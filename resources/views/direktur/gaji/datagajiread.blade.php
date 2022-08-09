@extends('layout.master')
@extends('layout.sidebar')
@extends('layout.wrap')

@section('content')











        <div class="row">

            <div class="card">
                <div class="card-header">
                    <h3>Data Gaji</h3>


                    <a  href="/direktur/slipgaji/{{ $all->first()->id }}"><button class="btn btn-info">Cetak SLip Gaji</button></a>
                </div>

                <div class="card-body">
                    <table class="table table-striped">

                        <tr>
                            <th>id</th>
                            <th>nama</th>
                            <th>uang tambahan</th>
                            <th>gaji pokok</th>
                            <th>uang lembur</th>
                            <th>potongan Asuransi</th>
                            <th>Uang Transportasi</th>
                            <th>jumlah lembur</th>
                            <th>Tanggal</th>
                            <th>status</th>
                            <th>total</th>
                            <th>status Gaji Karyawan</th>
                            {{-- <th>opsi</th> --}}
                        </tr>
                          @foreach ($all as $u )
                          @php
                          $total  = number_format($u->total,2,",",".");
                          $tambahan  = number_format($u->uang_tambahan,2,",",".");
                          $gajipokok  = number_format($u->gaji_pokok,2,",",".");
                          $lembur  = number_format($u->uang_overtime,2,",",".");
                          $asuransi  = number_format($u->pot_bpjs,2,",",".");
                          $transportasi  = number_format($u->transportasi,2,",",".");
                          $lemburjam  = number_format($u->jumlah_overtime,2,",",".");
                  @endphp
                        <tr>
                            <td>{{ App\Models\User::find($u->user_id)->no_identitas }}</td>
                            <td>{{ App\Models\User::find($u->user_id)->name }}</td>
                            <td><?php echo 'Rp. ' . $tambahan; ?></td>
                            <td><?php echo 'Rp. ' . $gajipokok; ?></td>
                            <td><?php echo 'Rp. ' . $lembur; ?></td>
                            <td><?php echo 'Rp. ' . $asuransi; ?></td>
                            <td><?php echo 'Rp. ' . $transportasi; ?></td>
                            <td><?php echo 'Rp. ' . $lemburjam; ?></td>

                            <td>{{ $u->tgl_gaji}}</td>
                            <td>@if($u->status == 'belum') <span class="badge badge-danger">{{$u->status == 'belum' ? 'Belum Lunas':''}}</span> @else <span class="badge badge-success">{{$u->status == 'lunas' ? 'lunas':''}}</span> @endif </td>
                            <td><?php echo 'Rp. ' . $total; ?></td>
                            <td>{{ $u->status_gaji }}</td>
                                {{-- <table >
                                    <tr>
                                        <td><a href="/hrd/pengajuan/edit/{{$u->id}}" class="btn btn-info">Edit</a>
                                            </td>
                                            <td><a href="/hrd/pengajuan/destroy/{{$u->id}}"  class="btn btn-danger">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <a href="/hrd/pengajuan/edit/{{$u->id}}" class="btn btn-info">Edit</a>
                                    </td>
                                    <td><a href="/hrd/pengajuan/destroy/{{$u->id}}"  class="btn btn-danger">Delete</a></td>
                                    </tr>

                                </table> --}}

                                {{-- <a href="/hrd/gaji/read/{{$u->id}}" class="btn btn-success">Read</a>

                                <a style="padding-left: 10px" href="/hrd/gaji/edit/{{$u->id}}" class="btn btn-info">Edit</a>
                                <a href="/hrd/gaji/destroy/{{$u->id}}"  class="btn btn-danger delete-confirm" role="button">Delete</a> --}}

                                {{-- <a href="/hrd/pengajuan/edit/{{$u->id}}" class="btn btn-info">Edit</a>
                                <a href="/hrd/pengajuan/destroy/{{$u->id}}"  class="btn btn-danger">Delete</a></td> --}}
                        </tr>
                        @endforeach
                    </table>
                </div>

            </div>

    </div>



</div>






@endsection

@extends('layout.endwrap')


