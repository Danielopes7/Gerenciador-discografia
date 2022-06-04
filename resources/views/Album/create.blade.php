@extends('adminlte::page')

@section('title', 'Discografia')

@section('content_header')
    <h1>Albúns</h1>
@stop

@section('content')

<div class="d-flex align-items-center p-3 text-dark-50 bg-white rounded shadow-sm justify-content-between">
    <img class="mr-3" src="/imagens/logo.png" alt="" >
    <div class="lh-100 ">
        <h2 class="mb-0 text-dark lh-100">Adicionar Albúm</h2>
    </div>
</div>

<div class="index my-1 p-3 rounded shadow-sm">
    <div class="card card-dark col-md-6 container-fluid p-0">
        <div class="card-header">
        </div>
        <form method="post" action="{{ route('album.store')}}">
        @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="albumInput">Albúm</label>
                    <input type="text" name="nome" class="form-control" id="albumInput" placeholder="Nome do Albúm">
                </div>
            </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-dark">Submit</button>
                </div>
        </form>
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