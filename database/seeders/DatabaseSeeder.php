<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $this->call(ExpensesTableSeeder::class);
        $this->call(BudgetsTableSeeder::class);
        $this->call(GoalsTableSeeder::class);
        $this->call(UserTableSeeder::class);
        // Call more seeders if you have them
    }
}
