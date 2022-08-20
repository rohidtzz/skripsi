@extends('layout.master')
@extends('layout.sidebar')
@extends('layout.wrap')

@section('content')











        <div class="row">

            <div class="card">
                <div class="card-header">
                    <h3>Data Penyuratan</h3>
                </div>

                <div class="card-body">
                    <table class="table table-striped">

                        <tr>
                            <th>id</th>
                            <th>nama</th>
                            <th>Deskripsi</th>
                            <th>jumlah Alpha</th>
                            <th>tanggal</th>


                        </tr>
                          @foreach ($data as $u )
                        <tr>
                            <td>{{App\Models\User::find($u->to_user_id)->no_identitas}}</td>
                            <td>{{ App\Models\User::find($u->to_user_id)->name }}</td>
                            <td><textarea disabled name="deskripsi"  class="form-control" placeholder="deskripsi" required>{{ $u->deskripsi }}</textarea></td>
                            <td> {{ $u->alpha }} </td>
                            <td>{{ $u->tanggal}}</td>


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



</div>






@endsection

@extends('layout.endwrap')


