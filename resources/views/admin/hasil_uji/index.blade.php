@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <a href="/admin/hasil_uji/create" class="btn btn-primary"><strong><i class="fas fa-plus"></i> Tambah</strong></a><br/><br/>
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Data Hasil Uji</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped table-sm">
            <thead>
            <tr>
              <th>No</th>
              <th>ID Hasil Uji</th>
              <th>Pelanggan</th>
              <th>Tanggal Uji</th>
              <th>Waktu Pengujian</th>
              <th>Hasil Pengujian</th>
              <th>Keterangan</th>
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
                    <td>HJ{{$item->id}}</td>
                    <td>{{$item->pelanggan->nama}}</td>
                    <td>{{$item->tanggal_uji}}</td>
                    <td>{{$item->waktu_uji}}</td>
                    <td>{{$item->hasil_pengujian}}</td>
                    <td>{{$item->keterangan}}</td>
                    <td>
                      <form action="/admin/hasil_uji/{{$item->id}}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-xs btn-danger" onclick="return confirm('yakin Di Hapus?');"><i class="fas fa-trash"></i> Delete</button>  
                        <a href="/admin/hasil_uji/{{$item->id}}/edit" class="btn btn-xs btn-success"><i class="fas fa-edit"></i> Edit</a>   
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