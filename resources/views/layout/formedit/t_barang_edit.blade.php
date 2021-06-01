@extends('layout.t_template')
@section('title', 'Gudang')
@section('content')
	
<h1>Edit Data Barang</h1>
	<div class="container">
		<div class="card">

		
		{!! Form::open(['url' => '/proseseditbarang']) !!}

		<div class="col-2">
		ID Barang :
		{!! Form::text('idbarang',$data->id_barang,['class' => 'form-control']) !!}
		</div>

		<div class="col-4">
		Nama Barang :
		{!! Form::text('namabarang',$data->nama_barang,['class' => 'form-control']) !!}
			</div>

		<div class="col-2">
		Jumlah Barang :
		{!! Form::number('jumlahbarang',$data->jumlah_barang,['class' => 'form-control']) !!}
			</div>

		<div class="col-4">
		Nama Pemasok :
		{{-- {!! Form::text('namapemasok',$barangs->nama_pemasok,['class' => 'form-control']) !!} --}}
		<select name="namapemasok" class="form-control">
			<option value="{{$data->nama_pemasok}}">{{$data->nama_pemasok}}</option>
			@foreach ($pemasok as $namapemasok)
			<option value="{{$namapemasok -> nama_pemasok}}">{{$namapemasok -> nama_pemasok}}</option>
			@endforeach
		</select>
			</div>
		

		<div class="col-2">
		ID Gudang :
		{{-- {!! Form::text('idgudang',$data->id_gudang,['class' => 'form-control']) !!} --}}
		<select name="idgudang" class="form-control">
			<option value="{{$data->id_gudang}}">{{$data->id_gudang}}</option>
			@foreach ($gudang as $idgudang)
			<option value="{{$idgudang -> id_gudang}}">{{$idgudang -> id_gudang}}</option>
			@endforeach
		</select>
		</div>

		<div class="col-3">
		Satuan :
		{{-- {!! Form::text('satuanbarang',$data->satuan,['class' => 'form-control']) !!} --}}
		<select name="satuanbarang" class="form-control">
			<option value="{{$data->satuan}}">{{$data->satuan}}</option>
			@foreach ($satuan as $namasatuan)
			<option value="{{$namasatuan -> satuan}}">{{$namasatuan -> satuan}}</option>
			@endforeach
		</select>	
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