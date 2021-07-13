@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card-img-overlay">
                <h3 class="card-name">{{ $board->name }}</h3>
                <p class="card-desc" style="color: #fff; text-shadow: 2px 3px 8px #000;">{{ $board->desc }}</p>
            </div>
        </div>
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
