<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProdutoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        //return parent::toArray($request);
        return [
            'id' => $this->id,
            'nome' =>$this->nome,
            'preco' => $this->preco,
            'imagen' => $this->imagen,
            'descricao' => $this->descricao,
            'disponivel' => $this->disponivel,
            'categoria_id' => $this->categoria_id
        ];
    }
}
