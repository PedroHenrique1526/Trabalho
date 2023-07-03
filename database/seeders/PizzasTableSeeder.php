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
            'descricao' => 'Molho de tomate, ovos cozidos, cebola, azeitona, ervilha, queijo e presunto',
            'preco' => 30.00,
        ]);
        DB::table('pizzas')->insert([
            'sabor' => 'Quatro queijos',
            'descricao' => 'Queijos: Muçarela, Catupiry, Parmesao e Provolone',
            'preco' => 35.00,
        ]);
        DB::table('pizzas')->insert([
            'sabor' => 'Calabresa',
            'descricao' => 'Calabresa, cebola e molho de tomate',
            'preco' => 25.00,
        ]);
        DB::table('pizzas')->insert([
            'sabor' => 'Frango com catupiry',
            'descricao' => 'Frango desfiado, catupiry e molho de tomate',
            'preco' => 30.00,
        ]);
        DB::table('pizzas')->insert([
            'sabor' => 'Bacon',
            'descricao' => 'Bacon, cebola e molho de tomate',
            'preco' => 25.99,
        ]);
        DB::table('pizzas')->insert([
            'sabor' => 'Marguerita',
            'descricao' => 'Molho de tomate, manjericão e queijo',
            'preco' => 30.00,
        ]);
        DB::table('pizzas')->insert([
            'sabor' => 'Brigadeiro',
            'descricao' => 'Chocolate, granulado e leite condensado',
            'preco' => 25.00,
        ]);
        DB::table('pizzas')->insert([
            'sabor' => 'Banana',
            'descricao' => 'Banana, canela e leite condensado',
            'preco' => 25.00,
        ]);
        DB::table('pizzas')->insert([
            'sabor' => 'Romeu e Julieta',
            'descricao' => 'Goiabada e queijo',
            'preco' => 25.00,
        ]);
        DB::table('pizzas')->insert([
            'sabor' => 'Chocolate',
            'descricao' => 'Chocolate e granulado',
            'preco' => 25.00,
        ]);
        DB::table('pizzas')->insert([
            'sabor' => 'Chocolate branco',
            'descricao' => 'Chocolate branco e granulado',
            'preco' => 25.00,
        ]);
    }
}
