@extends('layouts.app')

@section('content')
<div class="container">
        <div class="col-md-12">
            <div class="col-sm row">
                @empty($cards[0])
                    <div class="grid">
                        <h1>There are no cards in this list :(</h1>
                        <a  href="{{ url('view/' . $board->id) }}">Go back</a>
                    </div>
                @endisset
                @foreach ($cards as $card)
                    <div id="list_div" class="col-md-3 col-xl-3">
                        <div class="card-body">
                            <h5 id="card_name_desc" class="card-name">{{ $card->integratedCardsFromCards->name }}</h5>
                            <p id="card_desc" class="card-text">
                                {{ $card->integratedCardsFromCards->desc }} @if($card->desc === '' || $card->desc === null) empty desc @endif</p>
                            <a type="button" href="{{ url('view/' . $board->id . '/' . $card->list_id . '/' . $card->card_id) }}" class="btn btn-outline-primary p-1 w-75 mt-1">View </a>
                        </div>
                    </div>
                @endforeach

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
