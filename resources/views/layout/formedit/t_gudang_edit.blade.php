@extends('layout.t_template')
@section('title', 'Gudang')
@section('content')
	<h1>Edit Data Gudang</h1>
	<div class="container">
		<div class="card">
			
		<div class="card-body">
		{!! Form::open(['url' => '/proseseditgudang']) !!}

		<div class="col-2">
		ID Gudang :
		{!! Form::text('idgudang',$gudangs->id_gudang,['class' => 'form-control']) !!}
		</div>

		<div class="col-3">
		Nama Gudang :
		{!! Form::text('namagudang',$gudangs->nama_gudang,['class' => 'form-control']) !!}
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