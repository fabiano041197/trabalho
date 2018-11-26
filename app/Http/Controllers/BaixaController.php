<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\Baixa;

class BaixaController extends Controller
{
    protected $baixa = null;

    public function __construct(Baixa $baixa)
    {
        $this->baixa = $baixa;
    }

    public function lista()
    {
        $baixas = $this->baixa->getAll();
        return view('baixa/listagem')->with('baixa', $baixas);
    }

    public function adiciona(Request $request)
    {
        $data = $request->all();
        $add = new Baixa($data);

        try {
            $add->save();
            return redirect('/baixas')->with('adicionou', true)->with('baixa', $data['cliente_id']);

        } catch (Exception $e) {
            //report($e);

            return redirect('/baixas')->with('adicionou', false);
        }

    }

    public function novo()
    {
        return view('baixa/novo');
    }

    public function alterar(Request $request)
    {
        $data = $request->all();


        $alterar = $this->baixa->getOne($request['id']);

        $alterar->cliente_id = $data['cliente_id'];
        $alterar->produto_id = $data['produto_id'];
        $alterar->data = $data['data'];
        $alterar->save();

        return redirect('/baixas')->with('adicionou', true)->with('baixa', $data['cliente_id']);
    }

    public function mostra($id)
    {
        $resposta = $this->baixa->getOne($id);
        return view('baixa/detalhes')->with("p", $resposta);
    }

    public function formAlt($id)
    {
        $resposta = $this->baixa->getOne($id);
        return view('baixa/alterar')->with("p", $resposta);
    }

    public function remove($id){
        $oBaixa = $this->baixa->getOne($id);
        $oBaixa->delete();
        return view('baixa/remover');
    }
}
