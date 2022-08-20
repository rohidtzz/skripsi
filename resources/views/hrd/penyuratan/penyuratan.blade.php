@extends('layout.master')
@extends('layout.sidebar')
@extends('layout.wrap')

@section('content')




  <div class="row">

    <div class="card">
        <div class="card-header">
            <h3>Data Absen</h3>
            <h5>jumlah Absen: {{$JumlahAbsen}}</h5>
            <form action="/hrd/penyuratan/" method="get">
                @csrf


                @if ($mulai == null)

                <input name="mulai" type="date"  value="<?php echo date('Y-m-d')?>"/>
                {{-- <input name="selesai" type="date" value=""/> --}}

                @else

                <input name="mulai" type="date"  value="{{ $mulai }}"/>

                @endif





                <button class="btn btn-secondary" type="submit">submit </button>
            </form>


        </div>

        <div class="card-body">
            <table class="table table-striped">


                    <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>Divisi</th>
                        <th>Berapa Alpha Dalam Bulan Ini</th>
                        {{-- <th>Tanggal</th> --}}

                        {{-- <th>Jam Kehadiran Rata-Rata</th> --}}
                        <th>Opsi</th>
                      </tr>
                      {{-- @foreach ($nama as $a)
                      <tr>
                        <td>{{ $a->nama->name}}</td>
                      @endforeach --}}

                      @foreach ($user as $u )
                      <tr>
                        <td>{{ $u->no_identitas }}</td>
                        <td>{{ $u->name }}</td>
                        <td>{{ App\Models\Posisi::find($u->id)->name  }}</td>

                        {{-- <td>{{ App\Models\User::find($u->user_id)->no_identitas}}</td>
                      <td>{{ App\Models\User::find($u->user_id)->name}}</td>
                      <td>{{ App\Models\Posisi::find($u->user_id)->name  }}</td> --}}
                      <td>
                            {{ $u->getabsen()->whereYear('tanggal' , $datetahun)->whereMonth('tanggal' , $datebulan)->whereTime('jam_masuk', '>=', $jammasuklebih10)->whereTime('jam_masuk', '<=', $jamkeluarkurang5)->orderBy('tanggal','desc')->get()->count()}}
                            {{-- {{ $u->getabsen->first()->whereYear('tanggal' , $datetahun)->whereMonth('tanggal' , $datebulan)->whereTime('jam_masuk', '>=', $jammasuklebih10)->whereTime('jam_masuk', '<=', $jamkeluarkurang5)->orderBy('tanggal','desc')->get()}} --}}


                    </td>
                      {{-- <td>{{ $u->keterangan }}</td> --}}
                      {{-- <td>{{ $u->tanggal}}</td> --}}
                      {{-- <td>{{ $u->whereTime('jam_masuk', '>=', $jammasuklebih10)->whereTime('jam_masuk', '<=', $jamkeluarkurang5)->count() }}</td> --}}

                        {{-- <td>12 menit</td> --}}
                        <td>
                            <a href="/hrd/penyuratan/kirim/{{$u->id}}/{{$u->getabsen()->whereYear('tanggal' , $datetahun)->whereMonth('tanggal' , $datebulan)->whereTime('jam_masuk', '>=', $jammasuklebih10)->whereTime('jam_masuk', '<=', $jamkeluarkurang5)->orderBy('tanggal','desc')->get()->count()}}" class="btn btn-danger">Beri Peringatan</a>
                            {{-- <a href="/hrd/penyuratan/show/{{$u->id}}" class="btn btn-info">Edit</a> --}}

                            {{-- <a href="/hrd/absen/destroy/{{$u->id}}"  class="btn btn-danger delete-confirm" role="button">Delete</a></td> --}}
                      </tr>
                @endforeach

            </table>
        </div>

    </div>










@endsection

@extends('layout.endwrap')


