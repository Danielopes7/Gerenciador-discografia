@extends('adminlte::page')

@section('title', 'Discografia')

@section('content_header')
    <h1>Albúns</h1>
@stop

@section('content')
    <div class="d-flex align-items-center p-3 text-dark-50 bg-white rounded shadow-sm justify-content-between">
        <img class="mr-3" src="/imagens/logo.png" alt="" >
        <div class="lh-100 ">
            <h2 class="mb-0 text-dark lh-100">Discografia</h2>
        </div>
    </div>

    <div class="index my-1 p-3 rounded shadow-sm">
        <label class="form-label text-gray" for="form1">Digite uma palavra chave</label>        
        <div class="input-group">
            <div class="form-outline" style="min-width: 89%"  style="display: flex">
                <input type="search" id="form1" class="form-control bg-white"/>
            </div>
            <button type="button" class="btn btn-primary">
                <i class="fas fa-search"> Procurar</i>
            </button>
        </div>
        
        {{-- Verifico se a tabela ta vazia, caso esteja mostro um h4 avisando --}}
        @if ( $albuns->isEmpty() )
            <h4 class= "mt-3 text-center">Nenhum Albúm cadastrado...</h4>
        @endif

        @foreach ($albuns as $album)
            <h4 class="border-gray mt-4 mb-0"><strong>{{ $album->nome }}</strong></h4>
            <table class="table table-borderless">
                <thead>
                    <tr>
                    <th scope="col-3" width="10%">Nº</th>
                    <th scope="col-1" width="70%">Faixa</th>
                    <th scope="col-1" width="10%">Last</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    </tr>
                    <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    </tr>
                    <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    </tr>
                </tbody>
            </table>
        @endforeach

            
        </div>
  
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="/css/style.css">
    <style>
    .text-dark{
        color: #000!important;
    }
    </style>
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop