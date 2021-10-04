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
                        <span>Organisation</span>
                    </li>
                </ul>
            </div>
            <!-- END PAGE BAR -->
            <!-- BEGIN PAGE TITLE-->
            <h1 class="page-title"> Organisation
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
                                <span class="caption-subject bold capitalize"> Organisation List</span>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <table class="table table-striped table-bordered table-hover table-checkable order-column" id="get_org_list_data">
                                <thead>
                                    <tr>
                                        
                                        <th>Agencyid</th>
                                        <th>AgencyName</th>
                                        
                                
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
   $('#get_org_list_data').DataTable({
        processing: true,
        serverSide: true,
        stateSave: true,
        order: [{column: "0", dir: "desc"}],
         ajax: '{{ route('ajaxagencylisting') }}',
         columns: [
        {data: 'agencyid', name: 'agencyid'},
        {data: 'agencyname', name: 'agencyname'},
       
        //{data: 'usr_type', name: 'usr_type'},
        //{data: 'rol_name', name: 'rol_name'},
        //{data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });
 });   
</script>    
@stop