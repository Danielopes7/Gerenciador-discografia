@extends('adminlte::page')

@section('title', 'Discografia')

@section('content_header')
    <h1>Faixas do Albúm</h1>
@stop

@section('content')

<div class="d-flex align-items-center p-3 text-dark-50 bg-white rounded shadow-sm justify-content-between">
    <img class="mr-3" src="/imagens/logo.png" alt="" >
    <div class="lh-100 ">
        <h2 class="mb-0 text-dark lh-100">{{ $album->nome }}</h2>
    </div>
</div>

<div class="index my-1 p-3 rounded shadow-sm">
    <div class="card card-dark col-md-6 container-fluid p-0">
        <div class="card-header">
            Albúm: {{ $album->nome }}
        <button type="button" class="btn btn-sm btn-light float-right">+ Adicionar nova faixa</button>
        </div>
    <table class="table">
        <thead>
            <th>Nº</th>
            <th>Faixa</th>
            <th>Duração</th>
            <th>Ações</th>
        </thead>
    @if ( !$album->tracks->isEmpty() )
        <tbody>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td>Otto</td>
            </tr>
        </tbody>
    </table>
    @else
        </table>
        <h5 class= "text-center">O albúm não contém nenhuma faixa</h5>
    @endif
    </div>
</div>
  
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="/css/style.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop