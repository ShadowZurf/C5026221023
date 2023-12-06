@extends('master2')
@section('judulhalaman','Data Pegawai')

@section('konten')
	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Pegawai</h3>

	<a href="/pegawai" class="btn btn-success">Kembali</a>

	<br/>
	<br/>

	<form action="/pegawai/store" method="post" class="form-horizontal">
		{{ csrf_field() }}
        <div class="form-group row">
                <label for="nama" class="col-sm-1 col-form-label mr-2">Nama</label>
                <div class="col-sm-3">
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
        </div>
        <div class="form-group row">
            <label for="jabatan" class="col-sm-1 col-form-label mr-2">Jabatan</label>
            <div class="col-sm-3">
            <input type="text" class="form-control" id="jabatan" name="jabatan">
        </div>
    </div>
    <div class="form-group row">
        <label for="umur" class="col-sm-1 col-form-label mr-2">Umur</label>
        <div class="col-sm-3">
        <input type="text" class="form-control" id="umur" name="umur">
    </div>
    </div>
    <div class="form-group row">
        <label for="alamat" class="col-sm-1 col-form-label mr-2">Alamat</label>
        <div class="col-sm-3">
        <textarea class="form-control" id="alamat" name="alamat"></textarea>
    </div>
</div>



		<input type="submit" value="Simpan Data" class="btn btn-primary">
	</form>

@endsection
