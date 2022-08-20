@extends('layout.master')
@extends('layout.sidebar')
@extends('layout.wrap')

@section('content')



<div class="row">
            <div class="card">
                <div class="card-header">
                    <h3>Data Gaji</h3>

                </div>

                <div class="card-body">
                    <table class="table table-striped">

                        @php
                                    $Gaji_hari  = number_format($all->Gaji_Hari,2,",",".");
                            @endphp

                        <tr>
                            <td>id</td>
                            <td>:</td>
                            <td>{{ App\Models\User::find($all->user_id)->no_identitas }}</td>
                        </tr>

                        <tr>
                            <td>nama</td>
                            <td>:</td>
                            <td>{{ App\Models\User::find($all->user_id)->name }}</td>
                        </tr>

                        <tr>
                            <td>posisi</td>
                            <td>:</td>
                            <td>{{ App\Models\Posisi::find($all->user_id)->name }}</td>
                        </tr>

                        <tr>
                            <td>Total Jam Kerja / Perbulan</td>
                            <td>:</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Gaji / Jam</td>
                            <td>:</td>
                            <td>{{ $all->Gaji_Perjam }}</td>
                        </tr>
                        <tr>
                            <td>Gaji Pokok</td>
                            <td>:</td>
                            <td>{{ $all->Gaji_Pokok}}</td>
                        </tr>
                        <tr>
                            <td>Gaji / Hari</td>
                            <td>:</td>
                            <td>{{ $all->Gaji_Hari }}</td>
                        </tr>
                        <tr>
                            <td>Tunjangan Kesehatan</td>
                            <td>:</td>
                            <td>{{ $all->tj_kesehatan }}</td>
                        </tr>
                        <tr>
                            <td>Tunjangan Pangan</td>
                            <td>:</td>
                            <td>{{ $all->tj_pangan }}</td>
                        </tr>
                        <tr>
                            <td>Tunjangan Jabatan</td>
                            <td>:</td>
                            <td>{{ $all->tj_jabatan }}</td>
                        </tr>
                        <tr>
                            <td>Pph</td>
                            <td>:</td>
                            <td>{{ App\Models\SettingGaji::where('jenis_potongan','potongan pph')->first()->jumlah_potongan }}</td>
                        </tr>
                        <tr>
                            <td>NPWP</td>
                            <td>:</td>
                            <td>{{ App\Models\User::find($all->user_id)->npwp }}</td>
                        </tr>

                        <tr>
                            <td>Rekening</td>
                            <td>:</td>
                            <td>{{ $all->rekening }}</td>
                        </tr>









                    </table>
                </div>

            </div>

    </div>

</div>






@endsection

@extends('layout.endwrap')


