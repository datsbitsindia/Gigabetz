@extends('admin.main')

@section('stylesheet')
<style type="text/css">
.page-content-wrapper .page-content {
    padding: 5px 20px 10px;
}
.tabbable-line>.tab-content {
    border-top: 1px solid #dfdfdf;
    padding: 5px 0 0px;
}
.tabbable-line>.nav-tabs>li>a{
    padding: 5px 10px;
}
</style>
@stop 

@section('title')
Dashboard
@stop

@section('body')
page-header-fixed page-sidebar-closed-hide-logo page-content-white page-sidebar-fixed
@stop

@section('header')
@include('admin.partials._header')
@stop

@section('content')

    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content">
           
            <div class="row">
                <div class="col-md-12">
                    <div class="tabbable-line tabbable-tabdrop">
                        <ul class="nav nav-tabs parent_tab ul-parent">
                            <li class="active">
                                <a href="#dashboard" data-toggle="tab">Dashboard</a>
                            </li>                      
                        </ul>
                        <div class="tab-content" id="parent_0">

                            <div class="parent_tab_pane tab-pane active" id="dashboard">
                                <p> Howdy, I'm in Dashboard. </p>
                            </div>
                            

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
  
</script>    
@stop

