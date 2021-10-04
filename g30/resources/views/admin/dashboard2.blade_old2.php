@extends('admin.main')

@section('stylesheet')
<style type="text/css">
.tabbable-line>.tab-content {
    border-top: 1px solid #dfdfdf;
    padding: 10px 0;
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
           
            <div class="row">
                <div class="col-md-12">
                    <div class="tabbable-line tabbable-tabdrop">
                        <ul class="nav nav-tabs parent_tab">
                            <li class="active">
                                <a href="#dashboard" data-toggle="tab">Dashboard</a>
                            </li>                      
                        </ul>
                        <div class="tab-content" id="parent_0">

                            <div class="parent_tab_pane tab-pane active" id="dashboard">
                                <p> Howdy, I'm in Dashboard. </p>
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
    
@endsection

@section('footer')
@include('admin.partials._footer')
@stop

@section('scripts')
<script>
 $('body').on('click', '.sub-menu li a,.sub_menu_tab_a', function () {
  var parent_id = $(this).attr('parent-data-id');
  var master_parent_id = $(this).attr('master-parent-data-id');
  var parent_title = $(this).attr('parent-title');
  //var child_id = $(this).attr('data-id');
  //var child_title = $(this).attr('title');
  var data_url = $(this).attr('data-link');
  var data_action = $(this).attr('data-action');
  var child_id = parent_id+"_"+data_action; //default list 
  var child_title = parent_title+"-"+data_action;

  if($('#parent_'+parent_id).length > 0){ 
       
       if($('#child_'+child_id).length > 0){
            $(".parent_tab li").removeClass('active');
            $(".parent_tab > li > a[href='#parent_"+parent_id+"']").click();
            $("#menu_child_"+parent_id+" > li > a[href='#child_"+child_id+"']").click();  
       }else{
            var content = 'testing tab'+child_title;

            var tab_li_html='<li class="active">';
            tab_li_html +='<a href="#child_'+child_id+'" data-toggle="tab">'+child_title+' <i class="fa fa-times tab-close" data-child="'+child_id+'" data-parent="'+parent_id+'" data="child_'+child_id+'"></i></a>';
            tab_li_html +='</li>';
           
            var tab_content_html ='<div class="tab-pane active" id="child_'+child_id+'">';
               tab_content_html += content;
            tab_content_html +='</div>';  

            $("#menu_child_"+parent_id+" > li").removeClass('active');
            $("#menu_child_content_"+parent_id+" .tab-pane").removeClass('active');
            
            $("#menu_child_"+parent_id).append(tab_li_html);

            $("#menu_child_content_"+parent_id).append(tab_content_html);
            //$("#child_"+child_id).load(data_url); // load url 
            $(".parent_tab > li > a[href='#parent_"+parent_id+"']").click();
            $("#menu_child_"+parent_id+" > li > a[href='#child_"+child_id+"']").click();
       } 

  }else{

    //$(".nav-tabs li").removeClass('active');
    $("#parent_0 .parent_tab_pane").removeClass('active');
    $(".parent_tab li").removeClass('active');
    //$("#menu_child_content_"+parent_id).removeClass('active');
    $(".parent_tab").append('<li class="active"><a href="#parent_'+parent_id+'" tab-parent-data="'+master_parent_id+'" data-toggle="tab">'+parent_title+' <i class="fa fa-times tab-close" data-child="0" data-parent="'+parent_id+'" data="parent_'+parent_id+'"></i></a></li>');
    
    var content = 'testing tab'+data_action+" "+child_id;
    content += '<button class="sub_menu_tab_a" parent-data-id="'+parent_id+'" parent-title="'+parent_title+'" data-action="C" data-link="http://localhost/gautish/admin/modules/create">Create</button>';

    //$(".tab-content").append('<div class="tab-pane active" id="parent_'+parent_id+'" data-key="0">'+tablehtml+'</div>');

    var tab_html ='<div class="parent_tab_pane tab-pane active" id="parent_'+parent_id+'">';

        tab_html +='<div class="tabbable-line tabbable-tabdrop">';

        tab_html +='<ul class="nav nav-tabs" id="menu_child_'+parent_id+'">';
            tab_html +='<li class="active">';
            tab_html +='<a href="#child_'+child_id+'" data-toggle="tab">'+child_title+' <i class="fa fa-times tab-close" data-child="'+child_id+'" data-parent="'+parent_id+'" data="child_'+child_id+'"></i></a>';
            tab_html +='</li>';
        tab_html +='</ul>';

        tab_html +='<div class="tab-content" id="menu_child_content_'+parent_id+'">';
            tab_html +='<div class="tab-pane active" id="child_'+child_id+'">';
               tab_html += content;
            tab_html +='</div>';          
        tab_html +='</div>';

        tab_html +='</div>';
   
    tab_html +='</div>';

    $("#parent_0").append(tab_html);  

    //$("#child_"+child_id).load(data_url); // load url 

    $(".parent_tab > li > a[href='#parent_"+parent_id+"']").click();
    $("#menu_child_"+parent_id+" > li > a[href='#child_"+child_id+"']").click();

  }

});   
/*$('body').on('click', '.sub-menu li a', function () {
  var parent_id = $(this).attr('parent-data-id');
  var parent_title = $(this).attr('parent-title');
  var child_id = $(this).attr('data-id');
  var child_title = $(this).attr('title');
  var data_url = $(this).attr('data-link');
    
  if($('#parent_'+parent_id).length > 0){ 

        if($('#child_'+child_id).length > 0){
            $(".parent_tab li").removeClass('active');
            $(".parent_tab > li > a[href='#parent_"+parent_id+"']").click();
            $("#menu_child_"+parent_id+" > li > a[href='#child_"+child_id+"']").click();  
        }else{

            var content = 'testing tab'+child_title;

            var tab_li_html='<li class="active">';
            tab_li_html +='<a href="#child_'+child_id+'" data-toggle="tab">'+child_title+' <i class="fa fa-times tab-close" data-child="'+child_id+'" data-parent="'+parent_id+'" data="child_'+child_id+'"></i></a>';
            tab_li_html +='</li>';
           
            var tab_content_html ='<div class="tab-pane active" id="child_'+child_id+'">';
               tab_content_html += content;
            tab_content_html +='</div>';  

            $("#menu_child_"+parent_id+" > li").removeClass('active');
            $("#menu_child_content_"+parent_id+" .tab-pane").removeClass('active');
            
            $("#menu_child_"+parent_id).append(tab_li_html);

            $("#menu_child_content_"+parent_id).append(tab_content_html);
            //$("#child_"+child_id).load(data_url); // load url 
            $(".parent_tab > li > a[href='#parent_"+parent_id+"']").click();
            $("#menu_child_"+parent_id+" > li > a[href='#child_"+child_id+"']").click();
        }
    
  }else{

    
    //$(".nav-tabs li").removeClass('active');
    $("#parent_0 .parent_tab_pane").removeClass('active');
    $(".parent_tab li").removeClass('active');
    //$("#menu_child_content_"+parent_id).removeClass('active');
    $(".parent_tab").append('<li class="active"><a href="#parent_'+parent_id+'" data-toggle="tab">'+parent_title+' <i class="fa fa-times tab-close" data-child="0" data-parent="'+parent_id+'" data="parent_'+parent_id+'"></i></a></li>');
    
    var content = 'testing tab'+child_title;

    //$(".tab-content").append('<div class="tab-pane active" id="parent_'+parent_id+'" data-key="0">'+tablehtml+'</div>');

    var tab_html ='<div class="parent_tab_pane tab-pane active" id="parent_'+parent_id+'">';

        tab_html +='<div class="tabbable-line tabbable-tabdrop">';

        tab_html +='<ul class="nav nav-tabs" id="menu_child_'+parent_id+'">';
            tab_html +='<li class="active">';
            tab_html +='<a href="#child_'+child_id+'" data-toggle="tab">'+child_title+' <i class="fa fa-times tab-close" data-child="'+child_id+'" data-parent="'+parent_id+'" data="child_'+child_id+'"></i></a>';
            tab_html +='</li>';
        tab_html +='</ul>';

        tab_html +='<div class="tab-content" id="menu_child_content_'+parent_id+'">';
            tab_html +='<div class="tab-pane active" id="child_'+child_id+'">';
               tab_html += content;
            tab_html +='</div>';          
        tab_html +='</div>';

        tab_html +='</div>';
   
    tab_html +='</div>';

    $("#parent_0").append(tab_html);  

    //$("#child_"+child_id).load(data_url); // load url 

    $(".parent_tab > li > a[href='#parent_"+parent_id+"']").click();
    $("#menu_child_"+parent_id+" > li > a[href='#child_"+child_id+"']").click();
  }

});
*/
$(document).keydown(function(e){
    if(e.which == 27){
        var parent_tab = $(".parent_tab > li.active > a > i").attr('data-parent');
        var child_tab = $("#menu_child_"+parent_tab+" > li.active > a > i").attr('data-child');
        close_tab(child_tab,parent_tab);
       
    }
});
$('body').on('click', '.tab-close', function (e) {
    var child_tab = $(this).attr('data-child');
    var parent_tab = $(this).attr('data-parent');
    //alert(child_tab+" "+parent_tab);
    close_tab(child_tab,parent_tab);
});
function close_tab(child_tab,parent_tab){
    if(child_tab == 0){
        $('a[href="#parent_'+parent_tab+'"]').parent("li").remove();
        $("#parent_"+parent_tab).remove();   
        if($('.parent_tab li.active').length == 0){
            //$(".parent_tab li").children('a').first().click();
            $('.parent_tab a:last').tab('show'); 
        }
    }else{         
         if($('#menu_child_'+parent_tab+' > li').length > 1){
            $('a[href="#child_'+child_tab+'"]').parent("li").remove();
            $('#menu_child_content_'+parent_tab+' > #child_'+child_tab).remove(); 
            $('#menu_child_'+parent_tab+' > li a:last').tab('show');  
         }else{
            $('a[href="#parent_'+parent_tab+'"]').parent("li").remove();
            $("#parent_"+parent_tab).remove();
            
            if($('.parent_tab li.active').length == 0){
               $('.parent_tab a:last').tab('show'); 
            }
         }     
    }

    active_menu(); //sidebar tab active menu
}


$('body').on('click', '.parent_tab li', function (e) {
    setTimeout(function(){ 
        active_menu();//sidebar tab active menu
         }, 500);
    
});
function active_menu(){
    //parent_tab_id = 1; 
    //child_tab_id = 2;//data-parent
    var parent_tab_id = $('.parent_tab li.active a').attr('tab-parent-data');
    $('.page-sidebar-menu li').removeClass('active open');
    $('.page-sidebar-menu li[data="'+parent_tab_id+'"]').addClass('active open');

}
</script>    
@stop