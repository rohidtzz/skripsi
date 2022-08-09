@extends('layout.depan')

@section('content')



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

        <div class="text-center">
            <p style="font-size: 20px; font-family: arial;" id="jam"></p>



                <p>Silahkan Check-in </p>

                <form action="{{ route('checkin') }}" method="post">
                    <div class="btn-group">

                    @csrf

                    <select name="keterangan" class="form-select" aria-label="Default select example">\
                        <option selected value="Masuk">Masuk</option>
                        {{-- <option value="Alpha">Alpha</option>
                        <option value="Telat">Telat</option> --}}
                        <option value="Sakit">Sakit</option>
                        <option value="Cuti">Cuti</option>
                    </select>
                    <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                    <button class="btn btn-primary" type="submit">Check-in</button>
                    </div>
                </form>


            </div>


        <div class="text-center mt-5">
        <p>Silahkan Check-out</p>

                <form action="{{ route('checkout') }}" method="post">


                    @csrf

                    {{-- <select name="keterangan" class="form-select" aria-label="Default select example">
                        <option selected >Pilih Keterangan</option>
                        <option  value="masuk">masuk</option>
                        <option value="telat">telat</option>
                        <option  value="izin">izin</option>
                        <option value="sakit">sakit</option>
                        <option  value="alpha">alpha</option>
                    </select> --}}
                    <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                    <button class="btn btn-primary" type="submit">Check-out</button>
                </form>
            </div>





        @endif

        @endif

@endsection
