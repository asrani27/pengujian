<?php

namespace App\Http\Controllers;

use App\Models\HasilUji;
use App\Models\StatusUji;
use App\Models\Sertifikat;
use Illuminate\Http\Request;

class SertifikatController extends Controller
{
    public function index()
    {
        $data = Sertifikat::get();
        return view('admin.sertifikat.index',compact('data'));
    }
    
    public function create()
    {
        $statusuji = StatusUji::get();
        return view('admin.sertifikat.create',compact('statusuji'));
    }
    
    public function store(Request $req)
    {
        
        $pelanggan_id = HasilUji::find($req->hasil_uji_id)->pelanggan_id;
        $attr = $req->all();
        $attr['pelanggan_id'] = $pelanggan_id;
        
        Sertifikat::create($attr);
        toastr()->success('Berhasil Di Simpan');
        return redirect('admin/sertifikat');   
    }
    
    public function edit($id)
    {
        $data = Sertifikat::find($id);
        $statusuji = StatusUji::get();
        return view('admin.sertifikat.edit',compact('data','statusuji'));
    }
    
    public function update(Request $req, $id)
    {
        $pelanggan_id = StatusUji::find($req->status_uji_id)->pelanggan_id;
        $attr = $req->all();
        $attr['pelanggan_id'] = $pelanggan_id;

        Sertifikat::find($id)->update($attr);
        toastr()->success('Berhasil Di Update');
        return redirect('admin/sertifikat');   
    }
    
    public function destroy($id)
    {
        Sertifikat::find($id)->delete();
        toastr()->success('Berhasil Di Hapus');
        return back();
    }
}
