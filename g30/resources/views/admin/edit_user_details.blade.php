@extends('admin.main')

@section('stylesheet')

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
                        <span>User</span>
                    </li>
                </ul>
            </div>
            <!-- END PAGE BAR -->
            <!-- BEGIN PAGE TITLE
            <h1 class="page-title"> Edit
                <small>User Page</small>
            </h1>-->

            <div class="row" style="margin-top: 10px;">
                <div class="col-md-12">
                    <div class="portlet box green">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="icon-user"></i>
                                <span class="caption-subject"> User Details</span>
                            </div>
                            <div class="actions">             
                                
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div id="edit_user_success">
                                        
                            </div>
                            <form action="{{route('postedituser')}}" method="get" id="edit_user">
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" name="fname" value="{{$data->name}}" class="form-control">
                                            </div>
                                        </div>
                                       
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="text" name="email" value="{{$data->email}}" class="form-control">
                                            </div>
                                        </div>
                                        
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>Alternate Email <span class="pull-right"><i class="fa fa-plus add_more_email"></i></span></label>
                                                <div class="alternate_email_main">
                                                <?php 
                                                $alternate_email = $data->alternate_email; 
                                                if($alternate_email != "" && $alternate_email != NULL){
                                                $arr_alternate = explode(',',$alternate_email); 
                                                 foreach($arr_alternate as $ke => $email){
                                                ?>
                                                
                                                <div class="input-group">
                                                  <input type="text" name="alternate_email[]" value="{{$email}}" class="form-control">
                                                  <div class="input-group-btn">
                                                    <button class="btn btn-danger remove_btn_click" type="button"><i class="fa fa-times"></i></button>
                                                  </div>
                                                </div>
                                                    <?php 
                                                 }
                                                }else{ ?>
                                                    
                                                    <div class="input-group">
                                                      <input type="text" name="alternate_email[]" value="" class="form-control">
                                                      <div class="input-group-btn">
                                                        <button class="btn btn-danger remove_btn_click" type="button"><i class="fa fa-times"></i></button>
                                                      </div>
                                                    </div>
                                                 <?php 
                                                    
                                                } 
                                                ?>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Company Name</label>
                                                <input type="text" name="company" value="{{$data->company_name}}" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Phone</label>
                                                <input type="text" name="phone" value="{{$data->mobile}}" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Status</label>
                                                <select name="status" value="{{$data->status}}" class="form-control">
                                                    <option value="Free" {{ (($data->status) == "Free" ? "selected":"") }}>Free</option>
                                                    <option value="Paid" {{ (($data->status) == "Paid" ? "selected":"") }}>Paid</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Is Tender</label>
                                                <input type="checkbox" name="is_tender" value="1" class="form-control" {{ (($data->is_tender) == 1 ? "checked":"") }}>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Is Result</label>
                                                <input type="checkbox" name="is_result" value="1" class="form-control" {{ (($data->is_result) == 1 ? "checked":"") }}>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Is Check</label>
                                                <input type="checkbox" name="is_check" value="1" class="form-control" {{ (($data->is_check) == 1 ? "checked":"") }}>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <input type="hidden" value="{{$data->id}}" name="user_id">
                                    <button type="button" class="btn blue user_edit">Submit</button>
                                    <a href="{{route('users')}}"><button type="button" class="btn default">Cancel</button></a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- END PAGE TITLE-->
            <!-- END PAGE HEADER-->
            <!-- <div class="row">
                <div class="col-md-12">
                    
                    <div class="portlet light ">
                        <div class="portlet-title">
                            <div class="caption font-red-sunglo">
                                <i class="icon-user font-red-sunglo"></i>
                                <span class="caption-subject bold uppercase"> User Information</span>
                            </div>
                        </div>
                        <div class="portlet-body form">

                            <ul class="nav nav-tabs">
                                <li class="active">
                                    <a href="#user" data-toggle="tab"> User </a>
                                </li>
                                <li>
                                    <a href="#tender" data-toggle="tab"> Tender </a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade active in" id="user">
                                    <div id="edit_user_success">
                                        
                                    </div>
                                  
                                    <form action="{{route('postedituser')}}" method="get" id="edit_user">
                                        <div class="form-body">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>First Name</label>
                                                        <input type="text" name="fname" value="{{$data->first_name}}" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>Last Name</label>
                                                        <input type="text" name="lname" value="{{$data->last_name}}" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>Email</label>
                                                        <input type="text" name="email" value="{{$data->email}}" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>Company Name</label>
                                                        <input type="text" name="company" value="{{$data->company_name}}" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>Phone</label>
                                                        <input type="text" name="phone" value="{{$data->user_phone}}" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-actions">
                                            <input type="hidden" value="{{$data->id}}" name="user_id">
                                            <button type="button" class="btn blue user_edit">Submit</button>
                                            <a href="{{route('users')}}"><button type="button" class="btn default">Cancel</button></a>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="tender">
                                    <form role="form">
                                        <div class="form-body">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>Keywords</label>
                                                        <input type="text" placeholder="Enter Keywords" class="form-control" id="advance_keyword" name="Keywords">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>Excluding Keyword</label>
                                                        <input type="text" placeholder="Enter Keywords" class="form-control" id="advance_keyword" name="Keywords">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>Geographical Indication</label>
                                                        <div class="mt-checkbox-inline">
                                                            <label class="mt-checkbox mt-checkbox-outline no-mb">
                                                                <input type="checkbox" id="inlineCheckbox1" value="option1"> Global
                                                                <span></span>
                                                            </label>
                                                            <label class="mt-checkbox mt-checkbox-outline no-mb">
                                                                <input type="checkbox" id="inlineCheckbox2" value="option2"> Domestic
                                                                <span></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="multiple" class="control-label">Country</label>
                                                        <select id="multiple" class="form-control select2-multiple" multiple>
                                                            <option value="AK">Alaska</option>
                                                            <option value="HI">Hawaii</option>
                                                            <option value="CA">California</option>
                                                            <option value="NV">Nevada</option>
                                                            <option value="OR">Oregon</option>
                                                            <option value="WA">Washington</option>
                                                            <option value="AZ">Arizona</option>
                                                            <option value="CO">Colorado</option>
                                                            <option value="ID">Idaho</option>
                                                            <option value="MT">Montana</option>
                                                            <option value="NE">Nebraska</option>
                                                            <option value="NM">New Mexico</option>
                                                            <option value="ND">North Dakota</option>
                                                            <option value="UT">Utah</option>
                                                            <option value="WY">Wyoming</option>
                                                            <option value="AL">Alabama</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="multiple" class="control-label">State</label>
                                                        <select id="multiple" class="form-control select2-multiple" multiple>
                                                            <option value="AK">Alaska</option>
                                                            <option value="HI">Hawaii</option>
                                                            <option value="CA">California</option>
                                                            <option value="NV">Nevada</option>
                                                            <option value="OR">Oregon</option>
                                                            <option value="WA">Washington</option>
                                                            <option value="AZ">Arizona</option>
                                                            <option value="CO">Colorado</option>
                                                            <option value="ID">Idaho</option>
                                                            <option value="MT">Montana</option>
                                                            <option value="NE">Nebraska</option>
                                                            <option value="NM">New Mexico</option>
                                                            <option value="ND">North Dakota</option>
                                                            <option value="UT">Utah</option>
                                                            <option value="WY">Wyoming</option>
                                                            <option value="AL">Alabama</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>Contract type:</label>
                                                        <select class="form-control" name="contract_type">
                                                            <option value="">Select</option>
                                                            <option value="11">Goods</option>
                                                            <option value="12">Service</option>
                                                            <option value="13">Works</option>
                                                            <option value="14">Mixed</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="multiple" class="control-label">Form Of Contract</label>
                                                        <select id="multiple" class="form-control select2-multiple" multiple>
                                                            <option value="AK">Alaska</option>
                                                            <option value="HI">Hawaii</option>
                                                            <option value="CA">California</option>
                                                            <option value="NV">Nevada</option>
                                                            <option value="OR">Oregon</option>
                                                            <option value="WA">Washington</option>
                                                            <option value="AZ">Arizona</option>
                                                            <option value="CO">Colorado</option>
                                                            <option value="ID">Idaho</option>
                                                            <option value="MT">Montana</option>
                                                            <option value="NE">Nebraska</option>
                                                            <option value="NM">New Mexico</option>
                                                            <option value="ND">North Dakota</option>
                                                            <option value="UT">Utah</option>
                                                            <option value="WY">Wyoming</option>
                                                            <option value="AL">Alabama</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-actions">
                                            <button type="submit" class="btn blue">Submit</button>
                                            <button type="button" class="btn default">Cancel</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                     
                </div>
            </div> -->
        </div>
        <!-- END CONTENT BODY -->
    </div>
    <!-- END CONTENT -->
