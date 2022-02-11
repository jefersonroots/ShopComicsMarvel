@section('title', 'Marvel')



@section('content')

    <div style="border-bottom: 3px;border-bottom-color: black" align="center" name="title">
        <h2>{{ $_GET['title'] }}</h2>
    </div>

    <div class="row col-md-12" name="img">
        <img width='30%' height="35%" src="{{ $_GET['img'] }}" />
        <div align="center" name="desc">
            @if ($_GET['description'] == '' || $_GET['description'] == '#N/A')
                <h4 class='mt-2'><span class="mt-4">NOT HAVE DESCRIPTION</span></h4>
            @else
                <span style="display: none;">
                    {{                     $teste = str_replace('<br>', '', $_GET['description']) }}
                </span>
                <h4 class='mt-2'><span class="mt-4">{{ $teste }}</span></h4>
            @endif
            <br>
        </div>
    </div>
