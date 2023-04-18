<?php

namespace App\Http\Controllers;

use App\Models\Coa;
use App\Models\Saldocoa;
use Illuminate\Http\Request;

class CoaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $dtCoa=Coa::with('saldoCoa')->get();
        // return dd($dtCoa);
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

        $lastCoa = Coa::max('akun_coa');

        $coaa->akun_coa = strval(rand(1, 20));
        $coaa -> nama_coa = $request->input('coaname');
        $coaa -> tipe = $request->input('tipe');
        $coaa -> dept = $request->input('dept');

        $coaa -> save();

        if($coaa) {
            Saldocoa::create([
                'saldo_awal' => 0,
                'coa_akun' => $coaa->akun_coa
            ]);

            return redirect('/akuncoa')->with([
                'status' => 'success',
                'message' => 'Data Berhasil di Simpan',
            ]);
        }
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

     // public function edit(string $id)
    // {
    //     //
    //     $coaa = Coa::where('id',$id)->first();
    //     return view('halamandepan.akuncoa-edit',compact('coaa'));
    // }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $haveSaldo = Saldocoa::all();
        $coaa = Coa::where('id',$id)->first();
        $coaa->akun_coa =$request->akun_coa;
        $coaa -> nama_coa = $request->nama_coa;
        $coaa -> tipe = $request->tipe;
        $coaa -> dept = $request->dept;


        $coaa -> save();
        return response()->json([
            'status' => 'success',
            'message' => 'Data Berhasil di Ubah',
            'saldoCoa' => $haveSaldo
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    // string $id
    public function destroy( $id)
    {
        //
        $coa=Coa::findOrFail($id);
        // dd($data);
        $coa->saldoCoa()->delete();
        $coa->delete();
        return redirect()->back()->with([
            'status' => 'success',
            'message' => 'Data Berhasil di Hapus',
        ]);
    }
}
