@extends('layouts.app')
@section('title', 'Cart')

@section('sidebar')
    @parent

@section('content')
    <div style=" padding-top: 10px;" class="container">
        <div class="cart-container">
            <header>
                <h3>Carrinho de Compras</h3>
            </header>
            <div class="cart-body">
                <div class="cart-item">
                    <div class="cart-row">
                        @if(session('cart'))
                        <?php ?>
                        @foreach(session('cart') as $id => $detalhes )
                        <?php var_dump($detalhes)?>
                        {{-- <h3 class="mt-2">{{ $detalhes['id'] }}</h3> --}}
                        @endforeach
                        @endif

                        {{-- @foreach ($results as $resultArray)
                        <div class="cart-row-cell pic">
                         <a href="#">-</a>
                         <span></span>
                        </div>
                        <div class="cart-row-cell desc">
                            <h5 class="mt-2">{{ $resultArray['title'] }}</h5>
                            <h5 class="mt-2">{{ $resultArray['id'] }}</h5>
                        </div>
                        <div class="cart-row-cell quant">
                            <ul>
                                <li><a href="#">-</a></li>
                                <li>2</li>
                                <li><a href="#">+</a></li>
                            </ul>
                        </div>
                        <div class="cart-row-cell amount">
                            <p>R$13,87</p>
                        </div>
                        @endforeach --}}
                    </div>
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
