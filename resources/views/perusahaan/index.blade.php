@extends('layout.layout')
@section('title','Halaman Perusahaan')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <span class="h1">
                    Data Perusahaan
                </span>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-5">
                        Nama Perusahaan
                    </div>
                    <div class="col-md-1">
                        :
                    </div>
                    <div class="col-md-6">
                        {{$nama_perusahaan}}
                    </div>
                    <div class="col-md-5">
                        Alamat
                    </div>
                    <div class="col-md-1">
                        :
                    </div>
                    <div class="col-md-6">
                        {{$alamat}}
                    </div>
                    <div class="col-md-5">
                        NPWP
                    </div>
                    <div class="col-md-1">
                        :
                    </div>
                    <div class="col-md-6">
                        {{$npwp}}
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <a href="perusahaan/edit"><btn class="btn btn-primary"><i class=""></i> Edit</btn></a>
            </div>
        </div>
    </div>
</div>
@endsection