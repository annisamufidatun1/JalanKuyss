<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users') -> insert([
            [
                //ADMIN
                'id' => '1',
                'name' => 'Admin',
                'email' => 'schoolannisams@gmail.com',
                'password' => Hash::make('admin123'),
                'role'=>'admin',
                'status'=>'active',
            ],
            //user
            [
                'id'=> '2',
                'name' => 'User',
                'email' => 'amsholihah4@gmail.com',
                'password' => Hash::make('user123'),
                'role' => 'user',
                'status'=>'active'
            ],
            ]);



        //
    }
}
