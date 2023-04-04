<?php

namespace App\Http\Controllers;

use App\Models\Strukturorgan;
use Illuminate\Http\Request;

class StrukturController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $dtStruktur=Strukturorgan::all();
        return view('halamandepan.struktur',compact('dtStruktur'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('halamandepan.strukturcreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // dd($request->all());
        Strukturorgan::create(
            [
                'akun_no'=>$request->akun_no,
                'dept_name'=>$request->dept_name,
                'dept_head'=>$request->dept_head,
                'deskripsi'=>$request->deskripsi,
                'id_comp'=>$request->idcom,
            ]);
            return redirect()->to('/struktur')->with([
                'status'=>'success',
                'message' => 'Data Berhasil Ditambah'
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
        $dataed=Strukturorgan::findOrFail($id);
        return view('template.modal',[
            'dataed'=> $dataed
        ]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $depart = Strukturorgan::where('id',$id)->first();
        $depart -> akun_no = $request->input('akun_no');
        $depart -> dept_name = $request->input('dept_name');
        $depart -> deskripsi = $request->input('deskripsi');

        $depart -> save();
        return redirect('/struktur')->with([
            'status' => 'success',
            'message' => 'Data Berhasil di Ubah',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, $id )
    {
        //
        $data=Strukturorgan::findOrFail($id);
        $data->delete();
        return redirect()->back()->with([
            'status' => 'success',
            'message' => 'Data Berhasil di Hapus',
        ]);
    }
}