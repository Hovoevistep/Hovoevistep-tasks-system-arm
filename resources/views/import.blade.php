@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div id="success_div" class="col-md-8">


            {{-- @if(session()->has('error'))
            <div class="container alert">
                <p class="alert alert-danger"
                   style="text-align: center;font-size: 25px">{{session()->get('error')}}</p>
            </div>
            @endif --}}

            <div class="card">
                <div class="card-header">Importing your Trello</div>
                <div class="card-body">

                    <form method="POST" action="{{ url('importing') }}">
                        @csrf

                        <div class="form-group row mb-0">
                            <div id="import_btn_div" class="col-md-8 offset-md-4">
                                <button id="import_btn" class="btn btn-primary">
                                    Import
                                </button>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>


<script>

    // $(document).ready(function(){
    //     $('#import_btn').on('click',function(e){
    //         e.preventDefault();
    //        let key = '{{ Auth::user()->trelloCredentials->first()->key }}';
    //        let token = '{{ Auth::user()->trelloCredentials->first()->token }}';
    //         $('#import_btn_div').append('<span class="spinner-border spinner-border-sm" disabled></span>');
    //         $("#import_btn"). attr("disabled", true);
    //         $.ajax({

    //             url: '/importing',
    //             type: "POST",

    //             data: {
    //                 key:key,
    //                 token:token
    //             },

    //             headers: {

    //             'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')

    //             },

    //             success: function (data) {
    //                 $('#success_div').prepend(' <div class="container alert"><p class="alert alert-success"style="text-align: center;font-size: 25px">All your data is imported from trello</p></div>')
    //                 $('.spinner-border').remove();
    //                 $("#import_btn").attr("disabled", true);
    //                 $("#import_btn").attr('class','btn btn-success');
    //             },

    //             error: function (msg) {
    //                 $('.spinner-border').remove();
    //                 $("#import_btn").attr("disabled", true);
    //                 $("#import_btn").attr('class','btn btn-danger');
    //                 alert('error');
    //             }

    //         });
    //     });
    // });

    </script>

@endsection
