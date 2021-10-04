@extends('main')

@section('stylesheet')
    
@stop

@section('title')
419
@stop

@section('header')
@include('partials._header')
@stop

@section('content')

<div class="section page-title">
    <div class="container">
        <h1>Session Expired</h1>
    </div>
</div>

<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-danger text-center">
                    <h2 class="display-3">419</h2>
                    <p class="display-5">Oops! Session Expire, Something is wrong.</p>
                    <p><a href="{{ route('login') }}" class="btn btn-theme">Click Here to Login</a></p>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection

@section('scripts')
<script>

</script>
@stop