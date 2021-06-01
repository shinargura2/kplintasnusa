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
	<center><h2>LINTAS NUSA</h2></center> <h1><center>DIGITAL PRINTING & OFFSET</center></h1> <h1><center>JL. Kalidami No.51 Surabaya</center></h1> <h1><center>Telp. 031.59360802/Fax. 031 591 5438</center></h1>
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
				<th>Kode Pemasok</th>
				<th>Nama Pemasok</th>
				<th>Email</th>
				<th>Alamat</th>
			</tr>
		</thead>
		<tbody>
			<?php $nomor=1; ?>
            @foreach($data as $key)
            <tr>
            	<td>{{$nomor++}}</td>
                <td>{{$key->id_pemasok}}</td>
                <td>{{$key->nama_pemasok}}</td>
                <td>{{$key->email}}</td>
                <td>{{$key->alamat}}</td>
            </tr>
		</tbody>
		@endforeach
	</table>
</body>
</html>