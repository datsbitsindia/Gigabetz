<!-- END PAGE HEADER-->
<div class="row">
    <div class="col-md-12">
        <div class="portlet box green ">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-user"></i>
                    <span class="caption-subject"> Modules List</span>
                  
                </div>
                
                <div class="actions">
                  @if(strpos(' '.$data,'C')>0)
                    <a class="btn btn-sm white sub_menu_tab_a" parent-data-id="{{$moduledata->parent_data_id}}" parent-title="{{$moduledata->parent_title}}" data-action="C" data-key="0" data-link="{{ route('create/modules') }}"><span class="glyphicon glyphicon-plus"></span> @lang('create')</a>

                  @endif
                 
                  @if(strpos(' '.$data,'R')>0)
                    <a class="btn btn-sm white sub_menu_tab_a" parent-data-id="{{$moduledata->parent_data_id}}" parent-title="{{$moduledata->parent_title}}" data-action="R" data-key="0" data-link="{{ route('arrange/modules') }}"><span class="glyphicon glyphicon-plus"></span>Rearrange</a>
                  @endif
                </div>
            </div>
            <div class="portlet-body">
              
                  <table class="display" id="module_list">
                    <thead>
                      <tr>
                        @if(strpos(' '.$data,'L')>0)
                          <th>mod_do</th>
                          <th>Id</th>
                          <th>Name</th>
                          <th>Type</th>
                          <th>Action</th>
                          <th>URL</th>
                          <th>Tech</th>
                          <th>Super</th>
                          <th>Child</th>
                            @if(strpos(' '.$data,'E')>0)
                          <th>Edit</th>
                          @endif
                            @if(strpos(' '.$data,'D')>0)
                          <th>Delete</th>

                          @endif
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
          @if(strpos(' '.$data,'L')>0)
            var encdata = "<?php echo encrypt($data) ?>";
        var nEditing = null;
        var table = $('#module_list').DataTable({
            processing: true,
            stateSave: true,
            lengthMenu: [ [10, 15, 25, 50, 75, 100, -1], [10, 15, 25, 50, 75, 100, "All"] ],
            bPaginate: false,
            order: [[0,"asc"]] ,
            ajax: '{!! route('admin.modules.data') !!}',
            columns: [
                { data: 'mod_do', name: 'mod_do', visible: false, searchable: false},
                { data: 'mod_id', name: 'mod_id'},
                { data: 'mod_name', name: 'mod_name'},
                { data: 'mod_type', name: 'mod_type'},
                { data: 'mod_actions', name: 'mod_actions'},
                { data: 'mod_url', name: 'mod_url'},
                { data: 'tech', name: 'tech'},
                { data: 'super', name: 'super'},
                { data: 'child', name: 'child'},
                @if(strpos(' '.$data,'E')>0)
                {
                "render": 
                function ( data, type, full, meta ) {
                 var buttonID = +full.mod_id;
                return '<span class="span-link sub_menu_tab_a" parent-data-id="{{$moduledata->parent_data_id}}" parent-title="{{$moduledata->parent_title}}" data-action="E" data-key="'+buttonID+'" data-link="modules/'+buttonID+'/edit">Edit</span>'
                }
                ,orderable: false, searchable: false},
                @endif
                @if(strpos(' '.$data,'D')>0)
                {
                   sortable: false,
                   "render": function ( data, type, full, meta ) {
                      var buttonID = +full.mod_id;
                      //var  delete_url = {!! json_encode(url('/')) !!}+'/module_delete_data?id='+buttonID; 
                      return '<a href="#" onclick=javascript:json_delete_module("'+buttonID+'")>Delete</a>'             
  						  }
         ,orderable: false, searchable: false},
         @endif      

            ]
        });
        @endif
        table.on( 'draw', function () {
            $('.livicon').each(function(){
                $(this).updateLivicon();
            });
        } );
    });

	$(document).ready(function() {
    var table = $('#module_list').DataTable();
    $('#module_list tbody').on( 'mouseenter', 'tr', function () {
        if ( $(this).hasClass('selected') ) {
            $(this).removeClass('selected');
        }
        else {
            table.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
        }
    } );
    $('#button').click( function () {
        table.row('.selected').remove().draw( false );
    } );
} );   

function json_delete_module(srno)
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
                   url : '{{route('delete/modules',['+srno+'])}}',
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
     })
}    
</script>



