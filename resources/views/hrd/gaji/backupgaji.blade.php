@extends('layout.master')
@extends('layout.sidebar')
@extends('layout.wrap')

@section('content')











        <div class="row">

            <div class="card">
                <div class="card-header">
                    <h3>Jatah Gaji</h3>

                    {{-- @if (Auth()->user()->jabatan == 'hrd')


                    <a  href="/hrd/datagaji/exportpdf"><button class="btn btn-info">Export Pdf</button></a>
                    <a  href="/hrd/datagaji/exportexcel"><button class="btn btn-info">Export excel</button></a>

                    @elseif (Auth()->user()->jabatan == 'direktur')
                    <a  href="/direktur/datagaji/exportpdf"><button class="btn btn-info">Export Pdf</button></a>
                    <a  href="/direktur/datagaji/exportexcel"><button class="btn btn-info">Export excel</button></a>
                    @else
                    @endif --}}
                </div>

                <div class="card-body">
                    <table class="table table-striped">

                        <tr>
                            <th>id</th>
                            <th>nama</th>
                            <th>Gaji Pokok</th>
                            <th>Gaji Perjam</th>
                            <th>Total</th>


                            <th>opsi</th>

                        </tr>
                          @foreach ($user as $u )
                          @php
                                    $perjam = number_format($u->Gaji_Perjam,2,",",".");
                                    $tetap  = number_format($u->Gaji,2,",",".");
                            @endphp
                        <tr>

                            <td>{{ $u->no_identitas}}</td>
                            <td>{{ $u->name }}</td>
                            <td>{{ $u->getjatahgaji()->get()[0]['Gaji'] }}</td>
                            <td>{{ $u->getjatahgaji()->get()[0]['Gaji_Perjam'] }}</td>
                            <td></td>

                            {{-- <td>{{App\Models\User::find($u->user_id)->no_identitas}}</td>
                            <td>{{ App\Models\User::find($u->user_id)->name }}</td> --}}


                            {{-- <td>@if($u->status == 'belum') <span class="badge badge-danger">{{$u->status == 'belum' ? 'Belum Lunas':''}}</span> @else <span class="badge badge-success">{{$u->status == 'lunas' ? 'lunas':''}}</span> @endif </td>
                            <td>{{ $u->status_gaji }}</td> --}}
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


                                {{-- <a href="/hrd/gaji/read/{{$u->id}}" class="btn btn-success">Read</a> --}}
                                <a style="padding-left: 10px" href="/hrd/gaji/edit/{{$u->id}}" class="btn btn-info">Acc</a>
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


