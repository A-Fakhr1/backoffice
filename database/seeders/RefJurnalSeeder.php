<?php

namespace Database\Seeders;

use App\Models\Jurnal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RefJurnalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //1
        Jurnal::Create([
        'tipe_jurnal'=>'JBJ',
        'deskripsi'=>'Bukti Jurnal',
        ]);
        //2
        Jurnal::Create([
        'tipe_jurnal'=>'JBL',
        'deskripsi'=>'Pembayaran Lain',
        ]);
        //3
        Jurnal::Create([
        'tipe_jurnal'=>'JBP',
        'deskripsi'=>'Pembiayaan Pesanan',
        ]);
        //4
        Jurnal::Create([
        'tipe_jurnal'=>'JFA',
        'deskripsi'=>'FA Akuisisi',
        ]);
        //5
        Jurnal::Create([
        'tipe_jurnal'=>'JFB',
        'deskripsi'=>'Faktur Pembelian',
        ]);
        //6
        Jurnal::Create([
        'tipe_jurnal'=>'JFD',
        'deskripsi'=>'FA Dihentikan',
        ]);
        //7
        Jurnal::Create([
        'tipe_jurnal'=>'JFJ',
        'deskripsi'=>'Faktur Penjualan',
        ]);
        //8
        Jurnal::Create([
        'tipe_jurnal'=>'JFS',
        'deskripsi'=>'FA Penyusutan',
        ]);
        //9
        Jurnal::Create([
        'tipe_jurnal'=>'JJT',
        'deskripsi'=>'Penjualan Tunai',
        ]);
        //10
        Jurnal::Create([
        'tipe_jurnal'=>'JPB',
        'deskripsi'=>'Penerimaan Barang',
        ]);
        //11
        Jurnal::Create([
        'tipe_jurnal'=>'JPC',
        'deskripsi'=>'Penerimaan Pelanggan',
        ]);
        //12
        Jurnal::Create([
        'tipe_jurnal'=>'JPO',
        'deskripsi'=>'Pengiriman Pesanan',
        ]);
        //13
        Jurnal::Create([
        'tipe_jurnal'=>'JPP',
        'deskripsi'=>'Penyesuaian Persediaan',
        ]);
        //14
        Jurnal::Create([
        'tipe_jurnal'=>'JPS',
        'deskripsi'=>'Pembayaran Supplier',
        ]);
        //15
        Jurnal::Create([
        'tipe_jurnal'=>'JPT',
        'deskripsi'=>'Pembelian Tunai',
        ]);
        //16
        Jurnal::Create([
        'tipe_jurnal'=>'JRB',
        'deskripsi'=>'Retur Pembelian',
        ]);
        //17
        Jurnal::Create([
        'tipe_jurnal'=>'JRJ',
        'deskripsi'=>'Retur Penjualan',
        ]);
        //18
        Jurnal::Create([
        'tipe_jurnal'=>'JTL',
        'deskripsi'=>'Penerimaan Lain',
        ]);

    }
}