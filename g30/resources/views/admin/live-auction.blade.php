@section('stylesheet')
<style>
  .countdown2 .countdowns{ display: inline-block; margin:0; text-align: center; }
  .countdown2 .countdowns div{ display: inline-block; padding:0px; margin:0 15px 0px;}
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

    
<div class="row">
    <div class="col-md-12">
        <div class="portlet light">
            <div class="portlet-body">
                <div class="table-responsive">
                    <?php $j=0; $check_arr = array(); $check_arr2 = array(); $prev=''; ?>
                    @foreach($data as $k => $val) 
                   
                    <?php $is_table = 0; ?>
                    @if(!in_array($val->auction_id, $check_arr))
                    <?php $check_arr[] = $val->auction_id; $is_table = 1; ?>
                    @else
                    <?php $is_table = 0; ?>
                    @endif 
                    @if($is_table == 1) 
                      @php 
                      $sdt = $val->bid_end_auction.' '.$val->bid_end_time;
                      $date=date_create($sdt);
                      $enddate = date_format($date,"m/d/Y h:i A");
                      @endphp
                    <table class="table table-bordered">
                        <thead class="flip-content">
                            <tr class="bg-grey-salsa auction-main">
                                <th colspan="2" width="65%"><h4 class="no-my py-10 bold">{{$val->auction_id}} . {{$val->auction_no}} | {{$val->description}}</h4></th>
                                <th colspan="2" width="25%" class="v-middle">
                                  <div class="countdown2 t-center timer_{{$val->auction_id}}" data-time="{{$enddate}}" ></div>
                                </th>
                                <th width="10%" class="v-middle">
                                  <div class="input-group">
                                      <input class="form-control" type="text" id="minute_{{$val->auction_id}}">
                                      <span class="input-group-btn">
                                          <button class="btn btn-primary settimer" data="{{$val->auction_id}}">Set</button>
                                      </span>
                                  </div>
                                </th>
                            </tr>
                       
                            <tr class="bg-default auction-lot">
                                <th colspan="2">Description</th>
                                <th class="v-middle">Start Amt</th>
                                <th class="v-middle">Current Amt</th>
                                <th class="v-middle">Increment Amt</th>                                                    
                           </tr>                        
                        </thead>
                        <tbody>
                         @endif 
                          <tr class="bg-default cursor-pointer auction-lot" data="{{$val->auction_id}}" data-lot="{{$val->la_sr_no}}">
                                <td colspan="2"><i class="fa fa-plus-square"></i> {{$val->la_sr_no}}. {{$val->la_sr_remarks}}</td>
                                <td class="v-middle">{{$val->la_starting_amount}}</td>
                                <td class="v-middle"><span id="current_{{$val->auction_id}}_{{$val->la_sr_no}}">{{$val->amount}}</span></td>
                                <td class="v-middle">{{$val->la_incremental_amt}}</td>                                                    
                            </tr>

                           
                            
                     @if($is_table == 0)      
                        </tbody>
                    </table>
                    @endif                                              
                     @endforeach
                </div>
            </div>
        </div> 
                  
    </div>
</div>
        

<div class="modal fade" id="bid_history" tabindex="-1" role="basic" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title" id="bid_user_history_email"></h4>
            </div>
            <div class="modal-body"> 
              <div class="table-responsive">
                <table class="table table-bordered" id="bid_history_table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Bid Date</th>
                            <th>Bid Amount</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn dark btn-outline" data-dismiss="modal">Close</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
    

