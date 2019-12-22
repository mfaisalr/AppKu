<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "name"      => "Faisal",
            "email"     => "mfaisalr0102@gmail.com",
            "password"  => bcrypt("123321"),
            "role"      => "superuser",
        ]);
    }
}
