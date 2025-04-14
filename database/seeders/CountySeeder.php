<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\County;

class CountySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $counties = [
            'Nairobi',
            'Mombasa',
            'Kisumu',
            'Nakuru',
            'Kiambu',
            'Machakos',
            'Uasin Gishu',
            'Nyeri',
            'Meru',
            'Kakamega',
            // Add all 47 counties here
        ];

        foreach ($counties as $county) {
            County::create(['name' => $county]);
        }
    }
}
