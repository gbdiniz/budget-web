@extends('layouts.pattern')

@section('title', 'Criar registro')

@section('content')
<div class="mx-auto mt-3" style="width: 80%;">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg rounded">
            <div class="p-4">
                <h1>@yield('content-title')</h1>
                <form action="@yield('action')" method="@yield('form-type')">
                    @csrf
                    @method(@yield('form-type'))
                    <div class="form-group">
                        <div class="form-group">
                            <label for="tipo">Tipo: </label>
                            <select class="form-select" name="tipo" aria-label="Escolher a categoria">
                                <option value="Receita" selected>Receita</option>
                                <option value="Despesa">Despesa</option>
                            </select>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="nome">Histórico: </label>
                            <input type="text" class="form-control" name="nome" placeholder="Digite o histórico...">
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="categoria">Categoria: </label>
                            <select class="form-select" name="categoria" aria-label="Escolher a categoria">
                                <option selected>Escolha a categoria</option>
                                <option value="Lazer">Lazer</option>
                                <option value="Investimento">Investimento</option>
                                <option value="Utilitátios">Utilitátios</option>
                                <option value="Salário">Salário</option>
                                <option value="Contas básicas">Contas básicas</option>
                                <option value="Pagamento de dívidas">Pagamento de dívidas</option>
                            </select>
                        </div>

                        <br>

                        <div class="form-group" style="width: 200px;">
                            <label for="valor">Valor: </label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">R$</span>
                                </div>
                                <input type="text" name="valor" class="form-control" aria-label="">
                                <div class="input-group-append">
                                    <span class="input-group-text">,00</span>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-lg" name="submit">@yield('content-title')</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection