<?php

use Illuminate\Database\Seeder;
use ERC\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'John Doe',
            'email' => 'john@doe.com',
            'password' => bcrypt('secret123')
        ]);
        User::create([
            'name' => 'Administrator',
            'email' => 'admin@erc.travel',
            'password' => bcrypt('services')
        ]);
    }
}
