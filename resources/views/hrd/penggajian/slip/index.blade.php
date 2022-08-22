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
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Posisi</th>
                                <th>Gaji Yang Diterima Bulan ini</th>
                                <th>#</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $i => $item)
                                <tr>
                                    <td>{{ $i + 1 }}</td>
                                    <td>
                                        <a href="{{ url('hrd/slipgaji/'.$item->id) }}">{{ $item->user->no_identitas }}</a>
                                    </td>
                                    <td>{{ $item->user->name }}</td>
                                    <td>{{ $item->user->jabatan }}</td>
                                    <td>Rp {{ $item->gaji }}</td>
                                    <td>
                                        <a href="{{ url('hrd/slipgaji/'.$item->id) }}" class="btn-sm btn-primary">Lihat</a>
                                        <a href="{{ url('hrd/slipgaji/'.$item->id.'/send') }}" class="btn-sm btn-primary">Kirim</a>
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


