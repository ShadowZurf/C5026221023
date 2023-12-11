@extends('master2')
@section('judulhalaman','Tambah Karyawan')

@section('konten')
	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Karyawan</h3>

	<a href="/karyawan" class="btn btn-success">Kembali</a>

	<br/>
	<br/>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<!-- Menampilkan Pesan Sukses -->
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif


	<form action="/karyawan/store" method="post" class="form-horizontal">
		{{ csrf_field() }}
        <div class="form-group row">
            <label for="kodepegawai" class="col-xl-2 col-form-label mr-2">Kode Pegawai</label>
            <div class="col-sm-3">
            <input type="number" class="form-control" id="kodepegawai" name="kodepegawai">
        </div>
    </div>
        <div class="form-group row">
            <label for="namalengkap" class="col-xl-2 col-form-label mr-2">Nama Lengkap</label>
            <div class="col-sm-3">
            <input type="text" class="form-control" id="namalengkap" name="namalengkap">
        </div>
    </div>
    <div class="form-group row">
            <label for="divisi" class="col-xl-2 col-form-label mr-2">Divisi </label>
            <div class="col-sm-3">
            <input type="text" class="form-control" id="divisi" name="divisi">
        </div>
    </div>
    <div class="form-group row">
            <label for="departemen" class="col-xl-2 col-form-label mr-2">Departemen</label>
            <div class="col-sm-3">
            <input type="text" class="form-control" id="departemen" name="departemen">
        </div>
    </div>


	<input type="submit" value="Simpan Data" class="btn btn-primary">
	</form>

@endsection
