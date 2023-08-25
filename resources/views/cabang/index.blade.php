@extends('layout.layout')
@section('title','Daftar Cabang')
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
                        <table class="table table-hover table-bordered DataTable">
                            <thead>
                                <tr>
                                    <th>NAMA CABANG</th>
                                    <th>KODE CABANG</th>
                                    <th>ALAMAT</th>
                                    <th>KONTAK</th>
                                    <th>AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($cabang as $r)
                                <tr>
                                    <td>{{$r->nama}}</td>
                                    <td>{{$r->kode_cabang}}</td>
                                    <td>{{$r->alamat}}</td>
                                    <td>{{$r->kontak_cabang}}</td>
                                    <td>
                                        <a href="cabang/edit/{{$r->id_cabang}}"><btn class="btn btn-primary">EDIT</btn></a>
                                        <btn class="btn btn-danger btnHapus" idCabang="{{$r->id_cabang}}">HAPUS</btn>

                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                </div>
            </div>
            <div class="card-footer">

            </div>
        </div>
    </div>
</div>
@endsection

@section('footer')
<script type="module">
    $('.DataTable tbody').on('click','.btnHapus',function(a){
        a.preventDefault();
        let idCabang = $(this).closest('.btnHapus').attr('idCabang');
        //alert(id_cabang)
        swal.fire({
            title : "Apakah anda ingin menghapus data ini?",
            showCancelButton: true,
            confirmButtonText: 'Setuju',
            cancelButtonText: `Batal`,
            confirmButtonColor: 'red'

        }).then((result)=>{
            if(result.isConfirmed){
                //Ajax Delete
                $.ajax({
                    type: 'DELETE',
                    url: 'cabang/hapus',
                    data: {
                        id_cabang : idCabang,
                        _token : "{{csrf_token()}}"
                    },
                    success : function(data){
                        if(data.success){
                            swal.fire('Berhasil di hapus!', '', 'success').then(function(){
                                //Refresh Halaman
                                location.reload();
                            });
                        }
                    }
                });
            }
        });
    });
    $(document).ready(function() {
        $('.DataTable').DataTable();
    });
</script>

@endsection