<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TblProdukController extends Controller
{
    public function index()
    {
        $tbl_produk = Produk::all();
        return view('tbl_produk', ['tbl_produk' => $produk]);
    }
}
