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

                    <form action="{{ isset($data) ? url('hrd/mastergaji/'.$data->id) : url('hrd/mastergaji') }}" method="post">
                        @csrf

                        @if(isset($data))
                            @method('put')
                        @endif

                        <p>
                            <label for="name">name</label>
                            <input type="text" placeholder="Masukan Name" class="form-control" id="name" name="name" value="{{ isset($data) ? $data->name : old('name') }}">
                            @error('name')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </p>


                        <p>
                            <label for="type">Type</label>
                            <select class="form-control" id="type" name="type" {{ isset($data) ? ($data->readonly ? "disabled" : "") : "" }}>
                                <option value="">Pilih Type</option>
                                <option value="debit" {{ isset($data) ? ($data->type == "debit" ? "selected" : "") : "" }}>Debit</option>
                                <option value="credit" {{ isset($data) ? ($data->type == "credit" ? "selected" : "") : "" }}>Kredit</option>
                                {{-- <option value="duration" {{ isset($data) ? ($data->type == "duration" ? "selected" : "") : "" }}>Jam kerja</option>
                                <option value="income" {{ isset($data) ? ($data->type == "income" ? "selected" : "") : "" }}>Gaji per jam</option>
                                <option value="overtime" {{ isset($data) ? ($data->type == "overtime" ? "selected" : "") : "" }}>Lembur</option> --}}
                                <option value="identifier" {{ isset($data) ? ($data->type == "identifier" ? "selected" : "") : "" }}>Identifier</option>
                                <option value="text" {{ isset($data) ? ($data->type == "text" ? "selected" : "") : "" }}>Teks</option>
                            </select>
                            @error('type')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </p>

                        <a class="btn btn-secondary" href="{{ url('hrd/mastergaji') }}">Back</a>
                        <button class="btn btn-primary" type="sumit">Submit</button>
                    </form>
                </div>

            </div>

           </div>
        </div>


@endsection

@include('layout.endwrap')


