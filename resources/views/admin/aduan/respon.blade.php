@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <a href="/admin/aduan" class="btn btn-secondary"><strong>Kembali</strong></a><br/><br/>
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Detail Aduan Dan Isi Solusi</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="alert alert-danger alert-dismissible">
                <h5> Aduan Oleh {{$data->kustomer->nama}}, Tgl : {{\Carbon\Carbon::parse($data->tanggal)->format('d M Y')}}</h5>
                <table width="100%">
                    <tr>
                        <th>IDENTITAS KIRIMAN</th>
                        <th></th>
                        <th></th>
                        <th>IDENTITAS PENGIRIM</th>
                        <th></th>
                        <th></th>
                        <th>DETAIL ADUAN</th>
                        <th></th>
                        <th></th>
                    </tr>
                    <tr>
                        <td width="15%">No Kiriman</td>
                        <td>:</td>
                        <td>{{$data->no_kiriman}}</td>
                        <td width="15%">Nama Pengirim</td>
                        <td>:</td>
                        <td>{{$data->nama_pengirim}}</td>
                        <td width="10%">Jenis</td>
                        <td>:</td>
                        <td>{{$data->jenis_aduan}}</td>
                    </tr>
                    <tr>
                        <td>Kode Produk</td>
                        <td>:</td>
                        <td>{{$data->kode_produk}}</td>
                        <td>Alamat Pengirim</td>
                        <td>:</td>
                        <td>{{$data->alamat_pengirim}}</td>
                        <td>Isi</td>
                        <td>:</td>
                        <td>{{$data->isi_aduan}}</td>
                    </tr>
                    <tr>
                        <td>Berat</td>
                        <td>:</td>
                        <td>{{$data->berat}}</td>
                        <td>Telp Pengirim</td>
                        <td>:</td>
                        <td>{{$data->telp_pengirim}}</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Isi</td>
                        <td>:</td>
                        <td>{{$data->isi}}</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </table>
            </div>
            @if ($solusi == null)
                
            <form action="/admin/aduan/respon/{{$data->id}}/solusi" method="POST">
                @csrf
                <textarea rows="4" class="form-control" required name="isi" placeholder="isi solusi"></textarea><br/>
                <input type="hidden" name="aduan_id" value="{{$data->id}}">
                <button type="submit" class="btn btn-primary">Kirim Solusi</button>
            </form>
            @else
                
            <div class="alert alert-success">
                <h5> Direspon Oleh Admin, Tgl : {{\Carbon\Carbon::parse($data->respon->first()->created_at)->format('d M Y H:i:s')}}</h5>
                {{$data->respon->first()->isi}}<br/><br/>
                <a href="/admin/aduan/respon/{{$data->id}}/delete" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i> Delete Solusi</a>
            </div>
            @endif
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
@endsection