@extends('template')
 
@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2> Tampilkan keluhan</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-secondary" href="{{ route('keluhans.index') }}"> Kembali</a>
            </div>
        </div>
    </div>
 
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Judul Keluhan</strong>
                {{ $keluhan->judul }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Detail Keluhan</strong>
                {{ $keluhan->detail }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Sudah Berapa Lama ?</strong>
                {{ $keluhan->detail }}
            </div>
        </div>
    </div>
@endsection