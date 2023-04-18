<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $dtCom=Company::all();
        return view('halamandepan.company',compact('dtCom'));
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
        //pengambilan 4 karakter dari kiri
        $inputt = $request->input('namacom');
        $char_left = substr($inputt,0,4);
        // membuat kode penomoran
        // $data = DB::table('companies')->get();
        // $count = count($data);
        // $test = $count;
        // endscript penomoran
        $kode = rand(10000, 99999);
        $kode = sprintf("%05d", $kode);

        $comm = new Company() ;
        $comm -> id_comp = $kode ;
        $comm -> nama_company = $request->input('namacom');


        $comm -> save();
        return redirect('/company')->with([
            'status' => 'success',
            'message' => 'Data Berhasil di Simpan',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Company $company)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, String $company)
    {
        //
        $comm = Company::where('id',$company)->first();
        // $comm -> id_comp = $request->input('idcom');
        $comm -> nama_company = $request->input('namacom');

        $comm -> save();
        return redirect('/company')->with([
            'status' => 'success',
            'message' => 'Data Berhasil di Ubah',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $company)
    {
        //
        $data=Company::findOrFail($company);
        $data->delete();
        return redirect()->back()->with([
            'status' => 'success',
            'message' => 'Data Berhasil di Hapus',
        ]);
    }
}
