@extends('layout.layout')
@section('title','Daftar Cabang ')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <span class="h1">
                    Data Cabang Perusahaan
                </span>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <a href="cabang/tambah">
                            <btn class="btn btn-success">Tambah Cabang</btn>
                        </a>
                       
                    </div>
                    <p>
                        <hr>
                        <table class="table table-hover table-bordered">
                            <tr>
                                <th>NAMA CABANG</th>
                                <th>KODE CABANG</th>
                                <th>ALAMAT</th>
                                <th>KONTAK</th>
                                <th>AKSI</th>
                            </tr>
                            @foreach($cabang as $r)
                            <tr>
                                <td>{{$r->nama}}</td>
                                <td>{{$r->kode_cabang}}</td>
                                <td>{{$r->alamat}}</td>
                                <td>{{$r->kontak_cabang}}</td>
                                <td>
                                    <a href="cabang/edit/{{$r->id_cabang}}">
                                        <btn class="btn btn-primary">EDIT</btn>
                                    </a>
                                    
                                    <a href="cabang/hapus/{{$r->id_cabang}}">
                                        <btn class="btn btn-danger">HAPUS</btn>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                </div>
            </div>
            <div class="card-footer">

            </div>
        </div>
    </div>
</div>
@endsection