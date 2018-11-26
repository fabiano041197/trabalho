<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\Cliente;

class ClienteController extends Controller
{
    protected $cliente = null;

    public function __construct(Cliente $cliente)
    {
        $this->cliente = $cliente;
    }

    public function lista()
    {
        $clientes = $this->cliente->getAll();
        return view('cliente/listagem')->with('cliente', $clientes);
    }

    public function adiciona(Request $request)
    {
        $data = $request->all();
        $add = new Cliente($data);
        $add->save();

        if ($add) {
            return redirect('/clientes')->with('adicionou', true)->with('cliente', $data['nome']);
        }
    }

    public function novo()
    {
        return view('cliente/novo');
    }

    public function alterar(Request $request)
    {
        $data = $request->all();


        $alterar = $this->cliente->getOne($request['id']);

        $alterar->nome = $data['nome'];
        $alterar->endereco = $data['endereco'];
        $alterar->save();

        return redirect('/clientes')->with('adicionou', true)->with('cliente', $data['nome']);
    }

    public function mostra($id)
    {
        $resposta = $this->cliente->getOne($id);
        return view('cliente/detalhes')->with("p", $resposta);
    }

    public function formAlt($id)
    {
        $resposta = $this->cliente->getOne($id);
        return view('cliente/alterar')->with("p", $resposta);
    }

    public function remove($id){
        $cliente= $this->cliente->getOne($id);
        $cliente->delete();
        return view('cliente/remover');
    }
}
