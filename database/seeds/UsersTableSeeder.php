<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //user root
        User::create([
            'name'=> 'root',
            'email'=> 'admin@gmail.com',
            'password'=> bcrypt('123123'),
        ]);
    }
}
