@extends('layout.master')
@extends('layout.sidebar')
@extends('layout.wrap')

@section('content')

<div class="row">

    <div class="card">

        <div class="card-body">


<form action="/hrd/settinggaji/edit/post/{{ $all->id }}" method="post">
@csrf





    <label for="inputState">Nama Potongan</label>
    <input type="text" name="nama" value="{{ $all->jenis_potongan }}"  class="form-control" placeholder="nama" disabled>
    <label for="inputState">Jumlah Potongan</label>
    <input type="number" name="jumlah" value="{{ $all->jumlah_potongan }}" class="form-control" placeholder="jumlah" required>
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


