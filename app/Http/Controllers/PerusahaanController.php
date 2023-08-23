<?php

namespace App\Http\Controllers;

use App\Models\Perusahaan;
use Illuminate\Http\Request;

class PerusahaanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //List Halaman Perusahaan

        $data = Perusahaan::first();
        //echo json_encode($data);
        //Kirim Data ke View
        return view('perusahaan.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validate = $request->validate(
            [
                'id_perusahaan'   => ['required'],
                'nama_perusahaan' => ['required'],
                'alamat'          => ['required'],
                'npwp'            => ['required']
            ]
        );
        if ($validate):
            Perusahaan::where('id_perusahaan',$request->get('id_perusahaan'))
                        ->update($validate);
            //if($update):
                return redirect('/dashboard/perusahaan');
            //endif;

        else:
            return redirect('/dashboard/perusahaan/edit');
        endif;
    }

    /**
     * Display the specified resource.
     */
    public function show(Perusahaan $perusahaan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Perusahaan $perusahaan)
    {
        //
        $data = $perusahaan::first();
        return view('perusahaan.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Perusahaan $perusahaan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Perusahaan $perusahaan)
    {
        //
    }
}
