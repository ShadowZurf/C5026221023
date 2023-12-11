@extends('master2')
@section('judulhalaman','Data Karyawan')

@section('konten')
	<h2>www.malasngoding.com</h2>
	<h3>Data Karyawan</h3>

	<a href="/karyawan/tambah" class="btn btn-primary"> + Tambah jumlah karyawan</a>

	<br/>
    <br>

	<br/>

	<table class="table table-striped table-hover">
		<tr>
			<th>Kode Pegawai</th>
			<th>Nama Lengkap</th>
			<th>Divisi</th>
            <th>Departemen</th>
            <th>Opsi</th>
		</tr>
		@foreach($karyawan as $k)
		<tr>
			<td>{{ $k->kodepegawai }}</td>
			<td>{{ $k->namalengkap }}</td>
			<td>{{ $k->divisi }}</td>
			<td>{{ $k->departemen }}</td>
            <td>
				<a href="/masker/hapus/{{ $k->kodepegawai }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

    {{ $karyawan->links() }}

@endsection
