@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div class="card">
                        <div class="card-header" style="align-items: left;">
                            <div class="row">
                                <img src="{{Session::get('avatar')}}" width="25" height="25" style="border-radius: 50%;">
                                 |    {{auth()->user()->name}}
                            </div>
                        </div>
                        <div class="card-body">
                            You are logged In
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection