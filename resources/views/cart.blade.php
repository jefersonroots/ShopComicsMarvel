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

                    @if (session('cart'))
                        <?php
                        $total = 0;
                        $quantidade = 0;
                        ?>
                        @foreach (session('cart') as $detalhes)

                            <div class="cart-row">
                                <img width='15%' height="10%" style="margin-left:5%;margin-right:5%;"
                                    src="{{ $detalhes['img'] }}" />
                                <div class="cart-row-cell desc">
                                    <h5 class="mt-2">{{ '' . $detalhes['title'] }}</h5>

                                </div>
                                <div class="cart-row-cell quant">
                                    <ul>
                                        <li><a href="#">-</a></li>
                                        <li>{{ $detalhes['quantidade'] }}</li>
                                        <li><a href="#">+</a></li>
                                        <div class="cart-row-cell amount">

                                            <li>
                                                <h5>${{ $detalhes['price'] }}</h5>
                                            </li>

                                        </div>
                                    </ul>
                                </div>

                            </div>
                            <span style="display: none;"> {{ $total += $detalhes['price'] }}</span>
                            <span style="display: none;"> {{ $quantidade += $detalhes['quantidade'] }}</span>
                        @endforeach
                    @endif
                </div>
            </div>

            <footer>
                <div class="totals">
                    <h5>
                        <p class="total-label">Quantidade de Itens</p>
                    </h5>
                    <p class="total-amount">
                    <h5>{{ @$total }}</h5>
                    </p>
                </div>
                <div class="totals">
                    <h5>
                        <p class="total-label">Total</p>
                    </h5>
                    <p class="total-amount">
                    <h5>{{ $quantidade }}</h5>
                    </p>
                </div>

                <button>Finalizar Compra</button>
            </footer>
        </div>
    </div>

@endsection
@endsection

<style>

</style>
