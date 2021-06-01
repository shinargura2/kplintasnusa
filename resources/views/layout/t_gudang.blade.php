@extends('layout.t_template')
@section('title', 'Gudang')
@section('content')
	<h1>Data Gudang</h1>
	<div class="card-body">
		
		{!! Form::open(['url' => '/prosestambahgudang']) !!}
		<div class="col-2">
			
		ID Gudang :
		{!! Form::text('idgudang','',['placeholder'=> 'ID Gudang','class' => 'form-control']) !!}
		
		</div>

		<div class="col-3">
			
		Nama Gudang :
		{!! Form::text('namagudang','',['placeholder'=> 'Nama Gudang','class' => 'form-control']) !!}
			</div>
		<div class="col-2">
		
		<p></p>
		{!! Form::submit('Tambah Data', ['class' => 'btn btn-primary']) !!}

		{!! Form::close() !!}
		
		</div>
		<p></p>
		<div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title" align="center">Tabel Gudang</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table align="center" id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                  	<th>No.</th>
                    <th>ID Gudang</th>
                    <th>Nama Gudang</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  	<?php $nomor=1; ?>
                  	@foreach($gudangs as $key)
                  <tr>
                  	<td>{{$nomor++}}</td>
                    <td>{{$key->id_gudang}}</td>
                    <td>{{$key->nama_gudang}}</td>
                    <td><a href="/gudang/detail/{{$key->id_gudang}}" class="btn btn-info">Detail</a>||<a href="/gudang/edit/{{$key->id_gudang}}" class="btn btn-success">Edit</a>||<a href="/gudang/hapus/{{$key->id_gudang}}" class="btn btn-danger">Hapus</a></td>
                  </tr>
                  @endforeach
                </table>
@endsection