
<div class="row">
    <div class="col-md-12">
        <div class="portlet box green">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-user"></i>
                    <span class="caption-subject capitalize"> New Tender</span>
                </div>
                <div class="actions">
                </div>
            </div>
            <div class="portlet-body">
                <form class="form-horizontal" name="frmModule" method="post" action="{{ route('posttendercreate')}}" enctype="multipart/form-data">
                    <!-- CSRF Token -->
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    

                    <div class="row">
                        <div class="col-md-4">
                            <label>Tender No:</label>
                            <input type="text" name="ti_no" class="form-control">
                        </div>
                        <div class="col-md-4">            
                            <label>Tender Ref No:</label>
                            <input type="text" name="ti_ref_no" class="form-control">        
                        </div>
                        <div class="col-md-4">
                            <label>Organisation:</label>
                            
                            <select class="form-control" name="ti_org_name">
                                
                            </select>
                        </div> 
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                             <label>Tender Works:</label>
                            <textarea name="ti_work" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label>Publish Date:</label>
                            <input type="text" name="ti_publish_date" class="form-control date-picker">
                        </div>
                        <div class="col-md-4">            
                            <label>Submit Date:</label>
                            <input type="text" name="ti_submit_date" class="form-control date-picker">        
                        </div>
                        <div class="col-md-4">
                            <label>Open Date:</label>
                            <input type="text" name="ti_open_date" class="form-control date-picker">
                        </div> 
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <label>Tender Amount:</label>
                            <input type="text" name="ti_amount" class="form-control">
                        </div>
                        <div class="col-md-4">            
                            <label>EMD:</label>
                            <input type="text" name="ti_emd" class="form-control">        
                        </div>
                        <div class="col-md-4">
                            <label>Doc Cost:</label>
                            <input type="text" name="ti_doc_cost" class="form-control">
                        </div> 
                    </div>
                    
                    <div class="row">
                        <div class="col-md-4">
                            <label>Country:</label>
                            <select name="ti_countryid" class="form-control select2">
                                @foreach($country as $c)
                                <option value="{{$c->countryid}}">{{$c->country}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-4">            
                            <label>State:</label>
                            <select name="ti_stateid" class="form-control select2">
                                
                            </select>                            
                        </div>
                        <div class="col-md-4">
                            <label>City:</label>
                            <select name="ti_city" class="form-control select2">
                                
                            </select> 
                        </div> 
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <label>Sector:</label>
                            <select name="ti_sector" class="form-control">
                                @foreach($data_sector as $sck => $scv)
                                <option value="{{$scv->id}}">{{$scv->name}}</option>
                                @endforeach
                            </select>    
                        </div>
                        <div class="col-md-4">
                            <label>Tender Type:</label>
                            <select name="ti_tender_type" class="form-control">
                                @foreach($tender_type as $tk => $tv)
                                <option value="{{$tk}}">{{$tv}}</option>
                                @endforeach
                            </select>    
                        </div>
                        <div class="col-md-4">
                            <label>Source of Publish:</label>
                            <select name="mmi_sp" class="form-control">
                                @foreach($sop as $sk => $sv)
                                <option value="{{$sk}}">{{$sv}}</option>
                                @endforeach
                            </select>    
                        </div>
                        <div class="col-md-4">
                            <label>Bidding Process:</label>
                            <select name="mmi_bp" class="form-control">
                                @foreach($bp as $bk => $bv)
                                <option value="{{$bk}}">{{$bv}}</option>
                                @endforeach
                            </select>    
                        </div>
                        <div class="col-md-4">
                            <label>Contract type:</label>
                            <select name="mmi_ct" class="form-control">
                                <option value="">Select Type</option>
                                @foreach($cot as $ctk => $ct)
                                <option value="{{$ctk}}">{{$ct}}</option>
                                @endforeach
                            </select>    
                        </div>
                        <div class="col-md-4">
                            <label>Form Of Contract:</label>
                            <select name="mmi_foc" class="form-control">
                               
                            </select>    
                        </div>
                        <div class="col-md-4">
                            <label>Contract Category:</label>
                            <select name="mmi_cc" class="form-control">
                                
                            </select>    
                        </div>
                        <div class="col-md-4">
                            <label>Department:</label>
                            
                            <select class="form-control" name="ti_dept_name">
                                
                            </select>
                        </div> 
                        <div class="col-md-4">
                            <label>Division:</label>
                            
                            <select class="form-control" name="ti_div_name">
                                
                            </select>
                        </div> 
                        <div class="col-md-4">
                            <label>Sub Division:</label>
                            
                            <select class="form-control" name="ti_subdiv_name">
                                
                            </select>
                        </div> 
                        <div class="col-md-4">
                            <label>Document:</label>
                        <input type="file" class="form-control" name="document"/>
                        </div> 
                    </div>    


                    <div class="row">
                        <div class="col-sm-4">
                            <button class="btn btn-success" onclick="formSubmit()">Save</button>
                        </div>
                    </div>
                </form> 
            </div>
        </div>
    </div>
</div>

        
<script type="text/javascript">
//$('.select2').select2();
$('.date-picker').datepicker({
    format: 'yyyy-mm-dd',
    startDate: '-3d'
});
$("body").on("change",'select[name="ti_countryid"]',function(e){
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
               $('select[name="ti_stateid"]').html('');
               $('select[name="ti_stateid"]').html(data);
            }
        }); 
     }   
});
$("body").on("change",'select[name="ti_stateid"]',function(e){
     var elementValue = $(this).val();
     if(elementValue != ""){
       $.ajax({
            url: {!! json_encode(url('getcitylist')) !!},
            //dataType: "json",
            type: "POST",
            data: {
                "_token": "{{ csrf_token() }}",
                state:elementValue
            },
            success: function (data) {                      
               $('select[name="ti_city"]').html('');
               $('select[name="ti_city"]').html(data);
            }
        }); 
     }   
});
 // select2 with ajax
 $('select[name="ti_org_name"]').select2({
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
 $('body').on('change', 'select[name="mmi_ct"]', function () {

            var selected_cc = $(this).val();
              if(selected_cc != ""){

                $.ajax({
                        
                        url: {!! json_encode(url('getfromofcontractlist')) !!},
                        dataType: "json",
                        type: "POST",
                        data: {
                           "_token": "{{ csrf_token() }}",
                           selected_cc:selected_cc
                       },
                        success: function (data) {     
                         $('select[name="mmi_foc"]').html('');
                         $('select[name="mmi_foc"]').html(data.foc);
                         $('select[name="mmi_cc"]').html('');
                         $('select[name="mmi_cc"]').html(data.cc);                 
                        }
                });
              }else{
                $('select[name="mmi_foc"]').html('');
                $('select[name="mmi_cc"]').html('');
              }              
        });

 $('select[name="ti_dept_name"]').select2({
        placeholder: 'Select an Department',
        allowClear: true,
        ajax: {
          url: {!! json_encode(url('getdepartmentoptionlist')) !!},
          dataType: 'json',
          delay: 250,
          data: function (params) {
            return {
                "_token": "{{ csrf_token() }}",
                q: params.term
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

$('body').on('change', 'select[name="ti_dept_name"]', function () {
    var selected_dept = $(this).val(); 
    $.ajax({                     
        url: {!! json_encode(url('getdivisionoptionlist')) !!},
        //dataType: "json",
        type: "POST",
        data: {
           "_token": "{{ csrf_token() }}",
           selected_dept:selected_dept
       },
        success: function (data) {     
         $('select[name="ti_div_name"]').html('');
         $('select[name="ti_div_name"]').html(data);                
        }
    });
});
$('body').on('change', 'select[name="ti_div_name"]', function () {
    var selected_div = $(this).val(); 
    $.ajax({                     
        url: {!! json_encode(url('getsubdivisionoptionlist')) !!},
        //dataType: "json",
        type: "POST",
        data: {
           "_token": "{{ csrf_token() }}",
           selected_div:selected_div
       },
        success: function (data) {     
         $('select[name="ti_subdiv_name"]').html('');
         $('select[name="ti_subdiv_name"]').html(data);                
        }
    });
});
</script>
