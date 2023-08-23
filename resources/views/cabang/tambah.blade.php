@extends('layout.layout')
@section('title','Tambah Cabang ')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <span class="h1">
                    Tambah data Cabang Perusahaan
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
                                <input type="text" class="form-control" name="nama" />
                            </div>
                            <div class="form-group">
                                <label>Kode Cabang</label>
                                <input type="text" class="form-control" name="kode_cabang" />
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="text" class="form-control" name="alamat" />
                            </div>
                            <div class="form-group">
                                <label>Penanggung Jawab</label>
                                <input type="text" class="form-control" name="kontak_cabang" />
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