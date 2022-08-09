<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>

<h1>Data Gaji Karyawan</h1>

<table id="customers">
    <tr>
        <th>id</th>
        <th>nama</th>
        <th>uang tambahan</th>
        <th>gaji pokok</th>
        <th>uang lembur</th>
        <th>potongan Asuransi</th>
        <th>Tj. Transport</th>
        <th>jumlah lembur</th>
        <th>Tanggal</th>
        <th>status</th>
        <th>total</th>
        <th>Status Karyawan</th>
        {{-- <th>opsi</th> --}}
    </tr>
      @foreach ($data as $u )
      @php
      $total  = number_format($u->total,2,",",".");
      $tambahan  = number_format($u->uang_tambahan,2,",",".");
      $gajipokok  = number_format($u->gaji_pokok,2,",",".");
      $lembur  = number_format($u->uang_overtime,2,",",".");
      $asuransi  = number_format($u->pot_bpjs,2,",",".");
      $transportasi  = number_format($u->transportasi,2,",",".");
      $lemburjam  = number_format($u->jumlah_overtime,2,",",".");
@endphp
    <tr>
        <td>{{ App\Models\User::find($u->user_id)->no_identitas }}</td>
        <td>{{ App\Models\User::find($u->user_id)->name }}</td>
        <td><?php echo 'Rp. ' . $tambahan; ?></td>
        <td><?php echo 'Rp. ' . $gajipokok; ?></td>
        <td><?php echo 'Rp. ' . $lembur; ?></td>
        <td><?php echo 'Rp. ' . $asuransi; ?></td>
        <td><?php echo 'Rp. ' . $transportasi; ?></td>
        <td><?php echo 'Rp. ' . $lemburjam; ?></td>

        <td>{{ $u->tgl_gaji}}</td>
        <td>@if($u->status == 'belum') <span class="badge badge-danger">{{$u->status == 'belum' ? 'Belum Lunas':''}}</span> @else <span class="badge badge-success">{{$u->status == 'lunas' ? 'lunas':''}}</span> @endif </td>
        <td><?php echo 'Rp. ' . $total; ?></td>
        <td>{{ $u->status_gaji }}</td>

    </tr>
    @endforeach
</table>

</body>
</html>
