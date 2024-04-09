<?php

namespace Database\Seeders;
use App\Models\Goals;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GoalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Goals::create([
            'user_id' => 1,
            'amount' => '100',
            'title' => 'My Goals',
        ]);
    }
}
