<?php

use Illuminate\Database\Seeder;

class User extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "Fabricio Docema de Oliveria",
            'email' => 'fa.docema@gmail.com',
            'password' => bcrypt('autogreen'),
            'admin' => true,
        ]);
    }
}
