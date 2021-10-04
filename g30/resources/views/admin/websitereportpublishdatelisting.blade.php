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
                        <span>User</span>
                    </li>
                </ul>
            </div>
            <!-- END PAGE BAR -->
            <!-- BEGIN PAGE TITLE-->
            <h1 class="page-title"> Webiste Tender
                <small>Listing Page</small>
            </h1>
            <!-- END PAGE TITLE-->
            <!-- END PAGE HEADER-->
            <div class="row">
                <div class="col-md-12">
                    <form method="get" action="{{ route('websitereportpublishdatelisting') }}">
                        <div class="col-md-4">
                            <label>Publish Date:</label>
                            <input type="text" name="date" value="{{$dt}}" class="form-control date-picker">
                        </div>
                        <div class="col-sm-4">
                            <label>&nbsp;</label><br/>
                            <button class="btn btn-success">Submit</button>
                        </div>
                      </form>  
                    </div>    
                </div>    
                <div class="col-md-12">
                    <div class="portlet light ">
                        <div class="portlet-title">
                            <div class="caption font-dark">
                                <i class="icon-user font-dark"></i>
                                <span class="caption-subject bold capitalize"> Webiste Tenders List</span>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <table class="table table-hover" id="get_list_data">
                                <thead>
                                    <tr>
                                        
                                        <th> Webiste </th>
                                        <th>Total Count</th>
                                        <th>Total Transfer Count</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($result as $v)    
                                <tr>
                                    <td>{{$v['website_name']}}</td>
                                   
                                    <td>{{$v['total']}}</td>
                                    <td>{{$v['total_transfer']}}</td>
                                </tr>
                                @endforeach
                                </tbody>
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
 $('.date-picker').datepicker({
    format: 'yyyy-mm-dd',
    //startDate: '-3d'
});
</script>    
@stop