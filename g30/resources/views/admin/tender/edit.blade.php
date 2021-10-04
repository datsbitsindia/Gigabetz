
            <div class="row">
                <div class="col-md-12">
                    <div class="portlet light ">
                        <div class="portlet-title">
                            <div class="caption font-dark">
                                <i class="icon-user font-dark"></i>
                                <span class="caption-subject bold capitalize"> New Module</span>
                            </div>
                        </div>
                        <div class="portlet-body">
                         <form class="form-horizontal" name="frmModule" method="post" action="{{ route('update_modules',$tbl_m_modules->mod_id)}}">
                        <!-- CSRF Token -->
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">
                                Type  
                            </label>
                            <?php $select_1="";?>
                            <div class="col-sm-5">
                                <select class="form-control select2" name="mod_type" autofocus>
                                    @foreach($module_master as $mod)
                                        @if($tbl_m_modules->mod_type == $mod->mod_name)
                                            <?php $select = "selected=selected";?>  
                                        @else
                                            <?php $select = "";?>
                                       @endif    
                                    <option {{$select}} value="{{$mod->mod_name}}">{{$mod->mod_name}}</option>
                                @endforeach
                                @if($tbl_m_modules->mod_type == "Parent")
                                  <?php $select_1 = "selected=selected";
                                    $temp = "disabled";
                                  ?>
                                  @else
                                  <?php $temp = "";?>
                                @endif
                                <option {{$select_1}} value="Parent">Parent</option>
                             </select>
                            </div>
                           
                        </div>
                          <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">
                                Module Name
                            </label>
                            <div class="col-sm-5">
                                <input type="text" name="mod_name" class="form-control" placeholder="Module Name"
                                       value="{{$tbl_m_modules->mod_name}}">
                                     
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">
                                Module URL                      
                                </label>
                            <div class="col-sm-5">
                                <input type="text" {{$temp}} name="mod_url" class="form-control" placeholder="Module Url"
                                       value="{{$tbl_m_modules->mod_url}}">
                                     
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">
                                Action
                                <?php 
                                $action_arr = explode(',',$tbl_m_modules->mod_actions); 
                                ?>
                            </label>
                            <div class="col-sm-5">

                                <select multiple="multiple" class="form-control multiselect2" name="mod_action[]"> 
                                    @foreach($module_action as $mod_action)
                                    <option value="{{$mod_action->act_id}}" <?php if(in_array($mod_action->act_id, $action_arr)){ echo "selected"; } ?>>{{$mod_action->act_name}}</option>
                                    @endforeach
                                </select>
                              
                            </div>
                        </div>
                         <div class="form-group">
                            <label class="col-sm-2 control-label">
                                Tech
                            </label>
                            <div class="col-sm-5">
                                   <input type="checkbox" name="mod_tech" value="1"  <?php if($tbl_m_modules->mod_tech == 1)  echo 'checked="checked"';?>>
                            </div>
                        </div>
                          <div class="form-group">
                            <label class="col-sm-2 control-label">
                                Super
                            </label>
                            <div class="col-sm-5">
                                   <input type="checkbox" name="mod_super" value="1"  <?php if($tbl_m_modules->mod_super == 1)  echo 'checked="checked"';?>>
                            </div>
                        </div>

                    <div class="form-group">
                            <label class="col-sm-2 control-label">
                                Is Child
                            </label>
                            <div class="col-sm-5">
                                   <input type="checkbox" name="mod_is_child" value="1" <?php if($tbl_m_modules->mod_is_child == 1)  echo 'checked="checked"';?>>
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
$(function() {
    //var data="<?php //echo $tbl_m_modules->mod_actions; ?>";
    //var dataarray=data.split(",");
    // Set the value
    //$(".multiselect2").val(dataarray);
    // Then refresh
    $(".multiselect2").multiselect("refresh");
}); 

$("body").on("change",'select[name="mod_type"]',function(e){
        var elementValue = $(this).val();
        if(elementValue == "Parent"){
            $(this).closest('form').find('input[name="mod_url"]').prop('disabled',true);
            //$(".btn-group").children().attr("disabled","disabled"); 
            $(this).closest('form').find('.btn-group').children().attr("disabled","disabled");      
        }
        if(elementValue != "Parent"){
            $(this).closest('form').find('input[name="mod_url"]').prop('disabled',false);
            //$(".btn-group").children().attr("disabled",false);
            $(this).closest('form').find('.btn-group').children().attr("disabled",false);      
        }
});
/*window.onload = function() {
       var mod_type ="<?php //echo $tbl_m_modules->mod_type;?>";
       $('select[name="mod_type"]').val("Optional");
       modtype();
 }
function modtype(){
    var element = document.getElementById("mod_type");
        var elementValue = element.value;
       
        var child_record = "<?php //echo $child_count;?>";
        if(child_record == 1){
            document.getElementById("mod_type").disabled = true;  
        }
        if(elementValue == "Parent"){
            document.getElementById("mod_url").disabled = true;
            $('#btn-group').attr('disabled', true);
            $(".btn-group").children().attr("disabled","disabled");  
        }
        if(elementValue != "Parent"){
            document.getElementById("mod_url").disabled = false;
            $(".btn-group").children().attr("disabled",false);
        }
}

///Fynally Submit The form In database
var form = document.getElementById("form-id");
document.getElementById("your-id").addEventListener("click", function () {
   form_submit()
 });

function checkmodule(mod_name,mod_id)
{
    var trHtml="";
    var base_url = {!! json_encode(url('/')) !!}+'/check_module_duplication?mod_name='+ mod_name+'&mod_id='+mod_id;
   
            $.getJSON(base_url, function (json) {
                  console.log(json);
                  if(json == 0)
                  {
                      $('#your-id').attr('disabled', 'disabled');
                      $('#preloader').show();
                      form.submit();
                  }
                  else
                  {
                      trHtml += "Same Module Entry Allready Available..";
                      swal("Incomplete Information...!", trHtml, "warning");
                  }
             })
}
*/
/*
function form_submit()
{
  var mod_type=$('#mod_type').val();
  var mod_name=$('#mod_name').val();
  var multiselect2=$('#multiselect2').val();
  var mod_id ='<?php //echo $tbl_m_modules->mod_id; ?>';

 
   var mod_url = 0;
  if(mod_type != "Parent")
  {
      mod_url=$('#mod_url').val();
  }
  
 
    var trHtml = "";
 
if (mod_type == 0 || mod_type == "") {
 
        trHtml += "Type Must Be Fill.. <br>";
 
     }

     if (mod_name == 0 || mod_name == "") {
  
          trHtml += "Module Name  Must be filled out..<br>";
      
    }
     
      if (multiselect2 == 0 || multiselect2 == "") {
  
          trHtml += "Action Must be filled out.. <br>";
      
    }
     
       
    if(mod_type != "" && mod_name !=  "" && multiselect2 !=  "")
    {
            if(mod_type != "Parent")
            {
                        if (mod_url == 0 || mod_url == "") {
  
                          trHtml += "Module URL  Must be filled out.. <br>";
                      
                        }
                         
                         if(mod_url != "" )
                           {

                                 checkmodule(mod_name,mod_id);
                           }
                    
                        else{
                             swal("Incomplete Information...!", trHtml, "warning");
                        }
                    }
                    else
                        {
                            checkmodule(mod_name,mod_id);
                        }

            }
    else
      {
          swal("Incomplete Information...!", trHtml, "warning");
      }
}*/
</script>

