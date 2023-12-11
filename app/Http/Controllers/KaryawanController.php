<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;


class KaryawanController extends Controller
{
	public function index()
	{
    	// mengambil data dari table pegawai
		// $pegawai = DB::table('pegawai')->get();
        $karyawan = DB::table('karyawan')->paginate(10);
    	// mengirim data pegawai ke view index
		return view('indexkaryawan',['karyawan' => $karyawan]);

	}

	// method untuk menampilkan view form tambah pegawai
	public function tambah()
	{

		// memanggil view tambah
		return view('tambahkaryawan');

	}

	// method untuk insert data ke table pegawai
	public function store(Request $request)
	{
        $request->validate([
            'kodepegawai' => [
                'required',
                Rule::unique('karyawan', 'kodepegawai'),
            ],
            'namalengkap' => 'required',
            'divisi' => 'required',
            'departemen' => 'required',
        ]);
        // insert data ke table pegawai
		DB::table('karyawan')->insert([
			'kodepegawai' => $request->kodepegawai,
			'namalengkap' => $request->namalengkap,
			'divisi' => $request->divisi,
			'departemen' => $request->departemen
		]);
		// alihkan halaman ke halaman pegawai
           return redirect('/karyawan')->with('success', 'Data berhasil disimpan!');
        }


	public function update(Request $request)
	{
         // untuk mengapdet "tersedia" secara otomatis tergantung dari stock

		// update data pegawai
		DB::table('karyawan')->where('kodepegawai',$request->kodepegawai)->update([
            'kodepegawai' => $request->kodepegawai,
			'namalengkap' => $request->namalengkap,
			'divisi' => $request->divisi,
			'departemen' => $departemen
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/karyawan');
	}

	// method untuk hapus data pegawai
	public function hapus($id)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('karyawan')->where('kodepegawai',$id)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/karyawan');
	}
}
