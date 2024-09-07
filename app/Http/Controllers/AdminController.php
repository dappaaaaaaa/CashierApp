<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $adm = Admin::get();
        return view('app.cashierApp', compact('adm'));
    }
    public function tambah()
    {
        return view('admin.tambahmenu');
    }
    public function submit(Request $request)
    {
        $adm = new Admin();
        $adm->nama_menu = request('nama_menu');
        $adm->harga = request('harga');
        $adm->save();
        return redirect()->route('admin');
    }
}
