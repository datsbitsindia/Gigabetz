@extends('main')

@section('stylesheet')
<style>
div.card {
    border: 0;
    margin-bottom: 30px;
    margin-top: 30px;
    border-radius: 6px;
    color: rgba(0,0,0,.87);
    background: #fff;
    width: 100%;
    box-shadow: 0 2px 2px 0 rgba(0,0,0,.14), 0 3px 1px -2px rgba(0,0,0,.2), 0 1px 5px 0 rgba(0,0,0,.12);
}

div.card.card-plain {
    background: transparent;
    box-shadow: none;
}
div.card .card-header {
    border-radius: 3px;
    padding: 1rem 15px;
    margin-left: 15px;
    margin-right: 15px;
    margin-top: -30px;
    border: 0;
    background: linear-gradient(60deg,#eee,#bdbdbd);
}

.card-plain .card-header:not(.card-avatar) {
    margin-left: 0;
    margin-right: 0;
}

.div.card .card-body{
    padding: 15px 30px;
}

div.card .card-header-primary {
    background: linear-gradient(60deg,#333,#777);
    box-shadow: 0 5px 20px 0 rgba(0,0,0,.2), 0 13px 24px -11px rgba(51,51,51,.6);
}

div.card .card-header-danger {
    background: linear-gradient(60deg,#ef5350,#d32f2f);
    box-shadow: 0 5px 20px 0 rgba(0,0,0,.2), 0 13px 24px -11px rgba(244,67,54,.6);
}


.card-nav-tabs .card-header {
    margin-top: -30px!important;
}

.card .card-header .nav-tabs {
    padding: 0;
}

.nav-tabs {
    border: 0;
    border-radius: 3px;
    padding: 0 15px;
}

.nav {
    display: flex;
    flex-wrap: wrap;
    padding-left: 0;
    margin-bottom: 0;
    list-style: none;
}

.nav-tabs .nav-item {
    margin-bottom: -1px;
}

.nav-tabs .nav-item .nav-link.active {
    background-color: hsla(0,0%,100%,.2);
    transition: background-color .3s .2s;
}

.nav-tabs .nav-item .nav-link{
    border: 0!important;
    color: #fff!important;
    font-weight: 500;
}

.nav-tabs .nav-item .nav-link {
    color: #fff;
    border: 0;
    margin: 0;
    border-radius: 3px;
    line-height: 24px;
    text-transform: uppercase;
    font-size: 12px;
    padding: 10px 15px;
    background-color: transparent;
    transition: background-color .3s 0s;
}

.nav-link{
    display: block;
}

.nav-tabs .nav-item .material-icons {
    margin: -1px 5px 0 0;
    vertical-align: middle;
}
.popup{
    cursor: pointer;
}
</style>
@stop

@section('title')
HOME
@stop

@section('header')
@include('partials._header')
@stop

@section('content')

        <div class="col-md-12 ml-sm-auto col-lg-12 page-height">
            <div class="all-page-box">
                <div class="all-page-breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">cricket</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Bangabandhu T20 Cup</li>
                        </ol>
                    </nav>
                </div>
                @if(session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                @endif
                
                @if(session()->has('error'))
                    <div class="alert alert-danger">
                        {{ session()->get('error') }}
                    </div>
                @endif
                <div class="ch-table">
                    <!-- Tabs with icons on Card -->
                    <div class="card card-nav-tabs">
                        <div class="card-header card-header-primary">
                            <!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
                            <div class="nav-tabs-navigation">
                                <div class="nav-tabs-wrapper">
                                    <ul class="nav nav-tabs" data-tabs="tabs">
                                        <li class="nav-item">
                                            <a class="nav-link <?php if($id == 3){ echo "active"; } ?>" href="{{ route('inplay',3) }}">
                                                <i class="fa fa-cricket"></i>
                                                Cricket
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link <?php if($id == 1){ echo "active"; } ?>" href="{{ route('inplay',1) }}">
                                                <i class="material-icons"></i>
                                                Soccer
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link <?php if($id == 13){ echo "active"; } ?>" href="{{ route('inplay',13) }}">
                                                <i class="material-icons"></i>
                                                Tennis
                                            </a>
        
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-body ">
                            <div class="tab-content text-center">
                                <div class="tab-pane active" id="profile">
                                    <table class="table">
                                        <thead>
                                          <?php
                                          
                                          
                                          if(!empty($data)){
                                              
                                               //echo "<pre>";print_r($data);
                                               //die();
                                          ?>  
                                            <tr>
                                                <th class="align-middle"></th>
                                                <th class="align-middle"></th>
                                                <th class="align-middle">1</th>
                                              
                                                <th class="align-middle">x</th>
                                               
                                                <th class="align-middle">2</th>
                                            </tr>
                                        </thead>
                                        <?php } ?>
                                        <tbody>
                                          <?php
                                          function display($id,$val,$index){
                                               
                                               if($id == 3){ 
                                               $arr2 = explode(',',$val['ss']);  
                                               if(!empty($arr2)){  
                                                   if(isset($arr2[$index])) { 
                                                   return $arr2[$index];
                                                   } 
                                               } 
                                               
                                               }else if($id == 13){ 
                                                   $arr2 = explode(',',$val['ss']);  
                                                   if(!empty($arr2)){  
                                                       if(isset($arr2[$index])) { 
                                                       return $arr2[$index];
                                                       } 
                                                   } 
                                               
                                               }else if($id == 1){ 
                                                   
                                                   $arr2 = explode('-',$val['ss']);  
                                                   if(!empty($arr2)){  
                                                       if(isset($arr2[$index])) { 
                                                       return $arr2[$index];
                                                       } 
                                                   } 
                                               
                                               }else{
                                                   return '';
                                               }
                                          }
                                          
                                          function calculate($vv){
                                                if($vv != ""){
                                                $mlogin = explode('/',$vv);
                                                if($mlogin[1] != "" && $mlogin[1] != 0 && $mlogin[0] != "" && $mlogin[0] != 0){
                                                    //$rlogin = number_format($rlogin,2);
                                                    //$rlogin = (float)number_format($mlogin, 2, '.', '');
                                                    //$rlogin = number_format($rlogin, 2, '.', '');  
                                                    //$rlogin = sprintf("%01.2f", $rlogin);
                                                    $rlogin = ($mlogin[0]/$mlogin[1]);
                                                    $rlogin = bcdiv($rlogin, 1, 2);
                                                    return ($rlogin + 1);
                                                    //return $mlogin[0]." ".$mlogin[1];
                                                }else{
                                                    return " ";
                                                }
                                                }else{
                                                    return '';
                                                }
                                          }
                                          if(!empty($data)){ 
                                            $token = '97205-QBhTyEQKRoffkC';
                                            foreach($data as $k => $val){
                                                
                                               $pageresults = file_get_contents('https://api.b365api.com/v1/bet365/event?token='.$token.'&FI='.$val['id']);
                                               $arrjson =  json_decode($pageresults,true);
                                               
                                               //echo "<pre>";print_r($arrjson);die();
                                               
                                               if($arrjson['success'] == 1){
                                                   
                                                   if($id == 13){
                                                       
                                                      //$key1 = array_search('To Win', array_column($arrjson['results'][0], 'NA'));
                                                      $userdb = $arrjson['results'][0];
                                                      //$keys = array_keys(array_combine(array_keys($userdb), array_column($userdb, 'NA')),'To Win');
                                                      //echo "<pre>"; print_r($arrjson['results'][0]);
                                                      
                                                      $getkey = 0;
                                                      $usertype="MG";
                                                      $servicename="To Win";
                                                      $output = array_filter($userdb, function($value, $key)use(&$getkey,$usertype,$servicename){
                                                            if($value['type'] == $usertype && $value['NA'] == $servicename){
                                                             //echo sprintf("%s => %s\n", $key, $value['IT']);
                                                             //$total_t += $value['service_total'];
                                                             $getkey = $key; 
                                                            }
                                                        }, ARRAY_FILTER_USE_BOTH);
                                                        
                                                      //print_r($arrjson['results'][0][$getkey]);
                                                      //echo "sss ".$getkey;die();
                                                      $ma = 0;
                                                      
                                                      $value1 = "";
                                                      $value2 = "";
                                                      $value3 = "";
                                                      $betid2 = ""; 
                                                      foreach($userdb as $tak => $taval){
                                                          if($tak > $getkey){
                                        
                                                              if($taval['type'] == 'MA'){
                                                                 $ma++; 
                                                                 if($ma == 2){
                                                                      $val1key = $tak + 1;
                                                                      $value1 = $arrjson['results'][0][$val1key]['OD'];
                                                                      $betid1 = isset($arrjson['results'][0][$val1key]['OD']) ? $arrjson['results'][0][$val1key]['ID'] : '';
                                                                      $mgkey = $val1key-2;
                                                                      $mgvalue = $arrjson['results'][0][$mgkey]['NA'];
                                                                  }
                                                                  
                                                                  if($ma == 3){
                                                                      $val1key = $tak + 1;
                                                                      $value3 = $arrjson['results'][0][$val1key]['OD'];
                                                                      $betid3 = isset($arrjson['results'][0][$val1key]['OD']) ? $arrjson['results'][0][$val1key]['ID'] : '';
                                                                      //if (array_key_exists("Volvo",$a)){
                                                                      
                                                                      //}
                                                                      break;
                                                                  }
                                                              }
                                                              
                                                              
                                                          }
                                                          
                                                      }
                                                      
                                                      
                                                   }else{
                                                       
                                                      $key = array_search('PA', array_column($arrjson['results'][0], 'type'));
                                                     //print_r($key);
                                                      
                                                      $value1 = isset($arrjson['results'][0][$key]['OD']) ? $arrjson['results'][0][$key]['OD'] : '';
                                                      $betid1 = isset($arrjson['results'][0][$key]['OD']) ? $arrjson['results'][0][$key]['ID'] : '';
                                                      $mgkey = $key-2;
                                                      $mgvalue = $arrjson['results'][0][$mgkey]['NA'];
                                                      
                                                      $key = $key + 1;
                                                     
                                                      $value2 = isset($arrjson['results'][0][$key]['OD']) ? $arrjson['results'][0][$key]['OD'] : '';
                                                      $betid2 = isset($arrjson['results'][0][$key]['OD']) ? $arrjson['results'][0][$key]['ID'] : '';
                                                      //$mgkey = $key-3;
                                                      //$mgvalue2 = $arrjson['results'][0][$mgkey]['NA'];
                                                      
                                                      $key = $key + 1;
                                                      $value3 = "";
                                                      $betid3 = "";
                                                      //$mgvalue3 = "";
                                                      if(isset($arrjson['results'][0][$key]['OD'])){
                                                      $value3 = $arrjson['results'][0][$key]['OD'];
                                                      $betid3 = $arrjson['results'][0][$key]['ID'];
                                                      //$mgkey = $key-4;
                                                      //$mgvalue3 = $arrjson['results'][0][$mgkey]['NA'];
                                                      }else{
                                                          $value3 = $value2;
                                                          $betid3 = $betid2;
                                                          //$mgvalue3 = $mgvalue2;
                                                          $value2 = "";
                                                          $betid2 = "";
                                                          //$mgvalue2 = "";
                                                      }
                                                      //echo $value1." ".$value2." ".$value3;die();
                                                      
                                                  
                                                   }
                                               }
                                               //die();
                                               
                                               $rid = $val['id'];
                                               $eventname = "";
                                              if(isset($arrjson['results'][0][0]['NA'])){
                                              $eventname = $arrjson['results'][0][0]['NA'];
                                              }
                                          ?>  
                                          <tr>
                                                <td class="align-left text-left" colspan="5"> <span><?php echo $val['league']['name']; ?></span></td>
                                                
                                            </tr>
                                            <tr>
                                                <td class="align-middle"><a href="#"><?php echo $val['id']; ?></a></td>
                                                <td class="align-middle">
                                                    <a href="{{ route('details',$rid) }}">
                                                        <p class="d-flex justify-content-between mb-0">
                                                            <span><?php echo $val['home']['name']; ?></span>
                                                            <span><?php echo display($id,$val,0); ?></span>
                                                        </p>
                                                        <p class="d-flex justify-content-between mb-0">
                                                            <span><?php echo $val['away']['name']; ?></span>
                                                            <span><?php echo display($id,$val,1); ?></span>
                                                        </p>
                                                    </a>
                                                </td>
                                                <td class="align-middle">
                                                <span class="popup" datasport="{{ $id }}" datafid="{{ $val['id'] }}" databetid="{{ $betid1 }}" dataodval="{{ $value1 }}" dataodcalval="{{ calculate($value1) }}" dataeventname="{{ $eventname }}" mgvalue="{{ $mgvalue }}">
                                                <?php 
                                                //echo $value1." ";
                                                echo calculate($value1);
                                                
                                                ?>
                                                </span>
                                                
                                                </td>
                                                 
                                                <td class="align-middle">
                                                 <span class="popup" datasport="{{ $id }}" datafid="{{ $val['id'] }}" databetid="{{ $betid2 }}" dataodval="{{ $value2 }}" dataodcalval="{{ calculate($value2) }}" dataeventname="{{ $eventname }}"  mgvalue="{{ $mgvalue }}">
                                                
                                                <?php 
                                                
                                                echo calculate($value2);
                                               
                                                ?>
                                                </span>
                                                </td>
                                                
                                                
                                                <td class="align-middle">
                                                <span class="popup" datasport="{{ $id }}" datafid="{{ $val['id'] }}" databetid="{{ $betid3 }}" dataodval="{{ $value3 }}" dataodcalval="{{ calculate($value3) }}" dataeventname="{{ $eventname }}"  mgvalue="{{ $mgvalue }}">
                                                
                                                <?php 
                                                 echo calculate($value3);
                                                ?>
                                                </span>
                                                </td>
                                            </tr>
                                            
                                          <?php } }else{ ?>
                                          <tr>
                                            <td class="align-middle"><a href="#">No record found</a></td>
                                          </tr>
                                          <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                    <!-- End Tabs with icons on Card -->
                </div>
                
            </div>
        </div>

@endsection

@section('scripts')
<script>
$(document).ready(function() {
    $('body').bootstrapMaterialDesign();
});

$("body").on('click','.popup',function(e){
    var datasport = $(this).attr('datasport');
    var datafid = $(this).attr('datafid');
    var databetid = $(this).attr('databetid');
    var dataodval = $(this).attr('dataodval');
    var dataodcalval = $(this).attr('dataodcalval');
    var dataeventname = $(this).attr('dataeventname');
    var mgvalue = $(this).attr('mgvalue');
    
    
    
    $("#datasport").val(datasport);
    $("#datafid").val(datafid);
    $("#databetid").val(databetid);
    $("#dataodval").val(dataodval);
    $("#dataodcalval").val(dataodcalval);
    $("#dataeventname").val(dataeventname);
    $("#mgvalue").val(mgvalue);
    
    $("#currentbetval").val(dataodcalval);
    //$(".popupusername").text(datauser);
    //$("#Boltonline1").val(point);
    //$("#UserID").val(userid);
    //$("#Points,#Boltonline2,#TransctionCode").val('');
    $('#BetPrice').modal('show');
    //$('#myModal').modal('hide');
});

$("body").on('click','.submit_bitpopup',function(e)
{
    e.preventDefault();
    
    var datasport = $('#datasport').val();
    var datafid = $('#datafid').val();
    var databetid = $('#databetid').val();
    var dataodval = $('#dataodval').val();
    var dataodcalval = $('#dataodcalval').val();
    var dataeventname = $('#dataeventname').val();
    var mgvalue = $('#mgvalue').val();
    
    
    var betamt = $('#betamt').val();
    //var UserID = $("#UserID").val();
    if(betamt != ""){
      $.ajax({
        'type': 'POST',
        url: {!! json_encode(url('submitbitpopup')) !!},
        dataType: "json",
        'data': {"_token": "{{ csrf_token() }}",SportID: datasport,FIID: datafid,BetID: databetid,BetAmount: betamt,ODValue: dataodval,ODCalcValue: dataodcalval,EventName: dataeventname,MarketGroup: mgvalue},
        'cache': false,
        'success': function (response)
        {
        //   if(response.status == 'status'){
             
        //   }else{
        //      $("#submit_gp_msg").text(response.message); 
        //   }
        
        
         $("#submit_bitpopup_msg").text(response.message);
          if(response.status != "error"){
               window.location.reload();
          }
        }
        });
    }else{
        alert("Please enter Bet Amount!");
    }
});

$("body").on('click','.setpopval',function(e)
{
    var tval = $(this).text();
    $("#betamt").val(tval);
});
</script>
@stop