@extends('layouts.app')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
@section('title', 'Marvel')

@section('sidebar')
    @parent

@endsection

@section('content')

    <body>

        <div class="container">
            <div class="row d-flex ">
                <?php
                session_start();
                ?>
                @foreach ($results as $resultArray)
                    <?php $recebe = $resultArray;
                          $imagem = $resultArray['thumbnail']['path'].'.jpg';

                     ?>
                    @if($resultArray['id'] == '1332' || $resultArray['id'] == '1308')

                   @else

                    <div class="card p-3 py-4 col-md-4 d-flex justify-content-center flex-wrap">
                        <div class="text-center">
                            <a href="cart"> <img width='60%' height="50%"
                                    src="{{  $imagem}}" /></a>
                            <h3 class='mt-2'>{{ $resultArray['title']  }}</h3>
                            <span class="mt-1 clearfix">{{ $resultArray['id'] }}</span>
                            <span class="mt-4">{{ $resultArray['description'] }}</span>
                            <div class="social-buttons mt-5">
                                    <a href="{{ route('cart', ['id' => $resultArray['id'],'title' => $resultArray['title'], 'img'=>$resultArray['thumbnail']['path'].'.jpg'])}}">
                                        <button name="cart-add" class="neo-button">
                                            <i class="fa fa-cart-plus fa-lg" aria-hidden="true">
                                            </i></button>
                                </a>
                                <a align="center" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#detalharCliente">
                                <button name="info" class="neo-button">
                                    <i class="fa fa-info-circle fa-lg">
                                    </i>
                                </button></a>

                            </div>
                        </div>
                    </div>
                    @endif
                @endforeach
            </div>
        </div>
    </body>

<div class="modal fade bd-example-modal-lg" id="detalharCliente" name="detalharCliente" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
                          <div class="modal-header">
                              <h3 class="modal-title" style="align-itens:center;" id="exampleModalLongTitle">Dados dos Clientes</h3>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                              </button>
                          </div>
                          <span id="conteudoDetalhar">
                            <a href="cart"> <img width='20%' height="25%"
                                src="{{  $imagem}}" /></a>
                        <h3 class='mt-2'>{{ $resultArray['title']  }}</h3>
                        <span class="mt-1 clearfix">{{ $resultArray['id'] }}</span>
                        <span class="mt-4">{{ $resultArray['description'] }}</span>
                        <span class="mt-4">{{ $resultArray['variantDescription'] }}</span>
                          </span>
                          <div class="modal-footer">

                          </div>
                      </div>
                  </div>
              </div>
              @endsection

