<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
             'name' => 'admin',
             'email' => 'admin@admin.com',
             'password' => Hash::make('password12345678'),
             'created_at' => '2022/01/01 11:11:11',
            ]);
    }
}
