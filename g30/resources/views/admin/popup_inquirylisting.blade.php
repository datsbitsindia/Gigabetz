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
                        <span>Inquiry</span>
                    </li>
                </ul>
            </div>
            <!-- END PAGE BAR -->
            <!-- BEGIN PAGE TITLE-->
            <h1 class="page-title"> Inquiry
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
                                <span class="caption-subject bold capitalize"> Inquiry List</span>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <table class="table table-striped table-bordered table-hover table-checkable order-column" id="get_inquiry_list_data">
                                <thead>
                                    <tr>
                                        
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Company Name</th>
                                        <th>Email</th>
                                        <th>Mobile</th>
                                        <th>Looking For</th>
                                        <th>DateTime</th>
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
   $('#get_inquiry_list_data').DataTable({
        
        processing: true,
        serverSide: true,
        stateSave: true,
         ajax: '{{ route('popup_ajaxinquirylisting') }}',
        columns: [
        {data: 'id', name: 'id'},
        {data: 'name', name: 'name'},
        {data: 'company_name', name: 'company_name'},
        {data: 'email', name: 'mobile'},
        {data: 'mobile', name: 'mobile'},
        {data: 'looking_for', name: 'looking_for'},
        {data: 'create_at', name: 'create_at'},
        //{data: 'action', name: 'action', orderable: false, searchable: false},
        ]
        
    });
 });   
</script>  
@stop