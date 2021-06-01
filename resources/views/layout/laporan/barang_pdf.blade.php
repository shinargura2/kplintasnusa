<!DOCTYPE html>
<html>
<head>
	<title>Laporan CV. Linta Nusa (BETA)</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	

	<style>
		td, th {
			border: 1px solid #000000;
			padding: 8px;
		}
		h2 {
		font-family: Zen Dots;
		font-size: 45px;
	}
		h1 {
			font-size: 20px;
		}
		table{
        border-collapse: collapse;
    }
    	hr{
    		border-width: 2;
    		color: black;
    		height: 1px;
    	}
	</style>
	
</head>

<br>
<body>
	{{-- <center>
	<table>
	<tr>
		<td><img src="https://cdn.discordapp.com/attachments/397673587604979712/832245502769627146/unknown.png" width="100" height="100"></td>
		<td><center><h2>LINTAS NUSA</h2></center><br>
			<h1><center>DIGITAL PRINTING & OFFSET</center></h1><br>
			<h1><center>JL. Kalidami No.51 Surabaya</center></h1><br>
			<h1><center>Telp. 031.59360802/Fax. 031 591 5438</center></h1>
		</td>
	</tr> --}}

	<center><h2>LINTAS NUSA</h2></center> <h1><center>DIGITAL PRINTING & OFFSET</center></h1> <h1><center>JL. Kalidami No.51 Surabaya</center></h1> <h1><center>Telp. 031.59360802/Fax. 031 591 5438</center></h1>
	
	{{-- </table>
	</center> --}}
	<hr>
	<h1>Laporan Supplier CV. Lintas Nusa</h1>
	{{-- @php
	use Carbon\Carbon;
	$current = Carbon::now();
	$current = new Carbon();
	echo "Dicetak pada : $current";
	@endphp --}}
	

	
	Dicetak Pada {{date('Y-m-d')}}
	
	<table>
		<thead>
			<tr>
				<th>No.</th>
                    <th>ID Barang</th>
                    <th>Nama Barang</th>
                    <th>Jumlah Barang</th>
                    <th>Nama Pemasok</th>
                    <th>ID Gudang</th>
                   	<th>Satuan</th>
			</tr>
		</thead>
		<tbody>
			<?php $nomor=1; ?>
            @foreach($data as $key)
            <tr>
            	<td>{{$nomor++}}</td>
                    <td>{{$key->id_barang}}</td>
                    <td>{{$key->nama_barang}}</td>
                    <td>{{$key->jumlah_barang}}</td>
                    <td>{{$key->nama_pemasok}}</td>
                    <td>{{$key->id_gudang}}</td>
                    <td>{{$key->satuan}}</td>
            </tr>
		</tbody>
		@endforeach
	</table>
</body>
</html>