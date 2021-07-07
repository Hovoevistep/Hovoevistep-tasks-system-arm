@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">

                <div class="card-img-overlay">
                    <h3 class="card-name">{{ $card->name }}</h3>
                    <p class="card-desc">{{ $card->desc }}</p>
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
