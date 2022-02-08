<div class="show">
    <h1> LISTA DE PERSONAGENS </h1>
</div>
<div class="show">
        <div class='input-group'>
            <?  var_dump($resultArray); ?>
             @foreach($results as $resultArray)
            <div class="col-md">
                <ul class="list-group">
                    <li  class="list-group-item active" >
                        <a href="servicos.html">
                            <img width='250' height="300" src="{{ $resultArray['thumbnail']['path'].'.jpg' }}"/></a>
                    </li>
                    <li class="list-group-item active" >{{ $resultArray['title'] }}</li>
                    <li class="list-group-item active" >{{ $resultArray['id'] }}</li>
                    <a class="list-group-item active" >_________***_________</a>
                    {{-- @forelse($results as $reply)
                    <p>{{ $resultArray['thumbnail']['path'].'.jpg' }}</p>
                @empty
                    <p>No replies</p>
                @endforelse --}}


                </ul>
            </div>

             @endforeach


</div></div>
<div class="buttons">

</div>
</body>
</html>
