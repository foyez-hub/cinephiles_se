<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class loginseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB:: table('login')->insert([
           
            'loginame'=>'mdemam336@gmail.com',
            
        ]);
    }
}
