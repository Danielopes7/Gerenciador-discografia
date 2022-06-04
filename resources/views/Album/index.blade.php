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
 
        <h4 class="order-bottom border-gray pb-2 mt-4 mb-0"><strong>Album: Rei do gado</strong></h4>
        <div class="row media pt-3">
            <div class="col-2">
                <p class="media-body pb-3 mb-0 medium lh-125">
                    <strong class="text-dark">Nº</strong>
                </p>
            </div>
            <div class="col-8">
                <p class="media-body pb-3 mb-0 medium lh-125 ">
                    <strong class="text-dark">Faixa</strong>
                </p>
            </div>
            <div class="col-2">
                <p class="media-body pb-3 mb-0 medium lh-125 ">
                    <strong class="text-dark">Duração</strong>
                </p>
            </div>
                        <div class="col-2">
                <p class="media-body pb-3 mb-0 medium lh-125">
                    <strong class="text-gray">Nº</strong>
                </p>
            </div>
            <div class="col-8">
                <p class="media-body pb-3 mb-0 medium lh-125 ">
                    <strong class="text-gray">Faixa</strong>
                </p>
            </div>
            <div class="col-2">
                <p class="media-body pb-3 mb-0 medium lh-125 ">
                    <strong class="text-gray">Duração</strong>
                </p>
            </div>
            
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