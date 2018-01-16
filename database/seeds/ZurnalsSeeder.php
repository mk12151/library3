<?php

use App\Zurnals;
use Illuminate\Database\Seeder;

class ZurnalsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('zurnals')->delete();
        Zurnals::create(array('id' => 1, 'created_at' => '2018-15-01 10:32:46', 'updated_at' => '2018-15-01 10:32:46', 'ISSN' => '1545-1003', 'nr'=>62));
		Zurnals::create(array('id' => 2, 'created_at' => '2018-15-01 10:32:46', 'updated_at' => '2018-15-01 10:32:46', 'ISSN' => '1993-033X', 'nr'=>15));	
		Zurnals::create(array('id' => 3, 'created_at' => '2018-15-01 10:32:46', 'updated_at' => '2018-15-01 10:32:46', 'ISSN' => '1993-1111', 'nr'=>27));
		Zurnals::create(array('id' => 4, 'created_at' => '2018-15-01 10:32:46', 'updated_at' => '2018-15-01 10:32:46', 'ISSN' => '1990-1111', 'nr'=>43));			
        	
    }
}
