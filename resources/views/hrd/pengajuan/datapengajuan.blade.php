@extends('layout.master')
@extends('layout.sidebar')
@extends('layout.wrap')

@section('content')











            <div class="card">
                <div class="card-header">
                    <h3>Data Pengajuan</h3>
                </div>

                <div class="card-body">
                    <table class="table table-striped">

                        <tr>
                            <th>id</th>
                            <th>nama</th>
                            <th>keterangan</th>
                            <th>alasan</th>
                            <th>Tanggal</th>
                            <th>tgl Mulai</th>
                            <th> tgl Selesai</th>
                            <th>Jam Mulai</th>
                            <th>Jam Selesai</th>
                            <th>berapa jam lembur</th>
                            <th>status</th>
                            <th>opsi</th>
                        </tr>
                          @foreach ($all as $u )
                        <tr>
                            <td>{{App\Models\User::find($u->user_id)->no_identitas}}</td>
                            <td>{{ App\Models\User::find($u->user_id)->name }}</td>
                            <td>{{ $u->keterangan }}</td>
                            <td>  <textarea disabled name="alasan"  class="form-control" placeholder="alasan" required>{{ $u->alasan }}</textarea> </td>
                            <td>{{ $u->tanggal}}</td>
                            <td>{{ $u->mulai }} </td>
                            <td>{{ $u->selesai }}</td>
                            <td>{{ $u->jam_mulai  }}</td>
                            <td>{{ $u->jam_selesai }}</td>
                            <td>{{ $u->jam_lembur }}</td>
                            <td>{{ $u->status}}</td>


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
                                @if ($u->status == 'pending')



                                <a href="/hrd/pengajuan/terima/{{$u->id}}" class="btn btn-success">Terima</a>
                                <a href="/hrd/pengajuan/tolak/{{$u->id}}"  class="btn btn-dark">Tolak</a>

                                <a style="padding-left: 10px" href="/hrd/pengajuan/edit/{{$u->id}}" class="btn btn-info">Edit</a>
                                <a href="/hrd/pengajuan/destroy/{{$u->id}}"  class="btn btn-danger delete-confirm" role="button">Delete</a>

                                @else
                                <a style="padding-left: 10px" href="/hrd/pengajuan/edit/{{$u->id}}" class="btn btn-info">Edit</a>
                                <a href="/hrd/pengajuan/destroy/{{$u->id}}"  class="btn btn-danger delete-confirm" role="button">Delete</a>
                                @endif
                                {{-- <a href="/hrd/pengajuan/edit/{{$u->id}}" class="btn btn-info">Edit</a>
                                <a href="/hrd/pengajuan/destroy/{{$u->id}}"  class="btn btn-danger">Delete</a></td> --}}
                        </tr>
                        @endforeach
                    </table>
                </div>

            </div>




</div>






@endsection

@extends('layout.endwrap')


