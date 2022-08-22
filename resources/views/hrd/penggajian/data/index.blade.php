@extends('layout.master')
@include('layout.sidebar')
@include('layout.wrap')

@section('content')


        <div class="row">

           <div class="col-12">
            <div class="card">

                <div class="card-header">
                    <h3>Data Setting  Gaji</h3>
                    <a href="/hrd/datagaji/create"><button class="btn btn-success"> Tambah Data </button></a>
                </div>

                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Jabatan</th>
                                <th>Gaji Pokok Bulan ini</th>
                                <th>Lembur</th>
                                <th>Potongan</th>
                                <th>Tunjungan</th>
                                <th>#</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $i => $item)
                                <tr>
                                    <td>{{ $i + 1 }}</td>
                                    <td>{{ $item->user->name }}</td>
                                    <td>{{ $item->user->jabatan }}</td>
                                    <td>Rp {{ $item->gaji }}</td>
                                    <td>Rp {{ $item->lembur }}</td>
                                    <td>Rp {{ $item->potongan }}</td>
                                    <td>Rp {{ $item->bonus }}</td>
                                    <td>
                                        <a href="{{ url('hrd/datagaji/'.$item->id.'/edit') }}" class="btn-sm btn-primary">Edit</a>
                                        <a href="{{ url('hrd/datagaji/'.$item->id) }}" class="btn-sm btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>

           </div>
        </div>


@endsection

@include('layout.endwrap')


