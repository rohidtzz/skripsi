@extends('layout.master')
@include('layout.sidebar')
@include('layout.wrap')

@section('content')


        <div class="row">

           <div class="col-12">
            <div class="card">

                <div class="card-header">
                    <h3>Tambah data</h3>
                </div>

                <div class="card-body">

                    @if(Session::has('success'))
                        <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('success') }}</p>
                    @endif

                    <form action="{{ isset($data) ? url('hrd/datagaji/'.$data->id) : url('hrd/datagaji') }}" method="post">
                        @csrf

                        @if(isset($data))
                            @method('put')
                        @endif

                        <div class="row">
                            <div class="col-md-6 col-12">
                                <h3>Karyawan</h3>
                            </div>
                            <div class="col-md-6 co-12 mb-5">
                                <p>
                                    <label for="users">Pilih Karyawan</label>
                                    <select name="users" id="users" class="form-control" onchange="ChangeInput(this)">
                                        @foreach ($users as $item)
                                            <option value="{{ $item->id }}" {{ isset($data) ? ($data->user_id == $item->id ? "selected" : "") : "" }} data-item="{{ json_encode($item) }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </p>
                            </div>
                            <div class="col-md-6 col-12">
                                <h3>Data Gaji</h3>
                            </div>
                            <div class="col-md-6 col-12">
                                @foreach ($gajiformat as $i => $item)
                                    <p>
                                        <label for="input-{{ strtolower(Str::slug($item->name)) }}">{{ $item->name }}</label>
                                        <input
                                        type="text"
                                        id="input-{{ strtolower(Str::slug($item->name)) }}"
                                        name="{{ Str::slug($item->name) }}"
                                        class="form-control"
                                        value="{{ isset($data) ? $data?->data_gaji?->{Str::slug($item?->name)} ?? "" : old(Str::slug($item->name)) }}">
                                        
                                        @error(Str::slug($item->name))
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </p>
                                @endforeach
                            </div>
                        </div>

                        <a class="btn btn-secondary" href="{{ url('hrd/datagaji') }}">Back</a>
                        <button class="btn btn-primary" type="sumit">Submit</button>
                    </form>
                </div>

            </div>

           </div>
        </div>


<script>
    function ChangeInput(e) {
        let data = JSON.parse(e.options[e.selectedIndex].getAttribute('data-item'))
        Object.keys(data).forEach(key => {
            let el = document.getElementById('input-'+key)
            if(el != null) {
                el.value = data[key]
            }
        })
    }
</script>

@endsection

@include('layout.endwrap')


