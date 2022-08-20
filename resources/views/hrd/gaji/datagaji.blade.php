@extends('layout.master')
@extends('layout.sidebar')
@extends('layout.wrap')

@section('content')




            <div class="card">
                <div class="card-header">
                    <h3>Data Gaji</h3>

                </div>

                <div class="card-body">
                    <table class="table table-striped">

                        <tr>
                            <th>id</th>
                            <th>nama</th>
                            <th>Posisi</th>
                            <th>Gaji / Hari</th>



                        </tr>
                          @foreach ($all as $u )
                          @php
                                    $Gaji_hari  = number_format($u->Gaji_Hari,2,",",".");
                            @endphp
                        <tr>
                            <td><a href="/hrd/read/datagaji/{{ $u->user_id }}"> {{App\Models\User::find($u->user_id)->no_identitas}} </a></td>
                            <td>{{ App\Models\User::find($u->user_id)->name }}</td>
                            <td>{{ App\Models\Posisi::find($u->user_id)->name }} </td>
                            <td><?php echo 'Rp. '.$Gaji_hari  ?></td>


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


