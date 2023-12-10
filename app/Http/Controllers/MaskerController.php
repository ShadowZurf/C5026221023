<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class MaskerController extends Controller
{
	public function index()
	{
    	// mengambil data dari table pegawai
		// $pegawai = DB::table('pegawai')->get();
        $masker = DB::table('masker')->paginate(15);
    	// mengirim data pegawai ke view index
		return view('indexmasker',['masker' => $masker]);

	}

	// method untuk menampilkan view form tambah pegawai
	public function tambah()
	{

		// memanggil view tambah
		return view('tambahmasker');

	}

	// method untuk insert data ke table pegawai
	public function store(Request $request)
	{
        // untuk mengapdet "tersedia" secara otomatis tergantung dari stock
        if($request->stockmasker > 0) {
            $tersedia='Y';
        }else {
            $tersedia='N';
        }

		// insert data ke table pegawai
		DB::table('masker')->insert([
			'kodemasker' => $request->kodemasker,
			'merkmasker' => $request->merkmasker,
			'stockmasker' => $request->stockmasker,
			'tersedia' => $tersedia
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/masker');

	}

	// method untuk edit data pegawai
	public function edit($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$masker = DB::table('masker')->where('kodemasker',$id)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('editmasker',['masker' => $masker]);

	}

    public function view($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$masker = DB::table('masker')->where('kodemasker',$id)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('viewmasker',['masker' => $masker]);

	}

	// update data pegawai
	public function update(Request $request)
	{
         // untuk mengapdet "tersedia" secara otomatis tergantung dari stock
         if($request->stockmasker > 0) {
            $tersedia='Y';
        }else {
            $tersedia='N';
        }
		// update data pegawai
		DB::table('masker')->where('kodemasker',$request->kodemasker)->update([
            'kodemasker' => $request->kodemasker,
			'merkmasker' => $request->merkmasker,
			'stockmasker' => $request->stockmasker,
			'tersedia' => $tersedia
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/masker');
	}

	// method untuk hapus data pegawai
	public function hapus($id)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('masker')->where('kodemasker',$id)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/masker');
	}

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$masker = DB::table('masker')
		->where('merkmasker','like',"%".$cari."%")
		->paginate();

    		// mengirim data pegawai ke view index
		return view('indexmasker',['masker' => $masker , 'cari' => $cari]);

	}
}
