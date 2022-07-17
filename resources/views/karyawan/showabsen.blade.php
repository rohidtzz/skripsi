@extends('layout.master')
@extends('layout.sidebar')
@extends('layout.wrap')

@section('content')

<div class="row">
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-info">
        <div class="inner">
          <h3>{{$JumlahHadir}}</h3>

          <p>Jumlah Masuk</p>
        </div>
        <div class="icon">
          <i class="ion ion-bag"></i>
        </div>
        <a href="{{ url('karyawan/lihatabsen/masuk') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-success">
        <div class="inner">
          <h3>{{$JumlahTelat}}</h3>

          <p>Jumlah Telat</p>
        </div>
        <div class="icon">
          <i class="ion ion-stats-bars"></i>
        </div>
        <a href="{{ url('karyawan/lihatabsen/telat') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-warning">
        <div class="inner">
          <h3>{{$JumlahSakit}}</h3>

          <p>Jumlah Sakit</p>
        </div>
        <div class="icon">
          <i class="ion ion-person-add"></i>
        </div>
        <a href="{{ url('karyawan/lihatabsen/sakit') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-danger">
        <div class="inner">
          <h3>{{$JumlahAlpha}}</h3>

          <p>Jumlah Alpha</p>
        </div>
        <div class="icon">
          <i class="ion ion-pie-graph"></i>
        </div>
        <a href="{{ url('karyawan/lihatabsen/alpha') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->

    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
          <div class="inner">
            <h3>{{$JumlahIzin}}</h3>

            <p>Jumlah Izin</p>
          </div>
          <div class="icon">
            <i class="ion ion-pie-graph"></i>
          </div>
          <a href="{{ url('karyawan/lihatabsen/izin') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
  </div>

  <div class="row">

    <div class="card">
        <div class="card-header">
            <h3>Data Absen</h3>
            <h5>jumlah Absen: {{$JumlahAbsen}}</h5>
            <form action="/karyawan/LihatAbsen/" method="get">
                @csrf

                {{-- @if (!$mulai && !$selesai)
                <input name="mulai" type="date" id="myDate" value="{{$mulai}}"/>
                <input name="selesai" type="date" id="myDate" value="{{$selesai}}"/>

                @else --}}
                <input name="mulai" type="date" id="myDate" value="<?php echo date('Y-m-d');?>"/>
                <input name="selesai" type="date" id="myDate" value="<?php echo date('Y-m-d');?>"/>
                {{-- @endif --}}
                <button class="btn btn-secondary" type="submit">submit </button>
            </form>

            <script>
                document.getElementById('myDate').value = new Date().slice(0,10);
            </script>

        </div>

        <div class="card-body">
            <table class="table table-striped">

                <tr>
                    <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>jabatan</th>
                        <th>keterangan</th>
                        <th>Tanggal</th>
                        <th>Jam Masuk</th>
                        <th>Jam Keluar</th>
                        {{-- <th>Jam Kehadiran Rata-Rata</th> --}}
                        {{-- <th>Opsi</th> --}}
                      </tr>
                      {{-- @foreach ($nama as $a)
                      <tr>
                        <td>{{ $a->nama->name}}</td>
                      @endforeach --}}

                      @foreach ($daftarabsen as $u )
                      <tr>
                        <td>{{ App\Models\User::find($u->user_id)->no_identitas}}</td>
                      <td>{{ App\Models\User::find($u->user_id)->name}}</td>
                      <td>{{ App\Models\Posisi::find($u->user_id)->name  }}</td>
                        <td>{{ $u->keterangan }}</td>
                        <td>{{ $u->tanggal}}</td>
                        <td>{{ $u->jam_masuk }} </td>
                        <td>{{ $u->jam_keluar }}</td>
                        {{-- <td>12 menit</td> --}}
                        {{-- <td><a href="/karyawan/absen/edit/{{$u->id}}" class="btn btn-info">Edit</a>
                            <a href="/karyawan/absen/destroy/{{$u->id}}"  class="btn btn-danger">Delete</a></td> --}}
                      </tr>
                @endforeach
            </table>
        </div>

    </div>




  </div>





@endsection

@extends('layout.endwrap')


