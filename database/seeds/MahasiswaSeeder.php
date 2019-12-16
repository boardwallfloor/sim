<?php

use Illuminate\Database\Seeder;
// use App\Mahasiswa;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\mahasiswa::class,10)->create();
    }
}
