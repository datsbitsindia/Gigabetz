<link href="{{ asset('public/backend/assets/sortable/sortable_list.css') }}" rel="stylesheet" type="text/css" />
<div class="row">
    <div class="col-md-12">
        <div class="portlet box green">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-user"></i>
                    <span class="caption-subject capitalize"> Rearrange Module Display Order</span>
                </div>
                <div class="actions">
                </div>
            </div>
            <div class="portlet-body">
                <form method="POST" action="{{route('arrange/modules')}}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <div class="panel-body">
                        <div data-force="100" class="layer block">
                            <ul id="foo"  class="block__list block__list_words" >
                               @foreach($tbl_m_modules as $modules) 
                                <li><input type="hidden" value="{{$modules->mod_id}}" name="mod_id_{{$modules->mod_id}}">{{$modules->mod_name}} (<b>{{$modules->mod_type}}</b>)</li>
                                @endforeach
                            </ul>
                        </div>
                        @if(isset($tbl_m_modules))
                        <!-- <input type="submit" name="submit" value="Save Re-arrange" class="btn btn-success"> -->
                        <button class="btn btn-success" onclick="formSubmit()">Save</button>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
 $(function(){
$('#ajax_preloader').hide();
 });   
</script>
<script src="{{ asset('public/backend/assets/sortable/Sortable.js') }}" type="text/javascript"></script>
<script src="{{ asset('public/backend/assets/sortable/sortable_list.js') }}" type="text/javascript"></script>
