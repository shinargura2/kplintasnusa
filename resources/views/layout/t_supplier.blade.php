@extends('layout.t_template')
@section('title', 'Supplier')
@section('content')
	<h1>Data Supplier</h1>
	<div class="card-body">
		
		{!! Form::open(['url' => '/prosestambahpemasok']) !!}
		<div class="col-2">
			
		ID Pemasok :
		{!! Form::text('idpemasok','',['placeholder'=> 'ID Pemasok','class' => 'form-control']) !!}
		
		</div>

		<div class="col-3">
			
		Nama Pemasok :
		{!! Form::text('namapemasok','',['placeholder'=> 'Nama Pemasok','class' => 'form-control']) !!}
			</div>
		
		<div class="col-3">
			
		Email :
		{!! Form::text('emailpemasok','',['placeholder'=> 'Email','class' => 'form-control']) !!}
			</div>

		<div class="col-3">
			
		Alamat :
		{!! Form::text('alamatpemasok','',['placeholder'=> 'Alamat','class' => 'form-control']) !!}
			</div>
		<p></p>
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
                <table align="center" id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                  	<th>No.</th>
                    <th>ID Pemasok</th>
                    <th>Nama Pemasok</th>
                    <th>Email</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  	<?php $nomor=1; ?>
                  	@foreach($pemasoks as $key)
                  <tr>
                  	<td>{{$nomor++}}</td>
                    <td>{{$key->id_pemasok}}</td>
                    <td>{{$key->nama_pemasok}}</td>
                    <td>{{$key->email}}</td>
                    <td>{{$key->alamat}}</td>
                    <td><a href="/supplier/edit/{{$key->id_pemasok}}" class="btn btn-success">Edit</a>||<a href="/supplier/hapus/{{$key->id_pemasok}}" class="btn btn-danger">Hapus</a></td>
                  </tr>
                  @endforeach
                </table>

@endsection
