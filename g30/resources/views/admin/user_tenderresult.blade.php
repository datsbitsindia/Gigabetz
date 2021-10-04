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
                        <a href="{{route('users')}}">User</a>
                        <i class="fa fa-circle"></i>
                    </li>
                    <li>
                        <span>Tenders Activation</span>
                    </li>
                </ul>
            </div>
            <!-- END PAGE BAR -->
            <!-- BEGIN PAGE TITLE
            <h1 class="page-title"> Edit
                <small>User Page</small>
            </h1>-->
            
            @if(!empty($data_users))
                @php 
                $keyword = $data_users[0]->keyword;
                $exe_keyword = $data_users[0]->excluding_keyword;
                $sector = $data_users[0]->sector;
                $country_val = $data_users[0]->country;
                $state_arr = explode(',',$data_users[0]->state);
                $from_date = $data_users[0]->from_date;
                $to_date = $data_users[0]->to_date;
                @endphp
            @endif
            
            <div class="row" style="margin-top: 10px;">
			    <div class="col-md-12">
			        <div class="portlet box green">
			            <div class="portlet-title">
			                <div class="caption">
			                    <i class="icon-user"></i>
			                    <span class="caption-subject"> Tender Result Activation</span>
			                </div>
			                <div class="actions">             
			                	
			                </div>
			            </div>
			            <div class="portlet-body">
			                <form role="form" action="{{ route('postusertenderresult')}}" method="post">
                                {{csrf_field()}}
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Keywords</label>
                                                <input type="text" placeholder="Enter Keywords" class="form-control" value="{{$keyword}}" name="advance_keyword">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Excluding Keyword</label>
                                                <input type="text" placeholder="Excluding Keywords" class="form-control" value="{{$exe_keyword}}" name="excluding_keyword">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <!--<div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="sector" class="control-label">Sector</label>
                                                <select name="sector[]" class="form-control select2-multiple" multiple>
                                                    @foreach($data_sector as $sck => $scv)
                                                    @php $str_sc = ''; @endphp
                                                    @if($sector == $scv->id)
                                                     @php $str_sc = 'selected'; @endphp
                                                    @endif
                                                    <option value="{{$scv->id}}" {{$str_sc}}>{{$scv->name}}</option>
                                                    @endforeach
                                                   
                                                </select>
                                            </div>
                                        </div>-->
                                        <div class="col-sm-6">
                                            
                                            <div class="form-group">
                                                <label>Organisation</label>
                                                <select class="form-control" name="organisation[]" multiple>
                                                @if(!empty($data_org)) 
                                                 @foreach($data_org as $org)                                    
                                                 <option value="{{$org->agencyid}}" selected>{{$org->agencyname}}</option>
                                                 @endforeach   
                                                @endif   
                                                </select>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="country" class="control-label">Country</label>
                                                <select name="country" class="form-control">
                                                    <option value="">Select Country</option>
                                                   @foreach($country as $c)
                                                   @php $str_c = ''; @endphp
                                                    @if($country_val == $c->countryid)
                                                     @php $str_c = 'selected'; @endphp
                                                    @endif
                                                    <option value="{{$c->countryid}}" {{$str_c}}>{{$c->country}}</option>
                                                   @endforeach
                                                    
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="state" class="control-label">State</label>
                                                <select name="state[]" class="form-control select2-multiple" multiple>
                                                  
                                                @if(!empty($data_state)) 
                                                 @foreach($data_state as $st)
                                                 @php $str_st = ''; @endphp
                                                 @if(in_array($st->id,$state_arr))
                                                 @php $str_st = 'selected'; @endphp
                                                 @endif
                                                 <option value="{{$st->id}}" {{$str_st}}>{{$st->name}}</option>
                                                 @endforeach   
                                                @endif 
                                                </select>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>From Date</label>
                                                <input type="text" placeholder="Enter From Date" class="form-control" value="{{$from_date}}" autocomplete="off" name="from_date">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>To Date</label>
                                                <input type="text" placeholder="Enter From Date" class="form-control" value="{{$to_date}}" autocomplete="off" name="to_date">
                                            </div>
                                        </div>
                                    </div>    
                                    <!--<div class="row">
                                        
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Contract type:</label>
                                                <select class="form-control select2-multiple" name="contract_type[]" multiple>
                                                    @foreach($cot as $ctk => $ct)
                                                    <option value="{{$ctk}}">{{$ct}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Tender Amount</label>
                                                <input type="text" placeholder="Tender Amount" class="form-control" name="tender_amount">
                                            </div>
                                        </div>
                                    </div>-->
                                </div>
                                <div class="form-actions">
                                    <input type="hidden" name="user_id" value="<?php echo $id; ?>">
                                    <button class="btn blue" onclick="formSubmit()">Submit</button>
                                    
                                </div>
                            </form>
			            </div>
			        </div>
			    </div>
			</div>
            <!-- END PAGE TITLE-->
            <!-- END PAGE HEADER-->
          
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
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
 
<script type="text/javascript">

$(function() {
$('input[name="from_date"],input[name="to_date"]').datepicker( {
    changeMonth: true,
    changeYear: true,
    //showButtonPanel: true,
    dateFormat: 'yy-mm-dd',
    
});
});
// select2 with ajax
$('.select2-multiple').select2({allowClear: true,});

 
  
 $('select[name="organisation[]"]').select2({
    placeholder: 'Select an Organization',
    allowClear: true,
    //dropdownParent: $("#quadra_fixed_modal"),
    ajax: {
      url: {!! json_encode(url('getagencylist')) !!},
      dataType: 'json',
      delay: 250,
      data: function (params) {
        return {
            "_token": "{{ csrf_token() }}",
            q: params.term // search term
        };
      },
      processResults: function (data) {
        return {
          results: data
        };
      },
      cache: true
    },
    minimumInputLength: 3
  });
//get state
 $("body").on("change",'select[name="country"]',function(e){
     var elementValue = $(this).val();
     if(elementValue != ""){
       $.ajax({
            url: {!! json_encode(url('getstatelist')) !!},
            //dataType: "json",
            type: "POST",
            data: {
                "_token": "{{ csrf_token() }}",
                state:elementValue
            },
            success: function (data) {                      
               $('select[name="state[]"]').html('');
               $('select[name="state[]"]').html(data);
            }
        }); 
     }   
});

$( function() {
 //for multiple keywords
    function split( val ) {
      return val.split( /,\s*/ );
    }
    function extractLast( term ) {
      return split( term ).pop();
    }
    

    $( 'input[name="advance_keyword"],input[name="excluding_keyword"]' )
      // don't navigate away from the field on tab when selecting an item
      .on( "keydown", function( event ) {
        if ( event.keyCode === $.ui.keyCode.TAB &&
            $( this ).autocomplete( "instance" ).menu.active ) {
          event.preventDefault();
        }
      })
      .autocomplete({
        minLength: 3,
        source: function( request, response ) {
          // delegate back to autocomplete, but extract the last term
          //response( $.ui.autocomplete.filter( availableTags, extractLast( request.term ) ) );
            $.ajax({
                url: {!! json_encode(url('getkeywordlist')) !!},
                dataType: "json",
                type: "POST",
                data: {
                    "_token": "{{ csrf_token() }}",
                    keyword: extractLast(request.term)
                },
                success: function (data) {
                    response($.map(data, function (item) {
                        //alert(item.name);
                        return {
                            label: item.name,
                            value: item.name     // EDIT
                        }
                    }));
                }
            });
        },
        focus: function() {
          // prevent value inserted on focus
          return false;
        },
        select: function( event, ui ) {
          var terms = split( this.value );
          // remove the current input
          terms.pop();
          // add the selected item
          terms.push( ui.item.value );
          // add placeholder to get the comma-and-space at the end
          terms.push( "" );
          this.value = terms.join( ", " );
          return false;
        }
      });
});
</script>
@stop