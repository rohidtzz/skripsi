@extends('layout.master')
@extends('layout.sidebar')
@extends('layout.wrap')

@section('content')

<div class="row">

    <div class="card">

        <div class="card-body">


<form action="/karyawan/pengajuan/post" method="post">
@csrf


    <div class="form-group">
    <label for="inputState">keterangan</label>
    <select id="inputState"  name="keterangan" class="form-control">
        <option value="cuti" selected>cuti</option>
      <option value="izin">izin</option>
      <option value="sakit">sakit</option>

    </select>
    </div>

    <label for="inputState">alasan</label>
    <textarea  name="alasan"  class="form-control" placeholder="alasan" required></textarea>

    <label for="inputState">tanggal mulai</label>
    <input type="date" name="mulai"  class="form-control" placeholder="tanggal mulai" required>
    <label for="inputState">tanggal selesai</label>
    <input type="date" name="selesai" class="form-control" placeholder="tanggal selesai" required>
    <br>



    <br><br>
    <button type="submit" class="btn btn-success">Submit</button>
    <button type="reset" class="btn btn-danger">Reset</button>
    {{-- <a href="/hrd/dashboard" class="btn btn-danger">reset</a> --}}




</form>
    </div>
</div>





        </div>



        <div class="row">

            <div class="card">
                <div class="card-header">
                    <h3>Data Absen</h3>
                </div>

                <div class="card-body">
                    <table class="table table-striped">

                        <tr>
                            <th>nama</th>
                            <th>keterangan</th>
                            <th>alasan</th>
                            <th>Tanggal</th>
                            <th>Mulai</th>
                            <th>Selesai</th>
                            <th>status</th>
                          </tr>
                          @foreach ($all as $u )
                          <tr>
                            <td>{{ auth()->user()->name }}</td>
                            <td>{{ $u->keterangan }}</td>
                            <td>  <textarea disabled name="alasan"  class="form-control" placeholder="alasan" required>{{ $u->alasan }}</textarea> </td>
                            <td>{{ $u->tanggal}}</td>
                            <td>{{ $u->mulai }} </td>
                            <td>{{ $u->selesai }}</td>
                            <td>{{ $u->status}}</td>
                          </tr>
                        @endforeach
                    </table>
                </div>

            </div>

    </div>



</div>






@endsection

@extends('layout.endwrap')


