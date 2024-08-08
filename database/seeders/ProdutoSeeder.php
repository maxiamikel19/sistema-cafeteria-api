<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $produtos = [
            ['id' => 1, 'nome' => 'Margherita', 'preco' => 29.90, 'imagen' => 'pizzas_01', 'descricao' => 'Pizza clássica com molho de tomate, mozzarella e manjericão.', 'disponivel' => true, 'categoria_id' => 2],
            ['id' => 2, 'nome' => 'Pepperoni', 'preco' => 34.90, 'imagen' => 'pizzas_02', 'descricao' => 'Pizza com molho de tomate, mozzarella e pepperoni.', 'disponivel' => true, 'categoria_id' => 2],
            ['id' => 3, 'nome' => 'Quatro Queijos', 'preco' => 36.90, 'imagen' => 'pizzas_05', 'descricao' => 'Pizza com uma mistura de quatro queijos: mozzarella, gorgonzola, parmesão e cheddar.', 'disponivel' => true, 'categoria_id' => 2],
            ['id' => 4, 'nome' => 'Vegetariana', 'preco' => 32.90, 'imagen' => 'pizzas_03', 'descricao' => 'Pizza com molho de tomate, mozzarella e uma seleção de vegetais frescos.', 'disponivel' => true, 'categoria_id' => 2],
            ['id' => 5, 'nome' => 'Havaiana', 'preco' => 33.90, 'imagen' => 'pizzas_04', 'descricao' => 'Pizza com molho de tomate, mozzarella, presunto e abacaxi.', 'disponivel' => true, 'categoria_id' => 2],
            ['id' => 6, 'nome' => 'Frango com Catupiry', 'preco' => 35.90, 'imagen' => 'pizzas_07', 'descricao' => 'Pizza com molho de tomate, mozzarella, frango desfiado e Catupiry.', 'disponivel' => true, 'categoria_id' => 2],
            ['id' => 7, 'nome' => 'Calabresa', 'preco' => 34.90, 'imagen' => 'pizzas_06', 'descricao' => 'Pizza com molho de tomate, mozzarella e calabresa.', 'disponivel' => true, 'categoria_id' => 2],
            ['id' => 8, 'nome' => 'Expresso', 'preco' => 9.90, 'imagen' => 'cafe_08', 'descricao' => 'Café forte e concentrado, preparado sob alta pressão.', 'disponivel' => true, 'categoria_id' => 1],
            ['id' => 9, 'nome' => 'Cappuccino', 'preco' => 12.90, 'imagen' => 'cafe_09', 'descricao' => 'Café expresso com leite vaporizado e uma camada de espuma de leite.', 'disponivel' => true, 'categoria_id' => 1],
            ['id' => 10, 'nome' => 'Latte', 'preco' => 13.90, 'imagen' => 'cafe_03', 'descricao' => 'Café expresso misturado com uma quantidade generosa de leite vaporizado.', 'disponivel' => true, 'categoria_id' => 1],
            ['id' => 11, 'nome' => 'Macchiato', 'preco' => 11.90, 'imagen' => 'cafe_01', 'descricao' => 'Café expresso com uma pequena quantidade de espuma de leite.', 'disponivel' => true, 'categoria_id' => 1],
            ['id' => 12, 'nome' => 'Mocha', 'preco' => 14.90, 'imagen' => 'cafe_02', 'descricao' => 'Café expresso combinado com chocolate e leite vaporizado.', 'disponivel' => true, 'categoria_id' => 1],
            ['id' => 13, 'nome' => 'Americano', 'preco' => 10.90, 'imagen' => 'cafe_10', 'descricao' => 'Café expresso diluído com água quente para um sabor mais suave.', 'disponivel' => true, 'categoria_id' => 1],
            ['id' => 14, 'nome' => 'Affogato', 'preco' => 15.90, 'imagen' => 'cafe_06', 'descricao' => 'Uma bola de sorvete coberta com café expresso quente.', 'disponivel' => true, 'categoria_id' => 1],
            ['id' => 16, 'nome' => 'Brownie', 'preco' => 8.90, 'imagen' => 'biscoito_01', 'descricao' => 'Delicioso brownie de chocolate com pedaços de nozes.', 'disponivel' => true, 'categoria_id' => 3],
            ['id' => 17, 'nome' => 'Cheesecake', 'preco' => 12.90, 'imagen' => 'biscoito_06', 'descricao' => 'Cheesecake cremoso com base de biscoito e cobertura de frutas vermelhas.', 'disponivel' => true, 'categoria_id' => 3],
            ['id' => 18, 'nome' => 'Tiramisu', 'preco' => 13.90, 'imagen' => 'biscoito_05', 'descricao' => 'Sobremesa italiana com camadas de biscoitos, café e mascarpone.', 'disponivel' => true, 'categoria_id' => 3],
            ['id' => 19, 'nome' => 'Macaron', 'preco' => 7.90, 'imagen' => 'biscoito_04', 'descricao' => 'Docinho francês de amêndoas com recheio cremoso.', 'disponivel' => true, 'categoria_id' => 3],
            ['id' => 20, 'nome' => 'Pudim', 'preco' => 9.90, 'imagen' => 'biscoito_03', 'descricao' => 'Clássico pudim de leite condensado com calda de caramelo.', 'disponivel' => true, 'categoria_id' => 3],
            ['id' => 21, 'nome' => 'Bolo de Cenoura', 'preco' => 10.90, 'imagen' => 'bolo_07', 'descricao' => 'Bolo fofinho de cenoura com cobertura de chocolate.', 'disponivel' => true, 'categoria_id' => 3],
            ['id' => 22, 'nome' => 'Rabanada', 'preco' => 11.90, 'imagen' => 'biscoito_01', 'descricao' => 'Fatias de pão fritas e cobertas com açúcar e canela, servidas com mel.', 'disponivel' => true, 'categoria_id' => 3],
            ['id' => 23, 'nome' => 'Coxinha', 'preco' => 5.90, 'imagen' => 'pastel_05', 'descricao' => 'Deliciosa coxinha de frango com catupiry.', 'disponivel' => true, 'categoria_id' => 4],
            ['id' => 24, 'nome' => 'Empada', 'preco' => 6.50, 'imagen' => 'pastel_04', 'descricao' => 'Empada recheada com frango desfiado e temperos.', 'disponivel' => true, 'categoria_id' => 4],
            ['id' => 25, 'nome' => 'Kibe', 'preco' => 7.00, 'imagen' => 'pastel_02', 'descricao' => 'Kibe frito recheado com carne moída temperada.', 'disponivel' => true, 'categoria_id' => 4],
            ['id' => 26, 'nome' => 'Pastel', 'preco' => 4.90, 'imagen' => 'pastel_01', 'descricao' => 'Pastel crocante com recheio de carne moída e queijo.', 'disponivel' => true, 'categoria_id' => 4],
            ['id' => 27, 'nome' => 'Enroladinho de Presunto e Queijo', 'preco' => 5.50, 'imagen' => 'pastel_05', 'descricao' => 'Enroladinho de massa folhada com presunto e queijo.', 'disponivel' => true, 'categoria_id' => 4],
            ['id' => 28, 'nome' => 'Smoothie de Morango', 'preco' => 14.90, 'imagen' => 'bolo_14', 'descricao' => 'Smoothie refrescante feito com morangos frescos e iogurte.', 'disponivel' => true, 'categoria_id' => 5],
            ['id' => 29, 'nome' => 'Smoothie de Banana', 'preco' => 15.90, 'imagen' => 'bolo_08', 'descricao' => 'Smoothie cremoso de banana com leite e mel.', 'disponivel' => true, 'categoria_id' => 5],
            ['id' => 30, 'nome' => 'Smoothie Verde', 'preco' => 16.90, 'imagen' => 'bolo_13', 'descricao' => 'Smoothie saudável com espinafre, maçã e pepino.', 'disponivel' => true, 'categoria_id' => 5],
            ['id' => 31, 'nome' => 'Smoothie Tropical', 'preco' => 17.90, 'imagen' => 'bolo_11', 'descricao' => 'Smoothie refrescante de abacaxi, manga e laranja.', 'disponivel' => true, 'categoria_id' => 5],
            ['id' => 32, 'nome' => 'Smoothie de Frutas Vermelhas', 'preco' => 16.50, 'imagen' => 'bolo_10', 'descricao' => 'Mistura de framboesas, amoras e morangos com um toque de iogurte.', 'disponivel' => true, 'categoria_id' => 5],
            ['id' => 33, 'nome' => 'Smoothie de Manga e Maracujá', 'preco' => 18.90, 'imagen' => 'bolo_12', 'descricao' => 'Smoothie exótico com manga, maracujá e um toque de hortelã.', 'disponivel' => true, 'categoria_id' => 5],
            ['id' => 34, 'nome' => 'Smoothie de Chocolate e Banana', 'preco' => 17.50, 'imagen' => 'bolo_04', 'descricao' => 'Smoothie indulgente com banana e cacau, perfeito para os amantes de chocolate.', 'disponivel' => true, 'categoria_id' => 5],
            ['id' => 35, 'nome' => 'Cheeseburger', 'preco' => 19.90, 'imagen' => 'hamburguer_01', 'descricao' => 'Hambúrguer com queijo cheddar, alface, tomate e maionese.', 'disponivel' => true, 'categoria_id' => 6],
            ['id' => 36, 'nome' => 'Bacon Burger', 'preco' => 22.90, 'imagen' => 'hamburguer_02', 'descricao' => 'Hambúrguer com bacon crocante, queijo, cebola caramelizada e molho barbecue.', 'disponivel' => true, 'categoria_id' => 6],
            ['id' => 37, 'nome' => 'Veggie Burger', 'preco' => 18.90, 'imagen' => 'hamburguer_03', 'descricao' => 'Hambúrguer vegetariano com grão-de-bico, alface, tomate e molho especial.', 'disponivel' => true, 'categoria_id' => 6],
            ['id' => 38, 'nome' => 'Double Burger', 'preco' => 24.90, 'imagen' => 'hamburguer_04', 'descricao' => 'Dois hambúrgueres suculentos com queijo, alface, tomate e ketchup.', 'disponivel' => true, 'categoria_id' => 6],
            ['id' => 39, 'nome' => 'BBQ Burger', 'preco' => 21.50, 'imagen' => 'hamburguer_05', 'descricao' => 'Hambúrguer com molho barbecue, cebola crispy, queijo e bacon.', 'disponivel' => true, 'categoria_id' => 6],
            ['id' => 40, 'nome' => 'Spicy Burger', 'preco' => 20.90, 'imagen' => 'hamburguer_06', 'descricao' => 'Hambúrguer apimentado com jalapeños, queijo pepper jack e molho picante.', 'disponivel' => true, 'categoria_id' => 6],
            ['id' => 41, 'nome' => 'Mushroom Burger', 'preco' => 22.50, 'imagen' => 'hamburguer_07', 'descricao' => 'Hambúrguer com cogumelos salteados, queijo suíço e maionese trufada.', 'disponivel' => true, 'categoria_id' => 6],
            ['id' => 42, 'nome' => 'Classic Burger', 'preco' => 18.50, 'imagen' => 'hamburguer_08', 'descricao' => 'Hambúrguer tradicional com carne de boi, queijo, alface, tomate e cebola.', 'disponivel' => true, 'categoria_id' => 6],
        ];

        //DB::table('produtos')->insert($produtos);
    }
}
