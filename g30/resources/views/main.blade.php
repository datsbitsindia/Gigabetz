<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<meta name="generator" content="">
<title>@yield('title')</title>
<!-- Bootstrap core CSS -->
<link href="{{ asset('public/frontend/css/bootstrap.min.css') }}" rel="stylesheet" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
<link href="//cdn.datatables.net/1.11.2/css/jquery.dataTables.min.css" rel="stylesheet">
<!-- Custom styles-->
<link href="{{ asset('public/frontend/css/style.css') }}" rel="stylesheet">
<link href="{{ asset('public/frontend/css/responsive.css') }}" rel="stylesheet">
@yield('stylesheet')

</head>
<body>


    @yield('header')
    
    @yield('content')

    @include('partials._footer')

    @yield('scripts')

</body>
</html>