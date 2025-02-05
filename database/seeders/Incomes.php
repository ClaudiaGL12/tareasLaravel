<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class Incomes extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 10; $i++) {
            DB::table('incomes')->insert([
                'date' => now()->subDays(rand(0, 365))->toDateString(),
                'amount' => round(mt_rand(10000, 500000) / 100, 2),
                'category' => ['compras', 'impuestos'][rand(0, 1)],
            ]);
        }
    }
}
