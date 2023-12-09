@extends('master3')
@section('judulhalaman','Data Nilai Kuliah')

@section('konten')
	<h2>www.malasngoding.com</h2>
	<h3>Data Nilai Kuliah</h3>

	<a href="/nilaikuliah/tambah" class="btn btn-primary"> + Tambah Nilai Mahasiswa</a>

	<br/>

	<br/>

	<table class="table table-striped table-hover">
		<tr>
			<th>NRP</th>
			<th>Nilai Angka</th>
			<th>SKS</th>
            <th>Nilai Angka</th>
			<th>Nilai Huruf</th>
			<th>Bobot</th>
		</tr>
		@foreach($nilaikuliah as $n)
		<tr>
			<td>{{ $n->ID }}</td>
			<td>{{ $n->NRP }}</td>
			<td>{{ $n->NilaiAngka }}</td>
			<td>{{ $n->SKS }}</td>
            <td>
                @if ($n->NilaiAngka <= 40)
                D
                @elseif ($n->NilaiAngka >= 41 && $n->NilaiAngka <= 60)
                C
                @elseif ($n->NilaiAngka >= 61 && $n->NilaiAngka <= 80)
                B
                @elseif ($n->NilaiAngka >= 81)
                A
                @else
                Invalid grade
                @endif
            </td>
            <td>{{ $n->NilaiAngka * $n->SKS }}</td>
		</tr>
		@endforeach
	</table>



@endsection
