<?php

namespace Database\Seeders;

use App\Models\Pizza;
use Database\Factories\PizzaFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PizzasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pizzas')->insert([
            'sabor' => 'Portuguesa',
            'descricao' => 'Muito muito muito portuguesa',
            'preco' => 30.00,
        ]);
    }
}
