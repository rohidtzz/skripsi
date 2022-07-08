@extends('layout.depan')

@section('content')

    {{-- @if (auth()->user()->getabsen()->where('tanggal','2022/01/23')->first() != date('y/m/d') )
    <p style="font-size: 20px; font-family: arial;" id="jam"></p>
    <div class="text-center">
        <p>Anda sudah absen hari ini </p>
    </div>
    @endif --}}


    @if ($holiday)
    <p style="font-size: 20px; font-family: arial;" id="jam"></p>
        <div class="text-center">
            <p>Absen Libur Hari Libur Nasional </p>
        </div>
    @else
        @if (date('l') == "Saturday" || date('l') == "Sunday")
            <div class="text-center">
                <p style="font-size: 20px; font-family: arial;" id="jam"></p>
                <p>Absen Libur</p>
            </div>
        @else

        @if (auth()->user()->status_pekerjaan == 'cuti' || auth()->user()->status_pekerjaan == 'sakit' || auth()->user()->status_pekerjaan == 'izin')
        <div class="text-center">
            <p>Anda Sedang cuti / sakit / izin</p>
        </div>
        @elseif (auth()->user()->status_pekerjaan == 'masuk')

        @if (date('H:i:s') >= $jamkeluarkurang5  && date('H:i:s') <=  $jamkeluar )
        <div class="text-center">
        <p>Silahkan Check-out</p>

                <form action="{{ route('checkout') }}" method="post">
                    <div class="btn-group">

                    @csrf

                    <select name="keterangan" class="form-select" aria-label="Default select example" disabled>
                        <option selected value="masuk">{{ auth()->user()->status_pekerjaan }}</option>
                    </select>
                    <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                    <button class="btn btn-primary" type="submit">Check-out</button>
                </form>
            </div>
            @else

            <div class="text-center">
                <p style="font-size: 20px; font-family: arial;" id="jam"></p>

                @if (date('H:i:s')  >= $jammasuk  && date('H:i:s') <= $jamkeluar )

                    <p>Silahkan Check-in </p>

                    <form action="{{ route('checkin') }}" method="post">
                        <div class="btn-group">

                        @csrf

                        <select name="keterangan" class="form-select" aria-label="Default select example">
                            <option selected>Pilih keterangan</option>
                            <option value="Masuk">Masuk</option>
                            <option value="Alpha">Alpha</option>
                            <option value="Telat">Telat</option>
                            <option value="Sakit">Sakit</option>
                            <option value="Cuti">Cuti</option>
                        </select>
                        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                        <button class="btn btn-primary" type="submit">Check-in</button>
                    </form>

                @else
                <p style="font-size: 20px; font-family: arial;" id="jam"></p>
                    <p>Check-in Belum Tersedia</p>
                @endif
                </div>

            @endif

        @endif





            {{-- @if ($present)
                @if ($present->keterangan == 'Alpha')
                    <div class="text-center">
                        @if (strtotime(date('H:i:s')) >= strtotime('07:00:00') && strtotime(date('H:i:s')) <= strtotime('17:00:00'))
                            <p>Silahkan Check-in</p>
                            <form action="{{ route('kehadiran.check-in') }}" method="post">
                                @csrf
                                <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                                <button class="btn btn-primary" type="submit">Check-in</button>
                            </form>
                        @else
                            <p>Check-in Belum Tersedia</p>
                        @endif
                    </div>
                @elseif($present->keterangan == 'Cuti')
                    <div class="text-center">
                        <p>Anda Sedang Cuti</p>
                    </div>
                @else
                    <div class="text-center">
                        <p>
                            Check-in hari ini pukul : ({{ ($present->jam_masuk) }})
                        </p>
                        @if ($present->jam_keluar)
                            <p>Check-out hari ini pukul : ({{ $present->jam_keluar }})</p>
                        @else
                            @if ((\Carbon\Carbon::parse($present->jam_masuk)->diffInHours(\Carbon\Carbon::parse(date('H:i:s')))) >= 2)
                                <p>Jika pekerjaan telah selesai silahkan check-out</p>
                                <form action="{{ route('kehadiran.check-out', ['kehadiran' => $present]) }}" method="post">
                                    @csrf @method('patch')
                                    <button class="btn btn-primary" type="submit">Check-out</button>
                                </form>
                            @else
                                <p>Check-out Belum Tersedia</p>
                            @endif
                        @endif
                    </div>
                @endif
            @else
                <div class="text-center">
                    @if (date('h:i:s') >= '00:00:00' && date('h:i:s') <= '01:00:00')
                        <p>Silahkan Check-in</p>
                        <form action="{{ route('kehadiran.check-in') }}" method="post">
                            @csrf
                            <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                            <button class="btn btn-primary" type="submit">Check-in</button>
                        </form>
                    @else
                        <p>Check-in Belum Tersedia</p>
                    @endif
                </div>
            @endif --}}
        @endif
    @endif
@endsection
