<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class objectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $date = date('Y-m-d', strtotime('12/01/2024'));

       DB::table('object')->insert([
        'nom' => 'fouda',
        'description' => 'recherche tel',
        'date' =>  $date,
        'lieu' => 'ngaoundere'
       ],

       [
        'nom' => 'fouda',
        'description' => 'recherche tel',
        'date' =>  $date,
        'lieu' => 'ngaoundere'
       ]
    );
    }
}
