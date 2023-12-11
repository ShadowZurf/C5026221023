<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;


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
        $validator = Validator::make($request->all(), [
        'kodepegawai' => 'required|unique:karyawan,kodepegawai,' . $request->kodepegawai,
        // ... other validation rules for other fields
    ]);

    // Lakukan pemeriksaan manual jika validasi gagal
    if ($validator->fails()) {
        $existingPegawai = karyawan::where('kodepegawai', $request->kodepegawai)->first();

        // Jika kodepegawai sudah ada
        if ($existingPegawai) {
            return redirect()->back()->withInput()->with('warning', 'Kode Pegawai sudah digunakan oleh pegawai lain');
        }

        // Jika terdapat kesalahan validasi selain kodepegawai yang sudah digunakan
        return redirect()->back()->withErrors($validator)->withInput();
    }

    // Simpan data jika validasi berhasil
    $karyawan = karyawan::updateOrCreate(
        ['kodepegawai' => $request->kodepegawai], // Jika ada ID, akan mengupdate data, jika tidak akan membuat data baru
        $request->all()
    );

		// insert data ke table pegawai
		DB::table('karyawan')->insert([
			'kodepegawai' => $request->kodepegawai,
			'namalengkap' => $request->namalengkap,
			'divisi' => $request->divisi,
			'departemen' => $request->departemen
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/karyawan');

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
