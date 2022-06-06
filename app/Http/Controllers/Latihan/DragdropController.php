<?php

namespace App\Http\Controllers\Latihan;

use App\Http\Controllers\Controller;
use App\Models\Gambar;
use Illuminate\Http\Request;

class DragdropController extends Controller
{
    public function index()
    {
        return view('latihan.dragdrop.index');
    }

    public function upload(Request $request)
    {
        if(!empty($request->file)){
            //menghubungkan ke database
            $tujuan_upload = 'img';
            $file = $request->file('file');
            $nama_file = time()."_".$file->getClientOriginalName();
            $file->move($tujuan_upload,$nama_file);

            Gambar::create([
                'nama_file' => $nama_file
            ]);
        }
    }

    public function data()
    {
        $gambar = Gambar::all();
        return view('latihan.dragdrop.tampil', compact('gambar'));
    }

    public function hapus($id)
    {
        Gambar::find($id)->delete();

        return back();
    }
}
