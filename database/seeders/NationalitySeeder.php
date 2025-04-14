<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NationalitySeeder extends Seeder
{
    public function run()
    {
        DB::table('nationalities')->delete();

        $nationalities = [
            ['name' => 'Kenyan'],
            ['name' => 'Ugandan'],
            ['name' => 'Tanzanian'],
            ['name' => 'Rwandan'],
            ['name' => 'Burundian'],
            ['name' => 'South Sudanese'],
            ['name' => 'Somali'],
            ['name' => 'Ethiopian'],
            ['name' => 'Congolese'],
            ['name' => 'Other'],
        ];

        DB::table('nationalities')->insert($nationalities);
    }
}