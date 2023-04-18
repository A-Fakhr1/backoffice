<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $dtUser=User::get();
        $dtComp=Company::get();
        return view('halamandepan.muser',compact('dtUser','dtComp'));
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
        $useer = new User();
        $useer -> username = $request->input('username');
        // $passwordd = Str::random(8);
        $passwordd = 'password' ;
        $newpasswordd = Hash::make($passwordd);
        $useer -> password = $newpasswordd ;
        $useer -> level = $request->input('level');
        $useer -> id_comp = $request->input('datacomp');


        $useer -> save();
        return redirect('/muser')->with([
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
        $data=User::findOrFail($id);
        $data->delete();
        return redirect()->back()->with([
            'status' => 'success',
            'message' => 'Data Berhasil di Hapus',
        ]);
    }
}