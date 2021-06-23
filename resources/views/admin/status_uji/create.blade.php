@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">Form Tambah Status Uji Lab</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" action="/admin/status_uji">
              @csrf
              <div class="card-body">
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">ID Pembayaran</label>
                  <div class="col-sm-10">
                    <select class="form-control select2" name="pembayaran_id" required>
                      <option value="">--Pilih--</option>
                      @foreach ($pembayaran as $item)
                      <option value="{{$item->id}}">Pembayaran : {{$item->jumlah}}, Uji:{{$item->pesanuji->jenis}} - Nama : {{$item->pelanggan->nama}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Tanggal Terima</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" name="tanggal_terima" required>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Tanggal Selesai</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" name="tanggal_selesai" required>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Waktu Pengujian</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="waktu_pengujian" required>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Jumlah Sample</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="jumlah_sample" required>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Status pembayaran</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="status_pembayaran" required>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Status Pengujian</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="status_pengujian" required>
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-info">Simpan</button>
              </div>
              <!-- /.card-footer -->
            </form>
        </div>
    </div>
</div>
@endsection