<?php
namespace Database\Seeders;

use App\Models\ClassType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MyClassesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('my_classes')->delete();
        $ct = ClassType::pluck('id')->all();

        $data = [
            // Pre-Primary (Optional)
            ['name' => 'Pre-Primary 1 (PP1)', 'class_type_id' => $ct[2]],
            ['name' => 'Pre-Primary 2 (PP2)', 'class_type_id' => $ct[2]],
            
            // Lower Primary (Grades 1-3)
            ['name' => 'Grade 1', 'class_type_id' => $ct[3]],
            ['name' => 'Grade 2', 'class_type_id' => $ct[3]],
            ['name' => 'Grade 3', 'class_type_id' => $ct[3]],
            
            // Upper Primary (Grades 4-8)
            ['name' => 'Grade 4', 'class_type_id' => $ct[3]],
            ['name' => 'Grade 5', 'class_type_id' => $ct[3]],
            ['name' => 'Grade 6', 'class_type_id' => $ct[3]],
            ['name' => 'Grade 7', 'class_type_id' => $ct[3]],
            ['name' => 'Grade 8', 'class_type_id' => $ct[3]],
            
            // Secondary (Forms 1-4)
            ['name' => 'Form 1', 'class_type_id' => $ct[4]],
            ['name' => 'Form 2', 'class_type_id' => $ct[4]],
            ['name' => 'Form 3', 'class_type_id' => $ct[4]],
            ['name' => 'Form 4', 'class_type_id' => $ct[4]],
            
            // Optional: Junior Secondary (CBC)
            ['name' => 'Grade 7 (JSS)', 'class_type_id' => $ct[4]],
            ['name' => 'Grade 8 (JSS)', 'class_type_id' => $ct[4]],
            ['name' => 'Grade 9 (JSS)', 'class_type_id' => $ct[4]],
            
            // Optional: Senior Secondary (CBC)
            ['name' => 'Grade 10 (SSS)', 'class_type_id' => $ct[5]],
            ['name' => 'Grade 11 (SSS)', 'class_type_id' => $ct[5]],
            ['name' => 'Grade 12 (SSS)', 'class_type_id' => $ct[5]],
        ];

        DB::table('my_classes')->insert($data);
    }
}