<style type="text/css">
  th.rotate {
     height: 120px;
     white-space: nowrap;
     padding-bottom: 15px !important;
 }

 th.rotate > div {
  transform: rotate(270deg);
  width: 30px;
}
</style>

<div class="row">
    <div class="col-md-12">
        <div class="portlet box green ">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-user"></i>
                    <span class="caption-subject capitalize"> {{$tbl_m_users->first_name}}&nbsp;{{$tbl_m_users->last_name}}&nbsp;&nbsp;({{$tbl_m_users->email}}),&nbsp;Ref.ID: {{$tbl_m_users->id}}</span>
                    <h4><b>&nbsp;&nbsp;&nbsp;&nbsp;{{$tbl_m_users->rol_name}} -</b></h4>
                </div>
            </div>
            <div class="portlet-body">
                <form method="POST" id="myform" action="">
                    <table class="table table-bordered " id="table1">
                        <thead>
                            <tr class="filters" style="height:20px; ">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                <th>Parent menu</th>
                                <th>Child Menu</th>
                                @foreach($tbl_m_module_actions as $module_action)
                                <th class="rotate"><div>{{$module_action->act_name}}</div></th>
                                @endforeach
                                <th class="rotate"><div>Check All<div></th>
                            </tr>
                        </thead>

                        <tbody>

                            @foreach($tbl_m_modules as $module)
                            <?php $chk = '';  $disabled = '';$ckh_all1=""?> 
                            <tr>
                                @if($module->mod_type == "Parent")
                                <td>{{$module->mod_name}}</td>
                                <td></td>
                                @else
                                <td></td>
                                <td>{{$module->mod_name}}</td>
                                @endif
                                <input type="hidden" name="mod_id[{{ $module->mod_id }}]" value="{{$module->mod_id}}">
                                <?php 
                                $chk_count = 0;
                                $mod_count = 0;
                                $disable_all = '';
                                ?>
                                @foreach($tbl_m_module_actions as $module_action)
                                @if($module->mod_type != "Parent")
                                    <?php $chk = ''; $txt_color=''; $disable = "";?> 

                                    @if(strpos(' '.$module->umo_actions,$module_action->act_id))
                                    <?php $chk = ' checked=checked '; $txt_color=' font-weight: bold;color:red';
                                          $disable ='';  
                                    $chk_count = $chk_count+1;  
                                    ?> 
                                    @endif

                                    @if(strpos(' '.$module->rol_action,$module_action->act_id))
                                    <?php $chk = ' checked=checked '; $txt_color=' font-weight: bold;color:red '; 
                                          $disable ='disabled';
                                    $chk_count = $chk_count+1;  
                                    ?> 
                                    @endif
                                 
                                
                                


                                @if(strpos(' '.$module->mod_actions,$module_action->act_id))
                                <?php 
                                $mod_count = $mod_count+1;  
                                $mod_id= "mod_".$module->mod_id.'_'.$module_action->act_id;  
                                ?> 
                                @else
                                <?php $disable = 'disabled'; 
                                $mod_id = '';  
                                ?> 
                                @endif
                                <td>
                                  @if(strpos(' '.$module->mod_actions,$module_action->act_id))
                                    <span  id="td_{{$mod_id}}" style="{{$txt_color}}">{{$module_action->act_id}}</span>&nbsp;&nbsp;
                                    <input style="vertical-align: text-top;" type="checkbox" name="mod_id[{{$module->mod_id}}][{{$module_action->act_id}}]"{{$chk}} {{$disable}} value="{{$module->mod_id}}" id="{{$mod_id}}" onChange="chkboxstatus('mod_{{$module->mod_id}}','{{$module->mod_actions}}')">
                                 </td>
                                 @else

                                 @endif 
                                @else
                                <td></td>
                                @endif
                                @endforeach
                                <td>
                                    @if($module->mod_type != "Parent")    
                                    <?php 
                                    if($mod_count == $chk_count){
                                        $ckh_all = "checked=checked";
                                        $all_color=' font-weight: bold;color:red';
                                    }else{
                                        $ckh_all = '';
                                        $all_color=' ';
                                    }
                                if($module->rol_action != ""){
                                      $mod_act =explode(',',$module->mod_actions);
                                      $rol_act =explode(',',$module->rol_action);
                                      $mod_action = implode(",",array_diff($mod_act,$rol_act));
                                      if($mod_action == ""){
                                        $disable_all = 'disabled';
                                      }else{
                                        $disable_all = '';
                                      }
                                        
                                        
                                        

                                }else{
                                    $mod_action = $module->mod_actions;
                                }   
                                        $mod_act =count(explode(',',$module->mod_actions));
                                        $umo_act =explode(',',$module->umo_actions);
                                        $rol_act =explode(',',$module->rol_action);
                                        $array_merge = count(array_filter(array_unique(array_merge($umo_act,$rol_act))));
                                        if($mod_act == $array_merge){
                                          $ckh_all="checked=checked";
                                          $all_color=' font-weight: bold;color:red';
                                        }
                                        
                                    ?>
                                    <input  type="checkbox" {{$disable_all}}  id="mod_{{$module->mod_id}}" value="mod_{{$module->mod_id}}" name="all" {{$ckh_all}} onChange="check('mod_{{$module->mod_id}}','{{$mod_action}}')">&nbsp;<span id="all_mod_{{$module->mod_id}}" style="{{$all_color}}">All</span>
                                    @endif
                                </td>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <input class="btn btn-success" type="submit" name="submit" value="Save Permission">
            </form>
            </div>
        </div>
    </div>
