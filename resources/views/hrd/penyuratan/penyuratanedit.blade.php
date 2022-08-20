@extends('layout.master')
@extends('layout.sidebar')
@extends('layout.wrap')

@section('content')


<div class="row">

    <div class="card">

        <div class="card-body">


<form action="/hrd/penyuratan/edit/post" method="post" >
@csrf

<input type="hidden" name="id" value="{{ $all->id }}">

<label for="inputState">Nama Karyawan yang akan dikirim Peringatan</label>
<input type="text" name="" value="{{ App\Models\User::find($all->to_user_id)->name }}" class="form-control" disabled>



<label for="inputState">deskripsi</label>
<textarea  name="deskripsi"  class="form-control" placeholder="deksripsi" required>{{ $all->deskripsi }}</textarea>

<label for="inputState">Jumlah Alpha dibulan ini</label>
<input type="number" placeholder="{{ $all->alpha}}" name="alpha" value="{{ $all->alpha }}" class="form-control" required>

<label for="inputState">Tanggal</label>
<input type="date" placeholder="{{ $all->tanggal}}" name="date" value="{{ $all->tanggal}}" class="form-control" required>

{{-- <input type="hidden" name="alpha" value="{{ $all->alpha }}"> --}}

    {{-- <label for="inputState">foto</label>
    <input type="file" name="foto"  class="form-control" required>



    <label for="inputState">id user</label>
    <input type="number" name="id_identitas"  class="form-control" placeholder="id user" required>

    <label for="inputState">password</label>
    <input type="password" name="password"  class="form-control" placeholder="password" required>

    <label for="inputState">nama</label>
    <input type="text" name="name"  class="form-control" placeholder="nama" required>

    <label for="inputState">email</label>
    <input type="email" name="email"  class="form-control" placeholder="email" required>

    <label for="inputState">jabatan</label>
    <select id="inputState"  name="jabatan" class="form-control">
        <option selected>-- Silahkan Pilih --</option>
        <option value="karyawan">karyawan</option>
        <option value="hrd">hrd</option>
        <option value="direktur">direktur</option>
    </select>

    <label for="inputState">jenis Kelamin</label>
    <select id="inputState"  name="gender" class="form-control">
        <option selected>-- Silahkan Pilih --</option>
        <option value="pria">pria</option>
        <option value="perempuan">perempuan</option>
    </select>

    <label for="inputState">alamat</label>
    <textarea  name="alamat"  class="form-control" placeholder="alamat" required></textarea>

    <label for="inputState">nik</label>
    <input type="number" name="nik"  class="form-control" placeholder="nik" required>

    <label for="inputState">npwp</label>
    <input type="number" name="npwp"  class="form-control" placeholder="npwp" required>

    <label for="inputState">no hp</label>
    <input type="number" name="no_hp"  class="form-control" placeholder="no hp" required>

    <label for="inputState">status pernikahan</label>
    <select id="inputState"  name="status" class="form-control">
        <option selected>-- Silahkan Pilih --</option>
        <option value="kawin">kawin</option>
        <option value="belum_kawin">belum_kawin</option>
    </select>

    <label for="inputState">no hp backup</label>
    <input type="number" name="no_backup"  class="form-control" placeholder="no hp backup" required> --}}









    <br><br>
    <button type="submit" class="btn btn-success">Submit</button>
    <button type="reset" class="btn btn-danger">Reset</button>
    {{-- <a href="/hrd/dashboard" class="btn btn-danger">reset</a> --}}




</form>
    </div>
</div>





        </div>




@endsection

@extends('layout.endwrap')


