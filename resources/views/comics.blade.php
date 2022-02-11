@extends('layouts.app')
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
                    <?php

                    $imagem = $resultArray['thumbnail']['path'] . '.jpg';
                    $price = $resultArray['prices'][0]['price'];

                    ?>
                    @if ($resultArray['id'] == '1332' || $resultArray['id'] == '1308')

                    @else

                        <div class="card p-3 py-4 col-md-4 d-flex justify-content-center flex-wrap">
                            <div class="text-center">
                                <a href="cart" placeholder="teste"> <img width='60%' height="50%"
                                        src="{{ $imagem }}" /></a>
                                <h3 style="border-bottom:12px;border-color:black;" class='mt-2'>
                                    {{ $resultArray['title'] }}</h3>

                                <br>
                                @if ($resultArray['prices'][0]['price'] == 0)
                                    <span style="display: none;"> {{ $price = 3.3 }}</span>
                                    <span class="mt-4">
                                        <h4 style="color: red" class='mt-2'> ${{ $price }}</h4>
                                        </h4>
                                    </span>

                                @else
                                    <h4 class='mt-2' style="color: red"><span
                                            class="mt-4">${{ $resultArray['prices'][0]['price'] }}</span></h4>
                                @endif
                                <div class="social-buttons mt-5">
                                    <a
                                        href="{{ route('cart', ['id' => $resultArray['id'],'title' => $resultArray['title'],'price' => $price,'img' => $resultArray['thumbnail']['path'] . '.jpg']) }}">
                                        <button name="cart-add" class="neo-button">
                                            <i class="fa fa-cart-plus fa-lg" aria-hidden="true">
                                            </i></button>
                                    </a>
                                    <a class="col-md-1 view_data" align="center" data-title="{{ $resultArray['title'] }}"
                                        data-id="{{ $resultArray['id'] }}" data-img="{{ $imagem }}"
                                        data-description="{{ $resultArray['description'] }}" data-toggle="modal">
                                        <button id1="{{ $resultArray['title'] }}" type="submit" name="info"
                                            class="neo-button">
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

    <div class="modal fade bd-example-modal-lg" id="detalhar" name="detalhar" tabindex="-1" role="dialog"
        aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div align="center"
                    style="background-image: linear-gradient(135deg, rgb(3, 8, 12), rgb(16, 57, 79));color:antiquewhite;"
                    class="modal-header">
                    <h3 class="modal-title" align="center" id="exampleModalLongTitle">Details Comics
                    </h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <span id="conteudoDetalhar">
                </span>
                <div style="   background-image: linear-gradient(135deg, rgb(3, 8, 12), rgb(16, 57, 79));"
                    class="modal-footer">
                </div>
            </div>
        </div>
    </div>


    <script type="text/javascript">
        $(document).ready(function() {
            $(document).on('click', '.view_data', function() {
                var id = $(this).attr("data-id");
                var title = $(this).attr("data-title");
                var img = $(this).attr("data-img");
                var description = $(this).attr("data-description");
                if (id !== '') {
                    var dados = {
                        id: id,
                        title: title,
                        img: img,
                        description,
                        description
                    };
                    $.get('{{ route('modal') }}', dados, function(retorna) {
                        $("#conteudoDetalhar").html(retorna);
                        $('#detalhar').modal('show');
                    });
                }
            });
        });
    </script>
@endsection
