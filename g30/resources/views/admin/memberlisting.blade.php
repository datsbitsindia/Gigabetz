@extends('admin.main')

@section('stylesheet')

@stop

@section('title')
Dashboard
@stop

@section('body')
page-header-fixed page-sidebar-closed-hide-logo page-content-white
@stop

@section('header')
@include('admin.partials._header')
@stop

@section('content')

    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content">
            <!-- BEGIN PAGE HEADER-->
            
            <!-- BEGIN PAGE BAR -->
            <div class="page-bar">
                <ul class="page-breadcrumb">
                    <li>
                        <a href="{{route('admindashboard')}}">Home</a>
                        <i class="fa fa-circle"></i>
                    </li>
                    <li>
                        <span>Member</span>
                    </li>
                </ul>
            </div>
            <!-- END PAGE BAR -->
            <!-- BEGIN PAGE TITLE-->
            <h1 class="page-title"> Member
                <small>Listing Page</small>
            </h1>
            <!-- END PAGE TITLE-->
            <!-- END PAGE HEADER-->
            <div class="row">
                <div class="col-md-12">
                    <div class="portlet light ">
                        <div class="portlet-title">
                            <div class="caption font-dark">
                                <i class="icon-user font-dark"></i>
                                <span class="caption-subject bold capitalize"> Member List</span>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <table class="table table-striped table-bordered table-hover table-checkable order-column" id="get_list_data">
                                <thead>
                                    <tr>
                                        
                                        <th>Userid</th>
                                        <th>Name</th>
                                        <th>Father Name</th>
                                        
                                        <th>Email</th>
                                         <th>Village</th>
                                          <th>Aadhar</th>
                                           <th>City</th>
                                            <th>Whatsapp</th>
                                             <th>Emg. Contact</th>
                                       <th>Status</th>
                                        <th>Action</th>
                                        <?php 
                                        //$user = auth()->guard('admin')->user();
                                        if(auth()->guard('admin')->user()->id != 1){ ?>
                                         <th>Delete</th>
                                        <?php } ?>
                                    </tr>
                                </thead>
                                
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END CONTENT BODY -->
    </div>
    <!-- END CONTENT -->
</div>
@endsection

@section('footer')
@include('admin.partials._footer')
@stop

@section('scripts')
<script>
 $(function(){
   $('#get_list_data').DataTable({
        processing: true,
        serverSide: true,
        stateSave: true,
         ajax: '{{ route('ajaxmemberlisting') }}',
         columns: [
        {data: 'id', name: 'id'},
        {data: 'applicant_name', name: 'applicant_name'},
        {data: 'father_name', name: 'father_name'},
        {data: 'email', name: 'email'},
        {data: 'village', name: 'village'},
        {data: 'aadhar_no', name: 'aadhar_no'},
        {data: 'city', name: 'city'},
        {data: 'whatsapp', name: 'whatsapp'},
        {data: 'emergency_contact', name: 'emergency_contact'},
        {data: 'flag', name: 'flag'},
        {data: 'action', name: 'action', orderable: false, searchable: false},
        ],
        "columnDefs": [
            {
                "targets": 9,
                "render": function ( data, type, row ) {
                    //return data == 1 ? 'Delivered': 'Not delivered';
                    //return '<a href="../Expense_document/'+row["Expense_document"]+'" target="_blank">'+row["Expense_document"]+'</a>';
                    //return row["Expense_document"];
                     if(row["flag"] == 0){
                      return 'Not Approved';
                    }else{
                       return 'Approved';  
                    }
                    
               
                }
            },
            
            {
                "targets": 10,
                "orderable": false,
                "render": function ( data, type, row ) {
                    if(row["flag"] == 0){
                      return '<a href="javascript:void(0)" title="" class="btn_starred_member" mid="'+row["id"]+'" star_status="1">Approved</a>';  
                    }else{
                      return '<a href="javascript:void(0)" title="" class="btn_starred_member" mid="'+row["id"]+'" star_status="0">Not Approved</a>';    
                    }
                    //return row["ti_no"] +', ' + row["ti_ref_no"] +', '+data;
                    //return '<div class="starrating"><i class="fa fa-star"></i></div>';
                },
              
            },
            <?php 
            if(auth()->guard('admin')->user()->id != 1){ ?>
            {
                "targets": 11,
                "orderable": false,
                "render": function ( data, type, row ) {
                    
                return '<a href="javascript:void(0)" title="" class="delete_member" mid="'+row["id"]+'">Delete</a>';  
                   
                },
              
            },
            <?php } ?>
            
          
            
        ],
    });
 });   
 
 $("body").on('click','.btn_starred_member',function(e)
    {
        
        e.preventDefault();
        
        var mid = $(this).attr("mid");
        var star_status = $(this).attr("star_status");
        
        if(mid != '')
        {
          $.ajax({
            'type': 'POST',
            url: {!! json_encode(url('updatestatus')) !!},
            //dataType: "json",
            'data': {"_token": "{{ csrf_token() }}",mem_id: mid,star_status:star_status},
            'cache': false,
            'success': function (response)
            {
              $('#get_list_data').DataTable().ajax.reload();
              //alert(response);
            }
            });
        }   
    });

$("body").on('click','.delete_member',function(e)
    {
        
        e.preventDefault();
        
        var mid = $(this).attr("mid");
       
        
        if(mid != '')
        {
          $.ajax({
            'type': 'POST',
            url: {!! json_encode(url('deletemember')) !!},
            //dataType: "json",
            'data': {"_token": "{{ csrf_token() }}",mem_id: mid},
            'cache': false,
            'success': function (response)
            {
              $('#get_list_data').DataTable().ajax.reload();
              //alert(response);
            }
            });
        }   
    });
</script>    
@stop