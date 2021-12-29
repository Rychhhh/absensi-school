<?php

namespace Database\Seeders;

use App\Models\Rombel;
use Illuminate\Database\Seeder;

class RombelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // menambah data seeder rombel
        $data = [
            [
                "nama_rombel" => "RPL XI 3",
            ],
            [
                "nama_rombel" => "RPL XI 4",
            ],
            [
                "nama_rombel" => "RPL XI 5",
            ]
        ];

        foreach ($data as $key => $value) {
            Rombel::insert($value);
        }
    }
}
