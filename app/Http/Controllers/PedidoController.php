<?php

namespace App\Http\Controllers;

use App\Http\Resources\PedidoCollection;
use App\Models\Pedido;
use App\Models\PedidoProduto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PedidoController extends Controller
{
    public function index()
    {
        //$pedidos = DB::table('pedidos')->where('estado', 0)->orderBy('id', 'ASC')->get();
       return new PedidoCollection(Pedido::with('user')->with('produtos')->where('estado', 0)->get());
    }

    public function update(Request $request, Pedido $pedido)
    {
        $pedido->estado = 1;
        $pedido->save();
        return [ 'pedido' => $pedido];
    }

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
