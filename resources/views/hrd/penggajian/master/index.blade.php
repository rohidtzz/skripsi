@extends('layout.master')
@include('layout.sidebar')
@include('layout.wrap')

@section('content')


        <div class="row">

           <div class="col-12">
            <div class="card">

                <div class="card-header">
                    <h3>Data Setting  Gaji</h3>
                    <a href="/hrd/mastergaji/create"><button class="btn btn-success"> Tambah Data </button></a>
                </div>

                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Type</th>
                                <th>#</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $i => $item)
                                <tr>
                                    <td>{{ $i + 1 }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->type }}</td>
                                    <td>
                                        @if($item->readonly)
                                            <a href="{{ url('hrd/mastergaji/'.$item->id.'/edit') }}" class="btn-sm btn-primary">Edit</a>
                                        @else
                                            <a href="{{ url('hrd/mastergaji/'.$item->id.'/edit') }}" class="btn-sm btn-primary">Edit</a>
                                            <a href="{{ url('hrd/mastergaji/'.$item->id) }}" class="btn-sm btn-danger">Delete</a>
                                        @endif
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


