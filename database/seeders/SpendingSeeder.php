<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Spending;

class SpendingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //sin categories
        // for ($i = 0; $i < 10; $i++) {
        //     Spending::create([
        //         'date' => now(), // Fecha actual
        //         'amount' => mt_rand(100, 10000) / 100, // Número aleatorio con decimales
        //         'category' => ['compras', 'impuestos'][array_rand(['ingresos', 'pagas'])], // Aleatorio entre ingresos o pagas
        //     ]);
        // }

        $now = now();
        for($i=0;$i<=10; $i++){
            Spending::create([
                'amount' => rand(50,5000),
                // 'created_at' => $now,
                // 'updated_at' => $now,
                'category_id' => rand(3,4),
                'date' => $now
            ]);
        }
    }
}
