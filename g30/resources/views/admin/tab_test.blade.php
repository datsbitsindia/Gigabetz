@extends('admin.main')

@section('stylesheet')
<style>
.tab-close{
    float: right;
    margin-top: 2px;
}
.loader {
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    text-align: center;
    z-index: 111;
    padding: 19% 0px;
    background-color: rgba(0, 0, 0, 0.7);
    display: none;
}
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
                        <span>Test</span>
                    </li>
                </ul>
            </div>
            <!-- END PAGE BAR -->
            <!-- BEGIN PAGE TITLE-->
            <h1 class="page-title"> Tab
                <small>Test Page</small>
            </h1>
            <!-- END PAGE TITLE-->
            <!-- END PAGE HEADER-->
            <div class="portlet box blue">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-gift"></i>Styled Tabs(justified) </div>
                    <div class="tools">
                        <a href="javascript:;" class="collapse"> </a>
                        <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="tabbable-custom nav-justified">
                        <ul class="nav nav-tabs nav-justified">
                            <li class="active">
                                <a href="#step_1" data-toggle="tab"> Section 1 </a>
                            </li>
                           
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="step_1">
                                <table class="table table-striped table-bordered table-hover table-checkable order-column" id="get_list_data">
                                <thead>
                                    <tr>
                                        
                                        <th>Userid</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Company Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Action</th>
                                
                                    </tr>
                                </thead>
                                
                                </table>
                            </div>

                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END CONTENT BODY -->
    </div>
    <!-- END CONTENT -->
</div>

<div class="loader">
    <img src="{{ asset('public/backend/assets/layouts/layout3/img/ajax-modal-loading.gif') }}">
</div>


@endsection

@section('footer')
@include('admin.partials._footer')
@stop

