@extends('layout.t_template')
@section('title', 'Gudang')
@section('content')
	<h1>Edit Data Satuan</h1>
	<div class="container">
		<div class="card">
	<div class="card-body">
		
		{!! Form::open(['url' => '/proseseditsatuan']) !!}
		<div class="col-2">
			
		ID Satuan :
		{!! Form::text('idsatuan',$satuans->id_satuan,['class' => 'form-control']) !!}
		
		</div>

		<div class="col-3">
			
		Nama Satuan :
		{!! Form::text('namasatuan',$satuans->satuan,['class' => 'form-control']) !!}
			</div>
		<div class="col-2">
		
		<p></p>
		{!! Form::submit('Edit Data', ['class' => 'btn btn-warning']) !!}

		{!! Form::close() !!}
		@stop
		</div>
		</div>
		</div>
		</div>