<?php

use App\Resursi;
use Illuminate\Database\Seeder;

class ResursiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('resurs')->delete();
        Resursi::create(array('id' => 1, 'created_at' => '2018-15-01 10:32:46', 'updated_at' => '2018-15-01 10:32:46', 
            'autors' => 'Jānis Bērziņš', 'gads' => 2004, 'nosaukums' => 'Kriminālprocesa likums', 
			'formats' => 'e-gramata', 'udk' => '343.13 (474.3) (094)', 'atslegvardi' => 'krimināltiesibas, tiesibas', 
			'lpp' => 480,'gramata_id'=>1, 'zurnals_id'=>NULL));
		
		Resursi::create(array('id' => 2, 'created_at' => '2018-15-01 10:32:46', 'updated_at' => '2018-15-01 10:32:46', 
            'autors' => 'Andrejs Upits', 'gads' => 1995, 'nosaukums' => 'Pasakas', 
			'formats' => 'drukats', 'udk' => '82-3', 'atslegvardi' => 'pasakas, daiļliteratūra', 
			'lpp' => 210,'gramata_id'=>2, 'zurnals_id'=>NULL));
			
        Resursi::create(array('id' => 3, 'created_at' => '2018-15-01 10:32:46', 'updated_at' => '2018-15-01 10:32:46', 
            'autors' => 'Karlis Skalbe', 'gads' => 1968, 'nosaukums' => 'Medicīnas enciklopēdija', 
			'formats' => 'drukats', 'udk' => '5', 'atslegvardi' => 'medicīna', 
			'lpp' => 800,'gramata_id'=>3, 'zurnals_id'=>NULL));
			
		Resursi::create(array('id' => 4, 'created_at' => '2018-15-01 10:32:46', 'updated_at' => '2018-15-01 10:32:46', 
            'autors' => NULL, 'gads' => 2016, 'nosaukums' => 'Ilustrētā zinātne', 
			'formats' => 'drukats', 'udk' => '01', 'atslegvardi' => 'populārzinātne, tehnoloģijas, zinātne', 
			'lpp' => 48,'gramata_id'=>NULL, 'zurnals_id'=>1));	
    }
}
