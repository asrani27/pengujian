@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <a href="/admin/pesan_uji/create" class="btn btn-primary"><strong><i class="fas fa-plus"></i> Tambah</strong></a><br/><br/>
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Data Pesan Uji Laboratorium</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped table-sm">
            <thead>
            <tr>
              <th>No</th>
              <th>ID Pesan Uji</th>
              <th>Tanggal</th>
              <th>Nama Pelanggan</th>
              <th>Jenis Sample</th>
              <th>Tgl Terima Sample</th>
              <th>Jumlah Sample</th>
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
                    <td>PJ{{$item->id}}</td>
                    <td>{{$item->created_at}}</td>
                    <td>{{$item->pelanggan->nama}}</td>
                    <td>{{$item->jenis}}</td>
                    <td>{{$item->tanggal_terima}}</td>
                    <td>{{$item->jumlah}}</td>
                    <td>
                      <form action="/admin/pesan_uji/{{$item->id}}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-xs btn-danger" onclick="return confirm('yakin Di Hapus?');"><i class="fas fa-trash"></i> Delete</button>  
                        <a href="/admin/pesan_uji/{{$item->id}}/edit" class="btn btn-xs btn-success"><i class="fas fa-edit"></i> Edit</a>   
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