@extends('layout.master')
@extends('layout.sidebar')
@extends('layout.wrap')

@section('content')

<div class="row">

    <div class="card">

        <div class="card-body">


<form action="/hrd/absen/post" method="post">
@csrf



<label for="inputState">User</label>
<select id="inputState"  name="user" class="form-control" required>
    @foreach ( $user as $user )
    <option value="{{ $user->id }}" >{{ $user->name }}</option>
    @endforeach
</select>

<label for="inputState">keterangan</label>
<select id="inoutState" name="keterangan" class="form-control" aria-label="Default select example" required>
    <option selected value="Masuk">Masuk</option>
    {{-- <option value="Alpha">Alpha</option>
    <option value="Telat">Telat</option> --}}
    <option value="Sakit">Sakit</option>
    <option value="Cuti">Izin</option>
</select>

<label for="inputState">jam masuk</label>
    <input type="time" name="masuk"  class="form-control" placeholder="tanggal mulai" required>
    <label for="inputState">jam keluar</label>
    <input type="time" name="keluar" class="form-control" placeholder="tanggal selesai" required>

    <label for="inputState">tanggal </label>
    <input type="date" name="tgl"  class="form-control" placeholder="tanggal mulai" required>
{{-- <div class="form-group">
<label for="inputState">Berapa Hari masuk dalam Sebulan</label>
<input type="text" name="gaji_pokok" value=""  class="form-control" placeholder="Gajipokok" disabled> --}}

{{-- <label for="inputState">Transportasi</label>
<input type="number" name="transportasi"  class="form-control" placeholder="Transportasi" required>

<label for="inputState">Gaji Tambahan</label>
<input type="number" name="tambahan"  class="form-control" placeholder="isi 0 jika tidak ada tambahan" required>

<label for="inputState">Uang Lembur / jam</label>
<input type="number" name="lembur"  class="form-control" placeholder="isi 0 jika tidak lembur" required>

<label for="inputState">Berapa Jam Lembur</label>
<input type="number" name="lembur_jam"  class="form-control" placeholder="isi 0 jika tidak lembur" required>

<label for="inputState">Tanggal Gaji</label>
<input type="date" name="tgl_gaji"  class="form-control" placeholder="Transportasi" required>

<label for="inputState">status</label>
<select id="inputState"  name="status" class="form-control">
    <option value="lunas" selected>lunas</option>
  <option value="belum" >belum</option>

</select> --}}



    {{-- <div class="form-group">
    <label for="inputState">keterangan</label>
    <select id="inputState"  name="keterangan" class="form-control">
        <option value="lembur" >lembur</option>
      <option value="izin" selected>izin</option>
      <option value="sakit">sakit</option>

    </select>
    </div>
    <label for="inputState">alasan</label>
    <textarea  name="alasan"  class="form-control" placeholder="alasan" required></textarea>

    <label for="inputState">jam mulai</label>
    <input type="time" name="jammulai"  class="form-control" placeholder="tanggal mulai" >
    <label for="inputState">jam selesai</label>
    <input type="time" name="jamselesai" class="form-control" placeholder="tanggal selesai">

    <label for="inputState">tanggal mulai</label>
    <input type="date" name="mulai"  class="form-control" placeholder="tanggal mulai" required>
    <label for="inputState">tanggal selesai</label>
    <input type="date" name="selesai" class="form-control" placeholder="tanggal selesai" required> --}}
    <br>



    <br><br>
    <button type="submit" class="btn btn-success">Submit</button>
    <button type="reset" class="btn btn-danger">Reset</button>
    {{-- <a href="/hrd/dashboard" class="btn btn-danger">reset</a> --}}




</form>
    </div>
</div>











@endsection

@extends('layout.endwrap')


