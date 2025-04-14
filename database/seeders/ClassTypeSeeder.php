<?php

namespace Database\Seeders;

use App\Models\ClassType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassTypeSeeder extends Seeder
{
    public function run()
    {
        DB::table('class_types')->delete();

        $data = [
            ['name' => 'Pre-Primary', 'code' => 'PP'],
            ['name' => 'Primary', 'code' => 'PRI'],
            ['name' => 'Junior Secondary', 'code' => 'JSS'],
            ['name' => 'Senior Secondary', 'code' => 'SSS'],
            ['name' => 'Tertiary', 'code' => 'TER'],
        ];

        DB::table('class_types')->insert($data);
    }
}