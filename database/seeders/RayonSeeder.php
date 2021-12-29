<?php

namespace Database\Seeders;

use App\Models\Rayon;
use Illuminate\Database\Seeder;

class RayonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // menambah data seeder rayon
        $rayon = [
            //                                  Wikrama
            [
                "nama_rayon" => "Wikrama 1",
                "pembimbing" => "-",
            ],
            [
                "nama_rayon" => "Wikrama 2",
                "pembimbing" => "Pak Budiono",
            ],
            [
                "nama_rayon" => "Wikrama 3",
                "pembimbing" => "-",
            ],
            [
                "nama_rayon" => "Wikrama 4",
                "pembimbing" => "-",
            ],
            //                                  Cisarua
            [
                "nama_rayon" => "Cisarua 1",
                "pembimbing" => "Pak Hapid",
            ],
            [
                "nama_rayon" => "Cisarua 2",
                "pembimbing" => "-",
            ],
            [
                "nama_rayon" => "Cisarua 3",
                "pembimbing" => "-",
            ],
            [
                "nama_rayon" => "Cisarua 4",
                "pembimbing" => "Mr Endang",
            ],
            [
                "nama_rayon" => "Cisarua 5",
                "pembimbing" => "Pak Nurdin",
            ],
            [
                "nama_rayon" => "Cisarua 6",
                "pembimbing" => "-",
            ],
            //                                  Cicurug
            [
                "nama_rayon" => "Cicurug 1",
                "pembimbing" => "-",
            ],
            [
                "nama_rayon" => "Cicurug 2",
                "pembimbing" => "-",
            ],
            [
                "nama_rayon" => "Cicurug 3",
                "pembimbing" => "-",
            ],
            [
                "nama_rayon" => "Cicurug 4",
                "pembimbing" => "-",
            ],
            [
                "nama_rayon" => "Cicurug 5",
                "pembimbing" => "-",
            ],
            [
                "nama_rayon" => "Cicurug 6",
                "pembimbing" => "-",
            ],
            //                                   Cibedug
            [
                "nama_rayon" => "Cibedug 1",
                "pembimbing" => "-",
            ],
            [
                "nama_rayon" => "Cibedug 2",
                "pembimbing" => "-",
            ],
            [
                "nama_rayon" => "Cibedug 3",
                "pembimbing" => "-",
            ],
            //                                   Ciawi
            [
                "nama_rayon" => "Ciawi 1",
                "pembimbing" => "-",
            ],
            [
                "nama_rayon" => "Ciawi 2",
                "pembimbing" => "-",
            ],
            [
                "nama_rayon" => "Ciawi 3",
                "pembimbing" => "-",
            ],
            [
                "nama_rayon" => "Ciawi 4",
                "pembimbing" => "Bu Elvia",
            ],
            [
                "nama_rayon" => "Ciawi 5",
                "pembimbing" => "-",
            ],
             //                                 Tajur
            [
                "nama_rayon" => "Tajur 1",
                "pembimbing" => "-",
            ],
            [
                "nama_rayon" => "Tajur 2",
                "pembimbing" => "-",
            ],
            [
                "nama_rayon" => "Tajur 3",
                "pembimbing" => "Pak Hapid",
            ],
            [
                "nama_rayon" => "Tajur 4",
                "pembimbing" => "-",
            ],
            [
                "nama_rayon" => "Tajur 5",
                "pembimbing" => "Bu Nurafia",
            ],
            //                                  Sukasari
            [
                "nama_rayon" => "Sukasari 1",
                "pembimbing" => "-",
            ],
            [
                "nama_rayon" => "Sukasari 2",
                "pembimbing" => "Bu Rachmi",
            ],
        ];

        foreach ($rayon as $key => $value) {
            Rayon::insert($value);
        }
    }
}
