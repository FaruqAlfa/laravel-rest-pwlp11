<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('mahasiswas')->insert([
        //     'nim' => '2141720066',
        //     'nama' => 'Mukhamad Faruq Al Fahmi',
        //     'kelas_id' => 'TI 2G',
        //     'prodi' => 'D4-TI',
        //     'jurusan' => 'D-IV Teknik Informatika',
        //     'no_hp' => '081232032649',
        // ]);

        $data = [
            [
            'nim' => '12345',
            'nama' => "Mamluatul Hani'ah",
            'kelas_id' => 'TI 2G',
            'prodi' => 'D4-TI',
            'jurusan' => 'TEKNOLOGI INFORMASI',
            'no_hp' => '08167254236',
            ],

            [
                'nim' => '2141720123',
                'nama' => "Nia",
                'kelas_id' => 'TI 2G',
                'prodi' => 'D4-TI',
                'jurusan' => 'TEKNOLOGI INFORMASI',
                'no_hp' => '0873475374',
                ],

            [
            'nim' => '2141720324',
            'nama' => "Amalia",
            'kelas_id' => 'TI 2G',
            'prodi' => 'D4-TI',
            'jurusan' => 'TEKNOLOGI INFORMASI',
            'no_hp' => '081847567457',
            ],

        ];
        DB::table('mahasiswas')->insert($data);
    }
}
