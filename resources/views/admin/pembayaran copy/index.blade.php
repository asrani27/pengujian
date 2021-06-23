@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <a href="/admin/pembayaran/create" class="btn btn-primary"><strong><i class="fas fa-plus"></i> Tambah</strong></a><br/><br/>
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Data Pembayaran Pesan Uji Laboratorium</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped table-sm">
            <thead>
            <tr>
              <th>No</th>
              <th>ID Pembayaran</th>
              <th>Tanggal</th>
              <th>Untuk Uji</th>
              <th>Nama Pelanggan</th>
              <th>No Rekening</th>
              <th>Nama Rekening</th>
              <th>Tgl Transfer</th>
              <th>Jumlah Transfer</th>
              <th></th>
            </tr>
            </thead>
            <tbody>
                @php
                    $no =1;
                @endphp
                @foreach ($data as $item)
                    <tr>
                    <td>{{$no++}}</td>
                    <td>PB{{$item->id}}</td>
                    <td>{{$item->created_at}}</td>
                    <td>{{$item->pesanuji->jenis}}</td>
                    <td>{{$item->pelanggan->nama}}</td>
                    <td>{{$item->rekening}}</td>
                    <td>{{$item->nama_rekening}}</td>
                    <td>{{$item->tanggal_transfer}}</td>
                    <td>{{$item->jumlah}}</td>
                    <td>
                      <form action="/admin/pembayaran/{{$item->id}}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-xs btn-danger" onclick="return confirm('yakin Di Hapus?');"><i class="fas fa-trash"></i> Delete</button>  
                        <a href="/admin/pembayaran/{{$item->id}}/edit" class="btn btn-xs btn-success"><i class="fas fa-edit"></i> Edit</a>   
                      </form>
                    </td>
                    </tr>
                @endforeach
            </tbody>
                
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
@endsection