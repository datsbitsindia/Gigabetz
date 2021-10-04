<?php $__env->startSection('stylesheet'); ?>
<style>
.dataTables_wrapper {
    color: #fff;
}
.dataTables_wrapper .dataTables_length, .dataTables_wrapper .dataTables_filter, .dataTables_wrapper .dataTables_info, .dataTables_wrapper .dataTables_processing, .dataTables_wrapper .dataTables_paginate {
    color: #fff;
}
.dataTables_wrapper .dataTables_length select {
    color: #fff;
}
.dataTables_wrapper .dataTables_paginate .paginate_button.disabled, .dataTables_wrapper .dataTables_paginate .paginate_button.disabled:hover, .dataTables_wrapper .dataTables_paginate .paginate_button.disabled:active {
    color: #fff !important;
}

.stock-box .table tr td {
    color: #1d1c1b;
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
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">List of Users</li>
                        </ol>
                    </nav>
                </div>
                
                
                
                <div class="row stock-box">
					<div class="col-lg-12 mx-auto bg-black rounded">
					    <div class="d-flex justify-content-between align-items-center mb-3">
                            <h3 class="text-light">List of Users</h3>
                            <a href="<?php echo e(route('addusers')); ?>" class="btn btn-theme">Add User</a>
                        </div>
						<div class="table-responsive">
							<table class="table table-fixed table-dark" id="list_user">
								<thead>
									<tr>
                                        <th>User Name</th>
                                        <th>Credit Reference</th>
                                        <th>Balance</th>
        							    <th>Client (P/L)</th>
        							    <th>Exposure</th>
        							    <th>Available Balance</th>
        							    <th>U St</th>
        							    <th>B St</th>
        							    <th>Cricket</th>
        							    <th>Soccer</th>
        							    <th>Tennis</th>
        							    <th>Casino</th>
        							    <th>Exposure Limit</th>
        							    <th>Default %</th>
        							    <th>Account Type</th>
        							    <th>Actions</th>
                                    </tr>
								</thead>
								<tbody>
    							    <?php if(!empty($data)){  
    							
    							    foreach($data as $k => $val){
    							       //echo "<pre>"; print_r($val);
    							        //[Cricket] => 
                                        //[Soccer] => 
                                        //[Tennis] => 
                                        //[Casino] => 
                                        //[DefaultPercent] => 
                                        //[Active] => 1
                                        //[BetStatus] => 
    							    ?>
    							    <tr>
                                        <td><a href="#"><?php echo e($val['UserName']); ?></a></td>
                                        <td><?php echo e($val['CreditReference']); ?></td>
                                        <td><?php echo e($val['UserBalance']); ?></td>
                                        <td><?php echo e($val['UserID']); ?></td>
                                        <td><?php echo e($val['Exposure']); ?></td>
                                        <td><?php echo e($val['AvailableBalance']); ?></td>
                                        <td><?php echo e($val['UST']); ?></td>
                                        <td><?php echo e($val['BST']); ?></td>
                                        <td><?php if($val['Cricket'] == 1){ echo '<i class="fa fa-check text-success"></i>'; } else { echo ''; } ?></td>
                                        <td><?php if($val['Soccer'] == 1){ echo '<i class="fa fa-check text-success"></i>'; } else { echo ''; } ?></td>
                                        <td><?php if($val['Tennis'] == 1){ echo '<i class="fa fa-check text-success"></i>'; } else { echo ''; } ?></td>
                                        <td><?php if($val['Casino'] == 1){ echo '<i class="fa fa-check text-success"></i>'; } else { echo ''; } ?></td>
                                        <td><?php echo e($val['ExposureLimit']); ?></td>
                                        <td><?php echo e($val['DefaultPercent']); ?></td>
                                        <td><?php echo e($val['RoleName']); ?></td>
                                        <td nowrap> 
                                            <button class="btn btn-success btn-sm generatePoint" data-point="<?php echo e($val['UserBalance']); ?>" data-user="<?php echo e($val['UserName']); ?>" data="<?php echo e($val['UserID']); ?>">G</button> 
                                            <button class="btn btn-dark btn-sm Deposit" data-point="<?php echo e($val['UserBalance']); ?>" data-user="<?php echo e($val['UserName']); ?>" data="<?php echo e($val['UserID']); ?>">D</button> 
                                            <button class="btn btn-dark btn-sm WithdrawRequest" data-point="<?php echo e($val['UserBalance']); ?>" data-user="<?php echo e($val['UserName']); ?>" data="<?php echo e($val['UserID']); ?>">W</button> 
                                            <button class="btn btn-dark btn-sm MinMaxOdds" data-user="<?php echo e($val['UserName']); ?>" data="<?php echo e($val['UserID']); ?>">O</button> 
                                            <button class="btn btn-dark btn-sm ExposureLimit" datael="<?php echo e($val['ExposureLimit']); ?>"  data-user="<?php echo e($val['UserName']); ?>" data="<?php echo e($val['UserID']); ?>">L</button> 
                                            <button class="btn btn-dark btn-sm CreditReference" datacf="<?php echo e($val['CreditReference']); ?>" data-user="<?php echo e($val['UserName']); ?>" data="<?php echo e($val['UserID']); ?>">C</button> 
                                            <button class="btn btn-dark btn-sm UserPassword"  data-user="<?php echo e($val['UserName']); ?>" data="<?php echo e($val['UserID']); ?>">CP</button>
                                            <button class="btn btn-dark btn-sm changeStatus"  datauseractive="<?php echo e($val['Active']); ?>"  databetactive="<?php echo e($val['BetStatus']); ?>" data-user="<?php echo e($val['UserName']); ?>" data="<?php echo e($val['UserID']); ?>">S</button>
                                            <button class="btn btn-dark btn-sm superMasterAccess"  dataCricket="<?php echo e($val['Cricket']); ?>"  dataSoccer="<?php echo e($val['Soccer']); ?>" dataTennis="<?php echo e($val['Tennis']); ?>" dataCasino="<?php echo e($val['Casino']); ?>" data-user="<?php echo e($val['UserName']); ?>" data="<?php echo e($val['UserID']); ?>">Access</button>
                                        </td>
                                    </tr>
    							    <?php
    							    }
    							    }else{ 
    							    ?>
                                    <tr>
                                        <td>No Record found!</td>
                                    </tr>
                                    <?php } ?>
                                
                                </tbody>
							</table>
						</div><!-- End -->
					</div>
				</div>
                
            </div>
        </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script>


$(document).ready( function () {
    $('#list_user').DataTable();
});

$( "#Points" ).keyup(function() {
    var Boltonline1 = $("#Boltonline1").val();
    var Points = $("#Points").val();
    if(Boltonline1 == ""){
        Boltonline1 = 0;
    }
     if(Points == ""){
        Points = 0;
    }
    var total = parseFloat(Boltonline1) + parseFloat(Points);
    //alert(total);
    //$("#Points").val(total);
    $("#Boltonline2").val(total);
});
$("body").on('click','.generatePoint',function(e){
    var userid = $(this).attr('data');
    var datauser = $(this).attr('data-user');
    var point = $(this).attr('data-point');
    if(point== ""){
        point = 0;
    }
    $(".popupusername").text(datauser);
    $("#Boltonline1").val(point);
    $("#UserID").val(userid);
    $("#Points,#Boltonline2,#TransctionCode").val('');
    $('#generatePoint').modal('show');
    //$('#myModal').modal('hide');
});

$( "#Amount" ).keyup(function() {
    var dBoltonline1 = $("#dBoltonline1").val();
    var Points = $("#Amount").val();
    if(dBoltonline1 == ""){
        dBoltonline1 = 0;
    }
     if(Points == ""){
        Points = 0;
    }
    var total = parseFloat(dBoltonline1) + parseFloat(Points);
    //alert(total);
    //$("#Points").val(total);
    $("#dBoltonline2").val(total);
});


$("body").on('click','.Deposit',function(e){
    var userid = $(this).attr('data');
    var datauser = $(this).attr('data-user');
    var point = $(this).attr('data-point');
    if(point== ""){
        point = 0;
    }
    
    $("#Amount,#dBoltonline2,#Remarks,#dTransctionCode").val('');
    $("#dBoltonline1").val(point);
    $(".popupusername").text(datauser);
    $("#dUserID").val(userid);
    $('#Deposit').modal('show');
    //$('#myModal').modal('hide');
});

$( "#wAmount" ).keyup(function() {
    var dBoltonline1 = $("#wBoltonline1").val();
    var Points = $("#wAmount").val();
    if(dBoltonline1 == ""){
        dBoltonline1 = 0;
    }
     if(Points == ""){
        Points = 0;
    }
    var total = parseFloat(dBoltonline1) - parseFloat(Points);
    //alert(total);
    //$("#Points").val(total);
    $("#wBoltonline2").val(total);
});
$("body").on('click','.WithdrawRequest',function(e){
    var userid = $(this).attr('data');
    var datauser = $(this).attr('data-user');
    
    var point = $(this).attr('data-point');
    if(point== ""){
        point = 0;
    }
    $("#wAmount,#wBoltonline2,#wRemarks,#wTransctionCode").val('');
    $("#wBoltonline1").val(point);
    $(".popupusername").text(datauser);
    $("#wUserID").val(userid);
    $('#WithdrawRequest').modal('show');
    //$('#myModal').modal('hide');
});

$("body").on('click','.MinMaxOdds',function(e){
    var userid = $(this).attr('data');
    $("#mUserID").val(userid);
    $("#MinimumOdds,#MaximumOdds,#mmTransctionCode").val('');
    $('#MinMaxOdds').modal('show');
    //$('#myModal').modal('hide');
});
$("body").on('click','.ExposureLimit',function(e){
    var userid = $(this).attr('data');
    var datael = $(this).attr('datael');
    if(datael== ""){
        datael = 0;
    }
   $("#oldLimit").val(datael);
    $("#eUserID").val(userid);
    $("#ExposureLimit,#eTransctionCode").val('');
    $('#ExposureLimit').modal('show');
    //$('#myModal').modal('hide');
});
$("body").on('click','.CreditReference',function(e){
    var userid = $(this).attr('data');
    var datacf = $(this).attr('datacf');
    if(datacf== ""){
        datacf = 0;
    }
    $("#oldCredit").val(datacf);
    $("#cUserID").val(userid);
    $("#CreditReference,#cTransctionCode").val('');
    $('#CreditReference').modal('show');
    //$('#myModal').modal('hide');
});
$("body").on('click','.UserPassword',function(e){
    var userid = $(this).attr('data');
    $("#cpUserID").val(userid);
    $("#Password,#ConfirmPassword,#upTransctionCode").val('');
    $('#UserPassword').modal('show');
    //$('#myModal').modal('hide');
});


$("body").on('click','.changeStatus',function(e){
    var userid = $(this).attr('data');
    var datauser = $(this).attr('data-user');
    var datauseractive = $(this).attr('datauseractive'); 
    var databetactive = $(this).attr('databetactive'); 
    
    $("#useryes,#userno").prop('checked', false);
    //$("input[name='useractive']").prop('checked', false);
    if(datauseractive == 1){
         $("#useryes").prop('checked', true);
    }else{
        $("#userno").prop('checked', true);
    }
    
    $("#betyes,#betno").prop('checked', false);
    if(databetactive == 1){
         $("#betyes").prop('checked', true);
    }else{
        $("#betno").prop('checked', true);
    }
    
    $(".popupusername").text(datauser);
    $("#ssUserID").val(userid);
    $('#changeStatus').modal('show');
});

$("body").on('click','.superMasterAccess',function(e){
    var userid = $(this).attr('data');
    var datacricket = $(this).attr('datacricket'); 
    var datasoccer = $(this).attr('datasoccer'); 
    var datatennis = $(this).attr('datatennis'); 
    var datacasino = $(this).attr('datacasino'); 
    
    
    $("#Cricketyes,#Cricketno").prop('checked', false);
    if(datacricket == 1){
         $("#Cricketyes").prop('checked', true);
    }else{
        $("#Cricketno").prop('checked', true);
    }
    $("#Socceryes,#Soccerno").prop('checked', false);
    if(datasoccer == 1){
         $("#Socceryes").prop('checked', true);
    }else{
        $("#Soccerno").prop('checked', true);
    }
    $("#Tennisyes,#Tennisno").prop('checked', false);
    if(datatennis == 1){
         $("#Tennisyes").prop('checked', true);
    }else{
        $("#Tennisno").prop('checked', true);
    }
    
    $("#Casinoyes,#Casinono").prop('checked', false);
    if(datacasino == 1){
         $("#Casinoyes").prop('checked', true);
    }else{
        $("#Casinono").prop('checked', true);
    }
   
    $("#acUserID").val(userid);
    $('#SuperMasterAccess').modal('show');
});



$("body").on('click','.submit_gp',function(e)
{
    e.preventDefault();
    var UserID = $("#UserID").val();
    var Points = $("#Points").val();
    var TransctionCode = $("#TransctionCode").val();
    if(UserID != '')
    {
      $.ajax({
        'type': 'POST',
        url: <?php echo json_encode(url('submitgp')); ?>,
        dataType: "json",
        'data': {"_token": "<?php echo e(csrf_token()); ?>",UserID: UserID,Points: Points,TransctionCode: TransctionCode},
        'cache': false,
        'success': function (response)
        {
        //   if(response.status == 'status'){
             
        //   }else{
        //      $("#submit_gp_msg").text(response.message); 
        //   }
        
        
         $("#submit_gp_msg").text(response.message);
         if(response.status != "error"){
              window.location.reload();
         }
        }
        });
    }   
});
$("body").on('click','.submit_deposite',function(e)
{
    e.preventDefault();
    var UserID = $("#dUserID").val();
    var Remarks = $("#Remarks").val();
    var dTransctionCode = $("#dTransctionCode").val();
    var Amount = $("#Amount").val();
    
    if(UserID != '')
    {
      $.ajax({
        'type': 'POST',
        url: <?php echo json_encode(url('submitdeposite')); ?>,
        dataType: "json",
        'data': {"_token": "<?php echo e(csrf_token()); ?>",UserID: UserID,Amount: Amount,Remarks: Remarks,TransctionCode: dTransctionCode},
        'cache': false,
        'success': function (response)
        {
        //   if(response.status == 'status'){
             
        //   }else{
        //      $("#submit_gp_msg").text(response.message); 
        //   }
         $("#submit_deposite_msg").text(response.message);
         if(response.status != "error"){
              window.location.reload();
         }
        }
        });
    }   
});

$("body").on('click','.submit_withdraw',function(e)
{
    e.preventDefault();
    var UserID = $("#wUserID").val();
    var Amount = $("#wAmount").val();
    var Remarks = $("#wRemarks").val();
    var wTransctionCode = $("#wTransctionCode").val();
    
    var WithdrawType = $("#WithdrawType").val();
    
    if(UserID != '')
    {
      $.ajax({
        'type': 'POST',
        url: <?php echo json_encode(url('submitwithdraw')); ?>,
        dataType: "json",
        'data': {"_token": "<?php echo e(csrf_token()); ?>",UserID: UserID,Amount: Amount,WithdrawType: WithdrawType,Remarks: Remarks,TransctionCode: wTransctionCode},
        'cache': false,
        'success': function (response)
        {
        //   if(response.status == 'status'){
             
        //   }else{
        //      $("#submit_gp_msg").text(response.message); 
        //   }
         $("#submit_withdraw_msg").text(response.message);
         if(response.status != "error"){
              window.location.reload();
         }
        }
        });
    }   
});

$("body").on('click','.submit_MinMaxOdds',function(e)
{
    e.preventDefault();
    var UserID = $("#mUserID").val();
    var MaximumOdds = $("#MaximumOdds").val();
    var mmTransctionCode = $("#mmTransctionCode").val();
    var MinimumOdds = $("#MinimumOdds").val();
    
    
    if(UserID != '')
    {
      $.ajax({
        'type': 'POST',
        url: <?php echo json_encode(url('submitminmaxOdds')); ?>,
        dataType: "json",
        'data': {"_token": "<?php echo e(csrf_token()); ?>",UserID: UserID,MaximumOdds: MaximumOdds,MinimumOdds: MinimumOdds,TransctionCode: mmTransctionCode},
        'cache': false,
        'success': function (response)
        {
        //   if(response.status == 'status'){
             
        //   }else{
        //      $("#submit_gp_msg").text(response.message); 
        //   }
         $("#submit_MinMaxOdds_msg").text(response.message);
         if(response.status != "error"){
              window.location.reload();
         }
        }
        });
    }   
});

$("body").on('click','.submit_ExposureLimit',function(e)
{
    e.preventDefault();
    var UserID = $("#eUserID").val();
    var ExposureLimit = $("#ExposureLimit").val();
    var eTransctionCode = $("#eTransctionCode").val();
    var MinimumOdds = $("#MinimumOdds").val();
    
    
    if(UserID != '')
    {
      $.ajax({
        'type': 'POST',
        url: <?php echo json_encode(url('submitexposureLimit')); ?>,
        dataType: "json",
        'data': {"_token": "<?php echo e(csrf_token()); ?>",UserID: UserID,ExposureLimit: ExposureLimit,TransctionCode: eTransctionCode},
        'cache': false,
        'success': function (response)
        {
        //   if(response.status == 'status'){
             
        //   }else{
        //      $("#submit_gp_msg").text(response.message); 
        //   }
         $("#submit_ExposureLimit_msg").text(response.message);
         if(response.status != "error"){
              window.location.reload();
         }
        }
        });
    }   
});
$("body").on('click','.submit_CreditReference',function(e)
{
    e.preventDefault();
    var UserID = $("#eUserID").val();
    var CreditReference = $("#CreditReference").val();
    var cTransctionCode = $("#cTransctionCode").val();
    
    
    if(UserID != '')
    {
      $.ajax({
        'type': 'POST',
        url: <?php echo json_encode(url('submitcreditReference')); ?>,
        dataType: "json",
        'data': {"_token": "<?php echo e(csrf_token()); ?>",UserID: UserID,CreditReference: CreditReference,TransctionCode: cTransctionCode},
        'cache': false,
        'success': function (response)
        {
        //   if(response.status == 'status'){
             
        //   }else{
        //      $("#submit_gp_msg").text(response.message); 
        //   }
         $("#submit_CreditReference_msg").text(response.message);
         if(response.status != "error"){
              window.location.reload();
         }
        }
        });
    }   
});
$("body").on('click','.submit_UserPassword',function(e)
{
    e.preventDefault();
    var UserID = $("#cpUserID").val();
    var Password = $("#Password").val();
     var ConfirmPassword = $("#ConfirmPassword").val();
    var upTransctionCode = $("#upTransctionCode").val();
    
    
    if(UserID != '')
    {
      $.ajax({
        'type': 'POST',
        url: <?php echo json_encode(url('submituserpassword')); ?>,
        dataType: "json",
        'data': {"_token": "<?php echo e(csrf_token()); ?>",UserID: UserID,Password: Password,ConfirmPassword: ConfirmPassword,TransctionCode: upTransctionCode},
        'cache': false,
        'success': function (response)
        {
        //   if(response.status == 'status'){
             
        //   }else{
        //      $("#submit_gp_msg").text(response.message); 
        //   }
         $("#submit_UserPassword_msg").text(response.message);
         if(response.status != "error"){
              window.location.reload();
         }
        }
        });
    }   
});

$("body").on('click','.submit_changeStatus',function(e)
{
    e.preventDefault();
    var UserID = $("#ssUserID").val();
    var useractive = $("input[name='useractive']:checked").val();
    var betactive = $("input[name='betactive']:checked").val();
    var upTransctionCode = $("#ssTransctionCode").val();
    
    
    if(UserID != '')
    {
      $.ajax({
        'type': 'POST',
        url: <?php echo json_encode(url('submitchangeStatus')); ?>,
        dataType: "json",
        'data': {"_token": "<?php echo e(csrf_token()); ?>",UserID: UserID,useractive: useractive,betactive: betactive,TransctionCode: upTransctionCode},
        'cache': false,
        'success': function (response)
        {
            
        //   if(response.status == 'status'){
        //   }else{
        //      $("#submit_gp_msg").text(response.message); 
        //   }
         $("#submit_changeStatus_msg").text(response.message);
         if(response.status != "error"){
              window.location.reload();
         }
        }
        });
    }   
});
$("body").on('click','.cls_button_page',function(e){
    window.location.reload();
});
$("body").on('click','.submit_SuperMasterAccess',function(e)
{
    e.preventDefault();
    var UserID = $("#acUserID").val();
    var cricketAccess = $("input[name='cricketAccess']:checked").val();
    var soccerAccess = $("input[name='soccerAccess']:checked").val();
    var tennisAccess = $("input[name='tennisAccess']:checked").val();
    var casinoAccess = $("input[name='casinoAccess']:checked").val();
    var acTransctionCode = $("#acTransctionCode").val();
    
    
    if(UserID != '')
    {
      $.ajax({
        'type': 'POST',
        url: <?php echo json_encode(url('submitSuperMasterAccess')); ?>,
        dataType: "json",
        'data': {"_token": "<?php echo e(csrf_token()); ?>",UserID: UserID,cricketAccess: cricketAccess,soccerAccess: soccerAccess,tennisAccess:tennisAccess,casinoAccess:casinoAccess,TransctionCode: acTransctionCode},
        'cache': false,
        'success': function (response)
        {
        //   if(response.status == 'status'){
             
        //   }else{
        //      $("#submit_gp_msg").text(response.message); 
        //   }
         $("#submit_SuperMasterAccess_msg").text(response.message);
         if(response.status != "error"){
              window.location.reload();
         }
        }
        });
    }   
});


</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/nationaltenders/public_html/crawling_tenders/g30/resources/views/listuser.blade.php ENDPATH**/ ?>