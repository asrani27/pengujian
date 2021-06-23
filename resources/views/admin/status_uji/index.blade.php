@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <a href="/admin/status_uji/create" class="btn btn-primary"><strong><i class="fas fa-plus"></i> Tambah</strong></a><br/><br/>
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Data Status Uji</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped table-sm">
            <thead>
            <tr>
              <th>No</th>
              <th>ID Status Uji</th>
              <th>Pelanggan</th>
              <th>Tanggal Terima</th>
              <th>Tanggal Selesai</th>
              <th>Waktu Pengujian</th>
              <th>Status Pembayaran</th>
              <th>Jumlah Sample</th>
              <th>Status Pengujian</th>
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
                    <td>SJ{{$item->id}}</td>
                    <td>{{$item->pelanggan->nama}}</td>
                    <td>{{$item->tanggal_terima}}</td>
                    <td>{{$item->tanggal_selesai}}</td>
                    <td>{{$item->waktu_pengujian}}</td>
                    <td>{{$item->status_pembayaran}}</td>
                    <td>{{$item->jumlah_sample}}</td>
                    <td>{{$item->status_pengujian}}</td>
                    <td>
                      <form action="/admin/status_uji/{{$item->id}}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-xs btn-danger" onclick="return confirm('yakin Di Hapus?');"><i class="fas fa-trash"></i> Delete</button>  
                        <a href="/admin/status_uji/{{$item->id}}/edit" class="btn btn-xs btn-success"><i class="fas fa-edit"></i> Edit</a>   
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