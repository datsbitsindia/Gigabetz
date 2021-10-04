$(document).bind("ajaxSend", function () { 
 $('#ajax_preloader').show();
}).bind("ajaxStop", function () {    
   $("#ajax_preloader").fadeOut(900);
});
window.onload = function() {
  $('#ajax_preloader').hide();
};


/*$('body').on('click', '.sub-menu li a,.sub_menu_tab_a', function () {
  var parent_id = $(this).attr('parent-data-id');
  var master_parent_id = $(this).attr('master-parent-data-id');
  var parent_title = $(this).attr('parent-title');
  //var child_id = $(this).attr('data-id');
  //var child_title = $(this).attr('title');
  var data_url = $(this).attr('data-link');
  var data_action = $(this).attr('data-action');
  var data_action_key = $(this).attr('data-key');
  var child_id = parent_id+"_"+data_action+"_"+data_action_key; //default list 
  var child_title = parent_title+"-"+data_action;

  if($('#parent_'+parent_id).length > 0){ 
       
       if($('#child_'+child_id).length > 0){
            $(".parent_tab li").removeClass('active');
            $(".parent_tab > li > a[href='#parent_"+parent_id+"']").click();
            $("#menu_child_"+parent_id+" > li > a[href='#child_"+child_id+"']").click();  
       }else{

            var content = 'testing tab'+child_title;

            var tab_li_html='<li class="active">';
            tab_li_html +='<a href="#child_'+child_id+'" data-action="'+data_action+'" data-key="'+data_action_key+'" data-toggle="tab">'+child_title+' <i class="fa fa-times tab-close" data-child="'+child_id+'" data-parent="'+parent_id+'" data="child_'+child_id+'"></i></a>';
            tab_li_html +='</li>';
           
            var tab_content_html ='<div class="tab-pane active" id="child_'+child_id+'">';
               tab_content_html += content;
            tab_content_html +='</div>';  

            $("#menu_child_"+parent_id+" > li").removeClass('active');
            $("#menu_child_content_"+parent_id+" .tab-pane").removeClass('active');
            
            $("#menu_child_"+parent_id).append(tab_li_html);

            $("#menu_child_content_"+parent_id).append(tab_content_html);
            $("#child_"+child_id).load(data_url); // load url 
            $(".parent_tab > li > a[href='#parent_"+parent_id+"']").click();
            $("#menu_child_"+parent_id+" > li > a[href='#child_"+child_id+"']").click();
       } 

  }else{

    //$(".nav-tabs li").removeClass('active');
    $("#parent_0 .parent_tab_pane").removeClass('active');
    $(".parent_tab li").removeClass('active');
    //$("#menu_child_content_"+parent_id).removeClass('active');
    $(".parent_tab").append('<li class="active"><a href="#parent_'+parent_id+'" tab-parent-data="'+master_parent_id+'" tab-current-data="'+parent_id+'" data-toggle="tab">'+parent_title+' <i class="fa fa-times tab-close" data-child="0" data-parent="'+parent_id+'" data="parent_'+parent_id+'"></i></a></li>');
    
    var content = 'testing tab'+data_action+" "+child_id;
    
    //$(".tab-content").append('<div class="tab-pane active" id="parent_'+parent_id+'" data-key="0">'+tablehtml+'</div>');

    var tab_html ='<div class="parent_tab_pane tab-pane active" id="parent_'+parent_id+'">';

        tab_html +='<div class="tabbable-line tabbable-tabdrop">';

        tab_html +='<ul class="nav nav-tabs ul-child" id="menu_child_'+parent_id+'">';
            tab_html +='<li class="active">';
            tab_html +='<a href="#child_'+child_id+'" data-action="'+data_action+'" data-key="'+data_action_key+'" data-toggle="tab">'+child_title+' <i class="fa fa-times tab-close" data-child="'+child_id+'" data-parent="'+parent_id+'" data="child_'+child_id+'"></i></a>';
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
    //alert(data_url);
    $("#child_"+child_id).load(data_url); // load url 

    $(".parent_tab > li > a[href='#parent_"+parent_id+"']").click();
    $("#menu_child_"+parent_id+" > li > a[href='#child_"+child_id+"']").click();

  }

});   

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
        
        //var check_action = $("#menu_child_"+parent_tab+" li");
        var check_action_arr = $('#menu_child_'+parent_tab+' li a').map(function(){ 
            return $(this).attr('data-action'); 
        }); 
        
        if(($.inArray("C", check_action_arr) != -1) || ($.inArray("E", check_action_arr) != -1)) {
          swal({
              type: 'error',
              title: 'Oops...',
              text: 'Please First Close Your Create/Edit Page!',
              showConfirmButton: false,
              timer: 1500
            });  
        } else {
            $('a[href="#parent_'+parent_tab+'"]').parent("li").remove();
            $("#parent_"+parent_tab).remove();   
            if($('.parent_tab li.active').length == 0){
                //$(".parent_tab li").children('a').first().click();
                $('.parent_tab a:last').tab('show'); 
            }   
        }
        
    }else{  

        var close_tab_data_action = $('a[href="#child_'+child_tab+'"]').attr('data-action');
        
         if($('#menu_child_'+parent_tab+' > li').length > 1){
            
            if(close_tab_data_action == "C" || close_tab_data_action == "E"){
               
             swal({
                title: 'Are you sure ?',
                html: "You want to Remove #"+child_tab,
                type: 'question',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes',
                allowEscapeKey: false,
                cancelButtonText: 'No'
              }).then(function () {
                if(swal.getConfirmButton())
                {    
                 $('a[href="#child_'+child_tab+'"]').parent("li").remove();
                 $('#menu_child_content_'+parent_tab+' > #child_'+child_tab).remove(); 
                 $('#menu_child_'+parent_tab+' > li a:last').tab('show');  
                 //swal("Removed!", "Your Child Tab has been removed.", "success");     
                }

              });  
            }else{

             $('a[href="#child_'+child_tab+'"]').parent("li").remove();
             $('#menu_child_content_'+parent_tab+' > #child_'+child_tab).remove(); 
             $('#menu_child_'+parent_tab+' > li a:last').tab('show'); 

            }
               
         }else{ // child last tab

            if(close_tab_data_action == "C" || close_tab_data_action == "E"){
               
             swal({
                title: 'Are you sure ?',
                html: "You want to Remove #"+child_tab,
                type: 'question',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes',
                allowEscapeKey: false,
                cancelButtonText: 'No'
              }).then(function () {
                if(swal.getConfirmButton())
                {    
                 $('a[href="#parent_'+parent_tab+'"]').parent("li").remove();
                 $("#parent_"+parent_tab).remove();  
                 if($('.parent_tab li.active').length == 0){
                   $('.parent_tab a:last').tab('show'); 
                 }
                 //swal("Removed!", "Your Child Tab has been removed.", "success");     
                }

              });  

            }else{
                $('a[href="#parent_'+parent_tab+'"]').parent("li").remove();
                $("#parent_"+parent_tab).remove();    
                if($('.parent_tab li.active').length == 0){
                   $('.parent_tab a:last').tab('show'); 
                }
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
    var parent_tab_id = $('.parent_tab li.active a').attr('tab-parent-data');
    var current_tab_id = $('.parent_tab li.active a').attr('tab-current-data');
    $('.page-sidebar-menu li').removeClass('active open');
    $('.page-sidebar-menu li[data="'+parent_tab_id+'"]').addClass('active open');
    $('.page-sidebar-menu li[data="'+parent_tab_id+'"] a').append('<span class="selected"></span>');
    $('.sub-menu li').removeClass('active');
    $('.sub-menu li a[parent-data-id="'+current_tab_id+'"]').parent('li').addClass('active');
}  
function formSubmit(){
    $('body').on('submit', 'form', function(event){ 
      event.preventDefault(); //prevent default action 
      event.stopImmediatePropagation();
      var frm = $(this);
      var formAction = $(this).attr('action');
      var formMethod = $(this).attr('method');
      var objformData = new FormData(this);
      $.ajax({
        type: formMethod,
        dataType: "json",
        url: formAction,
        //data: frm.serialize(),
        data: objformData,
        processData: false,
        contentType: false,
        success: function (response) {  
          //$('#results').html(data);
          if(response.status =='success'){
          swal("Success!", response.message, "success");  
          if(response.reset == '1'){
            frm[0].reset(); 
            if(frm.find(".multiselect2").length > 0){
                frm.find(".multiselect2").multiselect("deselectAll", false).multiselect("refresh");
              }
              if(frm.find(".select2").length > 0){
                //frm.find(".select").select2('val', '');
              }                 
          }

         }else{
            //alert(response.errors);
            swal("Error!", response.message, "error");  
         }

        },
        error: function(jqXHR, text, error){
                //$('#result').html(error);           
          }
      });
      return false;
  });
}

/*****************************form focus start***********************************/
 
     
/*****************************form focus end***********************************/