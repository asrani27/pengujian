@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">Form Tambah Hasil Uji Lab</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" action="/admin/hasil_uji">
              @csrf
              <div class="card-body">
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">ID Status Uji</label>
                  <div class="col-sm-10">
                    <select class="form-control select2" name="status_uji_id" required>
                      <option value="">--Pilih--</option>
                      @foreach ($statusuji as $item)
                      <option value="{{$item->id}}">SJ{{$item->id}}, Nama : {{$item->pelanggan->nama}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Tanggal Uji</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" name="tanggal_uji" required>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Waktu Pengujian</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="waktu_uji" required>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Hasil Pengujian</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="hasil_pengujian" required>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Keterangan</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="keterangan" required>
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