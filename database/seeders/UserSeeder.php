<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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

            'role_id' => 1,
            'name' => 'Courier Company',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password'),

        ]);

    }
}
