<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Ngurah Kresna',
            'email' => 'kresna@gmail.com',
            'password' => bcrypt('kresna'),
        ]);
    }
}
