<?php

namespace Database\Seeders;
use App\Models\Budgets;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BudgetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Budgets::create([
            'user_id' => 1,
            'amount' => 1000,
        ]);
    }
}
