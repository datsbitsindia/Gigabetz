
<div class="row">
    <div class="col-md-12">
        <div class="portlet box green">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-user"></i>
                    <span class="caption-subject"> Tenders List</span>
                </div>
                <div class="actions">             
                  @if(strpos(' '.$data,'C')>0)
                    <a class="btn btn-sm white sub_menu_tab_a" parent-data-id="{{$moduledata->parent_data_id}}" parent-title="{{$moduledata->parent_title}}" data-action="C" data-key="0" data-link="{{ route('tendercreate') }}"><span class="glyphicon glyphicon-plus"></span> @lang('create')</a>

                  @endif
                </div>
            </div>
            <div class="portlet-body">
                <table class="table table-striped table-bordered table-hover table-checkable order-column" id="get_tender_list_data">
                    <thead>
                        <tr>
                            
                            <th>#</th>
                            <th>Tender No</th>
                            <th>Tender Ref No</th>
                            <th>Submit Date</th>                                   
                            <th>Amount</th>
                            <th>Works</th>
                            <th>Action</th>
                    
                        </tr>
                    </thead>
                    
                </table>
            </div>
        </div>
    </div>
</div>

<script>
 $(function(){
   $('#get_tender_list_data').DataTable({
        processing: true,
        serverSide: true,
        stateSave: true,
         ajax: '{{ route('ajaxtenderlisting') }}',
         columns: [
        {data: 'ti_id', name: 'ti_id'},
        {data: 'ti_no', name: 'ti_no'},
        {data: 'ti_ref_no', name: 'ti_ref_no'},
        {data: 'ti_submit_date', name: 'ti_submit_date'},
        {data: 'ti_amount', name: 'ti_amount'},
        {data: 'ti_work', name: 'ti_work'},
        {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });
 });   
</script>    