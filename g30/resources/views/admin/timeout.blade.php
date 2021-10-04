@extends('admin.main')

@section('stylesheet')
<style>
  .countdown2 .countdowns{ display: inline-block; margin:0; text-align: center; }
  .countdown2 .countdowns div{ display: inline-block; padding:15px; margin:0 20px 10px;}
  .countdown2 .countdowns div:first-child{ margin-left:0;}
  .countdown2 .countdowns div:last-child{ margin-right:0;}
  .countdown2 span.time{ display: inline-block; line-height: inherit; }
  .countdown2 span.datename{ display: block; font-size:12px; letter-spacing: -0.2px; font-family: "Open Sans", "PT Sans", sans-serif; font-weight: 600; text-transform: capitalize; }
  .countdown span.dot{ vertical-align: super; font-family: "Open Sans", "PT Sans", sans-serif; font-weight: 400; }
  .countdown2.type-4 span.dot{ display: none; }
  .countdown2.type-4 .countdowns div{ padding:3px; margin-right: 3px; margin-left:3px;}
  .countdown2.type-4 span.datename{ display: inline-block; margin-left:5px; }
</style>
@stop 

@section('title')
Dashboard
@stop

@section('body')
page-header-fixed page-sidebar-closed-hide-logo page-content-white
@stop

@section('header')
@include('admin.partials._header')
@stop

@section('content')

    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content">
            <!-- BEGIN PAGE HEADER-->
            
            <!-- BEGIN PAGE BAR -->
            <div class="page-bar">
                <ul class="page-breadcrumb">
                    <li>
                        <a href="{{route('admindashboard')}}">Home</a>
                        <i class="fa fa-circle"></i>
                    </li>
                    <li>
                        <span>Dashboard</span>
                    </li>
                </ul>
            </div>
            <!-- END PAGE BAR -->
            <!-- BEGIN PAGE TITLE-->
            <h1 class="page-title"> Dashboard
                <small>Page</small>
            </h1>
            <!-- END PAGE TITLE-->
            <!-- END PAGE HEADER-->
            <div class="row">
                <div class="col-md-12">
                    <div id="idle_msg"></div>
                    <?php
                    //$dt = date('Y-m-d');
                    //$date=date_create($dt);
                    //$tdate = date_format($date,"m/d/Y H:i:s A");
                    date_default_timezone_set('Asia/Kolkata');
                    $date = date("Y-m-d H:i:s");
            
                    //$futureDate = strtotime('+20 minutes', strtotime($date));
                    //$formatDate = date("Y-m-d H:i:s A", $futureDate);

                    $formatDate = DateTime::createFromFormat('Y-m-d H:i:s', $date)->modify('+1 minutes')->format('Y-m-d H:i:s');
                     ?>
                     <div class="countdown2 t-center" data-time="{{$formatDate}}"></div>
                </div>
            </div>
        </div>
        <!-- END CONTENT BODY -->
    </div>
    <!-- END CONTENT -->
</div>
    <div class="modal fade" id="idle-timeout-dialog" data-backdrop="static">
                            <div class="modal-dialog modal-small">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Your session is about to expire.</h4>
                                    </div>
                                    <div class="modal-body">
                                        <p>
                                            <i class="fa fa-warning font-red"></i> You session will be locked in
                                            <span id="idle-timeout-counter"></span> seconds.</p>
                                        <p> Do you want to continue your session? </p>
                                    </div>
                                    <div class="modal-footer">
                                        <button id="idle-timeout-dialog-logout" type="button" class="btn dark btn-outline sbold uppercase">No, Logout</button>
                                        <button id="idle-timeout-dialog-keepalive" type="button" class="btn green btn-outline sbold uppercase" data-dismiss="modal">Yes, Keep Working</button>
                                    </div>
                                </div>
                            </div>
                        </div>
@endsection

@section('footer')
@include('admin.partials._footer')
@stop

