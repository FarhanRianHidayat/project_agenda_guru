<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\facades\DB;

class AgendaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('agenda')->insert([
            'namaguru' => 'Hilmi Putra',
            'matapelajaran' => 'Sex Education',
            'materipelajaran' => 'Rangsangan',
            'absensi' => 'Hilmi Tidak Masuk',
            'jampelajaran' => '07:30 - 09:30',
            'kelas' => 'XI RPL 2',
            'jenispembelajaran' => 'Offline',
            'linkpembelajaran' => '..',
            'dokumentasi' => '.....',
            'keterangan' => '......',
        ]);
    }
}
