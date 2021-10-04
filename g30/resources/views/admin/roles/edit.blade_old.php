@extends('admin.main')
@section('stylesheet')

@stop

@section('title')
    Roles :
    @parent
@stop

@section('header')
@include('admin.partials._header')
@stop

@section('body')
page-header-fixed page-sidebar-closed-hide-logo page-content-white
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
                        <span>Roles</span>
                    </li>
                </ul>
            </div>
            <!-- END PAGE BAR -->
           
            <!-- END PAGE HEADER-->
            <div class="row">
                <div class="col-md-12">
                    <div class="portlet light ">
                        <div class="portlet-title">
                            <div class="caption font-dark">
                                <i class="icon-user font-dark"></i>
                                <span class="caption-subject bold capitalize"> Roles List</span>
                            </div>
                            <div class="text-right">
                                @if(strpos(' '.$action,'C')>0)
            
                                    <a href="{{ route('create/roles') }}" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-plus"></span> @lang('button.create')</a>
                    
                                @endif
                   
                            </div>
                        </div>
                        <div class="portlet-body">
                            <form class="form-horizontal" name="frmTest" id="form-id" method="post" action="">
                                <!-- CSRF Token -->
                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                <input type="hidden" name="rol_id" value="<?php echo $role->rol_id ?>">
                                <div class="col-sm-4">
                                    <label>Role Name</label>
                                    <input type="text" id="rol_name" name="rol_name" class="form-control" placeholder=" Role Name" value="{{$role->rol_name}}" required="" autofocus >
                                </div>
                                <div class="col-sm-4">
                                    <label>Department</label>
                                    <select class="form-control input-sm" name="dept_id" id="select21" required="required"  >
                                        <option value="0" selected>Select Department</option>
                                      
                                    </select>
                                </div>
                                <br><br>

                                <div align="right"> 
                                <button class="btn btn-danger delete" type="button">- Delete</button>
                                <button class="btn btn-success addmore"  type="button">+ Add More</button></div>
              
             
                                <div class='row'>
                                    <div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>
                                        <table class="table table-bordered table-hover" id="myTable">
                                            <thead>
                                                <tr>
                                                    <th width="2%"><input id="check_all" class="formcontrol" type="checkbox"/></th>
                                                    <th width="7%">Module</th>
                                                    <th width="7%">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php  $i=1  ?>
                                            @foreach($table_data as $row)
                                                <tr>
                                                    <td><input class="case" type="checkbox"/></td>
                                                    <td>
                                                        <select class="form-control autocomplete_txt" data-type="mod_id" name="mod_id[]" id="select22_{{$i}}" required="required"  >

                                                        @foreach($module as $mod)
                                                            @if($mod->mod_id == $row->mod_id) 
                                                                {{$select = " selected=selected "}}
                                                                @else
                                                                {{$select = ''}}
                                                                @endif
                                                            <option value="{{$mod->mod_id}}" {{$select}}>{{$mod->mod_name}}</option>
                                                        @endforeach
                                                        </select>
                                                        <input type="hidden" data-type="hiddenChoices" class="form-control autocomplete_txt" autocomplete="off" name="hiddenChoices[]" id="hiddenChoices_{{$i}}" value="" />
                                                    </td>
                               
                                                    <td>
                                                        <select class="form-control b_multiselect autocomplete_txt" data-type="act_id" name="act_id[]" id="multiselect2_{{$i}}" multiple="multiple">
                                                        @foreach($role_detail_actions as $action_mod)
                     
                                                        @if(($action_mod->umo_actions == $row->umo_actions) && ($action_mod->mod_id == $row->mod_id))
                                                        <option value="{{$action_mod->act_id }}" {{$select}}> {{ $action_mod->act_name }}</option>
                                                        @endif
                                                        @endforeach
                                                        </select>
                                                    </td>
                                                </tr>
                                            <?php $i=$i+1 ?>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
       
         
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-4">
                                        <a href="#" id="your-id" name="your-id" class="btn btn-success">Save</a>
                                        <a class="btn btn-danger" href="#">
                                            @lang('button.cancel')
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- END CONTENT BODY -->
    </div>
    <!-- END CONTENT -->
  </div>

@stop

@section('footer')
@include('admin.partials._footer')
@stop

@section('scripts')
<script type="text/javascript">
$(document).on('click change keydown keyup','.autocomplete_txt', function(event) {
    id_arr = $(this).attr('id');
    id = id_arr.split("_");

    $('#select22_'+id[1]).on('change',function(e){
        var mod_id=e.target.value;
      
        var base_url = {!! json_encode(url('/')) !!}+'/get_action?mod_id='+ mod_id;
          
        $.get(base_url, function (data) {
            $('#multiselect2_'+id[1]).empty();
            $.each(data,function(index,catobj){
                $('#multiselect2_'+id[1]).append('<option value="'+catobj.act_id+'">'+catobj.act_name+'</option>');
            });
            $('#multiselect2_'+id[1]).multiselect('rebuild');
        });
    });
});
    

