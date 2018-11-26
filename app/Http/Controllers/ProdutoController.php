<?php
namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\Produto;

class ProdutoController extends Controller
{
    protected $produto = null;

    public function __construct(Produto $produto)
    {
        $this->produto = $produto;
    }

    public function lista()
    {
        $produtos = $this->produto->getAll();
        return view('produto/listagem')->with('produtos', $produtos);
    }

    public function mostra($id)
    {
        $resposta = $this->produto->getOne($id);
        return view('produto/detalhes')->with("p", $resposta);
    }
    public function formAlt($id)
    {
        $resposta = $this->produto->getOne($id);
        return view('produto/alterar')->with("p", $resposta);
    }

    public function novo()
    {
        return view('produto/novo');
    }

    public function remove($id){
        $oProduto = $this->produto->getOne($id);
        $oProduto->delete();
        return view('produto/remover');
    }

    public function adiciona(Request $request)
    {
        $data = $request->all();
        $add = new Produto($data);
        $add->save();

        if ($add) {
            return redirect('/produtos')->with('adicionou', true)->with('produto', $data['nome']);
        }
    }

    public function alterar(Request $request)
    {
        $data = $request->all();

        $alterar = $this->produto->getOne($data['id']);
        $alterar->nome = $data['nome'];
        $alterar->quantidade = $data['quantidade'];
        $alterar->valor = $data['valor'];
        $alterar->save();

        return redirect('/produtos')->with('adicionou', true)->with('produto', $data['nome']);
    }
}
?>
