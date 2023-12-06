@extends('master2')
@section('judulhalaman', 'Data Pegawai')

@section('konten')
<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
<h3 style="font-weight: bold">Pegawai</h3>

<a href="/pegawai" class="btn btn-success"><- Kembali</a>

    <br />
    <br />



    <div class="row">
        <div class="col-6 border"  ></div>
        <div class="col-6">
            @foreach ($pegawai as $p)
            <fieldset disabled>
                <form action="/pegawai/update" method="post" class="form-horizontal " role="form">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{ $p->pegawai_id }}">
                    <div class = "form-group row">
                        <label for = "nama" class = "col-sm-2 control-label">Nama</label>
                        <div class = "col-sm-9">
                            <input type="text" required="required" name="nama" value="{{ $p->pegawai_nama }}" class="form-control">
                        </div>
                    </div>
                    <div class = "form-group row">
                        <label for = "jabatan" class = "col-sm-2 control-label">Jabatan</label>
                        <div class = "col-sm-9">
                            <input type="text" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}" class="form-control">
                        </div>
                    </div>
                    <div class = "form-group row">
                        <label for = "umur" class = "col-sm-2 control-label">Umur</label>
                        <div class = "col-sm-9">
                            <input type="number" required="required" name="umur" value="{{ $p->pegawai_umur }}" class="form-control">
                        </div>
                    </div>
                    <div class = "form-group row">
                        <label for = "alamat" class = "col-sm-2 control-label">Alamat</label>
                        <div class = "col-sm-9">
                            <textarea required="required" name="alamat" class="form-control">{{ $p->pegawai_alamat }}</textarea>
                        </div>
                    </div>
                </form>
            </fieldset>
            @endforeach
            <div class="text-center" style="width:257px">
                <a href="/pegawai" class="btn btn-primary w-25">OK</a>
            </div>
        </div>
    </div>

@endsection
