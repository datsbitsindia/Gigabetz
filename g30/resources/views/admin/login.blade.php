@extends('admin.main')

@section('stylesheet')
<!-- BEGIN PAGE LEVEL PLUGINS -->
<link href="{{ asset('public/backend/assets/global/plugins/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('public/backend/assets/global/plugins/select2/css/select2-bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL STYLES -->
<link href="{{ asset('public/backend/assets/global/css/components.min.css') }}" rel="stylesheet" id="style_components" type="text/css" />
<link href="{{ asset('public/backend/assets/global/css/plugins.min.css') }}" rel="stylesheet" type="text/css" />
<!-- END THEME GLOBAL STYLES -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<link href="{{ asset('public/backend/assets/pages/css/login.min.css') }}" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL PLUGINS -->

<style>
.login {
    background-color: #ddd!important;
}
</style>
@stop

@section('title')
Login
@stop
 
@section('body')
login
@stop


@section('content')

<!-- BEGIN LOGO -->
        <div class="logo">
            <a href="{{ url('/') }}">
                <!--<img src="{{ asset('public/backend/assets/pages/img/logo-big.png') }}" alt="" />-->
                <img src="{{ asset('public/frontend/images/logo.png') }}" alt="" />
            </a>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN LOGIN -->

        <div class="content">
            <!-- BEGIN LOGIN FORM -->
             @if (count($errors) > 0)
               <div class = "alert alert-danger">
                  <ul>
                     @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                     @endforeach
                  </ul>
               </div>
            @endif
            @if(session('success'))
                <div class = "alert alert-success">{{session('success')}}</div>
            @endif            
                        
                           
                    
            <form class="login-form" action="{{ route('admin.auth') }}" method="post">
                 {!! csrf_field() !!}
                <h3 class="form-title font-green">Sign In</h3>
                <div class="alert alert-danger display-hide">
                    <button class="close" data-close="alert"></button>
                    <span> Enter any username and password. </span>
                </div>
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                    <label class="control-label visible-ie8 visible-ie9">E-Mail</label>
                    <input class="form-control form-control-solid placeholder-no-fix" type="email" autocomplete="off" placeholder="E-mail" name="email" value="{{ old('email') }}"/> 
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label class="control-label visible-ie8 visible-ie9">Password</label>
                    <input class="form-control form-control-solid placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password" /> 
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-actions">
                    <button type="submit" class="btn green uppercase">Login</button>
                    <label class="rememberme check mt-checkbox mt-checkbox-outline">
                        <input type="checkbox" name="remember" value="1" />Remember
                        <span></span>
                    </label>
                    <!--<a href="javascript:;" id="forget-password" class="forget-password">Forgot Password?</a>-->
                </div>
                
                
            </form>
            <!-- END LOGIN FORM -->
            <!-- BEGIN FORGOT PASSWORD FORM -->
            <form class="forget-form" action="index.html" method="post">
                <h3 class="font-green">Forget Password ?</h3>
                <p> Enter your e-mail address below to reset your password. </p>
                <div class="form-group">
                    <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" name="email" /> </div>
                <div class="form-actions">
                    <button type="button" id="back-btn" class="btn green btn-outline">Back</button>
                    <button type="submit" class="btn btn-success uppercase pull-right">Submit</button>
                </div>
            </form>
            <!-- END FORGOT PASSWORD FORM -->
           
        </div>
        <div class="copyright"> 2014 © . Admin Dashboard Template. </div>
    
@endsection


@section('scripts')
<!-- BEGIN PAGE LEVEL PLUGINS -->

<!--[if lt IE 9]>
<script src="{{ asset('public/backend/assets/global/plugins/respond.min.js') }}"></script>
<script src="{{ asset('public/backend/assets/global/plugins/excanvas.min.js') }}"></script> 
<script src="{{ asset('public/backend/assets/global/plugins/ie8.fix.min.js') }}"></script> 
<![endif]-->
<!-- BEGIN CORE PLUGINS -->
<script src="{{ asset('public/backend/assets/global/plugins/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('public/backend/assets/global/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('public/backend/assets/global/plugins/js.cookie.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('public/backend/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('public/backend/assets/global/plugins/jquery.blockui.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('public/backend/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="{{ asset('public/backend/assets/global/plugins/jquery-validation/js/jquery.validate.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('public/backend/assets/global/plugins/jquery-validation/js/additional-methods.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('public/backend/assets/global/plugins/select2/js/select2.full.min.js') }}" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="{{ asset('public/backend/assets/global/scripts/app.min.js') }}" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{ asset('public/backend/assets/pages/scripts/login.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('public/backend/assets/common.js') }}" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<script>
    $(document).ready(function()
    {
        $('#clickmewow').click(function()
        {
            $('#radio1003').attr('checked', 'checked');
        });
    })
</script>
<!-- END PAGE LEVEL PLUGINS -->


<!-- END THEME LAYOUT SCRIPTS -->
@stop