@section('scripts')
<script>
 $(function(){
   $('#get_list_data').DataTable({
        processing: true,
        serverSide: true,
        //keys: true,
         ajax: '{{ route('tab1') }}',
         columns: [
        {data: 'id', name: 'id'},
        {data: 'first_name', name: 'first_name'},
        {data: 'last_name', name: 'last_name'},
        {data: 'company_name', name: 'company_name'},
        {data: 'email', name: 'email'},
        {data: 'user_phone', name: 'user_phone'},
        {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });
 });   
$('body').on('click', '.edit-record', function () {
  var chkstep = $(this).attr('tab-check');
  var title = $(this).attr('tab-title');
  var id = $(this).attr('data');
  if($('#'+chkstep).length > 0){ 

    var check_id = $('#'+chkstep).attr('data-key');  
    if(check_id == id){  
    $('.nav-tabs a[href="#' + chkstep + '"]').tab('show');    
    }else{
    if(chkstep == "step_2"){
    var uri = 'agencyid='+id;
    }else if(chkstep == "step_3"){
    var uri = 'id='+id;    
    }else{

    }
    func_step(chkstep,uri);
    $("#"+chkstep).attr('data-key',id);
    $('.nav-tabs a[href="#' + chkstep + '"]').tab('show');    
    }
    
  }else{

    $(".nav-tabs li").removeClass('active');
    $(".tab-pane").removeClass('active');
    $(".nav-tabs").append('<li class="active"><a href="#'+chkstep+'" data-toggle="tab">'+title+' <i class="fa fa-times tab-close" data="'+chkstep+'"></i></li>');
    //var tablehtml = '<table class="table table-striped table-bordered table-hover table-checkable order-column" id="get_'+chkstep+'_data"><thead><tr><th>id</th><th>Name</th></tr></thead></table>';
    var tablehtml = '<table id="get_'+chkstep+'_data" class="table table-bordered"></table>';
    $(".tab-content").append('<div class="tab-pane active" id="'+chkstep+'" data-key="'+id+'">'+tablehtml+'</div>');

    /*var detail_table = $('#get_'+chkstep+'_data').DataTable({
    //keys:true,
    //"ajax": {!! json_encode(url('/')) !!}+'/lead/data_detail?li_id='+li_id,
    "ajax": "{{ route('tab2') }}",
    "columns": [
    {data: 'agencyid', name: 'agencyid',"title":'Agency ID'},
    {data: 'agencyname', name: 'agencyname',"title":'Agency Name'},
    {data: 'action', name: 'action',"title":'Action', orderable: false, searchable: false},
    ],
    });*/
    if(chkstep == "step_2"){
    var uri = 'agencyid='+id;
    }else if(chkstep == "step_3"){
    var uri = 'id='+id;    
    }else{
        
    }
    func_step(chkstep,uri);
    
  }

});

function func_step(chkstep,uri){
    if ($.fn.DataTable.isDataTable('#get_'+chkstep+'_data')) {
      $('#get_'+chkstep+'_data').DataTable().clear().destroy();
    }    
    if(chkstep == 'step_2'){
   
    $("#get_"+chkstep+"_data").DataTable({
        processing: true,
        serverSide: true,  
         //ajax: '{{ route('tab2') }}',
         "ajax": {!! json_encode(url('/')) !!}+'/tab2?'+uri,
         columns: [
        {data: 'agencyid', name: 'agencyid',"title":'Agency ID'},
        {data: 'agencyname', name: 'agencyname',"title":'Agency Name'},
        {data: 'action', name: 'action',"title":'Action', orderable: false, searchable: false},
        ],
    });
    }else if(chkstep == 'step_3'){

        $("#get_"+chkstep+"_data").DataTable({
        processing: true,
        serverSide: true,
         //ajax: '{{ route('tab2') }}',
         "ajax": {!! json_encode(url('/')) !!}+'/tab3?'+uri,
         columns: [
        {data: 'ti_id', name: 'ti_id',"title":'Tender ID'},
        {data: 'ti_no', name: 'ti_no',"title":'Tender No'},
        {data: 'action', name: 'action',"title":'Action', orderable: false, searchable: false},
        ],
        });
    }

}
var $curr = $( ".active" );
$('body').on('click', '.tab-close', function (e) {
    var removetab=$(this).attr('data');
    //var rvStepid = removetab.replace("step_", "");
    //var rvStep = parseInt(rvStepid) - 1;
    //$("#"+removetab).remove();
    //$( this ).closest( "li" ).remove();
    //$('.nav-tabs a[href="#step_' + rvStep + '"]').tab('show');

    var rvStepid = $(".nav-tabs").children().length;
    var rvStep = parseInt(rvStepid) - 1;
    
    var anchor = $(this).parent('a').attr('href');
    $( this ).closest( "li" ).remove();
    $(anchor).remove();

    //var text = $( this ).closest( "li" ).children('a').text();
    //var text = $(".active").prev("li").children("a").text();
    
    //$(this).parent().remove();
    //$(".nav-tabs li").children('a').click();
    //$('.nav-tabs a[href="' + window.location.hash + '"]').trigger('click');
    $('.nav-tabs a:last').tab('show') 
    //$(".nav-tabs li").children('a').first().click();
    //$('.nav-tabs a[href="#step_' + rvStep + '"]').tab('show');
});

$(document).keydown(function(e){
    if(e.which == 27){
        var li_length = $(".nav-tabs").children().length;
       if(li_length > 1){ 
       var tab = $(".active").children('a').attr('href');
       $(".active").remove();
       $(tab).remove();
       $('.nav-tabs a:last').tab('show'); 
       }
    }
});
// $(".nav-tabs").on("click", "a", function (e) {
//         e.preventDefault();
//         if (!$(this).hasClass('add-contact')) {
//             $(this).tab('show');
//         }
//     })
//     .on("click", "span", function () {
//         var anchor = $(this).siblings('a');
//         $(anchor.attr('href')).remove();
//         $(this).parent().remove();
//         $(".nav-tabs li").children('a').first().click();
//     });

// $('.add-contact').click(function (e) {
//     e.preventDefault();
//     var id = $(".nav-tabs").children().length; //think about it ;)
//     var tabId = 'contact_' + id;
//     $(this).closest('li').before('<li><a href="#contact_' + id + '">New Tab</a> <span> x </span></li>');
//     $('.tab-content').append('<div class="tab-pane" id="' + tabId + '">Contact Form: New Contact ' + id + '</div>');
//    $('.nav-tabs li:nth-child(' + id + ') a').click();
// });
</script>    
@stop