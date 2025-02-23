<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Income;

class IncomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //sin categories
        // for ($i = 0; $i < 10; $i++) {
        //     Income::create([
        //         'date' => now(), // Fecha actual
        //         'amount' => mt_rand(100, 10000) / 100, // Número aleatorio con decimales
        //         'category' => ['ingresos', 'pagas'][array_rand(['ingresos', 'pagas'])], // Aleatorio entre ingresos o pagas
        //     ]);
        // }

        $now = now();
        for($i=0;$i<=10; $i++){
            Income::create([
                'amount' => rand(50,5000),
                // 'created_at' => $now,
                // 'updated_at' => $now,
                'category_id' => rand(1,2),
                'date' => $now
            ]);
        }
    }
}
