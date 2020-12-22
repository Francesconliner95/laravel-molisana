@extends('layouts.app')

@section('content')
<div class="container">

    <div class="container-pasta">

        <h2>Le Lunghe</h2>
        <div class="container-tipo-pasta">
            @for ($i=0; $i < count($pasta); $i++)

               @if ($pasta[$i]['tipo']=='lunga')

                   <div class="pasta">
                       <img src="{{$pasta[$i]['src']}}" alt="sfondo">
                       <span>{{$pasta[$i]['titolo']}}</span>
                   </div>

               @endif

           @endfor

        </div>

        <h2>Le Corte</h2>
        <div class="container-tipo-pasta">
            @for ($i=0; $i < count($pasta); $i++)

               @if ($pasta[$i]['tipo']=='corta')

                   <div class="pasta">
                       <img src="{{$pasta[$i]['src']}}" alt="sfondo">
                       <span>{{$pasta[$i]['titolo']}}</span>
                   </div>

               @endif

           @endfor

        </div>

        <h2>Le Cortissime</h2>
        <div class="container-tipo-pasta">
            @for ($i=0; $i < count($pasta); $i++)

               @if ($pasta[$i]['tipo']=='cortissima')

                   <div class="pasta">
                       <img src="{{$pasta[$i]['src']}}" alt="sfondo">
                       <span>{{$pasta[$i]['titolo']}}</span>
                   </div>

               @endif

           @endfor
        </div>

        {{-- @for ($i=0; $i < count($pasta); $i++)

            @if ($pasta[$i]['tipo']=='lunga')

                <div class="pasta">
                    <img src="{{$pasta[$i]['src']}}" alt="sfondo">
                    <span>{{$pasta[$i]['titolo']}}</span>
                </div>

            @elseif($pasta[$i]['tipo']=='corta')

                <div class="pasta">
                    <img src="{{$pasta[$i]['src']}}" alt="sfondo">
                    <span>{{$pasta[$i]['titolo']}}</span>
                </div>

            @else

                <div class="pasta">
                    <img src="{{$pasta[$i]['src']}}" alt="sfondo">
                    <span>{{$pasta[$i]['titolo']}}</span>
                </div>

            @endif

        @endfor --}}
    </div>

</div>
@endsection
