@extends('layouts.app')

@section('content')
<div id="listsContainer" class="container">
        <div id="myRow" class="row  d-flex justify-content-start">
            @foreach ($lists as $list)
                <div id="list_div" class="col-md-3 col-sm" >
                    <div id="list_card" class="card-body w-100 h-75">
                        <h5 class="card-name">{{ $list->name }}</h5>
                        @foreach ($list->integratedCardsFromLists as $key => $item)
                                @if ($key === 3)  @break   @endif
                                <a type="button" id="btn_href" class="btn d-flex justify-content-start" href="{{ url('view/' . $board->id . '/' . $list->id . '/' . $item->integratedCardsFromCards->id) }}">
                                    <p id="list_desc" class="card-text">{{ $item->integratedCardsFromCards->name }}</p>
                                </a>
                        @endforeach
                    </div>
                    <a type="button" class="btn btn-outline-primary p-1 w-75 " href="{{ url('view/' . $board->id . '/' . $list->id) }}">View all Cards</a>
                </div>
            @endforeach
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
