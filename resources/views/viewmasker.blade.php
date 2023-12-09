@extends('master2')
@section('judulhalaman', 'View Masker')

@section('konten')
<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
<h3 style="font-weight: bold">Masker</h3>

<a href="/masker" class="btn btn-success"><- Kembali</a>

    <br />
    <br />



    <div class="row">
        <div class="col-6 border"  ></div>
        <div class="col-6">
            @foreach ($masker as $m)
            <fieldset disabled>
                <form action="/masker/update" method="post" class="form-horizontal " role="form">
                    {{ csrf_field() }}
                    <input type="hidden" name="kodemasker" value="{{ $m->kodemasker }}">
                    <div class = "form-group row">
                        <label for = "merkmasker" class = "col-sm-2 control-label">Merk Masker</label>
                        <div class = "col-sm-9">
                            <input type="text" required="required" name="merkmasker" value="{{ $m->merkmasker }}" class="form-control">
                        </div>
                    </div>
                    <div class = "form-group row">
                        <label for = "stockmasker" class = "col-sm-2 control-label">Stock Masker</label>
                        <div class = "col-sm-9">
                            <input type="number" required="required" name="stockmasker" value="{{ $m->stockmasker }}" class="form-control">
                        </div>
                    </div>
                    <div class = "form-group row">
                        <label for = "tersedia" class = "col-sm-2 control-label">Tersedia</label>
                        <div class = "col-sm-9">
                            <input type="text" required="required" name="tersedia" value="{{ $m->tersedia }}" class="form-control">
                        </div>
                    </div>
                </form>
            </fieldset>
            @endforeach
            <div class="text-center" style="width:257px">
                <a href="/masker" class="btn btn-primary w-25">OK</a>
            </div>
        </div>
    </div>

@endsection
