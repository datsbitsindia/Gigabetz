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
            <h1 class="page-title"> Search Tender
                <small>Listing Page</small>
            </h1>
            <!-- END PAGE TITLE-->
            <!-- END PAGE HEADER-->
            <div class="row">
                <div class="col-md-12">
                    <form method="get" action="{{ route('searchtender_refno') }}">
                        <div class="col-md-4">
                            <label>Enter Tender No/Ref no:</label>
                            <input type="text" name="date" value="{{$dt}}" class="form-control" autocomplete="off">
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
                                <span class="caption-subject bold capitalize"> Search Tender No</span>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <table class="table table-hover" id="get_list_data">
                                
                                <tbody>
                                @foreach($result as $v)    
                                <tr>
                                    <th>Tender Id</th>
                                    <td>{{$v->ourrefno}}</td>
                                </tr>
                                 <tr>
                                    <th>TenderNo</th>
                                    <td>{{$v->TenderNo}}</td>
                                </tr>
                                 <tr>
                                    <th>Publish Date</th>
                                    <td>{{$v->purfromdate}}</td>
                                </tr>
                                 <tr>
                                    <th>Submit Date</th>
                                    <td>{{$v->submitdate}}</td>
                                </tr>
                                 <tr>
                                    <th>Work</th>
                                    <td>{{$v->Work}}</td>
                                </tr>
                                <tr>
                                    <th>Estimate Cost</th>
                                    <td>{{$v->tenderamount}}</td>
                                </tr>
                                <tr>
                                    <th>EMD</th>
                                    <td>{{$v->earnestamount}}</td>
                                </tr>
                                <tr>
                                    <th>Doc Cost</th>
                                    <td>{{$v->doccost}}</td>
                                </tr>
                                <tr>
                                    <th>Organisation</th>
                                    <td>{{$v->org_name}}</td>
                                </tr>
                                <tr>
                                    <th>Submit Date</th>
                                    <td>{{$v->submitdate}}</td>
                                </tr>
                                <tr>
                                    <th>State Name</th>
                                    <td>{{$v->state_name}}</td>
                                </tr>
                                <tr>
                                    <th>City</th>
                                    <td>{{$v->city}}</td>
                                </tr>
                                <tr>
                                    <th>Document Download</th>
                                    <td><a href="{{$v->documentpath}}" download>Download</a></td>
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