<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KasirController extends Controller
{
    public function tampil()
    {
        $data = DB::table('barang')->get();
        return view('data', ['brg' => $data]);
    }
    public function transaksi()
    {
        $data = DB::table('transaksi')->get();
        return view('transaksi', ['tr' => $data]);
    }
    public function tambah()
    {
        return view('tambah');
    }
    public function insertb(Request $r)
    {
        DB::table('barang')->insert(
            [
                'kode' => $r->kode,
                'nama' => $r->nama,
                'harga' => $r->harga,
                'stok' => $r->stok
            ]
        );
        return redirect('/tambah');
    }
    public function insertt(Request $r)
    {
        DB::table('transaksi')->insert(
            [
                'nama' => $r->nama,
                'harga' => $r->harga,
                'jumlah' => $r->stok,
                'total' => $r->total
            ]
        );
        return redirect('/transaksi');
    }
}
