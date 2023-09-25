<?php

namespace Database\Seeders;

use App\Models\Level;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class levelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $level = [
            [
                'name' => 'admin',
            ],
            [
                'name' => 'superivsor',
            ],
            [
                'name' => 'staff',
            ]
            ];
            foreach ($level as $key => $value) {
                Level::create($value);
            }
    }
}
