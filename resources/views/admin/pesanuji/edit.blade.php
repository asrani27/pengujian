@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">Form Edit Pesan Uji Lab</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" action="/admin/pesan_uji/{{$data->id}}">
              @csrf
              @method('PUT')
              <div class="card-body">
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Pelanggan</label>
                  <div class="col-sm-10">
                    <select class="form-control select2" name="pelanggan_id" required>
                      <option value="">--Pilih Pelanggan--</option>
                      @foreach ($pelanggan as $item)
                      <option value="{{$item->id}}" {{$data->pelanggan_id == $item->id ? 'selected':''}}>{{$item->nama}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Jenis Sample</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="jenis" value="{{$data->jenis}}">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Tanggal Terima</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" name="tanggal_terima"  value="{{$data->tanggal_terima}}">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Jumlah Sample</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="jumlah"  value="{{$data->jumlah}}">
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