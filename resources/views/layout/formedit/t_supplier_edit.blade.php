@extends('layout.t_template')
@section('title', 'Gudang')
@section('content')
	<h1>Edit Data Supplier</h1>
	<div class="container">
			<div class="card">
				<div class="card-body">
		{!! Form::open(['url' => '/proseseditpemasok']) !!}

		<div class="col-2">
		ID Pemasok :
		{!! Form::text('idpemasok',$pemasoks->id_pemasok,['class' => 'form-control']) !!}
		
		</div>

		<div class="col-3">
		Nama Pemasok :
		{!! Form::text('namapemasok',$pemasoks->nama_pemasok,['class' => 'form-control']) !!}
			</div>
		
		<div class="col-3">
		Email :
		{!! Form::text('emailpemasok',$pemasoks->email,['class' => 'form-control']) !!}
			</div>
		<div class="col-3">
			
		Alamat :
		{!! Form::text('alamatpemasok',$pemasoks->alamat,['class' => 'form-control']) !!}
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