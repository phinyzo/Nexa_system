<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
{
    $payments = [
        [
            'title' => 'Term 1 Fees',
            'amount' => 15000.00, // KSH
            'method' => 'mpesa',
            'description' => 'Tuition fees for first term',
            'my_class_id' => 1 // Form 1
        ],
        [
            'title' => 'Boarding Fees',
            'amount' => 35000.00,
            'method' => 'bank',
            'description' => 'Full term boarding charges',
            'my_class_id' => 2 // Form 2
        ],
        // Add more Kenyan payment examples
    ];

    foreach ($payments as $payment) {
        \App\Models\Payment::create($payment);
    }
}
}
