@extends('layouts.app')

@section('content')
<h1>Prodotti</h1>

<div class="container-pasta">

    @for ($i=0; $i < count($pasta); $i++)

        <div class="pasta">
            <p>{{$pasta[$i]['titolo']}}</p>
        </div>
        
    @endfor

</div>





@endsection
