@extends('layout.master')
@extends('layout.sidebar')
@extends('layout.wrap')

@section('content')



  <div class="row">

    <div class="card">
        <div class="card-header">
            <h3>Data User</h3>


        </div>

        <div class="card-body">
            <table class="table table-striped">

                <tr>
                    <tr>
                        <th>id</th>
                        <th>foto</th>
                        <th>name</th>
                        {{-- <th>password</th> --}}
                        <th>Email</th>
                        <th>jabatan</th>
                        <th>gender</th>
                        <th>alamat</th>
                        <th>nik</th>
                        <th>Npwp</th>
                        <th>No hp</th>
                        <th>opsi</th>
                        {{-- <th> status Pernikahan</th> --}}
                        {{-- <th>no Backup</th> --}}
                        {{-- <th>Jam Kehadiran Rata-Rata</th> --}}
                        {{-- <th>Opsi</th> --}}
                      </tr>
                      {{-- @foreach ($nama as $a)
                      <tr>
                        <td>{{ $a->nama->name}}</td>
                      @endforeach --}}

                      @foreach ($data as $u )
                      <tr>
                        <td>{{ $u->no_identitas}}</td>
                        <td><img src="{{ asset('foto/'.$u->foto) }}" width="100px" alt=""></td>
                        <td>{{ $u->name}}</td>
                        {{-- <td>{{ $u->password }}</td> --}}
                        <td>{{ $u->email }}</td>
                        <td>{{ $u->jabatan }}</td>
                        <td>{{ $u->gender}}</td>
                        <td>{{ $u->alamat }}</td>
                        <td>{{ $u->nik }}</td>
                        <td>{{ $u->npwp }}</td>
                        <td>{{ $u->no_hp }}</td>
                        {{-- <td>{{ $u->status }}</td> --}}
                        {{-- <td>{{ $u->no_backup }}</td> --}}
                        {{-- <td>12 menit</td> --}}
                        <td><a href="/direktur/user/read/{{$u->id}}" class="btn btn-info">Read</a><td>
                      </tr>
                @endforeach
            </table>
        </div>

    </div>




  </div>






@endsection

@extends('layout.endwrap')


