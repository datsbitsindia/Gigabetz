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
                                              
                                            //   $userdb = $data['results'][0];
                                            //   $usertype = "";
                                            //   $output = array_filter($userdb, function($value, $key)use(&$getkey,$usertype,$servicename){
                                            //         if($value['type'] == $usertype && $value['NA'] == $servicename){
                                            //          //echo sprintf("%s => %s\n", $key, $value['IT']);
                                            //          //$total_t += $value['service_total'];
                                            //          $getkey = $key; 
                                            //         }
                                            //     }, ARRAY_FILTER_USE_BOTH);
                                                        
                                            //echo "<pre>";print_r($data);die();
                                              $checkMA = 0;
                                              $inside = 1;
                                              
                                            foreach($data[0] as $k => $val){
                                                
                                                if($val['type'] == "MG"){ 
                                                    if($inside == 0){
                                                        echo '</tr>';
                                                        $inside = 1;
                                                    }
                                                    $checkMA = 0;
                                                ?>
                                                
                                                    <tr>
                                                        <td class="align-left text-left" colspan="5"> <span><?php echo $val['NA']; ?></span></td>
                                                        
                                                    </tr>
                                                   
                                               <?php
                                               }else if($val['type'] == "MA" && isset($val['CN'])){
                                                
                                                $checkMA = 1;
                                            //   if (array_key_exists("SU",$val)){
                                            //       if($val['SU'] == 1){
                                            //             $check = 1;
                                            //       }
                                            //   }
                                                //if($check == 0){
                                               ?>
                                                 <tr>
                                                     
                                               <?php    
                                                //}
                                               }else if($val['type'] == "PA" && $checkMA == 1){
                                                   $inside = 0;
                                               ?>
                                               
                                                        <td class="align-left text-left" colspan="5"> <span><?php if(isset($val['NA'])){  echo $val['NA']; } if(isset($val['OD'])){ echo " ".$val['OD']; } ?></span></td>
                                                        
                                                 
                                               <?php
                                               }else if($val['type'] == "MA" && !isset($val['CN'])){
                                               $checkMA = 1;
                                               ?>
                                                   <tr>
                                                <?php   
                                               }else{}
                                               
                                                
                                             
                                          ?>  
                                         
                                            
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
</script>
@stop