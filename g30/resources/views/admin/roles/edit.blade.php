
<div class="row">
    <div class="col-md-12">
        <div class="portlet box green ">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-user"></i>
                    <span class="caption-subject capitalize"> Roles List</span>  
                     
                </div>
                <div class="actions">

       
                </div>
            </div>
            <div class="portlet-body">
                <form class="form-horizontal" name="frmTest" id="form-id" method="post" action="{{ route('update_roles',$role->rol_id)}}">
                    <!-- CSRF Token -->
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <input type="hidden" name="rol_id" value="<?php echo $role->rol_id ?>">
                    <div class="col-sm-4">
                        <label>Role Name</label>
                        <input type="text" name="rol_name" class="form-control" placeholder=" Role Name" value="{{$role->rol_name}}" required="" autofocus >
                    </div>
                    <div class="col-sm-4">
                        <label>Department</label>
                        <select class="form-control input-sm" name="dept_id" required="required"  >
                            <option value="0" selected>Select Department</option>
                          
                        </select>
                    </div>
                    <br><br>

                    <div align="right"> 
                    <button class="btn btn-danger delete" type="button">- Delete</button>
                    <button class="btn btn-success addmore"  type="button">+ Add More</button></div>
  
 
                    <div class='row'>
                        <div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th width="2%"><input class="formcontrol" type="checkbox"/></th>
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
                                            <select class="form-control autocomplete_txt" data-type="mod_id" name="mod_id[]" required="required"  >

                                            @foreach($module as $mod)
                                                @if($mod->mod_id == $row->mod_id) 
                                                    {{$select = " selected=selected "}}
                                                    @else
                                                    {{$select = ''}}
                                                    @endif
                                                <option value="{{$mod->mod_id}}" {{$select}}>{{$mod->mod_name}}</option>
                                            @endforeach
                                            </select>
                                            <input type="hidden" data-type="hiddenChoices" class="form-control" autocomplete="off" name="hiddenChoices[]" value="{{$row->umo_actions}}"/>
                                        </td>
                   
                                        <td>
                                            <select class="form-control multiselect2" data-type="act_id" name="act_id[]" multiple="multiple">
                                            @foreach($role_detail_actions as $action_mod)
         
                                            @if(($action_mod->umo_actions == $row->umo_actions) && ($action_mod->mod_id == $row->mod_id))

                                           
                                             @if(strpos(' '.$row->umo_actions,$action_mod->act_id)>0)
                                            {{$select = " selected=selected "}}
                                            @else
                                            {{$select = ''}}
                                            @endif

                                            <option value="{{$action_mod->act_id}}" {{$select}}> {{ $action_mod->act_name }}</option>
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
                            
                            <button class="btn btn-success" onclick="formSubmit()">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

        
<script type="text/javascript">
$(function() {
   $(".multiselect2").multiselect("refresh");    
});

$(document).on('click', '.addmore', function(event){  
    event.preventDefault(); //prevent default action 
    event.stopImmediatePropagation();
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
</script>