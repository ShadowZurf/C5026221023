@extends('master2')
@section('judulhalaman','Data Masker')

@section('konten')
	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Masker</h3>

	<a href="/masker" class="btn btn-success">Kembali</a>

	<br/>
	<br/>

	<form action="/masker/store" method="post" class="form-horizontal">
		{{ csrf_field() }}
        <div class="form-group row">
            <label for="merkmasker" class="col-xl-2 col-form-label mr-2">Merk Masker</label>
            <div class="col-sm-3">
            <input type="text" class="form-control" id="merkmasker" name="merkmasker">
        </div>
    </div>
    <div class="form-group row">
        <label for="stockmasker" class="col-xl-2 col-form-label mr-2">Stock Masker</label>
        <div class="col-sm-3">
        <input type="number" class="form-control" id="stockmasker" name="stockmasker">
    </div>
    </div>


	<input type="submit" value="Simpan Data" class="btn btn-primary">
	</form>

@endsection
