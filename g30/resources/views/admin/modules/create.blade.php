
<div class="row">
    <div class="col-md-12">
        <div class="portlet box green">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-user"></i>
                    <span class="caption-subject capitalize"> New Module</span>
                </div>
                <div class="actions">
                </div>
            </div>
            <div class="portlet-body">
                <form class="form-horizontal" name="frmModule" method="post" action="{{ route('create/modules')}}">
                    <!-- CSRF Token -->
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Type</label>
                        <div class="col-sm-5">
                            <select class="form-control" name="mod_type" autofocus>
                                <option value="Parent">Parent</option>
                                @foreach($module_master as $mod)
                                <option value="{{$mod->mod_name}}">{{$mod->mod_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Module Name</label>
                        <div class="col-sm-5">
                            <input type="text" name="mod_name" class="form-control" placeholder="Module Name" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Module URL</label>
                        <div class="col-sm-5">
                            <input type="text" name="mod_url" class="form-control" placeholder="Module Url" value="" disabled="disabled">     
                        </div>
                    </div>
                    <div class="form-group" id="mod_abc">
                        <label class="col-sm-2 control-label">Action</label>
                        <div class="col-sm-5">
                            <select multiple="multiple" class="form-control multiselect2" name="mod_action[]" data-width="100%"> 
                                @foreach($module_action as $mod_action)
                                <option value="{{$mod_action->act_id}}">{{$mod_action->act_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Tech</label>
                        <div class="col-sm-5">
                            <input type="checkbox" name="mod_tech" value="1" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Super</label>
                        <div class="col-sm-5">
                            <input type="checkbox" name="mod_super" value="1" >
                        </div>
                    </div>

                    <div class="form-group" id="mod_abc">
                        <label class="col-sm-2 control-label">Is Child</label>
                        <div class="col-sm-5">
                               <input type="checkbox" name="mod_is_child" value="1">
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
    //var data="";
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

/*function checkmodule(mod_name)
{
    var trHtml="";
    var base_url = {!! json_encode(url('/')) !!}+'/check_module_duplication?mod_name='+ mod_name;
    $.getJSON(base_url, function (json) {
          if(json == 0)
          {
              form.submit();
          }
          else
          {
            trHtml += "Same Module Entry Allready Available..";
            swal("Incomplete Information...!", trHtml, "warning");
          }
     });
}

function chkformSubmit(){
  var resultModule = checkFormModuleValidation();
  alert(resultModule);
  return false;
}*/
/*function checkFormModuleValidation()
{ 
//var mod_type=check.find('input[name="mod_type"]').val();
//var mod_name=check.find('input[name="mod_name"]').val();
//var multiselect2=check.find('select[name="mod_action"]').val();
var mod_type=$(this).closest('form').find('input[name="mod_type"]').val();
  alert(mod_type);
  var mod_url = 0;
  if(mod_type != "Parent")
  {
      mod_url= $('#mod_url').val();
  }
    var trHtml = "";
    if (mod_type == 0 || mod_type == "") {
        trHtml += "Type Must Be Fill.. <br>";
    }
     if (mod_name == 0 || mod_name == "") {
          trHtml += "Module Name  Must be filled out.. <br>";
    }
    if (multiselect2 == 0 || multiselect2 == "") {
          trHtml += "Action Must be filled out.. <br>"; 
    }
    if(mod_type != "" && mod_name !=  "" && multiselect2 !=  "" )
    {
       if(mod_type != "Parent")
        {
            if (mod_url == 0 || mod_url == "") {
              trHtml += "Module URL  Must be filled out.. <br>";
            }
          
             if(mod_url != "")
               {
                checkmodule(mod_name);
               }
            else{
                  swal("Incomplete Information...!", trHtml, "warning");
            }                        
        }
         else
            {
                checkmodule(mod_name);         
            }
    }
    else
    {       swal("Incomplete Information...!", trHtml, "warning");

    }
}*/
</script>
