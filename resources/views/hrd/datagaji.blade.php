@extends('layout.master')
@extends('layout.sidebar')
@extends('layout.wrap')

@section('content')











        <div class="row">

            <div class="card">
                <div class="card-header">
                    <h3>Data Gaji</h3>
                    @if (Auth()->user()->jabatan == 'hrd')


                    <a  href="/hrd/datagaji/exportpdf"><button class="btn btn-info">Export Pdf</button></a>
                    <a  href="/hrd/datagaji/exportexcel"><button class="btn btn-info">Export excel</button></a>

                    @elseif (Auth()->user()->jabatan == 'direktur')
                    <a  href="/direktur/datagaji/exportpdf"><button class="btn btn-info">Export Pdf</button></a>
                    <a  href="/direktur/datagaji/exportexcel"><button class="btn btn-info">Export excel</button></a>
                    @else
                    @endif
                </div>

                <div class="card-body">
                    <table class="table table-striped">

                        <tr>
                            <th>id</th>
                            <th>nama</th>
                            <th>total</th>
                            <th>Tanggal</th>
                            <th>status</th>
                            <th>Status Gaji Karyawan</th>

                            <th>opsi</th>

                        </tr>
                          @foreach ($all as $u )
                          @php
        $number_format  = number_format($u->total,2,",",".");
@endphp
                        <tr>
                            <td>{{App\Models\User::find($u->user_id)->no_identitas}}</td>
                            <td>{{ App\Models\User::find($u->user_id)->name }}</td>
                            <td><?php echo 'Rp. ' . $number_format; ?></td>
                            <td>{{ $u->tgl_gaji}}</td>
                            <td>@if($u->status == 'belum') <span class="badge badge-danger">{{$u->status == 'belum' ? 'Belum Lunas':''}}</span> @else <span class="badge badge-success">{{$u->status == 'lunas' ? 'lunas':''}}</span> @endif </td>
                            <td>{{ $u->status_gaji }}</td>
                            <td>
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
                                @if (Auth()->user()->jabatan == 'hrd')


                                <a href="/hrd/gaji/read/{{$u->id}}" class="btn btn-success">Read</a>
                                <a style="padding-left: 10px" href="/hrd/gaji/edit/{{$u->id}}" class="btn btn-info">Edit</a>
                                <a href="/hrd/gaji/destroy/{{$u->id}}"  class="btn btn-danger delete-confirm" role="button">Delete</a>
                                @else
                                @if (Auth()->user()->jabatan == 'direktur')
                                <a href="/direktur/gaji/read/{{$u->id}}" class="btn btn-success">Read</a>
                                @else
                                <a href="/karyawan/gaji/read/{{$u->id}}" class="btn btn-success">Read</a>
                                @endif
                                @endif

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


