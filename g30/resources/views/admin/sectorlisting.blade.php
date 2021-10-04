 
<div class="row">
    <div class="col-md-12">
        <div class="portlet box green">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-user"></i>
                    <span class="caption-subject"> Sector List</span>
                </div>
                <div class="actions">             
                  @if(strpos(' '.$data,'C')>0)
                    <a class="btn btn-sm white sub_menu_tab_a" parent-data-id="{{$moduledata->parent_data_id}}" parent-title="{{$moduledata->parent_title}}" data-action="C" data-key="0" data-link="{{ route('sectorcreate') }}"><span class="glyphicon glyphicon-plus"></span> @lang('create')</a>
                  @endif
                </div>
            </div>
            <div class="portlet-body">
                <table class="table table-striped table-bordered table-hover table-checkable order-column" id="get_sector_list_data">
                    <thead>
                        <tr>
                            
                            <th>#</th>
                            <th>Sector Name</th>
                        </tr>
                    </thead>
                    
                </table>
            </div>
        </div>
    </div>
</div>
        
<script>
 $(function(){
   $('#get_sector_list_data').DataTable({
        processing: true,
        serverSide: true,
        stateSave: true,
         ajax: '{{ route('ajaxsectorlisting') }}',
         columns: [
        {data: 'id', name: 'id'},
        {data: 'name', name: 'name'},
        //{data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });
 });   
</script>    
