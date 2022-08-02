@extends('layout.master')
@extends('layout.sidebar')
@extends('layout.wrap')

@section('content')



  <div class="row">

    <div class="card">
        <div class="card-header">
            <h3>Data Karyawan</h3>
            <form action="/hrd/datauser/" method="get">
                @csrf


                {{-- @if ($mulai == null && $selesai == null)

                <input name="mulai" type="date"  value="<?php echo date('Y-m-d')?>"/>
                <input name="selesai" type="date" value="<?php echo date('Y-m-d')?>"/>

                @else

                <input name="mulai" type="date"  value="{{ $mulai }}"/>
                <input name="selesai" type="date" value="{{ $selesai }}"/>

                @endif --}}
                <table>
                    <tr>
                        <td><select id="inputState" aria-label="Default select example"  name="divisi" class="form-control">
                            <option selected>--  Silahkan Pilih Jabatan --</option>
                            <option value="hrd" >hrd</option>
                          <option value="karyawan" >karyawan</option>
                          <option value="direktur">direktur</option>
                        </select></td>
                        <td><button class="btn btn-secondary" type="submit">Filter </button></td>
                    </tr>

            </table>





            </form>
            <br>
           <a href="/hrd/exportuser" target="_blank"><button  class="btn btn-info">Export Karyawan</button></a>


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
                        {{-- <th>Npwp</th> --}}
                        <th>No hp</th>
                        {{-- <th> status Pernikahan</th> --}}
                        <th>no Backup</th>
                        {{-- <th>Jam Kehadiran Rata-Rata</th> --}}
                        <th>Opsi</th>
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
                        {{-- <td>{{ $u->npwp }}</td> --}}
                        <td>{{ $u->no_hp }}</td>
                        {{-- <td>{{ $u->status }}</td> --}}
                        <td>{{ $u->no_backup }}</td>
                        {{-- <td>12 menit</td> --}}
                        <td><a href="/hrd/user/read/{{$u->id}}" class="btn btn-success">Read</a>
                            <a href="/hrd/user/edit/{{$u->id}}" class="btn btn-info">Edit</a>
                            <a href="/hrd/user/destroy/{{$u->id}}"  class="btn btn-danger delete-confirm" role="button">Delete</a></td>
                      </tr>
                @endforeach
            </table>
        </div>

    </div>




  </div>






@endsection

@extends('layout.endwrap')


