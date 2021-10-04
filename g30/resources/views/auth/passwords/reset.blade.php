@extends('main')

@section('stylesheet')
    
@stop

@section('title')
Reset Password
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
                                <li class="breadcrumb-item active" aria-current="page">Reset Password</li>
                            </ol>
                        </nav>
                    </div>
                    
                </div>

                <div class="stock-box">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
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
                                    <span class="invalid-feedback" role="alert">
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
                        <div class="form-group row">
                                <div class="col-md-8 offset-md-4">
                                    
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="show_password" onclick="myFunction();" id="show_password" {{ old('show_password') ? 'checked' : '' }}>
    
                                        <label class="form-check-label" for="show_password">
                                            {{ __('Show Password') }}
                                        </label>
                                    </div>
                                </div>
                            </div>
                        <div class="form-group row">
                            <div class="col-md-8 offset-md-4">
                                <p class="text-danger">Keep Password Minimum 8 characters long</p>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn  btn-theme">
                                    {{ __('Reset Password') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>   
            </div>

@endsection

@section('scripts')
<script type="text/javascript">

function myFunction() {
    
  var checkBox = document.getElementById("show_password");
  //var text = document.getElementById("text");
  let password2=document.getElementById('password');
  let passwordconfirm2=document.getElementById('password-confirm');

  if (checkBox.checked == true){
    password2.setAttribute('type','text');
    passwordconfirm2.setAttribute('type','text');
  } else {
     password2.setAttribute('type','password');
     passwordconfirm2.setAttribute('type','password');
  }
}
</script>
@endsection
