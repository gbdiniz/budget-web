@extends('layouts.pattern')

@section('title', 'Criar registro')

@section('content')
<div class="mx-auto mt-3" style="width: 80%;">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg rounded">
            <div class="p-4">
                <h1>Editar um regitro</h1>
                <form action="{{ route('budget-update', ['id'=> $register -> id]) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <div class="form-group">
                            <label for="tipo">Tipo: </label>
                            <select class="form-select" name="tipo" aria-label="Escolher a categoria">
                                <option value="{{ $register -> tipo }}" selected="selected">{{ $register -> tipo }}</option>
                                @if($register -> tipo != 'Receita') <option value="Receita">Receita</option> @endif
                                @if($register -> tipo != 'Despesa') <option value="Despesa">Despesa</option> @endif
                            </select>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="nome">Histórico: </label>
                            <input type="text" class="form-control" value="{{ $register -> nome }}" name="nome" placeholder="Digite o histórico...">
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="categoria">Categoria: </label>
                            <select class="form-select" name="categoria" aria-label="Escolher a categoria">
                                <option value="{{ $register -> categoria }}" selected>{{ $register -> categoria }}</option>
                                @if($register -> categoria != 'Lazer') <option value="Lazer">Lazer</option> @endif
                                @if($register -> categoria != 'Investimento')<option value="Investimento">Investimento</option>@endif
                                @if($register -> categoria != 'Utilitátios')<option value="Utilitátios">Utilitátios</option>@endif
                                @if($register -> categoria != 'Salário')<option value="Salário">Salário</option>@endif
                                @if($register -> categoria != 'Contas básicas')<option value="Contas básicas">Contas básicas</option>@endif
                                @if($register -> categoria != 'Pagamento de dívidas')<option value="Pagamento de dívidas">Pagamento de dívidas</option>@endif
                            </select>
                        </div>

                        <br>

                        <div class="form-group" style="width: 200px;">
                            <label for="valor">Valor: </label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">R$</span>
                                </div>
                                <input type="text" name="valor" value="{{ $register -> valor }}" class="form-control" aria-label="">
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-lg" name="submit">Editar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection