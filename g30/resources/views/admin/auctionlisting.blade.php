
<div class="row">
    <div class="col-md-12">
        <div class="portlet box green">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-user"></i>
                    <span class="caption-subject"> Auctions List</span>
                </div>
                <div class="actions">
                </div>
            </div>
            <div class="portlet-body">
                <table class="table table-striped table-bordered table-hover table-checkable order-column" id="get_auction_list_data">
                    <thead>
                        <tr>
                            
                            <th>#</th>
                            <th>Auction No</th>
                            <th>Auction Ref No</th>
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
   $('#get_auction_list_data').DataTable({
        processing: true,
        serverSide: true,
        stateSave: true,
         ajax: '{{ route('ajaxauctionlisting') }}',
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