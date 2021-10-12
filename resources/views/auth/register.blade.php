@extends('layouts.app')

@section('content')
<div class="page-header page-header-sm" style="">
    <h1 class="text-uppercase page-title">Membership Registration</h1>
    <p></p>
</div>
<div class="breadcrumb">
    <div class="container">
        <ol>
            <li><a href="../../../">Home</a></li><li>Membership</li><li>Registration</li>
        </ol>
    </div>
</div>
<div class="container content-container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card vc_row wpb_row vc_row-fluid vc_custom_1453297211960">
                <div class="wpb_column vc_column_container vc_col-md-4">
                    <div class="vc_column-inner ">
                        <div class="wpb_wrapper">

                        </div>
                        <div class="wpb_wrapper">
                               <h2 class="heading-left  divider-modern" style="color: #0a0a0a">
                                   <span>Join Us
                                       <em class="heading-subtitle" style="color: darkblue;">By Joining the African Stroke Organization community:
                                           <ul>
                                               <li>you will receive updates on African Stroke Organization events and activities.</li>
                                               <li>you will receive our quarterly newsletter</li>
                                               <li>To receive full African Stroke Organization membership benefits, please register as an individual member.</li>
                                           </ul>
                                       </em>
                                   </span>
                               </h2>
                               <div class="vc_empty_space" style="height: 20px">
                                   <span class="vc_empty_space_inner"></span>
                               </div>
                            <div class="wpb_text_column wpb_content_element ">
                                <div class="wpb_wrapper">
                                    <h5>Cut Stroke in half.</h5>
                                    <p>Help us to develop and implement innovative approaches to stroke prevention that have the proven potential to half the rate of stroke.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wpb_column vc_column_container vc_col-md-7">
                    <div class="vc_column-inner ">
                        <div class="wpb_wrapper" style="padding-left:20px;border-left:1px solid gray; align-items: center !important;">


                            <div class="wpb_text_column wpb_content_element  vc_custom_1453201923068">
                                <div class="wpb_wrapper" style="margin: 12px !important">
                                    <center>

                                            <h3 class="mb-30"><center>SIGN UP</center></h3>
                                    </center>
                                </div>
                                <!--<div class="card-header"><h2>{{ __('Register') }}</h2></div> -->
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf

                                    <div class="form-group row">
                                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                        <div class="col-md-6">
                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                            @error('name')
                                                <span class="invalid-feedback wpcf7-response-output" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email Address') }}</label>

                                        <div class="col-md-6">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                            @error('email')
                                                <span class="invalid-feedback wpcf7-response-output" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                        <div class="col-md-6">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                            @error('password')
                                                <span class="invalid-feedback wpcf7-response-output" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                        <div class="col-md-6">
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                        </div>
                                    </div>

                                    <div class="form-group row mb-0">
                                        <div class="col-md-12 offset-md-4">
                                            <center><button type="submit" class="btn btn-primary">
                                                {{ __('SIGN IN') }}
                                            </button></center>
                                        </div>
                                    </div>
                                </form>
                            </div>
            </div>
        </div>
    </div>
</div>
@endsection
