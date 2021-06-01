@extends('layout.t_template')
@section('title', 'Gudang')
@section('content')

<h1>Edit Data Transaksi</h1>
	<div class="container">
			<div class="card">
				<div class="card-body">
		{!! Form::open(['url' => '/prosesedittransaksi']) !!}

		
		{{-- ID Barang :
		{!! Form::text('idbarang',$transaksis->id_barang,['class' => 'form-control']) !!} --}}

		<div class="col-2">
		ID Transaksi :
		{!! Form::text('idtransaksi',$data->id_transaksi,['class' => 'form-control']) !!}
		</div>



		{{-- <select name="idbarang" class="form-control">
			<option value="">{{$idbarang -> id_barang}}</option>
		</select> --}}
		<div class="col-2">
			ID Barang :
		<select name="idbarang" class="form-control">
			<option value="{{$data->id_barang}}">{{$data->id_barang}}</option>
			@foreach ($barang as $idbarang)
			<option value="{{$idbarang -> id_barang}}">{{$idbarang -> id_barang}}</option>
			@endforeach
		</select>
		</div>

		<div class="col-4">
		Nama Barang :
		{{-- {!! Form::text('namabarang',$data->nama_barang,['class' => 'form-control']) !!} --}}

		<select name="namabarang" class="form-control">
			<option value="{{$data->nama_barang}}">{{$data->nama_barang}}</option>
			@foreach ($barang as $namabarang)
			<option value="{{$namabarang -> nama_barang}}">{{$namabarang -> nama_barang}}</option>
			@endforeach
		</select>
		</div>

		<div class="col-2">
		Jumlah Transaksi :
		{!! Form::number('jumlahtransaksi',$data->jumlah_transaksi,['class' => 'form-control']) !!}
		</div>

		<div class="col-2">
		Status :
		{!! Form::text('status',$data->status,['class' => 'form-control']) !!}
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