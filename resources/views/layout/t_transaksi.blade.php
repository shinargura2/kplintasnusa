@extends('layout.t_template')
@section('title', 'Transaksi')
@section('content')
	<h1>Data Transaksi</h1>
	<div class="card-body">
		
		{!! Form::open(['url' => '/prosestambahtransaksi']) !!}
		<div class="col-2">
			
		ID Transaksi :
		{!! Form::text('idtransaksi','',['placeholder'=> 'ID Transaksi','class' => 'form-control']) !!}
		
		</div>

		<div class="col-2">
		
		{{-- {!! Form::Label('idbarang', 'idbrang :') !!}
		{!! Form::select('id_barang', $idbarangs) !!} --}}
		ID Barang :
		<select name="idbarang" class="form-control">
			<option value="">======PILIH========</option>
			@foreach ($barang as $idbarang)
			<option value="{{$idbarang -> id_barang}}">{{$idbarang -> id_barang}}</option>
			@endforeach
		</select>

		{{-- ID Barang :
		{!! Form::text('idbarang','',['placeholder'=> 'ID Barang','class' => 'form-control']) !!} --}}
			</div>

		<div class="col-4">
			
		Nama Barang :
		<select name="namabarang" class="form-control">
			<option value="">======PILIH========</option>
				@foreach ($barang as $namabarang)
				<option value="{{$namabarang -> nama_barang}}">{{$namabarang -> nama_barang}}</option>
				@endforeach
		</select>
		{{-- {!! Form::text('namabarang','',['placeholder'=> 'Nama Barang','class' => 'form-control']) !!} --}}
			</div>
		
		<div class="col-2">


		Jumlah Transaksi :
		{!! Form::number('jumlahtransaksi','',['placeholder'=> 'Masukkan Angka','class' => 'form-control']) !!}
		</div>

		<div class="col-2">
		Tanggal Transaksi :
		<input type="date" name="tanggalttransaksi">

		</div>

		<div class="col-2">
		Pilih Status :
		<select name="status" id="status" class="form-control">
			<option value="Barang Masuk">Barang Masuk</option>
			<option value="Barang Keluar">Barang Keluar</option>
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
                <h3 class="card-title" align="center">Tabel Transaksi</h3>
                <a href="/prosesprinttransaksi" class="btn btn-warning float-right btn-sm"><i class="fas fa-print"></i>Cetak</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                 <table align="center" id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                  	<th>No.</th>
                    <th>ID Transaksi</th>
                    <th>ID Barang</th>
                    <th>Nama Barang</th>
                    <th>Jumlah Transaksi</th>
                    <th>Keterangan</th>
                    <th>Tanggal</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  	<?php $nomor=1; ?>
                  	@foreach($data as $key)
                  <tr>
                  	<td>{{$nomor++}}</td>
                    <td>{{$key->id_transaksi}}</td>
                    <td>{{$key->id_barang}}</td>
                    <td>{{$key->nama_barang}}</td>
                    <td>{{$key->jumlah_transaksi}}</td>
                    <td>{{$key->status}}</td>
                    <td>{{$key->tanggaltransaksi}}</td>
                    <td><a href="/transaksi/edit/{{$key->id_transaksi}}" class="btn btn-success">Edit</a>||<a href="/transaksi/hapus/{{$key->id_transaksi}}" class="btn btn-danger">Hapus</a></td>
                  </tr>
                  @endforeach
                </table>
@endsection