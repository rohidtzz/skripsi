<!DOCTYPE html>
<html>
<head>
    <title>ItsolutionStuff.com</title>
</head>
<body>

    <style>
        .w-100{
            width: 100%;
        }
    </style>

    <div class="w-100">

        <h3 class="text-center" style="text-decoration: underline">Slip Gaji Karyawan</h3>
        <h5 class="text-center">Periode 1 {{ $data->created_at->format('M') }} {{ $data->created_at->format('Y') }} - 30 {{ $data->created_at->format('M') }} {{ $data->created_at->format('Y') }}</h5>

        <br><br>

        <table class="w-100">
            <tr>
                <td class="text-left">NIK</td>
                <td class="text-left pl-5">: {{ $data->user->nik }}</td>
            </tr>
            <tr>
                <td class="text-left">ID Karyawan</td>
                <td class="text-left pl-5">: {{ $data->user->no_identitas }}</td>
            </tr>
            <tr>
                <td class="text-left">Nama</td>
                <td class="text-left pl-5">: {{ $data->user->name }}</td>
            </tr>
            <tr>
                <td class="text-left">Jabatan</td>
                <td class="text-left pl-5">: {{ $data->user->jabatan }}</td>
            </tr>
        </table>
        
        <div class="row mt-5">
            <div class="col-md-6 col-12">
                <h5 style="text-decoration: underline">PENGHASILAN</h5>
                <table class="w-100">
                    @foreach ($data->penghasilan as $key => $debit)
                        <tr>
                            <td class="text-left pr-5">{{ ucfirst($key) }}</td>
                            <td class="text-left pl-5">=</td>
                            <td style="min-width: 140px">Rp {{ $debit }}</td>
                        </tr> 
                    @endforeach
                    <tr>
                        <td></td>
                        <td><hr><b>Total</b></td>
                        <td><hr><b>Rp {{ str_replace(',','.', number_format($data->penghasilan_total)) }}</b></td>
                    </tr>
                </table>
            </div>
            <div class="col-md-6 col-12">
                <h5 style="text-decoration: underline">POTONGAN</h5>
                <table class="w-100">
                    @foreach ($data->potongan as $key => $credit)
                        <tr>
                            <td class="text-left pr-5">{{ ucfirst($key) }}</td>
                            <td class="text-left pl-5">=</td>
                            <td style="min-width: 140px">Rp {{ $credit }}</td>
                        </tr> 
                    @endforeach
                    <tr>
                        <td></td>
                        <td><hr><b>Total</b></td>
                        <td><hr><b>Rp {{ str_replace(',','.', number_format($data->potongan_total)) }}</b></td>
                    </tr>
                </table>
            </div>
        </div>

        <table class="w-100">
            <tr style="background: #f0f0f0">
                <td><b>Penerimaan Bersih (A-B)</b></td>
                <td>=</td>
                <td><b>Rp {{ str_replace(',','.', number_format($data->penghasilan_total - $data->potongan_total)) }}</b></td>
            </tr>
            <tr style="background: #f0f0f0">
                @php
                    $f = new NumberFormatter("id", NumberFormatter::SPELLOUT);
                @endphp
            <td colspan="3">Terbilang: # {{ ucwords($f->format($data->penghasilan_total - $data->potongan_total)) }}</td>
            </tr>
        </table>

    </div>
    
</body>
</html>