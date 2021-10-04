<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>@yield('title')</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Preview page of Metronic Admin Theme #3 for 404 page option 1" name="description" />
        <meta content="" name="author" />

        @include('admin.partials.style')
        
        @yield('stylesheet')
        
        <link rel="shortcut icon" href="{{ asset('public/backend/assets/layouts/layout/img/favicon.ico') }}" />
    </head>
    <!-- END HEAD -->

<!-- BODY START -->
<body class="@yield('body')">
    <div id="ajax_preloader"></div>
    <div class="page-wrapper">
         
        @yield('header')

        @yield('content')

        @yield('footer')
        
    </div>
    
    @yield('scripts')

    @stack('pageScripts')
</body>
<!-- Body End -->
</html>