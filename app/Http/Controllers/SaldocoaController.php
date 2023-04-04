<?php

namespace App\Http\Controllers;

use App\Models\Coa;
use App\Models\Saldocoa;
use Illuminate\Http\Request;

class SaldocoaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $Coaa= Coa::with('saldoCoa')->get();
        // $Coaa = Saldocoa::leftJoin('')
        //     ->select('saldocoas.*', 'coas.*')
        //     ->get();
        // return dd($Coaa);
        return view('halamandepan.saldocoa',compact('Coaa'));
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
        $dtSaldo = Coa::where('id',$id)->first();
        // dd($dtSaldo);
        $dtSaldo -> saldo_awal = $request->input('saldoawl');
        $dtSaldo -> tanggal = $request->input('tanggl');

        $dtSaldo -> save();
        return redirect('/saldocoa')->with([
            'status' => 'success',
            'message' => 'Saldo Awal Berhasil di Ubah',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
