@extends('main')

@section('stylesheet')
    
@stop

@section('title')
Registration
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
                                <li class="breadcrumb-item active" aria-current="page">Registration</li>
                            </ol>
                        </nav>
                    </div>
                    
                </div>

                <div class="stock-box">
				@if ($message = Session::get('success'))
				<div class="alert alert-success alert-block">
					<button type="button" class="close" data-dismiss="alert">×</button>	
						<strong>{{ $message }}</strong>
				</div>
				@endif


				@if ($message = Session::get('error'))
				<div class="alert alert-danger alert-block">
					<button type="button" class="close" data-dismiss="alert">×</button>	
						<strong>{{ $message }}</strong>
				</div>
				@endif
                    <form method="POST" action="{{ route('registeruser') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Full Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('User Name') }}</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username">

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">

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
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password">
                                
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone">

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
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
                                <button type="submit" class="btn btn-theme btn-submit">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                        <!--<div class="form-group row mb-0 mt-4">-->
                        <!--    <div class="col-md-8 offset-md-4">-->
                        <!--        <p class="text-danger mb-0">Note - Verify Your Email from Mail Inbox after Registering</p>-->
                        <!--    </div>-->
                        <!--</div>-->
                        <div class="form-group row mb-0 mt-4">
                            <div class="col-md-8 offset-md-4">
                                <p><a href="{{ route('login-user') }}">Click Here to Login</a></p>
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

// $("body").on('click','.btn-submit',function(e)
// {
//     e.preventDefault();
//     var mid = $(this).attr("mid");
//     if(mid != '')
//     {
//       $.ajax({
//         'type': 'POST',
//         url: {!! json_encode(url('registeruser')) !!},
//         //dataType: "json",
//         'data': {"_token": "{{ csrf_token() }}",mem_id: mid},
//         'cache': false,
//         'success': function (response)
//         {
//           //$('#get_list_data').DataTable().ajax.reload();
//           alert(response);
//         }
//         });
//     }   
// });
</script>
@endsection


