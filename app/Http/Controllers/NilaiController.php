<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class NilaiController extends Controller
{
    public function index()
	{
    //di sini isi controller pegawai
    $nilaikuliah = DB::table('nilaikuliah')->get();
    return view('indexnilai',['nilaikuliah' => $nilaikuliah]);
    }

    public function tambah()
	{

		// memanggil view tambah
		return view('tambahnilai');

	}
    // method untuk insert data ke table pegawai
	public function store(Request $request)
	{
		// insert data ke table pegawai
		DB::table('nilaikuliah')->insert([
			'ID' => $request->id,
			'NRP' => $request->nrp,
			'NilaiAngka' => $request->nilai,
			'SKS' => $request->sks
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/nilaikuliah');

	}
}
