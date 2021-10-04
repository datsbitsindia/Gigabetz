@extends('main')

@section('stylesheet')
    
@stop

@section('title')
My Users
@stop

@section('header')
@include('partials._header')
@stop

@section('content')

<div class="section page-title">
    <div class="container">
        <h1> Aaradhaks Details</h1>
    </div>
</div>

<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if(session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                @endif
                
                @if(session()->has('error'))
                    <div class="alert alert-danger">
                        {{ session()->get('error') }}
                    </div>
                @endif
                <div class="card shadow-lg mb-5">
                    <div class="card-header">
                        <p class="text-danger">Note - You can Add Multiple Aaradhaks One by One with Single Email Id Login</p>
                    </div>
                    <div class="card-body p-2">
                        <div class="mb-3 d-md-flex justify-content-between align-items-center">
                            <div class="text-md-left text-center mb-md-0 mb-3">
                                <a href="{{ route('add-user') }}" class="btn btn-theme">Add Aaradhak</a>
                                <a class="btn btn-theme" href="{{ route('logout') }}"
            	                   onclick="event.preventDefault();
            	                                 document.getElementById('logout-form').submit();">
            	                    {{ __('Logout') }}
            	                </a>
            	    		    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            	                    @csrf
            	                </form>
            	            </div>
            	            <div class="text-md-right text-center">
            	                <p><strong>Username: {{ Auth::user()->email }}</strong></p>
            	            </div>
                        </div>
                        <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover table-checkable order-column" id="get_org_list_data">
                            <thead>
                                <tr>
                                    <th>Form Number</th>
                                    <th>Applicant Name</th>
                                    <th>Father Name</th>
                                    <th>Age</th>
                                    <th>Gender</th>
                                    <!--<th>Email</th>-->
                                    <th>Whatsapp</th>
                                    <th>Aadhar Number</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                 @if(!empty($data_users))
                                @foreach($data_users as $k => $f)
                                <tr>
                                    <td>{{$f->id}}</td>
                                    <td>{{$f->applicant_name}}</td>
                                    <td>{{$f->father_name}}</td>
                                    <td>{{$f->age}}</td>
                                    <td>{{$f->gender}}</td>
                                    <!--<td>{{$f->email}}</td>-->
                                    <td>{{$f->whatsapp}}</td>
                                    <td>{{$f->aadhar_no}}</td>
                                    <td>
                                        @if($f->flag == 1)
                                        <span class="badge badge-success">Approved</span>
                                        @else
                                        <span class="badge badge-Warning">Pending</span>
                                        @endif
                                    </td>
                                    <td><a href="{{ route('edit-user',['id'=>$f->id]) }}">Edit</a></td>
                                </tr>
                                @endforeach
                                
                                 @else
                                 <tr>
                                    <td colspan="10" class="text-center">There are no member added in your account! Please Add Aardhak</td> 
                                  </tr>   
                                  @endif
                                
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection

@section('scripts')
<script>

</script>
@stop