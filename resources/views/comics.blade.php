@extends('layouts.app')

@section('title', 'Marvel')

@section('sidebar')
    @parent

@endsection

@section('content')

    <body>

        <div class="container">
            <div class="row d-flex ">
                <?   ?>
                @foreach ($results as $resultArray)
                 <?php  ?>
                    <div class="card p-3 py-4 col-md-4 d-flex justify-content-center flex-wrap">
                        <div class="text-center"> <a href="cart"> <img width='60%' height="50%"
                                    src="{{ $resultArray['thumbnail']['path'] . '.jpg' }}" /></a>
                            <h3 class="mt-2">{{ $resultArray['title'] }}</h3>
                            <span class="mt-1 clearfix">{{ $resultArray['id'] }}</span>
                            <small class="mt-4">{{ $resultArray['id'] }}</small>
                            <div class="social-buttons mt-5">
                                <a  href="{{URL('cart/'.$resultArray['id'])}}">
                                <button name="cart-add" class="neo-button">
                                    <i class="fa fa-cart-plus fa-lg" aria-hidden="true">
                                    </i></button></a>
                                <button name="info" class="neo-button"><i class="fa fa-info-circle fa-lg"></i></button>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </body>
@endsection