@section('scripts')
<script>
   /* function startTimer(duration, display) {
        var timer = duration, minutes, seconds;
        setInterval(function () {
            minutes = parseInt(timer / 60, 10)
            seconds = parseInt(timer % 60, 10);

            minutes = minutes < 10 ? "0" + minutes : minutes;
            seconds = seconds < 10 ? "0" + seconds : seconds;

            display.textContent = minutes + ":" + seconds;

            if (--timer < 0) {
                timer = duration;
            }

        }, 1000);
    }

window.onload = function () {
    var fiveMinutes = 60 * 1,
        display = document.querySelector('.countdown2');
    startTimer(fiveMinutes, display);
};*/

//Countdowns
    CountDownTimer();
    //Countdown Scripts
    //var distance = '';
    function CountDownTimer(){
        var  _second = 1000, _minute = _second * 60, _hour = _minute * 60, _day = _hour * 24, _year = _day * 365, timer,
            cls = $($(".countdown2"));
        function showRemaining() {
            
            var $this = $(".countdown2"),
            Dtimer = $(".countdown2").attr("data-time");
            var now = new Date();
            var end = end = new Date(Dtimer);
            var distance = end - now;
            
            console.log(distance);
            //Finished Timer
            if (distance < 0) {
                clearInterval(timer);
                $($this).html('EXPIRED');
                return;
            }
            //Math for times
            var years = Math.floor(distance / _year),
                days = Math.floor((distance % _year) / _day),
                hours = Math.floor((distance % _day) / _hour),
                minutes = Math.floor((distance % _hour) / _minute),
                seconds = Math.floor((distance % _minute) / _second);
           if (minutes < 1) {     
            if (seconds < 50) {
              
               var warning = '<div class="alert alert-warning mb-5"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Warning!</strong> You have left '+seconds+' seconds <a href="javascript:void(0)" onclick="add_minute()">Keep Going</a></div>';
               $("#idle_msg").html('');
               $("#idle_msg").html(warning);
            }  
            }
            if (String(hours).length < 2){ hours = 0 + String(hours); }
            if (String(minutes).length < 2){ minutes = 0 + String(minutes); }
            if (String(seconds).length < 2){ seconds = 0 + String(seconds); }

            // var datestr =  '<div class="countdowns"><div class="year"><span class="time">' + years + '</span>' + '<span class="datename"> years</span>' + '</div><span class="dot">:</span>' +
            //                 '<div><span class="time">' + days + '</span>' + '<span class="datename"> days </span>' + '</div><span class="dot">:</span>' +
            //                 '<div><span class="time">' + hours + '</span>' + '<span class="datename"> hours </span>' + '</div><span class="dot">:</span>' +
            //                 '<div><span class="time">' + minutes + '</span>' + '<span class="datename"> minutes </span>' + '</div><span class="dot">:</span>' +
            //                 '<div><span class="time">' + seconds + '</span>' + '<span class="datename"> seconds </span></div></div>';
            var datestr =  '<div class="countdowns"><div class="year"><span class="time">' + years + '</span>' + '<span class="datename"> years</span>' + '</div><span class="dot">:</span>' +             
                            '<div><span class="time">' + minutes + '</span>' + '<span class="datename"> minutes </span>' + '</div><span class="dot">:</span>' +
                            '<div><span class="time">' + seconds + '</span>' + '<span class="datename"> seconds </span></div></div>';                
            $($this).html(datestr);
            if (years < 1) {$($this).find(".year, .year + .dot").hide();}
        } showRemaining(), timer = setInterval(showRemaining, 1000);
    }

    var setminute = 20; //set minutes
    var events  = 'mousemove keydown DOMMouseScroll mousewheel mousedown';
    $( "body" ).bind( events, function() {
     add_minute();
    });
    function add_minute(){
        var currentdate = new Date(); 
        currentdate.setMinutes(currentdate.getMinutes() + setminute);
        var datetime = currentdate.getFullYear() + "-"
                + (currentdate.getMonth()+1)  + "-" 
                + currentdate.getDate() + " "  
                + currentdate.getHours() + ":"  
                + currentdate.getMinutes() + ":" 
                + currentdate.getSeconds();
                //alert(datetime);
          $("#idle_msg").html('');
         $(".countdown2").attr('data-time',datetime);
    }
</script>
@stop