<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use zelnaradev\universe\Universal;

class HomepageController extends Controller
{
    public function index()
    {

        $fitur = [
            [
                'nama' => 'Crop Images',
                'url' => 'latihan/crop',
                'status' => 'success'
            ],
            [
                'nama' => 'Package Zelnara\Universe',
                'url' => 'latihan/universal',
                'status' => 'primary'
            ],
            [
                'nama' => 'Select dengan ajax',
                'url' => 'latihan/select2ajax',
                'status' => 'success'
            ],
            [
                'nama' => 'Drag Data Update Auto',
                'url' => 'item',
                'status' => 'success'
            ],
            [
                'nama' => 'tanda tangan digital',
                'url' => 'latihan/signaturepad',
                'status' => 'success'
            ],
            [
                'nama' => 'Add Input Dinamis',
                'url' => 'latihan/addinputdinamis',
                'status' => 'success'
            ],
            [
                'nama' => 'Grafik Real TIme',
                'url' => 'latihan/grafikrealtime',
                'status' => 'success'
            ],
            [
                'nama' => 'Drag And Drop File',
                'url' => 'dragdrop',
                'status' => 'success'
            ],
            [
                'nama' => 'Infinite Scroll',
                'url' => 'infinite',
                'status' => 'success'
            ],
            [
                'nama' => 'Qrcode',
                'url' => 'qrcode',
                'status' => 'success'
            ],
            [
                'nama' => 'Skeleton Loading',
                'url' => 'latihan/skeleton',
                'status' => 'danger'
            ],
            [
                'nama' => 'hide Show Password',
                'url' => 'latihan/hideshowpassword',
                'status' => 'success'
            ]
        ];
        return view('welcome', compact('fitur'));
    }
}
