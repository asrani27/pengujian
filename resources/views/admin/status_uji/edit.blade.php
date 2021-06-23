@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">Form Edit status Uji Lab</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" action="/admin/status_uji/{{$data->id}}">
              @csrf
              @method('PUT')
              <div class="card-body">
                
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">ID Pembayaran</label>
                  <div class="col-sm-10">
                    <select class="form-control select2" name="pembayaran_id" required>
                      <option value="">--Pilih--</option>
                      @foreach ($pembayaran as $item)
                      <option value="{{$item->id}}" {{$data->pembayaran_id == $item->id ? 'selected':''}}>Pembayaran : {{$item->jumlah}}, Uji:{{$item->pesanuji->jenis}} - Nama : {{$item->pelanggan->nama}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Tanggal Terima</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" name="tanggal_terima" value="{{$data->tanggal_terima}}">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Tanggal Selesai</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" name="tanggal_selesai"  value="{{$data->tanggal_selesai}}">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Waktu Pengujian</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="waktu_pengujian"  value="{{$data->waktu_pengujian}}">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Jumlah Sample</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="jumlah_sample"  value="{{$data->jumlah_sample}}">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Status pembayaran</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="status_pembayaran"  value="{{$data->status_pembayaran}}">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Status Pengujian</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="status_pengujian"  value="{{$data->status_pengujian}}">
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-info">Update</button>
              </div>
              <!-- /.card-footer -->
            </form>
        </div>
    </div>
</div>
@endsection