@extends('layout.master')
@extends('layout.sidebar')
@extends('layout.wrap')

@section('content')

<div class="row">

    <div class="card">

        <div class="card-body">

            @foreach($data as $a)
<form action="/hrd/absen/update/{{$a->id}}" method="post">
@csrf


    <div class="form-group">
    <label for="inputState">keterangan</label>
    <select id="inputState" value="{{$a->keterangan}}" name="keterangan" class="form-control">
      <option selected>{{$a->keterangan}}</option>
      <option value="masuk">masuk</option>
      <option value="alpha">alpha</option>
      <option value="telat">telat</option>
      <option value="sakit">sakit</option>
      <option value="cuti">cuti</option>
    </select>
    </div>
    <label for="inputState">tanggal</label>
    <input type="date" name="tanggal" value="{{$a->tanggal}}" class="form-control" placeholder="kode barang" required>
    <label for="inputState">jam masuk</label>
    <input type="time" name="jam_masuk" value="{{$a->jam_masuk}}" class="form-control" placeholder="harga" required>
    <label for="inputState">jam keluar</label>
    <input type="time" name="jam_keluar" value="{{$a->jam_keluar}}" class="form-control" placeholder="harga" required>
    <br>



    <br><br>
    <button type="submit" class="btn btn-success">Submit</button>
    <a href="/hrd/lihatabsen" class="btn btn-danger">back</a>




</form>
    </div>
</div>

@endforeach



        </div>

    </div>



</div>


@endsection

@extends('layout.endwrap')


