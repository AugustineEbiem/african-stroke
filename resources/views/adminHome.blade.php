@extends('layouts.app')

@section('content')
<div class="page-header page-header-sm" style="">
     <h1 class="text-uppercase page-title">Profile Page</h1>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" style="align-self:center !important">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                        <p class="text-secondary">Welcome {{ Auth::user()->name }}.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
