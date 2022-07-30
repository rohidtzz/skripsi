@extends('layout.master')
@extends('layout.sidebar')
@extends('layout.wrap')

@section('content')

<div class="row">

    <div class="card">

        <div class="card-body">


<form action="/hrd/gaji/edit/post" method="post">
@csrf

<input type="hidden" name="id" value="{{ $all->id }}">

<div class="form-group">
    <label for="inputState">User</label>
    <input type="text" name="user" value="{{App\Models\User::find($all->user_id)->name}}"  class="form-control" placeholder="" disabled>

<div class="form-group">
<label for="inputState">Gaji Pokok</label>
<input type="text" name="gaji_pokok" value="{{ $all->gaji_pokok }}"  class="form-control" placeholder="Gajipokok" required>

<label for="inputState">Transportasi</label>
<input type="number" name="transportasi" value="{{ $all->transportasi }}"  class="form-control" placeholder="Transportasi" required>

<label for="inputState">Gaji Tambahan</label>
<input type="number" name="tambahan" value="{{ $all->uang_tambahan }}" class="form-control" placeholder="isi 0 jika tidak ada tambahan" required>

<label for="inputState">Uang Lembur / jam</label>
<input type="number" name="lembur" value="{{ $all->uang_overtime }}"  class="form-control" placeholder="isi 0 jika tidak lembur" required>

<label for="inputState">Berapa Jam Lembur</label>
<input type="number" name="lembur_jam" value="{{ $all->jumlah_overtime }}"  class="form-control" placeholder="isi 0 jika tidak lembur" required>

<label for="inputState">Tanggal Gaji</label>
<input type="date" name="tgl_gaji" value="{{ $all->tgl_gaji }}"  class="form-control" placeholder="Transportasi" required>

<label for="inputState">status</label>
<select id="inputState"  name="status" class="form-control">
    <option value="{{ $all->status }}" selected>{{ $all->status }}</option>
  <option value="belum" >belum</option>
  <option value="lunas" >lunas</option>

</select>

<label for="inputState">Total Gaji</label>
<input type="number" name="total" value="{{ $all->total }}"  class="form-control" placeholder="Transportasi" required>



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


