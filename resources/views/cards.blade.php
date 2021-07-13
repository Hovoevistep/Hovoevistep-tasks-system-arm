@extends('layouts.app')

@section('content')
<div id="cardsContainer" class="container">
    <div id="cardRow" class="row">
        @empty($cards[0])
            <div class="grid">
                <h1>There are no cards in this list :(</h1>
                <a  href="{{ url('view/' . $board->id) }}">Go back</a>
            </div>
        @endisset
        @foreach ($cards as $card)
            <div id="card_div" class="col-md-3 col-xl-3">
                @if ($card->integratedCardsFromCards->cardImg)
                    <div class="card-head">
                        <img style="height: 200px; width: 247px; padding: 5px;" src=" {{ $card->integratedCardsFromCards->cardImg }}" alt="#">
                    </div>
                    <div class="card-body d-flex row align-content-between">
                 @else
                    <div class="card-body d-flex row align-content-between h-100">
                @endif
                     <div>
                        <h4 id="card_name_desc">{{ $card->integratedCardsFromCards->name }}</h4>
                        <p id="card_desc" class="card-text">
                            {{ $card->integratedCardsFromCards->desc }} @if($card->desc === '' || $card->desc === null) empty desc @endif</p>
                    </div>
                    <div id="card_btn_div">
                        <a type="button" href="{{ url('view/' . $board->id . '/' . $card->list_id . '/' . $card->card_id) }}" class="btn btn-outline-primary w-75">View </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>


@empty(!$board)
    <script>
         $( document ).ready(function() {
            $("body").css("background-image", "url('{{ $board->backgroundImage }}')");
            $('body').css({
                backgroundSize : "cover",
                backgroundRepeat: "no-repeat",
                backgroundAttachment: "fixed",
                backgroundPosition: "center ",
            })
        });
    </script>
@endempty

@endsection
