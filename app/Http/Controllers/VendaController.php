<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\Venda;

class VendaController extends Controller
{

    protected $venda = null;

    public function __construct(Venda $venda)
    {
        $this->venda = $venda;
    }

    public function lista()
    {
        $vendas = $this->venda->getAll();
        return view('venda/listagem')->with('venda', $vendas);
    }

    public function adiciona(Request $request)
    {
        $data = $request->all();
        $add = new Venda($data);
        $add->save();

        if ($add) {
            return redirect('/vendas')->with('adicionou', true)->with('cliente', $data['cliente_id']);
        }
    }

    public function novo()
    {
        return view('venda/novo');
    }

    public function alterar(Request $request)
    {
        $data = $request->all();


        $alterar = $this->venda->getOne($request['id']);

        $alterar->cliente_id = $data['cliente_id'];
        $alterar->produto_id = $data['produto_id'];
        $alterar->data = $data['data'];
        $alterar->save();

        return redirect('/vendas')->with('adicionou', true)->with('venda', $data['cliente_id']);
    }

    public function mostra($id)
    {
        $resposta = $this->venda->getOne($id);
        return view('venda/detalhes')->with("p", $resposta);
    }

    public function formAlt($id)
    {
        $resposta = $this->venda->getOne($id);
        return view('venda/alterar')->with("p", $resposta);
    }

    public function remove($id){
        $oProduto = $this->venda->getOne($id);
        $oProduto->delete();
        return view('venda/remover');
    }

}
