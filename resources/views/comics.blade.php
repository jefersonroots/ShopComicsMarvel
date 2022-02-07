
    <div class="show">
        <h1> LISTA DE PERSONAGENS </h1>
    </div>

    <div class="show">
        @foreach ($result as $r)
            <div class='input-group'>
                <h4>{{$r->name}}</h4>
                <?= '<img src="'.$r->thumbnail->path.'.'.$r->thumbnail->extension.'" class="img"/>'; ?>
                <br/>
                <a href="{{ route('character', $r->id)}}" class="btn btn-danger btn-sm">Ver mais</a>
            </div>
        @endforeach
    </div>
    <div class="buttons">
        @if($offset != 0)
            <a href="{{route('index', $offset - 20)}}" class="btn btn-light">Anterior</a>
        @else
            <a href="{{route('index', $offset - 20)}}" class=""></a>
        @endif

        @if($total >= $offset + 20)
            <a href="{{route('index', $offset + 20)}}" class="btn btn-light">Próximo</a>
        @endif
    </div>
</body>
</html>
