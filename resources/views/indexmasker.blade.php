@extends('master2')
@section('judulhalaman','Data Masker')

@section('konten')
	<h2>www.malasngoding.com</h2>
	<h3>Data Masker</h3>

	<a href="/masker/tambah" class="btn btn-primary"> + Tambah jumlah masker</a>

	<br/>
    <br>
    <p>Cari Data Masker :</p>
	<form action="/masker/cari" method="GET">
		<input class="form-control" type="text" name="cari" placeholder="Cari Merk Masker .." value="{{ old("cari", isset($cari) ? $cari : '') }}">
        <br>
		<input type="submit" value="CARI" class="btn btn-info">
	</form>
	<br/>

	<table class="table table-striped table-hover">
		<tr>
			<th>Kode Masker</th>
			<th>Merk Masker</th>
			<th>Stock Masker</th>
            <th>Tersedia</th>
            <th>Opsi</th>
		</tr>
		@foreach($masker as $m)
		<tr>
			<td>{{ $m->kodemasker }}</td>
			<td>{{ $m->merkmasker }}</td>
			<td>{{ $m->stockmasker }}</td>
			<td>{{ $m->tersedia }}</td>
            <td>
                <a href="/masker/edit/{{ $m->kodemasker }}" class="btn btn-warning">Edit</a>
                |
				<a href="/masker/view/{{ $m->kodemasker }}" class="btn btn-success">view</a>
				|
				<a href="/masker/hapus/{{ $m->kodemasker }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

    {{ $masker->links() }}

@endsection
