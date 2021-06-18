<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class DetailProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //
      DB::table('detail_profile')->insert([
        'address' => 'bondowoso',
        'nomor_tlp' => '082xxx',
        'ttl' => '2008-10-10',
        'foto' => 'picture.jpg'
    ]);
    }
}
