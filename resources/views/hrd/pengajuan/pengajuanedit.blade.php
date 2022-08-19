@extends('layout.master')
@extends('layout.sidebar')
@extends('layout.wrap')

@section('content')

<div class="row">

    <div class="card">

        <div class="card-body">


<form action="/hrd/pengajuan/edit/post/{{$data->id}}" method="get">
@csrf


    <div class="form-group">
    <label for="inputState">keterangan</label>
    <select id="inputState"  name="keterangan" class="form-control">
        <option value="{{$data->keterangan}}" selected>{{ $data->keterangan }}</option>
        <option value="cuti">cuti</option>
      <option value="izin">izin</option>
      <option value="sakit">sakit</option>

    </select>
    </div>

    <label for="inputState">alasan</label>
    <textarea  name="alasan"  class="form-control" placeholder="alasan" required>{{ $data->alasan }}</textarea>

    <label for="inputState">tanggal </label>
    <input type="date" name="tanggal" value="{{$data->tanggal}}"  class="form-control" placeholder="tanggal mulai" required>

    <label for="inputState">tanggal mulai</label>
    <input type="date" name="mulai" value="{{$data->mulai}}"  class="form-control" placeholder="tanggal mulai" required>
    <label for="inputState">tanggal selesai</label>
    <input type="date" name="selesai" value="{{$data->selesai}}" class="form-control" placeholder="tanggal selesai" required>
    <div class="form-group">
        <label for="inputState">status</label>
        <select id="inputState"  name="status" class="form-control">
            <option value="{{$data->status}}" selected>{{ $data->status }}</option>
            <option value="disetujui">di setujui</option>
          <option value="ditolak">di tolak</option>
          <option value="pending">pending</option>

        </select>
        </div>
    <br>



    <br><br>
    <button type="submit" class="btn btn-success">Submit</button>
    <a href="/hrd/pengajuan" class="btn btn-danger">back</a>




</form>
    </div>
</div>





        </div>








@endsection

@extends('layout.endwrap')


