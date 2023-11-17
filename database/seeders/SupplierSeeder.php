<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('suppliers')->insert([
            'name' => "PT Hendy Kaya Raya",
            'address' => "Ngawi",
            'phone'=>'08123456789',
            'email'=>'heendykayaraya@gmailcom'
        ]);

        DB::table('suppliers')->insert([
            'name' => "PT Hendy Sukses Selalu",
            'address' => "Jember",
            'phone'=>'08123456789',
            'email'=>'hendysukses@gmailcom'
        ]);

        DB::table('suppliers')->insert([
            'name' => "PT Hendy Sultan Semesta",
            'address' => "Surabaya",
            'phone'=>'08123456789',
            'email'=>'hendysultan@gmailcom'
        ]);
    }
}
