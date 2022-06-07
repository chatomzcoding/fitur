<?php

namespace App\Http\Controllers\Latihan;

use App\Http\Controllers\Controller;
use App\Models\Sortingitem;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function latihan($sesi)
    {
        switch ($sesi) {
            case 'skeleton':
                return view('latihan.skeleton.index');
                break;
            case 'hideshowpassword':
                return view('latihan.hideshowpassword.index');
                break;
            case 'grafikrealtime':
                return view('latihan.grafikrealtime.index');
                break;
            case 'addinputdinamis':
                return view('latihan.addinputdinamis.index');
                break;
            case 'select2ajax':
                return view('latihan.select2ajax.index');
                break;
            case 'signaturepad':
                // proses
                // $data_uri = $_POST['foto'];
                // $encoded_image = explode(",", $data_uri)[1];
                // $decoded_image = base64_decode($encoded_image);
                // file_put_contents("signature.png", $decoded_image);
                return view('latihan.signaturepad.index');
                break;
            
            default:
                return redirect('/');
                break;
        }
    }

    public function getdata()
    {
        $cari = $_GET['search'];

        if ($cari == null) {
            echo 'data kosong';
        } else {
            $list = [];
            $key = 0;

            $data = Sortingitem::where('title','LIKE','%'.$cari.'%')->get();

            foreach ($data as $item) {
                $list[$key]['text'] = $item->title; 
                $list[$key]['id'] = $item->id;
                $key++; 
            }

            echo json_encode($list);
        }
        
    }

    public function proses(Request $request)
    {
        dd($request);
    }

    public function skeleton()
    {
        return view('latihan.skeleton.data');
    }

    // infinite scroll ajax
    public function infinite()
    {
        $result = Sortingitem::limit(4)->get();
        return view('latihan.infinitescroll.index', compact('result'));

    }

    public function load()
    {
        $result = Sortingitem::where('id','>',$_GET['last_id'])->orderBy('id','ASC')->limit(4)->get();
        return view('latihan.infinitescroll.data', compact('result'));
        
    }

    // end of infinite scroll

    public function qrcode()
    {
        // pertama instal dlu package
        // composer require simplesoftwareio/simple-qrcode
        $isi = (isset($_GET['isi'])) ? $_GET['isi'] : 'firman' ;
        $ukuran = (isset($_GET['ukuran'])) ? $_GET['ukuran'] : 100 ;
        return view('latihan.qrcode.index', compact('isi','ukuran'));
    }
}
