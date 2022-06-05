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
    {{-- validação do modal --}}
    @if( !$errors->isEmpty())
        <div class="alert alert-danger text-center" role="alert">
            {{ $errors->has('nome') ? $errors->first('nome').'!' : '' }}
            {{ $errors->has('numero') ? $errors->first('numero').'!' : '' }}
            {{ $errors->has('duracao') ? $errors->first('duracao').'!' : '' }}
        </div>
    @endif
    <div class="card card-dark col-md-6 container-fluid p-0">
        <div class="card-header">
            Albúm: {{ $album->nome }}
        <a class="criar btn btn-sm btn-light float-right text-dark" role="button" data-toggle="modal" data-toggle="ModalShow">+ Adicionar nova faixa</a>
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
            @foreach ( $album->tracks as $track)
                <tr>
                    <td>{{ $track->numero}}</td>
                    <td>{{ $track->nome}}</td>
                    <td>{{ $track->duracao}}</td>
                    <td></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @else
        </table>
        <h5 class= "text-center">O albúm não contém nenhuma faixa</h5>
    @endif
    </div>
</div>

@include('track.create')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="/css/style.css">
@stop

@section('js')
    <script>
        $(function() {
        $('.criar').on('click', function(){
            $('#ModalShow').modal("show");
            //var id = $(this).data('id'); 
            $.ajax({
                type:'post',
                url: "{{ route('track.store') }}",
                data: {
                    'id' : id,
                    '_token': $('input[name=_token]').val()                  
                },
                dataType: 'json',
                success:function(data){
                    
                }
                }); 
            });
        });
        $("#aceite").on("click", function() {
            $("#form-login").submit(); //Se for clicado no botão aceite é submetido o formulário
            });
        $("#form-login").validate({

        rules: {
            "email": {
            required: true,
            email: true
            },
            "senha": {
            required: true
            }
        },
        messages: {
            "email": {
            required: 'Campo e-mail é obrigatório',
            email: 'E-mail inválido'
            },
            "senha": {
            required: 'Campo senha é obrigatório'
            }
        }
        });
    </script>
@stop