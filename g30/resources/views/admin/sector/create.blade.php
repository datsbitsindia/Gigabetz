
<div class="row">
    <div class="col-md-12">
        <div class="portlet box green">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-user"></i>
                    <span class="caption-subject capitalize"> New Sector</span>
                </div>
                <div class="actions">
                </div>
            </div>
            <div class="portlet-body">
                <form class="form-horizontal" name="frmModule" method="post" action="{{ route('postsectorcreate') }}" enctype="multipart/form-data">
                    <!-- CSRF Token -->
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    

                    <div class="row">
                        <div class="col-md-4">
                            <label>Sector Name:</label>
                            <input type="text" name="sc_name" class="form-control">
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

