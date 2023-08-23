<?php

namespace App\Http\Controllers;

use App\Models\Cabang;
use Illuminate\Http\Request;

class CabangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Cabang $cabang)
    {
        //Menampilkan data cabang
        /*
        1. Ambil semua data cabang
        2. Tampilkan seluruh data cabang ke view dengan format tabel
        */
        $data = [
            'cabang'=> $cabang->all()
        ];
        return view('cabang.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        /*
        1. Membuat form untuk menambah data
        */
        return view('cabang.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Cabang $cabang)
    {
        //
        $data = $request->validate(
            [
                'nama' => ['required'],
                'kode_cabang' => ['required'],
                'alamat'    => ['required'],
                'kontak_cabang' => ['required'],
            
            ]
        );

        if($data):
            $data['id_perusahaan'] = 1;
        //Simpan jika data terisi semua
            $cabang->create($data);
            return redirect('/dashboard/cabang');
        else:
        //Kembali ke form tambah data
            return redirect('/dashboard/cabang/tambah');
        endif;
    }

    /**
     * Display the specified resource.
     */
    public function show(Cabang $cabang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cabang $cabang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cabang $cabang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cabang $cabang)
    {
        //
    }
}
