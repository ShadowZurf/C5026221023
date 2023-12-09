@extends('master3')
@section('judulhalaman','Data Pegawai')

@section('konten')
	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Pegawai</h3>

	<a href="/nilaikuliah" class="btn btn-success">Kembali</a>

	<br/>
	<br/>

	<form action="/nilaikuliah/store" method="post" class="form-horizontal">
		{{ csrf_field() }}
        <div class="form-group row">
            <label for="nrp" class="col-sm-1 col-form-label mr-2">NRP</label>
            <div class="col-sm-3">
            <input type="text" class="form-control" id="nrp" name="nrp">
        </div>
    </div>
    <div class="form-group row">
        <label for="nilai" class="col-sm-1 col-form-label mr-2">Nilai Angka</label>
        <div class="col-sm-3">
        <input type="text" class="form-control" id="nilai" name="nilai">
    </div>
    </div>
    <div class="form-group row">
        <label for="sks" class="col-sm-1 col-form-label mr-2">SKS</label>
        <div class="col-sm-3">
        <input type="text" class="form-control" id="sks" name="sks">
    </div>
</div>

		<input type="submit" value="Simpan Data" class="btn btn-primary">
	</form>

@endsection
