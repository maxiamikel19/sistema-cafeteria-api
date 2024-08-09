<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use App\Models\PedidoProduto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PedidoController extends Controller
{
    public function store(Request $request)
    {
        $pedido = new Pedido();
        $pedido->user_id = Auth::user()->id;
        $pedido->total = $request->total;
        $pedido->save();

        //Pedido produto
        $id = $pedido->id;
        $produtos = $request->produtos;

        $pedido_produto = [];

        foreach($produtos as $produto){
            $pedido_produto[] = [
                'pedido_id' => $id,
                'produto_id' => $produto['id'],
                'cantidade' => $produto['cantidade'],
                'created_at' => now()
            ];
        } 

        PedidoProduto::insert($pedido_produto);
        return [
            'message' => 'Salvando o pedido'
        ];
    }
}
