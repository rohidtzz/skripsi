@extends('layout.master')
@extends('layout.sidebar')
@extends('layout.wrap')

@section('content')

{{-- <div class="row">
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
</div> --}}

<div class="row">

    <div class="card">

        <div class="card-body">


<form action="/hrd/user/edit/post" method="post" enctype="multipart/form-data">
@csrf
    <input type="hidden" name="id" value="{{ $data->id }}">

    <label for="inputState">foto</label>
    <img src="{{ asset('foto/'.$data->foto) }}" width="100px"alt="">
    <input type="file" name="foto"   class="form-control" >

    <label for="inputState">id user</label>
    <input type="number" name="id_identitas" value="{{ $data->no_identitas }}" class="form-control" placeholder="id user" required>

    <label for="inputState">password</label>
    <input type="text" name="password"  class="form-control" placeholder="password" >

    <label for="inputState">nama</label>
    <input type="text" name="name" value="{{ $data->name }}" class="form-control" placeholder="nama" required>

    <label for="inputState">email</label>
    <input type="email" name="email" value="{{ $data->email }}" class="form-control" placeholder="email" required>

    <label for="inputState">jabatan</label>
    <select id="inputState"  name="jabatan" class="form-control">
        <option value="{{ $data->jabatan }}" selected>{{$data->jabatan}}</option>
        <option value="karyawan">karyawan</option>
        <option value="hrd">hrd</option>
        <option value="direktur">direktur</option>
    </select>

    <label for="inputState">jenis Kelamin</label>
    <select id="inputState"  name="gender" class="form-control">
        <option value="{{ $data->gender }}"selected>{{ $data->gender }}</option>
        <option value="pria">pria</option>
        <option value="perempuan">perempuan</option>
    </select>

    <label for="inputState">alamat</label>
    <textarea  name="alamat"  class="form-control" placeholder="alamat" required>{{ $data->alamat }}</textarea>

    <label for="inputState">nik</label>
    <input type="number" name="nik" value="{{ $data->nik }}"  class="form-control" placeholder="nik" required>

    <label for="inputState">npwp</label>
    <input type="number" name="npwp" value="{{ $data->npwp }}"  class="form-control" placeholder="npwp" required>

    <label for="inputState">no hp</label>
    <input type="number" name="no_hp" value="{{ $data->no_hp }}" class="form-control" placeholder="no hp" required>

    <label for="inputState">status pernikahan</label>
    <select id="inputState"  name="status" class="form-control">
        <option value="{{ $data->status }}" selected>{{ $data->status }}</option>
        <option value="kawin">kawin</option>
        <option value="belum_kawin">belum_kawin</option>
    </select>

    <label for="inputState">Tanggal Lahir</label>
    <input type="date" name="tgl_lahir" value="{{ $data->tgl_lahir }}" class="form-control" placeholder="tanggal lahir" required>


    <label for="inputState">no hp backup</label>
    <input type="number" name="no_backup" value="{{ $data->no_backup}}" class="form-control" placeholder="no hp backup" required>


    <p>
        <label for="inputState">ttl</label>
        <input type="text" name="ttl" value="{{ $data->ttl }}" class="form-control" placeholder="" required>
    </p>

    <p>
        <label for="inputState">agama</label>
        <input type="text" name="agama" value="{{ $data->agama }}" class="form-control" placeholder="" required>
    </p>

    <p>
        <label for="inputState">niy</label>
        <input type="text" name="niy" value="{{ $data->niy }}" class="form-control" placeholder="" required>
    </p>

    <p>
        <label for="inputState">sk pengangkatan</label>
        <input type="text" name="sk_pengangkatan" value="{{ $data->sk_pengangkatan }}" class="form-control" placeholder="" required>
    </p>

    <p>
        <label for="inputState">pendidikan terakhir</label>
        <input type="text" name="pendidikan" value="{{ $data->pendidikan_terakhir }}" class="form-control" placeholder="" required>
    </p>

    <p>
        <label for="inputState">nuptk</label>
        <input type="text" name="nuptk" value="{{ $data->nuptk }}" class="form-control" placeholder="" required>
    </p>

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


