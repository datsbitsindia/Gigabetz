<?php $__env->startSection('stylesheet'); ?>
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
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title'); ?>
HOME
<?php $__env->stopSection(); ?>

<?php $__env->startSection('header'); ?>
<?php echo $__env->make('partials._header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

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
                <?php if(session()->has('success')): ?>
                    <div class="alert alert-success">
                        <?php echo e(session()->get('success')); ?>

                    </div>
                <?php endif; ?>
                
                <?php if(session()->has('error')): ?>
                    <div class="alert alert-danger">
                        <?php echo e(session()->get('error')); ?>

                    </div>
                <?php endif; ?>
                <div class="ch-table">
                    <!-- Tabs with icons on Card -->
                    <div class="card card-nav-tabs">
                        <div class="card-header card-header-primary">
                            <!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
                            <div class="nav-tabs-navigation">
                                
                            </div>
                        </div>
                        <div class="card-body ">
                            <div class="tab-content">
                                <div class="row">
                                   
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
                                                       
                                                        $inside = 1;
                                                    }
                                                    $checkMA = 0;
                                                ?>
                                                
                                                    <div class="col-md-12">
                                                        <div class="align-left text-left" style="margin-top:10px;"> <span style="font-weight:bold;"><?php echo $val['NA']; ?></span></div>
                                                        
                                                    </div>
                                                   
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
                                                
                                                     
                                               <?php    
                                                //}
                                               }else if($val['type'] == "PA" && $checkMA == 1){
                                                   $inside = 0;
                                               ?>
                                                    
                                                        <div class="col-md-4"><span>
                                                            
                                                            <?php 
                                                            if(isset($val['HD'])){  echo "<br>".$val['HD']; } 
                                                            if(isset($val['NA'])){  echo $val['NA']; } if(isset($val['OD'])){ echo " ".calculate($val['OD']); } ?></span>
                                                        </div>
                                                    
                                               <?php
                                               }else if($val['type'] == "MA" && !isset($val['CN'])){
                                               $checkMA = 0;
                                               ?>
                                                        <div class="col-md-4">
                                                            <span> 
                                                            <?php if(isset($val['NA'])){  echo $val['NA']; } ?>
                                                             <?php
                                                              $g=$k + 1;
                                                              while($data[0][$g]['type'] == "PA"){
                                                                  
                                                                 if(isset($data[0][$g]['NA'])){  echo "<br>".$data[0][$g]['NA']; } 
                                                                 if(isset($data[0][$g]['OD'])){ echo "<br>".calculate($data[0][$g]['OD']); }
                                                                  $g++;
                                                              }
                                                              $k=$g;
                                                             ?>
                                                            </span>
                                                            
                                                        </div>
                                                  
                                                <?php   
                                               }else{}
                                               
                                                
                                             
                                          ?>  
                                         
                                            
                                          <?php } }else{ ?>
                                         
                                          <?php } ?>
                                        
                                </div>
                               
                            </div>
                        </div>
                    </div>
                    <!-- End Tabs with icons on Card -->
                </div>
                
            </div>
        </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script>
$(document).ready(function() {
    $('body').bootstrapMaterialDesign();
});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/nationaltenders/public_html/crawling_tenders/g30/resources/views/details.blade.php ENDPATH**/ ?>