<?php

namespace App\Http\Controllers;

use App\Models\Coa;
use Illuminate\Http\Request;

class CoaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $dtCoa=Coa::all();
        return view('halamandepan.akuncoa',compact('dtCoa'));
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

        $this->validate($request,[
            'coaname' =>'required',
            'tipe' => 'required',
            'dept' => 'required',
        ]);



        $coaa = new Coa ;

        $coaa -> nama_coa = $request->input('coaname');
        $coaa -> tipe = $request->input('tipe');
        $coaa -> dept = $request->input('dept');

        $coaa -> save();
        return redirect('/akuncoa')->with([
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
        $coaa = Coa::where('id',$id)->first();
        return view('halamandepan.akuncoa-edit',compact('coaa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $coaa = Coa::where('id',$id)->first();
        $coaa -> nama_coa = $request->input('coaname');
        $coaa -> tipe = $request->input('tipe');
        $coaa -> dept = $request->input('dept');

        $coaa -> save();
        return redirect('/akuncoa')->with([
            'status' => 'success',
            'message' => 'Data Berhasil di Ubah',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $data=Coa::findOrFail($id);
        // dd($data);
        $data->delete();
        return redirect()->back()->with([
            'status' => 'success',
            'message' => 'Data Berhasil di Hapus',
        ]);
    }
}