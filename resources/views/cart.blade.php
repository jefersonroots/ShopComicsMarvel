@extends('layouts.app')
@section('title', 'Cart')

@section('sidebar')
    @parent

@section('content')
    <div style=" padding-top: 10px;padding-bottom: 10px" class="container">
        <div class="cart-container">
            <header>
                <h3>Carrinho de Compras</h3>
            </header>
            <div class="cart-body">
                <div class="cart-item">
                    @if(session('cart'))
                        <?php
                            $qtdItens =0;
                            // foreach(session('cart') as $key => $value){
                            //     $qtdItens += $value['quantidade'];
                            // }echo $qtdItens;

                        ?>

                        @foreach (session('cart') as $detalhes)

                        {{-- {{ $title }} --}}
                            <?php

                            ?>
                            <div class="cart-row">
                                <img  width='15%' height="10%" style="margin-left:5%;margin-right:5%;"
                                src="{{  $detalhes['img'] }}" />

                                {{-- <div class="cart-row-cell pic">
                                    <a href="#">-</a>

                                 --}}

                                <div class="cart-row-cell desc">

                                    <h5 class="mt-2">{{ "".$detalhes['title'] }}</h5>

                                </div>
                                <div class="cart-row-cell quant">
                                    <ul>
                                        <li><a href="#">-</a></li>
                                        <li>{{ $detalhes['quantidade'] }}</li>
                                        <li><a href="#">+</a></li>
                                    </ul>
                                </div>
                                <div class="cart-row-cell amount">
                                    <p>R$13,87</p>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>

            <footer>
                <div class="totals">
                    <p class="total-label">Subtotal</p>
                    <p class="total-amount">R$13,87</p>
                </div>
                <div class="totals">
                    <p class="total-label">Taxa</p>
                    <p class="total-amount">R$2,00</p>
                </div>
                <div class="totals">
                    <p class="total-label">Total</p>
                    <p class="total-amount">R$15,87</p>
                </div>
                <button>Finalizar Compra</button>
            </footer>
        </div>
    </div>

@endsection
@endsection

<style>

</style>
