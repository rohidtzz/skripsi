@extends('layout.master')
@extends('layout.sidebar')
@extends('layout.wrap')

@section('content')













            <div class="card">
                <div class="card-header">
                    <h3> Gaji</h3>

                    {{-- @if (Auth()->user()->jabatan == 'hrd')


                    <a  href="/hrd/datagaji/exportpdf"><button class="btn btn-info">Export Pdf</button></a>
                    <a  href="/hrd/datagaji/exportexcel"><button class="btn btn-info">Export excel</button></a>

                    @elseif (Auth()->user()->jabatan == 'direktur')
                    <a  href="/direktur/datagaji/exportpdf"><button class="btn btn-info">Export Pdf</button></a>
                    <a  href="/direktur/datagaji/exportexcel"><button class="btn btn-info">Export excel</button></a>
                    @else
                    @endif --}}
                </div>

                <div class="card-body">
                    <table class="table table-striped">

                        <tr>

                            <th>nama</th>
                            <th>Posisi</th>
                            <th>Gaji Pokok Bulan ini</th>
                            <th>Lembur</th>
                            <th>Potongan</th>
                            <th>Bonus</th>


                            <th>opsi</th>

                        </tr>
                        <form action="/" method="post">
                          @foreach ($all as $u )
                          @php
                          $coba = $u->getjatahgaji()->get('Gaji_Pokok');

                                    // $Gaji_pokok = number_format($coba[0],2,",",".");
                                    $tetap  = number_format($u->Gaji,2,",",".");
                            @endphp
                        <tr>


                            <td>{{ $u->name }}</td>
                            <td>{{ App\Models\Posisi::find($u->id)->name }}</td>
                            <td>
                                @foreach ($coba as $s )
                                <?php $mas = number_format($s->Gaji_Pokok,2,",","."); ?>
                                <?php  echo 'Rp. '.$mas ?>
                                @endforeach
                            </td>
                            <div class="form-group">


                            <td><input class="form-control" type="text" name="lembur" placeholder="Berapa jam lembur"></td>


                            <td><input class="form-control" type="number" name="potongan" placeholder="nominal potongan"></td>
                            <td><input class="form-control" type="number" name="bonus" placeholder=" nominal bonus"></td>

                        </div>


                            {{-- <td>{{App\Models\User::find($u->user_id)->no_identitas}}</td>
                            <td>{{ App\Models\User::find($u->user_id)->name }}</td> --}}


                            {{-- <td>@if($u->status == 'belum') <span class="badge badge-danger">{{$u->status == 'belum' ? 'Belum Lunas':''}}</span> @else <span class="badge badge-success">{{$u->status == 'lunas' ? 'lunas':''}}</span> @endif </td>
                            <td>{{ $u->status_gaji }}</td> --}}
                            <td>
                                <a href="" class="btn btn-success">Simpan</a>
                            </td>
                        </tr>
                        </form>
                        @endforeach
                    </table>
                </div>

            </div>

    </div>





@endsection

@extends('layout.endwrap')