<script type="text/javascript">
    //instantiate a Pusher object with our Credential's key
      var pusher = new Pusher('146ba666d2a036d03de9', {
          cluster: 'ap2',
          encrypted: true
      });
      //Subscribe to the channel we specified in our Laravel Event
      var channel = pusher.subscribe('activeusers');
      //Bind a function to a Event (the full Laravel class)
      channel.bind('App\\Events\\ActiveUsers', addMessage);

      function addMessage(data) {
        console.log(data);
        
        //var listItem = $("<li class='list-group-item'></li>");
        //listItem.html('Hello Pusher!');
        //$('#messages').prepend(listItem); 
        //$(".laposition_"+data.message.auction_id+"_"+data.message.la_sr_no).text(' ');
        $("#user_amount_"+data.message.auction_id+"_"+data.message.la_sr_no+"_"+data.message.enter_user_id).text('');
        $("#user_amount_"+data.message.auction_id+"_"+data.message.la_sr_no+"_"+data.message.enter_user_id).text(data.message.user_amount);
        $(".laposition_"+data.message.auction_id+"_"+data.message.la_sr_no).text(' ');

        if(data.message.is_new == 1){
          var append_user = '<tr class="utr_'+data.message.auction_id+'_'+data.message.la_sr_no+'">';
                  append_user +='<td class="v-middle">#</td>';
                  append_user +='<td class="v-middle">'+data.message.email+'</td>';
                  append_user +='<td class="v-middle"><span id="laposition_'+data.message.auction_id+'_'+data.message.la_sr_no+'_'+data.message.enter_user_id+'"></span></td>';
                  append_user +='<td class="v-middle"><span id="user_amount_'+data.message.auction_id+'_'+data.message.la_sr_no+'_'+data.message.enter_user_id+'">'+data.message.user_amount+'</span></td>';
                  append_user +='<td class="v-middle">';
                      append_user +='<a href="#" data="'+data.message.enter_user_id+'" data-aid="'+data.message.auction_id+'" data-lid="'+data.message.la_sr_no+'" class="btn btn-info user_history">History</a>';
                  append_user +='</td>';
              append_user +='</tr>';
           $(".utable_"+data.message.auction_id+"_"+data.message.la_sr_no).append(append_user);   
        }

        $.each(data.message.users, function( index, value ) {
          //alert( index + ": " + value );   
          if(value == 1){
            $("#current_"+data.message.auction_id+"_"+data.message.la_sr_no).text(data.message.max_amount);
          }
          $('#laposition_'+data.message.auction_id+'_'+data.message.la_sr_no+'_'+index).text(' ');
          $('#laposition_'+data.message.auction_id+'_'+data.message.la_sr_no+'_'+index).text('H'+value);
        });
      }

      //set timer
      var channeltime = pusher.subscribe('settimer');
       channeltime.bind('App\\Events\\ChangeTimer', addTime);
       function addTime(data) {
        //console.log(data);
            $.each(data.time.timer, function( index, value ) {
            $(".timer_"+index).attr('data-time',value);
            });
       }

       //run timer time
        if ($('.countdown2').length > 0){
            $(".countdown2").each(function(){
                var $this = $(this),
                    Dtimer = $(this).attr("data-time");
                    console.log(Dtimer);

                //Countdowns
                CountDownTimer();
                //Countdown Scripts
                function CountDownTimer(){
                    var  _second = 1000, _minute = _second * 60, _hour = _minute * 60, _day = _hour * 24, _year = _day * 365, timer,
                        cls = $($this);
                    function showRemaining() {
                        $(".countdown2").each(function(){
                          var $this = $(this),
                          Dtimer = $(this).attr("data-time");
                        var now = new Date();
                        var end = end = new Date(Dtimer);
                        var distance = end - now;
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

                        if (String(hours).length < 2){ hours = 0 + String(hours); }
                        if (String(minutes).length < 2){ minutes = 0 + String(minutes); }
                        if (String(seconds).length < 2){ seconds = 0 + String(seconds); }

                        var datestr =  '<div class="countdowns"><div class="year"><span class="time">' + years + '</span>' + '<span class="datename"> years</span>' + '</div><span class="dot">:</span>' +
                                        '<div><span class="time">' + days + '</span>' + '<span class="datename"> days </span>' + '</div><span class="dot">:</span>' +
                                        '<div><span class="time">' + hours + '</span>' + '<span class="datename"> hours </span>' + '</div><span class="dot">:</span>' +
                                        '<div><span class="time">' + minutes + '</span>' + '<span class="datename"> minutes </span>' + '</div><span class="dot">:</span>' +
                                        '<div><span class="time">' + seconds + '</span>' + '<span class="datename"> seconds </span></div></div>';
                        $($this).html(datestr);
                        if (years < 1) {$($this).find(".year, .year + .dot").hide();}

                      });
                    } showRemaining(), timer = setInterval(showRemaining, 1000);
                }

            });
         }

    //set timer auction     
    $('body').on('click', '.settimer', function () {
     var id = $(this).attr('data');
     var value = $(".timer_"+id).attr('data-time');

     var min = $("#minute_"+id).val();
     min = parseInt(min);
     var now = new Date(value);
     now.setMinutes(now.getMinutes() + min);

     date = now.toLocaleDateString();
     time = now.toLocaleTimeString().replace(/(.*)\D\d+/, '$1');
      //alert(now);
      //alert(time);

     //$(".timer_"+id).attr('data-time',Dtimer);
        timerreset(id,date,time);

    });

    function timerreset(id,date,time){
        $.ajax({
            url: {!! json_encode(url('reset_auction_time')) !!},
            //dataType: "json",
            type: "POST",
            //data: {"_token": "{{ csrf_token() }}",message:msg},
            data: {"_token": "{{ csrf_token() }}",id:id,date:date,time:time},
            success: function (data) {                      
              //$(".laposition_"+la_id).text('0');

            }
        }); 
    }

    // get user position list 
    
    $('body').on('click', '.auction-lot', function () {
      var ac_id = $(this).attr('data');
      var lot_id = $(this).attr('data-lot');
      var ths = $(this);
      $.ajax({
            url: {!! json_encode(url('getuserpositionlist')) !!},
            //dataType: "json",
            type: "POST",
            //data: {"_token": "{{ csrf_token() }}",message:msg},
            data: {"_token": "{{ csrf_token() }}",ac_id:ac_id,lot_id:lot_id},
            success: function (data) {                      
              //$(".laposition_"+la_id).text('0');  
             $(".uth_"+ac_id+"_"+lot_id).remove();
             $(".utr_"+ac_id+"_"+lot_id).remove();
             $(".utable_"+ac_id+"_"+lot_id).remove();
              ths.closest('tr').after(data);
            }
        }); 
    });  

    $('body').on('click', '.user_history', function () {
    var user_id = $(this).attr('data');
    var auction_id = $(this).attr('data-aid');
    var lot_id = $(this).attr('data-lid');
    var email = $(this).parents("tr:first").find("td:nth-child(2)").text();
        $.ajax({
            url: {!! json_encode(url('getuser_bid_history')) !!},
            //dataType: "json",
            type: "POST",
            //data: {"_token": "{{ csrf_token() }}",message:msg},
            data: {"_token": "{{ csrf_token() }}",ac_id:auction_id,lot_id:lot_id,user:user_id},
            success: function (data) {                      
             //bid_user_history_email
            //bid_history_table
            $("#bid_user_history_email").text(email);
            $("#bid_history_table > tbody").html(data);
            $("#bid_history").modal('show');
            }
        }); 
      

    });
  </script>    