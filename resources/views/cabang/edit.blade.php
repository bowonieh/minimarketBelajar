@extends('layout.layout')
@section('title','Edit data ')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <span class="h1">
                    Edit data Cabang {{$cabang->nama}}
                </span>
            </div>
            <div class="card-body">
                <form method="POST" action="simpan">
                    <div class="row">
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-success">SIMPAN</button>
                        </div>
                        <p>
                            <hr>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label>Nama Cabang</label>
                                <input type="hidden" name="id_cabang" value="{{$cabang->id_cabang}}" />
                                <input type="text" class="form-control" name="nama" value="{{$cabang->nama}}"/>
                            </div>
                            <div class="form-group">
                                <label>Kode Cabang</label>
                                <input type="text" class="form-control" name="kode_cabang"  value="{{$cabang->kode_cabang}}"/>
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="text" class="form-control" name="alamat" value="{{$cabang->alamat}}"/>
                            </div>
                            <div class="form-group">
                                <label>Penanggung Jawab</label>
                                <input type="text" class="form-control" name="kontak_cabang" value="{{$cabang->kontak_cabang}}"/>
                                @csrf
                            </div>

                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
@endsection