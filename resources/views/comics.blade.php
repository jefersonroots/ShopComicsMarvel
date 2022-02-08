@extends('layouts.app')

@section('title','Marvel')

@section('sidebar')
    @parent
   <p>Cotalogo</p>
@endsection

@section('content')
    <p>COMICS AQUI</p>
<body>

    <div class="container ">
        <div class="row d-flex ">
        <?  var_dump($resultArray); ?>
         @foreach($results as $resultArray)

                <div  class="card p-3 py-4 col-md-4 d-flex justify-content-center flex-wrap">
                    <div class="text-center">  <a href="cart"> <img width='60%' height="50%" src="{{ $resultArray['thumbnail']['path'].'.jpg' }}"/></a>
                        <h3 class="mt-2">{{ $resultArray['title'] }}</h3>
                        <span class="mt-1 clearfix">{{ $resultArray['id'] }}</span>
                        <small class="mt-4">{{ $resultArray['id'] }}</small>
                        <div class="social-buttons mt-5">
                            <button class="neo-button"><i class="fa fa-facebook fa-1x"></i>Details</button>
                             <button class="neo-button"><i class="fa fa-linkedin fa-1x"></i>Cart</button>

                        </div>
                    </div>


            {{-- <ul class="list-group"> --}}
                {{-- @forelse($results as $reply)
                <p>{{ $resultArray['thumbnail']['path'].'.jpg' }}</p>
            @empty
                <p>No replies</p>
            @endforelse --}}


            {{-- </ul> --}}

        </div>
         @endforeach
        </div>

        </div>
</div>

</body>
@endsection
