@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            @if(session()->has('error'))
            <div class="container alert">
                <p class="alert alert-danger"
                   style="text-align: center;font-size: 25px">{{session()->get('error')}}</p>
            </div>
            @endif

            @if(session()->has('success'))
            <div class="container alert">
                <p class="alert alert-success"
                   style="text-align: center;font-size: 25px">{{session()->get('success')}}</p>
            </div>
            @endif

            @if( $authUser->trelloCredentials()->first() === null)
                <div class="card">
                    <div class="card-header">Search your Trello</div>
                    <div class="card-body">
                        <form method="POST" action="{{ url('settings') }}">
                            @csrf
                                <div class="form-group row">
                                    <label for="key" class="col-md-4 col-form-label text-md-right">Key</label>
                                    <div class="col-md-6">
                                        <input id="key" type="string" class="form-control " name="key"  required/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="token" class="col-md-4 col-form-label text-md-right">Token</label>
                                    <div class="col-md-6">
                                        <input id="token" type="string" class="form-control " name="token"  required/>
                                    </div>
                                </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" id="save_btn" class="btn btn-primary">
                                        Save
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                @else


            <div class="card">
                <div class="card-header">Search your Trello</div>
                <div class="card-body">
                    <form method="POST" action="{{ url('settings') }}">
                        @csrf
                            <div class="form-group row">
                                <label for="key" class="col-md-4 col-form-label text-md-right">Key</label>
                                <div class="col-md-6">
                                    <input id="key" type="string" class="form-control " name="key"  value="{{old('key', $authUser->trelloCredentials()->first()->key)}}"required/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="token" class="col-md-4 col-form-label text-md-right">Token</label>
                                <div class="col-md-6">
                                    <input id="token" type="string" class="form-control " name="token" value="{{old('token', $authUser->trelloCredentials()->first()->token)}}" required/>
                                </div>
                            </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Save
                                </button>
                            </div>
                        </div>

                    </form>
                </div>

            </div>


            @endif

        </div>
    </div>
</div>

@endsection
