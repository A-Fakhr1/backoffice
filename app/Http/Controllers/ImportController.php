<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\CoaImport;

class ImportController extends Controller
{
    //
    public function import(Request $request){
        Excel::import(new CoaImport, $request->file('file'));
        return redirect()->back()->with('success', 'Data berhasil diimport.');
}
    
}