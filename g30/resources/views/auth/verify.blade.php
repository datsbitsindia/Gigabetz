@extends('main')

@section('stylesheet')
    
@stop

@section('title')
Verify Your Email Address
@stop

@section('header')
@include('partials._header')
@stop

@section('content')


            <div class="col-md-12 ml-sm-auto col-lg-12 text-light page-height">
                <div class="all-page-box">
                    <div class="all-page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Verify Email</li>
                            </ol>
                        </nav>
                    </div>
                    
                </div>

                <div class="stock-box">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                    </form>
                </div>   
            </div>

@endsection