var i=$('table tr').length;
$(".addmore").on('click',function(){
    html = '<tr>';
    html += '<td><input class="case" type="checkbox"/></td>';

    html += '<td><select class="form-control autocomplete_txt" data-type="mod_id" onchange="get_action('+i+')" name="mod_id[]" id="select22_'+i+'" required="required"  ><option value="0">Select Module</option>@foreach($module as $mod)<option value="{{$mod->mod_id}}">{{$mod->mod_name}}</option>@endforeach<option value="add"></option></select><input type="hidden" data-type="hiddenChoices" class="form-control autocomplete_txt" autocomplete="off" name="hiddenChoices[]" id="hiddenChoices_'+i+'" value=""></td>';
 
    html += '<td><select data-type="act_id" name="act_id[]" id="multiselect2_'+i+'" class="form-control b_multiselect autocomplete_txt" multiple="multiple"></select></td>';
  
    html += '</tr>';
    $('table').append(html);

    // $("#select22_"+i).select2({
    //     placeholder: "Select Module",
    //     theme:"bootstrap",
    //     width:"100%",
    // });
    $('.b_multiselect').multiselect('destroy');
    $('.b_multiselect').multiselect();
    $("#multiselect2_"+i).multiselect({
        enableFiltering: true,
        includeSelectAllOption: true,
        maxHeight: 270,
        dropUp: true,       
        enableCaseInsensitiveFiltering : true,
        selectAllValue: 'multiselect-all',
        onDropdownHidden: $(document).on('change keyup blur','.autocomplete_txt',function(){
            id_arr = $(this).attr('id');
            id = id_arr.split("_");

            $('[name="act_id"]').change(function(){
                $("#hiddenChoices_"+id[1]).val($("#multiselect2_"+id[1]).val().join(','));
            })
        })
    });
    i++;
});
function get_action(id){
    var mod_id=document.getElementById('select22_'+id).value;
    var base_url = {!! json_encode(url('/')) !!}+'/get_action?mod_id='+ mod_id;
    $.get(base_url, function (data) {
        $("#multiselect2_"+id).empty();
        $.each(data,function(index,catobj){     
            $("#multiselect2_"+id).append('<option value="'+catobj.act_id+'">'+catobj.act_name+'</option>'); 
        });
        $("#multiselect2_"+id).multiselect('rebuild');
    });
}

//to check all checkboxes
$(document).on('change','#check_all',function(){
    $('input[class=case]:checkbox').prop("checked", $(this).is(':checked'));
});

//deletes the selected table rows
$(".delete").on('click', function() {
    $('.case:checkbox:checked').parents("tr").remove();
    $('#check_all').prop("checked", false); 
});

///Fynally Submit The form In database
var form = document.getElementById("form-id");

document.getElementById("your-id").addEventListener("click", function () {
    form_submit()
});
function  check_table_duplicate(rol_name) {
    var rol_id = "<?php echo $role->rol_id; ?>"
    var trHtml=""
    var base_url = {!! json_encode(url('/')) !!}+'/check_table?rol_name='+rol_name+'&rol_id='+rol_id;
                        
    $.getJSON(base_url, function (json) {
        if(json == 0) {
            $('#your-id').attr('disabled', 'disabled');
            $('#preloader').show();
            form.submit();
        } else {                       
            trHtml += 'Same Role Name Not Allow...';
            swal("Incomplete Information...!", trHtml, "warning");
        }                             
    })

}
  
function form_submit() {
    var rol_name=$('#rol_name').val();
    var dept_id=$('#select21').val();
    var trHtml = "";
   
    if (dept_id == "") {
        trHtml += "Department Must Be Fill..<br>";
    } 
    if (rol_name == 0 || rol_name == "") {
        trHtml += "Role Name Must be filled out.. <br>";
    }   
    var tr_count = document.getElementById("myTable").rows.length-1;
    var module = "";
    var action="";
    var column = false;
    var differ=false;
    for(j=1;j<=tr_count;j++){
     
        $('.autocomplete_txt').each(function(){
            id_arr = $(this).attr('id');
            id = id_arr.split("_");
            module  = $('#select22_'+j).val();
            action = $('#multiselect2_'+j).val();
     
            if(module == "" || module == 0){
                column = true;
                trHtml += "Module Must be filled out..<br>";
                return false; 
            }
            if(action == null){
                column = true;
                trHtml += "Action Must Be Filled out.. <br>";
                return false; 
            }
        });
        for(k=j+1;k<=tr_count;k++){
            
            if($('#select22_'+j).val() == $('#select22_'+k).val() && j != k){
                trHtml += "Module Must be Different..<br>";
                differ = true;
            }
        }
    }
    if(rol_name !=  "" && module != "0" && action !=  "null" && differ==false && column != true) {
        check_table_duplicate(rol_name);           
    } else {
        swal("Incomplete Information...!", trHtml, "warning");
    } 
}

window.onload = function() {
    var tr_count = document.getElementById("myTable").rows.length - 1;
    var i=1;
    @foreach($umo_actions as $action)
        var a='<?php  echo $action; ?>';
        var dataarray=a.split(",");
        $("#multiselect2_"+i).val(dataarray).change();
        $("#multiselect2_"+i).multiselect('refresh');               
        $('#hiddenChoices_'+i).val($('#multiselect2_'+i).val().join(','));
        i++;        
    @endforeach
    $('#ajax_preloader').hide();
};

var tr_count = document.getElementById("myTable").rows.length - 1;
for(j=1;j<=tr_count;j++){
    // $("#select22_"+j).select2({
    //     placeholder: "Select Module",
    //     theme:"bootstrap",
    //     width:"100%"
    // });
    $("#multiselect2_"+j).multiselect({
        // enableFiltering: true,
        // includeSelectAllOption: true,
        // maxHeight: 270,
        // dropUp: true,
        // selectAllValue: 'multiselect-all',
        // allowClear: true,
        onDropdownHidden: $(document).on('click change keydown keyup','.autocomplete_txt', function(event) {
            id_arr = $(this).attr('id');
            id = id_arr.split("_");
            $("#multiselect2_"+id[1]).multiselect('refresh');
            if($('#multiselect2_'+id[1]).val() != null){
                $('#hiddenChoices_'+id[1]).val($('#multiselect2_'+id[1]).val().join(','));
            }
        })
    });
}
//$("#select21").select2({placeholder: "Select Module",theme:"bootstrap",width:"100%"});
</script>
@stop