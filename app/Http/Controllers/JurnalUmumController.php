<?php

namespace App\Http\Controllers;

use App\Models\Coa;
use App\Models\Jurnal;
use App\Models\JurnalUmum;
use Illuminate\Http\Request;

class JurnalUmumController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     
    public function index()
    {
        $kode_depan = 'JBJ';
        $last_jurnal = JurnalUmum::orderBy('id', 'DESC')->first();
        $nomor_urut = $last_jurnal ? intval(substr($last_jurnal->id, -4)) + 1 : 1;
        $nomor_urut_formatted = sprintf("%04d", $nomor_urut);
        $kode_jurnal_baru = $kode_depan . '-' . $nomor_urut_formatted;

        //
        $dtCoa=Coa::with('saldoCoa')->get();
        // return dd($dtCoa);
        return view('halamandepan.jurnalumum',compact('dtCoa','kode_jurnal_baru'));
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
  $date = $request->input('date');
  $document = $request->input('document');
  $reference = $request->input('reference');
  $description = $request->input('description');
  $coa = $request->input('coa');
  $namacoa = $request->input('namacoa');
  $debit = $request->input('debit');
  $kredit = $request->input('kredit');
  $departemen = $request->input('departemen');

  // menyimpan data ke dalam tabel jurnal_umum
  $jurnal_umum = new JurnalUmum;
  $jurnal_umum->date = $date;
  $jurnal_umum->document = $document;
  $jurnal_umum->reference = $reference;
  $jurnal_umum->description = $description;
  $jurnal_umum->save();
  
  return redirect('/jurnalumum')->with([
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
    }
}