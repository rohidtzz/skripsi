<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		body{
			font-family: Arial;
			color: black;
		}
	</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
	<center>
		<h1>PT. skripsi</h1>
		<h2>Slip Gaji Karyawan</h2>
		<hr style="width: 50%; border-width: 5px; color: black">
	</center>

    @php
                            $alpha = App\Models\SettingGaji::where('jenis_potongan', 'potongan sanksi alpha')->first();
                          $total  = number_format($data->total,2,",",".");
                          $tambahan  = number_format($data->uang_tambahan,2,",",".");
                          $gajipokok  = number_format($data->gaji_pokok,2,",",".");
                          $lembur  = number_format($data->uang_overtime,2,",",".");
                          $asuransi  = number_format($data->pot_bpjs,2,",",".");
                          $transportasi  = number_format($data->transportasi,2,",",".");
                          $lemburjam  = number_format($data->jumlah_overtime,2,",",".");
                            $totalpotongan = number_format($alpha->jumlah_potongan,2,",",".");

                  @endphp



	<table style="width: 100%">
		<tr>
			<td width="20%">Nama Pegawai</td>
			<td width="2%">:</td>
			<td>{{ App\Models\User::find($data->user_id)->name }}</td>
		</tr>
		<tr>
			<td>NIK</td>
			<td>:</td>
			<td>{{ App\Models\User::find($data->user_id)->nik }}</td>
		</tr>
		<tr>
			<td>Jabatan</td>
			<td>:</td>
			<td>{{ App\Models\User::find($data->user_id)->jabatan }}</td>
		</tr>
        <tr>
			<td>Status Gaji</td>
			<td>:</td>
			<td>{{ $data->status_gaji }}</td>
		</tr>
		<tr>
			<td>Tanggal </td>
			<td>:</td>
			<td>{{ $data->tgl_gaji }}</td>
		</tr>
		{{-- <tr>
			<td>Tahun</td>
			<td>:</td>
			<td>123</td>
		</tr> --}}
	</table>

	<table class="table table-striped table-bordered mt-3">
		<tr>
			<th class="text-center" width="5%">No</th>
			<th class="text-center" >Keterangan</th>
			<th class="text-center" >Jumlah</th>
		</tr>
		<tr>
			<td>1</td>
			<td>Gaji Pokok</td>
			<td><?php echo 'Rp. ' . $gajipokok; ?></td>
		</tr>

		<tr>
			<td>2</td>
			<td>Tunjangan Transportasi</td>
			<td><?php echo 'Rp. ' . $transportasi; ?></td>
		</tr>

		<tr>
			<td>3</td>
			<td> Uang Lembur</td>
			<td><?php echo 'Rp. ' . $lembur; ?></td>
		</tr>

		<tr>
			<td>4</td>
			<td>Potongan Sanksi Alpha</td>
			<td><?php echo 'Rp. ' . $totalpotongan ?></td>
		</tr>

		<tr>
			<th colspan="2" style="text-align: right;">Total Gaji : </th>
			<th><?php echo 'Rp. ' . $total; ?></th>
		</tr>
	</table>

	<table width="100%">
		<tr>
			<td></td>
			<td>
				<p>Pegawai</p>
				<br>
				<br>
				<p class="font-weight-bold">{{ App\Models\User::find($data->user_id)->name }}</p>
			</td>

			<td width="200px">
				<p>Tangerang, <?php echo date("d M Y")?> <br> Finance,</p>
				<br>
				<br>
				<p>___________________</p>
			</td>
		</tr>
	</table>



</body>
</html>

<script type="text/javascript">
	window.print();
</script>