</div>

        
<script>

    $(document).on('keyup',function(evt) {
        if (evt.keyCode == 27) {

          javascript:esc_keypress('User Permission')
      }
  });
    function check(mod_id,mod_actions){
       var mod = new Array();
       mod = mod_actions.split(",");
       /*start: mod togle check all checked to true and unchecked to return false*/
       var mod_togle = document.getElementById(mod_id).checked;
       /*start: mod togle check all checked to true and unchecked to return false*/
       for(i=0;i<=mod.length-1;i++){
        var name = mod_id+'_'+mod[i];     
        if(mod_togle == true){
            document.getElementById(name).checked = true;
            document.getElementById("td_"+name).style.color = "red";   
            document.getElementById('td_'+name).style.fontWeight  = "bold";
            document.getElementById('all_'+mod_id).style.color = "red";
            document.getElementById('all_'+mod_id).style.fontWeight  = "bold";       
        }  
        if(mod_togle == false){
            document.getElementById(name).checked = false;
            document.getElementById("td_"+name).style.color = "black";  
            document.getElementById('td_'+name).style.fontWeight  = "normal";

            document.getElementById('all_'+mod_id).style.color = "black";        
            document.getElementById('all_'+mod_id).style.fontWeight  = "normal";       
        }  
    }
}
function chkboxstatus(mod_id,mod_actions){
 var mod = new Array();
 mod = mod_actions.split(",");
 /*start: start code when check all check box then last of check all "checked"*/
 var temp1 = 0;
 for(i=0;i<=mod.length-1;i++){
    var name = mod_id+'_'+mod[i]; 
    if(document.getElementById(name).checked == true)
    {
        temp1 = temp1+1;
        document.getElementById("td_"+name).style.color = "red";
        document.getElementById('td_'+name).style.fontWeight  = "bold";
    }
    else
    {
       document.getElementById("td_"+name).style.color = "black";
       document.getElementById('td_'+name).style.fontWeight  = "normal";   
   }
}     
if(mod.length == temp1){
 document.getElementById(mod_id).checked = true;
 document.getElementById('all_'+mod_id).style.color = "red";   
 document.getElementById('all_'+mod_id).style.fontWeight  = "bold";       
}else{
    document.getElementById(mod_id).checked = false;
    document.getElementById('all_'+mod_id).style.color = "black";
    document.getElementById('all_'+mod_id).style.fontWeight  = "normal";          
}  
}
$('#myform').submit(function() {
    $('#preloader').show();
});
$(document).ajaxStart(function(){
   $('#preloader').show();
});
$(document).ajaxComplete(function(){
   $("#preloader").fadeOut(900);
}); 
</script> 
