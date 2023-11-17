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
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => "Hendy Setiawan",
            'email' => "hendysetiawan@gmail.com",
            'password'=>Hash::make('ganteng'),
            'role'=>'admin'
        ]);

        DB::table('users')->insert([
            'name' => "Budi Setiawan",
            'email' => "budisetiawan@gmail.com",
            'password'=>Hash::make('jelek'),
            'role'=>'officer'
        ]);
        DB::table('users')->insert([
            'name' => "Ari Setiawan",
            'email' => "arisetiawan@gmail.com",
            'password'=>Hash::make('jelek'),
            'role'=>'officer'
        ]);
        DB::table('users')->insert([
            'name' => "Paijo Setiawan",
            'email' => "paijo@gmail.com",
            'password'=>Hash::make('jelek'),
            'role'=>'officer'
        ]);
        DB::table('users')->insert([
            'name' => "Budiman Setiawan",
            'email' => "budiman@gmail.com",
            'password'=>Hash::make('jelek'),
            'role'=>'officer'
        ]);
    }
}
