<div class="row">
    <div class="col-md-12">
        <div class="portlet box green">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-user"></i>
                    <span class="caption-subject"> Roles List</span>
                </div>
                <div class="actions">
                    @if(strpos(' '.$data,'C')>0)

                        <span class="btn btn-sm white span-link sub_menu_tab_a" parent-data-id="{{$mod_action->parent_data_id}}" parent-title="{{$mod_action->parent_title}}" data-action="C" data-key="0" data-link="{{ route('create/roles') }}"><span class="glyphicon glyphicon-plus"></span>Create</span>
                       <!-- <a href="{{ route('create/roles') }}" class="btn btn-sm white"><span class="glyphicon glyphicon-plus"></span> @lang('create')</a>  -->
        
                    @endif
       
                </div>
            </div>
            <div class="portlet-body">
                <table class="table table-bordered " id="roles_list">
                    <thead>
                        <tr class="filters">
                        @if(strpos(' '.$data,'L')> 0 )
                            <th>Ref.ID</th>
                            <th>Role</th>
                            <th>Department</th>
                            
                            <th>Options</th>
                        @endif
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

        
<script type="text/javascript">
$(function() {
var delete_url="";
@if(strpos(' '.$data,'L')> 0 )
var encdata = "<?php echo encrypt($data) ?>";   
var nEditing = null;
var table = $('#roles_list').DataTable({
    processing: true,
    stateSave: true,            
    //sPaginationType: "full_numbers",
    lengthMenu: [ [10, 15, 25, 50, 75, 100, -1], [10, 15, 25, 50, 75, 100, "All"] ],
    
    ajax: '{!! route('admin.roles.data') !!}',
    columns: [
        { data: 'rol_id', name: 'rol_id'  },
        { data: 'rol_name', name: 'rol_name'  },
        { data: 'mmi_ref_name', name: 'mmi_ref_name' },        
        { data: "rol_id", render: function ( data, type, full, meta ) 
            {
                var buttonID = +full.rol_id;
                var _link='';
                @if(strpos(' '.$data,'E')>0) 			  
                    _link+= '&nbsp;⁞&nbsp;<a href="roles/'+buttonID+'/edit">Edit</a>'  
                @endif 
                @if(strpos(' '.$data,'D')>0) 			  
                    //delete_url = {!! json_encode(url('/')) !!}+'/roles_delete_data?id='+buttonID; 
                    _link+= '&nbsp;⁞&nbsp;<a href="#" onclick=javascript:json_delete_role("'+buttonID+'")>Delete</button>'   
                @endif 
                return _link.substring(7)
            },orderable: false,class: "right_side"
        },   
                ]
}); 
@endif
    // table.on( 'draw', function () {
    //     $('.livicon').each(function(){
    //         $(this).updateLivicon();
    //     });
    // });
});
      
/*$(document).ready(function() {
    var table = $('#table1').DataTable();
    $('#table1 tbody').on( 'mouseenter', 'tr', function () {
        if ( $(this).hasClass('selected') ) {
            $(this).removeClass('selected');
        }
        else {
            table.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
        }
    });
    $('#button').click( function () {
        table.row('.selected').remove().draw( false );
    });
});    
$(document).on('keyup',function(evt) {
    if (evt.keyCode == 27) {
      esc_keypress('Roles');
       //lert('a');
    }
});*/

function json_delete_role(srno)
{ 
  
    swal({
        title: 'Are you sure ?',
        html: "You want to Delete #"+srno,
        type: 'question',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes',
        cancelButtonText: 'No'
      }).then(function () {
        if(swal.getConfirmButton())
        { 
          <?php if(strpos(' '.$data,'D')>0){ ?>
                $.ajax({
                   //url: {!! json_encode(url('delete/modules')) !!},
                   url : '{{route('delete/roles',['+srno+'])}}',
                   data: {"id":srno},
                   cache: false,
                   type: "GET",
                   success: function(response) {
                      swal({
                        type: 'success',
                        title: 'Successfully Deleted!',
                        showConfirmButton: false,
                        timer: 1500
                      });
                      
                      return false;
                    },  
                });
         <?php }else{ ?>
           swal({
              type: 'error',
              title: 'Oops...',
              text: 'You have not assign Permission!',
              showConfirmButton: false,
              timer: 1500
            });
         <?php } ?>
        }

     }, function(dismiss) {
        if (dismiss === 'cancel' || dismiss === 'close') {
        // ignore
        }
    });
}    
</script>
