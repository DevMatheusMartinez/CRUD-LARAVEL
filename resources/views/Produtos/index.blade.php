@extends('Produtos.layout')

@section('cabecalho')
Produtos
@endsection

@section('conteudo')
@if(!empty($mensagem))
        <div class="alert alert-success">
        {{ $mensagem }}
        </div>
@endif

<a href="/produtos/criar" class="btn btn-dark mb-2">Adicionar</a>

<ul class="list-group">
    <?php foreach ($produtos as $produto): ?>
    <li class=list-group-item>{{  $produto->nome  }}
        <form method="post" action="/produtos/{{ $produto->id }}" onsubmit="return confirm('Tem certeza que deseja remover este produto?')">
            @csrf
            @method("DELETE")
            <button class="btn btn-danger">Excluir</button>
        </form>
    </li>
    <?php endforeach; ?>
</ul>
@endsection

