<?php
use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        User::create(array('name' => 'Administrator',
						   'uzvards' => 'Administrator',
                           'email' => 'admin@library.com', 
                           'password' => bcrypt('123456'),
                           'role' => 2));
    }
}
