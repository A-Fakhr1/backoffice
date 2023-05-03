<?php

namespace App\Imports;

use App\Models\Coa;
use App\Models\Saldocoa;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\ToCollection;

// class CoaImport implements ToModel
// {
//     /**
//     * @param array $row
//     *
//     * @return \Illuminate\Database\Eloquent\Model|null
//     */
//     public function model(array $row)
//     {
//         Coa::create([
//             //
//             'akun_coa'=> $row[0],
//             'nama_coa' => $row[1],
//             'tipe' => $row[2],
//             'dept' => $row[3],
//         ]);
        
//         Saldocoa::create([
//         'coa_akun'=> $row[0],
//         'saldo_awal'=> 0 ,
//         ]);

//     }
// }

class COAImport implements ToCollection
{
    private $file_path;

    public function setFilePath($file_path)
    {
        $this->file_path = $file_path;
    }

   public function collection(Collection $rows)
{
    foreach ($rows as $key => $row) {
        // Validasi row 2 dan 3
        if ($key > 1 && empty($row[2]) && empty($row[3])) {
            continue; // skip row
        }

        // Import the row to database
        Coa::create([
            'akun_coa'=> $row[0],
            'nama_coa' => $row[1],
            'tipe' => $row[2],
            'dept' => $row[3],
        ]);
        
        Saldocoa::create([
            'coa_akun'=> $row[0],
            'saldo_awal'=> 0 ,
        ]);
    }
}

}