@extends('main')

@section('stylesheet')
    
@stop

@section('title')
404
@stop

@section('header')
@include('partials._header')
@stop

@section('content')

<div class="section page-title">
    <div class="container">
        <h1>Page Not Found</h1>
    </div>
</div>

<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-danger text-center">
                    <h2 class="display-3">404</h2>
                    <p class="display-5">Oops! Something is wrong.</p>
                    <p><a href="{{ url('/') }}" class="btn btn-theme">Go To Home Page</a></p>
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