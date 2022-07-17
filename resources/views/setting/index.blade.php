@extends('layout.master')
@extends('layout.sidebar')
@extends('layout.wrap')

@section('content')

@if (auth()->user()->jabatan == 'hrd')

<div class="row">

    <div class="card">

        <div class="card-body">


            @foreach($data as $a)
            <form action="/hrd/settings/jamkerja/update" method="post">
                @csrf




                <label for="inputState">jam masuk</label>
                <input type="time" name="jam_masuk" value="{{$a->jam_masuk}}" class="form-control" placeholder="harga" required>
                <label for="inputState">jam keluar</label>
                <input type="time" name="jam_keluar" value="{{$a->jam_keluar}}" class="form-control" placeholder="harga" required>
                <br>



                <br><br>
                <button type="submit" class="btn btn-success">Submit</button>
                <button type="reset" class="btn btn-danger">Reset</button>




            </form>
        </div>
    </div>
            @endforeach
</div>

@else

<div class="row">

    <div class="card">

        <div class="card-body">


            @foreach($data as $a)






                <label for="inputState">jam masuk</label>
                <input type="time" disabled name="jam_masuk" value="{{$a->jam_masuk}}" class="form-control" placeholder="harga" required>
                <label for="inputState">jam keluar</label>
                <input type="time" disabled name="jam_keluar" value="{{$a->jam_keluar}}" class="form-control" placeholder="harga" required>
                <br>





            @endforeach

        </div>
    </div>

</div>

@endif




@endsection

@extends('layout.endwrap')


