@extends('layout.master')
@extends('layout.sidebar')
@extends('layout.wrap')

@section('content')

<div class="row">
    <div class="card">
        <div class="card-body">
            <button type="button" class="btn btn-primary mr-5" data-toggle="modal" data-target="#importExcel">
                IMPORT EXCEL
            </button>

            <!-- Import Excel -->
            <div class="modal fade" id="importExcel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <form method="post" action="/user/import_excel" enctype="multipart/form-data">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Import Excel</h5>
                            </div>
                            <div class="modal-body">

                                {{ csrf_field() }}

                                <label>Pilih file excel</label>
                                <div class="form-group">
                                    <input type="file" name="file" required="required">
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Import</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="card">
        <div class="card-body">
        <form action="/hrd/uploadpdf" method="post" enctype="multipart/form-data">
            @csrf
                                <label for="inputState">User</label>
                                <select id="inputState"  name="user" class="form-control">
                                    @foreach ($data as $u )
                                        <option value="{{ $u->id }}">{{ $u->name }}</option>
                                    @endforeach
                                </select>

                                <label for="inputState">cv</label>
                                <input type="file" name="cv"  class="form-control" required>

                                <label for="inputState">ijazah</label>
                                <input type="file" name="ijazah"  class="form-control" required>

                                <label for="inputState">sertifikat</label>
                                <input type="file" name="sertifikat"  class="form-control">

                                <label for="inputState">ktp</label>
                                <input type="file" name="ktp"  class="form-control" required>

                                <label for="inputState">npwp</label>
                                <input type="file" name="npwp"  class="form-control" required>
                                <br>

                                <button type="submit" class="btn btn-success">Submit</button>
                                <button type="reset" class="btn btn-danger">Reset</button>
                            </form>

        </div>
    </div>
</div>


<div class="row">
    <div class="card">
        <div class="card-body">
            <form action="/hrd/tambahposisi/post" method="post" enctype="multipart/form-data">
                    @csrf
            <label for="inputState">User</label>
                                <select id="inputState"  name="user" class="form-control">
                                    @foreach ($data as $u )
                                        <option value="{{ $u->id }}">{{ $u->name }}</option>
                                    @endforeach
                                </select>
                                <label for="inputState">Posisi</label>
        <input type="text" name="posisi"  class="form-control" placeholder="posisi" required>
        <br><br>
        <button type="submit" class="btn btn-success">Submit</button>
        <button type="reset" class="btn btn-danger">Reset</button>
            </form>
        </div>
    </div>
</div>

<div class="row">

    <div class="card">

        <div class="card-body">


<form action="/hrd/tambahuser/post" method="post" enctype="multipart/form-data">
@csrf

    <label for="inputState">foto</label>
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
    <input type="number" name="no_backup"  class="form-control" placeholder="no hp backup" required>

    <label for="inputState">Tanggal lahir</label>
    <input type="date" name="lahir"  class="form-control" placeholder="tanggal lahir" required>







    {{-- <div class="form-group">
    <label for="inputState">keterangan</label>
    <select id="inputState" value="" name="keterangan" class="form-control">
      <option selected></option>
      <option value="masuk">masuk</option>
      <option value="alpha">alpha</option>
      <option value="telat">telat</option>
      <option value="sakit">sakit</option>
      <option value="cuti">cuti</option>
    </select>
    </div>

    <label for="inputState">tanggal</label>
    <input type="date" name="tanggal" value="" class="form-control" placeholder="kode barang" required>
    <label for="inputState">jam masuk</label>
    <input type="time" name="jam_masuk" value="" class="form-control" placeholder="harga" required>
    <label for="inputState">jam keluar</label>
    <input type="time" name="jam_keluar" value="" class="form-control" placeholder="harga" required>
    <br> --}}



    <br><br>
    <button type="submit" class="btn btn-success">Submit</button>
    <button type="reset" class="btn btn-danger">Reset</button>
    {{-- <a href="/hrd/dashboard" class="btn btn-danger">reset</a> --}}




</form>
    </div>
</div>





        </div>

    </div>



</div>


@endsection

@extends('layout.endwrap')


