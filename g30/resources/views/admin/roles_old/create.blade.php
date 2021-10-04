
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
                            <form class="form-horizontal" name="frmTest" method="post" action="{{ route('create_roles')}}">
                                <!-- CSRF Token -->
                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                <div class="col-sm-4">
                                    <label>Role Name</label>
                                    <input type="text" name="rol_name" class="form-control" placeholder=" Role Name" value="" autofocus>
                                </div>
                                             
                                <div class="col-sm-4">
                                    <label>Department</label>
                                    <select class="form-control input-sm" name="dept_id">
                                        <option value="0" selected>Select Department</option>                           
                                    </select>
                                </div>
    
                                <div align="right"> 
                                <button class="btn btn-danger delete" type="button">- Delete</button>
                                <button class="btn btn-success addmore" type="button">+ Add More</button></div>
                                <br><br>          
             
                                <div class='row'>
                                    <div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>
                                        <table class="table table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th width="2%"><input class="formcontrol check_all" type="checkbox"/></th>
                                                    <th width="7%">Module</th>
                                                    <th width="7%">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><input class="case check_demo" type="checkbox" /></td>
                                                    <td>
                                                        <select class="form-control autocomplete_txt" data-type="mod_id" name="mod_id[]">
                                                            <option value="0">Select Module</option>
                                                            @foreach($module as $mod)
                                                            <option value="{{$mod->mod_id}}">{{$mod->mod_name}}</option>
                                                            @endforeach
                                                            <option value="add"></option>
                                                        </select>
                                                        <input type="hidden" data-type="hiddenChoices" class="form-control" autocomplete="off" name="hiddenChoices[]" value="" />
                                                    </td>
                                                    <td>
                                                        <select class="btn btn-default multiselect2" data-type="act_id" name="act_id" multiple="multiple" data-width="100%">
                                                            
                                                        </select>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
       
         
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-4">
                                       <!--  <a href="#" id="your-id" name="your-id" class="btn btn-success">Save</a> -->
                                        <button class="btn btn-success" onclick="formSubmit()">Save</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>




<script type="text/javascript">
//first load 
//$('.multiselect').multiselect(); 
$(".multiselect2").multiselect("refresh");    
//$(".autocomplete_txt").select2();
/*$('.b_multiselect').multiselect();    
$("#multiselect2_1").multiselect({
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
            $("#hiddenChoices_"+id[1]).val($("#multiselect2_1").val().join(','));
        })
    })
});*/

$(".addmore").on('click',function(){
  //var i = document.getElementById("myTable").rows.length;
  var i = $(this).closest('form').find('table tr').length;
    html = '<tr>';
    html += '<td><input class="case check_demo" type="checkbox"/></td>';
    html += '<td><select class="form-control autocomplete_txt" data-type="mod_id" name="mod_id[]"><option value="0">Select Module</option>@foreach($module as $mod)<option value="{{$mod->mod_id}}">{{$mod->mod_name}}</option>@endforeach<option value="add"></option></select><input type="hidden" data-type="hiddenChoices" class="form-control" autocomplete="off" name="hiddenChoices[]" value=""></td>';

    html += '<td><select data-type="act_id" name="act_id" class="btn btn-default multiselect2" multiple="multiple" data-width="100%"></select></td>';
  
    html += '</tr>';
    $(this).closest('form').find('table').append(html);
    // $("#select22_"+i).select2({
    //     placeholder: "Select Module",
    //     theme:"bootstrap",
    //     allowClear: true,
    //     width:"100%"
    // });
    $('.multiselect2').multiselect('destroy');
    $(".multiselect2").multiselect("refresh");    
    /*$('.multiselect2').multiselect({
        enableFiltering: true,
        includeSelectAllOption: true,
        maxHeight: 270,
        dropUp: true,		
        enableCaseInsensitiveFiltering : true,
        selectAllValue: 'multiselect-all',
        onDropdownHidden: $(document).on('change keyup blur','.multiselect2',function(){
            //id_arr = $(this).attr('id');
            //id = id_arr.split("_");

            $('[name="act_id"]').change(function(){
            //$("#hiddenChoices_"+id[1]).val($("#multiselect2_"+id[1]).val().join(','));
            $(this).closest('tr').find('input[data-type="hiddenChoices"]').val($(this).val().join(','));
            });
        })
    });*/
    i++;
});
$(document).on('change keyup blur','.multiselect2',function(){
    var tr = $(this).closest('tr');
    var ths = $(this);
    //tr.find('[name="act_id"]').change(function(){
    //$("#hiddenChoices_"+id[1]).val($("#multiselect2_"+id[1]).val().join(','));
    tr.find('input[data-type="hiddenChoices"]').val(ths.val().join(','));
    //});
});
$(document).on('change','.autocomplete_txt',function(){
 var mod_id = $(this).val();
 var ths = $(this);
 var base_url = {!! json_encode(url('/')) !!}+'/get_action?mod_id='+ mod_id;      
    $.get(base_url, function (data) {     
        //$("#multiselect2_"+id).empty();
        ths.closest('tr').find('.multiselect2').empty();
        $.each(data,function(index,catobj){    
            //$("#multiselect2_"+id).append('<option value="'+catobj.act_id+'">'+catobj.act_name+'</option>'); 
            ths.closest('tr').find('.multiselect2').append('<option value="'+catobj.act_id+'">'+catobj.act_name+'</option>'); 
        });
        //$("#multiselect2_"+id).multiselect('rebuild');
        ths.closest('tr').find('.multiselect2').multiselect('rebuild');
    });
});
//to check all checkboxes
$(document).on('change','.check_all',function(){
    $('input[class=case]:checkbox').prop("checked", $(this).is(':checked'));
});
$(document).on('click','.delete', function(event) { 
    //id_arr = $('.check_demo:checkbox:checked').attr('id');
    //id = id_arr.split("_");
    $('.case:checkbox:checked').parents("tr").remove();
    $('.check_all').prop("checked", false); 
});
/*function get_action(id){
    //var mod_id=document.getElementById('select22_'+id).value;
    var mod_id = $(this).val();
    alert(mod_id);
    var base_url = {!! json_encode(url('/')) !!}+'/get_action?mod_id='+ mod_id;      
    $.get(base_url, function (data) {     
        $("#multiselect2_"+id).empty();
        $.each(data,function(index,catobj){    
            $("#multiselect2_"+id).append('<option value="'+catobj.act_id+'">'+catobj.act_name+'</option>'); 
        });
        $("#multiselect2_"+id).multiselect('rebuild');
    });
}*/



///Fynally Submit The form In database
/*var form = document.getElementById("form-id");
document.getElementById("your-id").addEventListener("click", function () {
    form_submit();
});*/

/*function  check_table_duplicate(rol_name) {
    var trHtml=""
    var base_url = {!! json_encode(url('/')) !!}+'/check_table?rol_name='+rol_name;
                        
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
   
    //if (dept_id == 0 || dept_id == "") {
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
} */  
//$('#select22_1').select2({theme:"bootstrap",placeholder: "Select Module",allowclear: true,width:"100%"});
//$('#select21').select2({theme:"bootstrap",placeholder: "Select Department",allowclear: true,width:"100%"});
</script>
