@extends('adminlte::page')

@section('title', 'Discografia')

@section('content_header')
    <h1>Albúns</h1>
@stop

@section('content')
    <main >
      <div class="d-flex align-items-center p-3 text-dark-50 bg-white rounded shadow-sm justify-content-between">
        <img class="mr-3" src="/imagens/logo.png" alt="" >
        <div class="lh-100 ">
          <h2 class="mb-0 text-dark lh-100">Discografia</h2>
        </div>
      </div>

      <div class=" p-3 bg-white rounded shadow-sm " style="opacity: 70%">
        <h6 class="border-bottom border-gray pb-2 mb-0">Atualizações recentes</h6>
        <div class="media text-muted pt-3">
          <img data-src="holder.js/32x32?theme=thumb&bg=007bff&fg=007bff&size=1" alt="" class="mr-2 rounded">
          <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
            <strong class="d-block text-gray-dark">@usuario</strong>
            Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
          </p>
        </div>
        <div class="media text-muted pt-3">
          <img data-src="holder.js/32x32?theme=thumb&bg=e83e8c&fg=e83e8c&size=1" alt="" class="mr-2 rounded">
          <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
            <strong class="d-block text-gray-dark">@usuario</strong>
            Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
          </p>
        </div>
        <div class="media text-muted pt-3">
          <img data-src="holder.js/32x32?theme=thumb&bg=6f42c1&fg=6f42c1&size=1" alt="" class="mr-2 rounded">
          <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
            <strong class="d-block text-gray-dark">@usuario</strong>
            Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
          </p>
        </div>
        <small class="d-block text-right mt-3">
          <a href="#">Todas atualizações</a>
        </small>
      </div>
    
    {{-- <div class="row justify-content-md-center">
            <div class="col-11 p-5 bg-white text-dark mt-3 mx-5 w-50">
            </div>
    </div>
    <div class="row p-5 bg-white mx-5" style="opacity: 70%">
    </div>
        <div class="row p-5 bg-white mx-5" style="opacity: 70%">
    </div> --}}
        {{-- <div class="row">
        <div class="col p-5 bg-white text-dark mt-3 mx-5 w-50">
            </div>
        </div>
        <div class="row">
            <div class="col p-5 bg-white text-dark mx-5 h-100 d-inline-block" style="opacity: 70%">
                </div>
        </div> --}}

        
    
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <style>
    .header{
        background-color:#ffff;

    }
    .content-wrapper {
        background-image: url('/imagens/background.png');
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;


    }
    </style>
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop