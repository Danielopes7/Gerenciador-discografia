<form action="{{ route('track.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="modal fade text-left" id="ModalShow" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Adicionar Faixa</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>                    
                </div>
                <div class="modal-body">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="card-body">

                        <label class="form-label">Nome da faixa</label>
                        <input type="text" name="nome" class="form-control" >

                        <label class="form-label">Número da Faixa</label>
                        <input type="text" name="numero" class="form-control" >

                        <label class="form-label">Duração</label>
                        <input type="time" name="duracao" step=1 class="form-control" >

                        <input type="text" name="album_id" value="{{ $album->id }}" class="form-control" style="display: none" readonly>
                    </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">{{ __('Back') }}</button>
                        <button type="submit" class="btn grey btn-outline-secondary float-right" >Adicionar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
{{-- @extends('adminlte::page')

@section('title', 'Discografia')

@section('content_header')
    <h1>Faixas</h1>
@stop

@section('content')

<div class="d-flex align-items-center p-3 text-dark-50 bg-white rounded shadow-sm justify-content-between">
    <img class="mr-3" src="/imagens/logo.png" alt="" >
    <div class="lh-100 ">
        <h2 class="mb-0 text-dark lh-100">Cadastrar Nova Faixa</h2>
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
                    <label for="albumInput">Faixa</label>
                    <input type="text" name="nome" class="form-control" id="albumInput" placeholder="Nome da Faixa">
                    {{ $errors->has('nome') ? $errors->first('nome') : '' }} 
                </div>
                <div class="row ">
                    <div class="col-3">
                        <input type="text" class="form-control" placeholder="Número da Faixa">
                    </div>
                    <div class="col">
                        <select class="form-control">
                            <option>Selecionar Albúm</option>
                        </select>
                    </div>
            </div>
            </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-dark">Cadastrar Nova Faixa</button>
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
@stop --}}