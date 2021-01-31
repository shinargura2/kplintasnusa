@extends('layout.t_template')
@section('title', 'Gudang')
@section('content')

<h1>Edit Data Transaksi</h1>
	<div class="container">
			<div class="card">
				<div class="card-body">
		{!! Form::open(['url' => '/prosesedittransaksi']) !!}

		<div class="col-2">
		ID Transaksi :
		{!! Form::text('idtransaksi',$transaksis->id_transaksi,['class' => 'form-control']) !!}
		</div>

		<div class="col-2">
		ID Barang :
		{!! Form::text('idbarang',$transaksis->id_barang,['class' => 'form-control']) !!}
		</div>

		<div class="col-4">
		Nama Barang :
		{!! Form::text('namabarang',$transaksis->nama_barang,['class' => 'form-control']) !!}
		</div>

		<div class="col-2">
		Jumlah Transaksi :
		{!! Form::number('jumlahtransaksi',$transaksis->jumlah_transaksi,['class' => 'form-control']) !!}
		</div>

		<div class="col-2">
		Status :
		{!! Form::text('status',$transaksis->status,['class' => 'form-control']) !!}
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
		</div>