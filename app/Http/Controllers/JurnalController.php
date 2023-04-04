<?php

namespace App\Http\Controllers;

use App\Models\Jurnal;
use Illuminate\Http\Request;

class JurnalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $dtJurnal=Jurnal::all();
        return view('halamandepan.tipejurnal',compact('dtJurnal'));
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
        // $this->validate($request,[
        //     'tipe_jurnal' => 'required',
        //     'deskripsi' => 'required',
        // ]);

        $jurn = new Jurnal() ;

        $jurn -> tipe_jurnal = $request->input('tipejurn');
        $jurn -> deskripsi = $request->input('deskrip');

        $jurn -> save();
        return redirect('/tipejurnal')->with([
            'status' => 'success',
            'message' => 'Data Berhasil di Simpan',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $data=Jurnal::findOrFail($id);
        $data->delete();
        return redirect()->back()->with([
            'status' => 'success',
            'message' => 'Data Berhasil di Hapus',
        ]);
    }
}