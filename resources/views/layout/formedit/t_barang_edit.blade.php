@extends('layout.t_template')
@section('title', 'Gudang')
@section('content')
	
<h1>Edit Data Barang</h1>
	<div class="container">
		<div class="card">

		
		{!! Form::open(['url' => '/proseseditbarang']) !!}

		<div class="col-2">
		ID Barang :
		{!! Form::text('idbarang',$barangs->id_barang,['class' => 'form-control']) !!}
		</div>

		<div class="col-4">
		Nama Barang :
		{!! Form::text('namabarang',$barangs->nama_barang,['class' => 'form-control']) !!}
			</div>

		<div class="col-2">
		Jumlah Barang :
		{!! Form::number('jumlahbarang',$barangs->jumlah_barang,['class' => 'form-control']) !!}
			</div>

		<div class="col-4">
		Nama Pemasok :
		{!! Form::text('namapemasok',$barangs->nama_pemasok,['class' => 'form-control']) !!}
			</div>

		<div class="col-2">
		ID Gudang :
		{!! Form::text('idgudang',$barangs->id_gudang,['class' => 'form-control']) !!}
			</div>

		<div class="col-3">
		Satuan :
		{!! Form::text('satuanbarang',$barangs->satuan,['class' => 'form-control']) !!}	
			</div>
		
		<p></p>

		<div class="col-2">
		<p></p>
		{!! Form::submit('Edit Data', ['class' => 'btn btn-warning']) !!}

		{!! Form::close() !!}
		@stop
		</div>
		</div>
		</div>