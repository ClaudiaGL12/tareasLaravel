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
        for ($i = 0; $i < 10; $i++) {
            Spending::create([
                'date' => now(), // Fecha actual
                'amount' => mt_rand(100, 10000) / 100, // Número aleatorio con decimales
                'category' => ['compras', 'impuestos'][array_rand(['ingresos', 'pagas'])], // Aleatorio entre ingresos o pagas
            ]);
        }
    }
}
