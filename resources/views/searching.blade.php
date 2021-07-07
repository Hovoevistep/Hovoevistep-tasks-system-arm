@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 row p-1">
            @foreach ($boards as $board)

            <div class="card p-1 ml-2" style="width: 18rem;">
                <img class="card-img-top h-100" src="{{ $board->prefs->backgroundImage }}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">{{ $board->name }}</h5>
                  <p class="card-text" style=" width: 250px;
                  white-space: nowrap;
                  overflow: hidden;
                  text-overflow: ellipsis;">{{ $board->desc }}</p>
                   <a class="btn btn-primary" href="{{ url('view/' . $board->id) }}">View in full</a>
                </div>
              </div>

              @endforeach

            </div>

        </div>
    </div>
</div>
@endsection
