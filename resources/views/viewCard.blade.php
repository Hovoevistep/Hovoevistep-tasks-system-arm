@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

                <div class="card" style="width: 600px">
                    @if ($card->integratedCardsFromCards->cardImg)
                        <img class="card-img-top" src="{{ $card->integratedCardsFromCards->cardImg }}" alt="Card image" style="width:100%">
                    @endif
                    <div class="card-body">
                        <h4 class="card-title">{{ $card->integratedCardsFromCards->name }}</h4>

                        @if ($card->integratedCardsFromCards->desc)
                            <p class="card-text">{{ $card->integratedCardsFromCards->desc }}</p>
                        @else
                            <p class="card-text">Empty desc</p>
                        @endif
                  </div>
                </div>

        </div>
    </div>
</div>

@empty(!$board)
    <script>
        $( document ).ready(function() {
            $("body").css("background-image", "url('{{ $board->backgroundImage }}')");
            $("body").css("background-size", "cover");
            $("body").css("background-repeat", "no-repeat");
            $("body").css("background-attachment", "fixed");
            $("body").css("background-position", "center top");
        });
    </script>
@endempty


@endsection
