<?php

namespace Database\Seeders;

use App\Models\statusKirim;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class statusKirimanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $statusKirim = [
        [
            'statuskiriman' => 'permintaan diterima'
        ],
        [
            'statuskiriman' => 'Sudah di input'
        ],
        [
            'statuskiriman' => 'Barang diterima oleh Frontline'
        ],
        [
            'statuskiriman' => 'Barang Disimpan Digudang'
        ],
        [
            'statuskiriman' => 'Barang di sortir'
        ],
        [
            'statuskiriman' => 'Barang di kirim oleh kurir'
        ],
        ];
        foreach ($statusKirim as $key => $value) {
            statusKirim::create($value);
           }
    }
}
