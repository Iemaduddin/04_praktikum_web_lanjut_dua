<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'username' => 'didin',
                'name' => 'Iemaduddin',
                'email' => 'iemaduddin17@gmail.com',
                'password' => Hash::make('didin')
            ],
            [
                'username' => 'endar',
                'name' => 'Muhammad Endar Darmawan',
                'email' => '2141720160@student.polinema.ac.id',
                'password' => Hash::make('endar')
            ]
        ];
        DB::table('users')->insert($data);
    }
}
