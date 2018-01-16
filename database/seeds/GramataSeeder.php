<?php

use App\Gramata;
use Illuminate\Database\Seeder;

class GramataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('gramata')->delete();
        Gramata::create(array('id' => 1, 'created_at' => '2018-15-01 10:32:46', 'updated_at' => '2018-15-01 10:32:46', 'ISBN' => '978-9984-850-30-6'));
		Gramata::create(array('id' => 2, 'created_at' => '2018-15-01 10:32:46', 'updated_at' => '2018-15-01 10:32:46', 'ISBN' => '978-9984-824-08-6'));	
		Gramata::create(array('id' => 3, 'created_at' => '2018-15-01 10:32:46', 'updated_at' => '2018-15-01 10:32:46', 'ISBN' => '978-5-903360-04-8'));	
		Gramata::create(array('id' => 4, 'created_at' => '2018-15-01 10:32:46', 'updated_at' => '2018-15-01 10:32:46', 'ISBN' => '9984-9436-0-7'));	
    }
}