</div>

@endsection

@section('footer')
@include('admin.partials._footer')
@stop

@section('scripts')
<script type="text/javascript">
//$("#edit_user").submit(function(event){
   
    $('body').on('click', '.add_more_email', function (event) { 
        var html = '<div class="input-group"><input type="text" name="alternate_email[]" value="" class="form-control"><div class="input-group-btn"><button class="btn btn-danger remove_btn_click" type="button"><i class="fa fa-times"></i></button></div></div>';
        $(".alternate_email_main").append(html);
    });
   
    $('body').on('click', '.remove_btn_click', function (event) { 
        $(this).closest('.input-group').remove();
    });
$('body').on('click', '.user_edit', function (event) {

    var frm = $("#edit_user");
    event.preventDefault(); //prevent default action 
    var post_url = frm.attr("action"); //get form action url
    var request_method = frm.attr("method"); //get form GET/POST method
    var form_data = frm.serialize(); //Encode form elements for submission
    
    $.ajax({
        url : post_url,
        type: request_method,
        data : form_data
    }).done(function(response){ 
       if(response =='success'){
        var smsg = '<div class="alert alert-success mb-5"><a href="#" class="close" data-dismiss="alert" aria-label="close">&{times;</a><strong>Success!</strong> User Successfully Updated!</div>';
        
        $("#edit_user_success").html(smsg);
       }
    });
    
});
</script>
@stop