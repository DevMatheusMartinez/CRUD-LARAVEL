<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;

class ProdutosController extends Controller
{

    public function listarProdutos(Request $request){
        $produtos = Produto::query()->orderBy('nome')->get();
        $mensagem = $request->session()->get('mensagem');
        $request->session()->remove('mensagem');

        return view('Produtos.index', compact('produtos', 'mensagem'));
    }
    
    public function create()
    {
        return view('Produtos.create');
    }
    
    public function store(Request $request)
    {
        $produto = Produto::create($request->all());
        $request->session()->flash('mensagem', "Produto {$produto->id} criado com sucesso {$produto->nome}");

        return redirect('/produtos');
    }

    public function destroy(Request $request)
    {
        Produto::destroy($request->id);
        $request->session()->flash('mensagem', "Produto removido com sucesso");

        return redirect('/produtos');
    }


}
