@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        {{--  <form action="{{ url('webhook') }}" method="POST">
            @csrf
            <button>asd</button>
        </form>  --}}

        <div id="board_div" class="col-md-12 row p-1">
            @foreach ($boards as $board)

                <div class="card p-1 ml-2" style="width: 16rem;">
                    <img class="card-img-top" style="height: 200px" src="{{ $board->backgroundImage }}" alt="Card image cap">
                    <div class="card-body">
                    <h5 class="card-title">{{ $board->name }}</h5>
                    <p id="board_desc" class="card-text">
                        @if($board->desc === '' || $board->desc === null)
                            Empty Description
                        @else
                            {{ $board->desc }}
                        @endif
                    </p>
                    <a class="btn btn-info" href="{{ url('boards/view/' . $board->id) }}">View in full</a>
                    <a class="btn btn-primary" href="{{ url('view/' . $board->id) }}">View Lists</a>
                    </div>
                </div>


              @endforeach

            </div>
        </div>
    </div>
</div>
@endsection
