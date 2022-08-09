@extends('layout.master')
@extends('layout.sidebar')
@extends('layout.wrap')

@section('content')


        <div class="row">

            <div class="card">
                <div class="card-header">
                    <h3>Data Setting  Gaji</h3>
                    {{-- <a href="/hrd/settinggaji/create"><button class="btn btn-success"> Tambah Data </button></a> --}}
                </div>

                <div class="card-body">
                    <table class="table table-striped">

                        <tr>
                            <th>no</th>
                            <th>Nama Potongan / tambahan Gaji</th>
                            <th>Jumlah Potongan</th>
                            @if (Auth()->user()->jabatan == 'hrd')
                            <th>opsi</th>
                            @else
                            @endif

                        </tr>
                        <?php $no = 1?>
                          @foreach ($all as $u )
                          @php
                            $number_format  = number_format($u->jumlah_potongan,2,",",".");
                            @endphp
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td>{{ $u->jenis_potongan }}</td>
                            <td><?php echo 'Rp. ' . $number_format; ?></td>
                            @if (Auth()->user()->jabatan == 'hrd')
                            <td>

                                <a style="padding-left: 10px" href="/hrd/settinggaji/edit/{{$u->id}}" class="btn btn-info">Edit</a>
                                <a href="/hrd/settinggaji/destroy/{{$u->id}}"  class="btn btn-danger delete-confirm" role="button">Delete</a>
                                </td>
                                @else
                                @endif
                                {{-- <a href="/hrd/pengajuan/edit/{{$u->id}}" class="btn btn-info">Edit</a>
                                <a href="/hrd/pengajuan/destroy/{{$u->id}}"  class="btn btn-danger">Delete</a></td> --}}
                        </tr>
                        @endforeach
                    </table>
                </div>

            </div>

    </div>



</div>






@endsection

@extends('layout.endwrap')


