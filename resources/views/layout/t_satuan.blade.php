@extends('layout.t_template')
@section('title', 'Satuan')
@section('content')
	<h1>Data Satuan</h1>
	<div class="card-body">
		
		{!! Form::open(['url' => '/prosestambahsatuan']) !!}
		<div class="col-2">
			
		ID Satuan :
		{!! Form::text('idsatuan','',['placeholder'=> 'ID Satuan','class' => 'form-control']) !!}
		
		</div>

		<div class="col-3">
			
		Nama Satuan :
		{!! Form::text('namasatuan','',['placeholder'=> 'Nama Satuan','class' => 'form-control']) !!}
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
                <h3 class="card-title" align="center">Tabel Satuan</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                 <table align="center" id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                  	<th>No.</th>
                    <th>ID Satuan</th>
                    <th>Nama Satuan</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  	<?php $nomor=1; ?>
                  	@foreach($satuans as $key)
                  <tr>
                  	<td>{{$nomor++}}</td>
                    <td>{{$key->id_satuan}}</td>
                    <td>{{$key->satuan}}</td>
                    <td><a href="/satuan/edit/{{$key->id_satuan}}" class="btn btn-success">Edit</a>||<a href="/satuan/hapus/{{$key->id_satuan}}" class="btn btn-danger">Hapus</a></td>
                  </tr>
                  @endforeach
                </table>
@endsection