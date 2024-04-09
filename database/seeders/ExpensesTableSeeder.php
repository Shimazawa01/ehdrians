<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Expenses;

class ExpensesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Expenses::create([
            'expense_id' => 1,
            'user_id' => 1,
            'amount' => '1000',
            'note' => 'This is my entire life savings :)',
        ]);
    }
}
