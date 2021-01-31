@extends('layout.t_template')
@section('title', )
@section('content')
  <h1>Detail Data Gudang</h1>
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title" align="center">Detail Tabel Gudang</h3>
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
                  </tr>
                  </thead>
                  <tbody>
                    <?php $nomor=1; ?>
                    @foreach($barangs as $key)
                  <tr>
                    <td>{{$nomor++}}</td>
                    <td>{{$key->id_barang}}</td>
                    <td>{{$key->nama_barang}}</td>
                    <td>{{$key->jumlah_barang}}</td>
                    <td>{{$key->nama_pemasok}}</td>
                    <td>{{$key->id_gudang}}</td>
                    <td>{{$key->satuan}}</td>
                  </tr>

                  @endforeach
                </table>
             
@endsection