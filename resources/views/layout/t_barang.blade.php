@extends('layout.t_template')
@section('title', )
@section('content')
	<h1>Data Barang</h1>
	
	<div class="card-body">
		
		{!! Form::open(['url' => '/prosestambahbarang']) !!}
		<div class="col-2">
			
		ID Barang :
		{!! Form::text('idbarang','',['placeholder'=> 'ID Barang','class' => 'form-control']) !!}
		
		</div>

		<div class="col-4">
			
		Nama Barang :
		{!! Form::text('namabarang','',['placeholder'=> 'Nama Barang','class' => 'form-control']) !!}
			</div>
		<div class="col-2">
			
		Jumlah Barang :
		{!! Form::number('jumlahbarang','',['placeholder'=> 'Masukkan Angka','class' => 'form-control']) !!}
			</div>
		<div class="col-4">
			
		{{-- Nama Pemasok :
		{!! Form::text('namapemasok','',['placeholder'=> 'Nama Pemasok','class' => 'form-control']) !!} --}}
		{{-- <select name="namapemasok" class="form-control">
			<option value="">Pilih Pemasok</option>
			@foreach($pemasoks as $key2)
			<option value="{{$key2->nama_pemasok}}">{{$key2->nama_pemasok}}</option>
			@endforeach
		</select> --}}
		Pemasok :
		<select name="namapemasok" class="form-control">
			<option value="">======PILIH DULU========</option>
			@foreach ($pemasok as $namapemasok)
			<option value="{{$namapemasok -> nama_pemasok}}">{{$namapemasok -> nama_pemasok}}</option>
			@endforeach
		</select>
		
			</div>
		

		<div class="col-3">
		{{-- ID Gudang :
		{!! Form::text('idgudang','',['placeholder'=> 'ID Gudang','class' => 'form-control']) !!} --}}
		ID Gudang :
		<select name="idgudang" class="form-control">
			<option value="">======PILIH DULU========</option>
			@foreach ($gudang as $idgudang)
			<option value="{{$idgudang -> id_gudang}}">{{$idgudang -> id_gudang}}</option>
			@endforeach
		</select>
		</div>

		<div class="col-2">
		{{-- Satuan :
		
		{!! Form::text('satuanbarang','',['placeholder'=> 'Masukkan Satuan','class' => 'form-control']) !!}	 --}}
		Satuan :
		<select name="satuanbarang" class="form-control">
			<option value="">====PILIH DULU====</option>
			@foreach ($satuan as $namasatuan)
			<option value="{{$namasatuan -> satuan}}">{{$namasatuan -> satuan}}</option>
			@endforeach
		</select>
		</div>
		
		<p></p>
		<div class="col-2">
		
		<p></p>
		{!! Form::submit('Tambah Data', ['class' => 'btn btn-primary']) !!}

		{!! Form::close() !!}
		
		</div>
		
		</div>


          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title" align="center">Tabel Barang</h3>
                <a href="/prosesprintbarang" class="btn btn-warning float-right btn-sm"><i class="fas fa-print"></i>Cetak</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table align="center" id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                  	<th>No.</th>
                    <th>ID Barang</th>
                    <th>Nama Barang</th>
                    <th>Jumlah Barang</th>
                    <th>Nama Pemasok</th>
                    <th>ID Gudang</th>
                   	<th>Satuan</th>
                   	<th>Aksi</th>
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
                    <td><a href="/barang/edit/{{$key->id_barang}}" class="btn btn-success">Edit</a>||<a href="/barang/hapus/{{$key->id_barang}}" class="btn btn-danger">Hapus</a></td>
                  </tr>
                  @endforeach
                </table>
             
@endsection