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
            <!-- BEGIN PAGE TITLE
            <h1 class="page-title"> Edit
                <small>User Page</small>
            </h1>-->
            
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
                                
                                    </tr>
                                </thead>
                                </tbody>
                                <?php 
                                if(!empty($data)){
                                ?>
                                @foreach($data as $u)
                                    <tr>
                                        <td>{{ $u->id }}</td>
                                        <td>{{ $u->applicant_name }}</td>
                                        <td>{{ $u->father_name }}</td>
                                        <td>{{ $u->email }}</td>
                                        <td>{{ $u->village }}</td>
                                        <td>{{ $u->aadhar_no }}</td>
                                        <td>{{ $u->city }}</td>
                                        <td>{{ $u->whatsapp }}</td>
                                        <td>{{ $u->emergency_contact }}</td>
                                        <td>
                                            <?php 
                                            if($u->flag == 0){
                                                echo 'Not Approved';
                                            }else{
                                                echo 'Approved'; 
                                            }
                                            ?>
                                        </td>
                                        
                                        <td>
                                            <?php 
                                            if($u->flag == 0){
                                                echo '<a href="javascript:void(0)" title="" class="btn_starred_member" mid="'.$u->id.'" star_status="1">Approved</a>';
                                            }else{
                                                echo '<a href="javascript:void(0)" title="" class="btn_starred_member" mid="'.$u->id.'" star_status="0">Not Approved</a>'; 
                                            }
                                            ?>
                                        </td>
                                    </tr>
                                @endforeach
                                <?php }else{
                                echo '<tr><td colspan="12">No added Members</td></tr>';
                                } ?>
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
<script type="text/javascript">
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
              //$('#get_list_data').DataTable().ajax.reload();
              //alert(response);
              window.location.reload();
            }
            });
        }   
    });
</script>
@stop