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

.box {
    border-radius: 3px;
    box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
    padding: 10px 25px;
    text-align: right;
    display: block;
    margin-top: 60px;
}
.box-icon span {
    color: #fff;
    display: table-cell;
    text-align: center;
    vertical-align: middle;
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
<?php 
$crawler_url = "http://document.tenderkings.com/";
$current_date = date('Y-m-d');
$previous_date = date('Y-m-d', strtotime('-2 day', strtotime($current_date))); //change dynamically
?>
    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content">
           <div class="tenderinfo-form">

   
    <div class="row">
<!--        <div class="col-md-3">
            <div class="box">
                <div class="info">
                    <h4 class="text-center">Add N-Procure Tender</h4>
                     <span class="pull-left">https://www.nprocure.com</span>                    
                     <a href="<?php //echo $crawler_url; ?>nprocure/nprocure.php" target="_blank"><input type="button" name="nprocure" class="btn btn-primary" value="Add"></a>
                </div>
            </div>
        </div>  -->
        <div class="col-md-3">
            <div class="box">
                <div class="info">
                    <h4 class="text-center">Set Category</h4>
                     <span class="pull-left"></span>                    
                     <a href="<?php echo $crawler_url; ?>set_category.php"  target="_blank"><input type="button" name="nprocure" class="btn btn-primary" value="Add"></a>
                </div>
            </div>    
        </div> 
        <div class="col-md-3">
            <div class="box">
                <div class="info">
                    <h4 class="text-center">Set City & Agency</h4>
                     <span class="pull-left"></span>                    
                     <a href="<?php echo $crawler_url; ?>set_city_agency.php"  target="_blank"><input type="button" name="nprocure" class="btn btn-primary" value="Add"></a>
                </div>
            </div>    
        </div> 
        <div class="col-md-3">
            <div class="box">
                <div class="info">
                    <h4 class="text-center">Cron Task</h4>
                     <span class="pull-left"></span>                    
                     <a href="<?php echo $crawler_url; ?>crontask_gautish.php"  target="_blank"><input type="button" name="nprocure" class="btn btn-primary" value="Add"></a>
                </div>
            </div>    
        </div> 
        
        <!--<div class="col-md-3">-->
        <!--    <div class="box">-->
        <!--        <div class="info">-->
        <!--            <h4 class="text-center">Set Tender Category tenderinfo</h4>-->
        <!--             <span class="pull-left">https://www.nationaltenders.in</span>                    -->
        <!--             <a href="<?php echo $crawler_url; ?>crontask1.php"  target="_blank"><input type="button" name="nprocure" class="btn btn-primary" value="Add"></a>-->
        <!--        </div>-->
        <!--    </div>    -->
        <!--</div> -->
        
        <!-- <div class="col-md-3">-->
        <!--    <div class="box">-->
        <!--        <div class="info">-->
        <!--            <h4 class="text-center">Transfer .in to .com</h4>-->
        <!--             <span class="pull-left">https://www.nationaltenders.in</span>                    -->
        <!--             <a href="<?php echo $crawler_url; ?>transfer1.php"  target="_blank"><input type="button" name="nprocure" class="btn btn-primary" value="Add"></a>-->
        <!--        </div>-->
        <!--    </div>    -->
        <!--</div> -->
    </div>
    <div class="row">
        
        
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <div class="box">
                <!--<div class="box-icon">
                    <span class="fa fa-4x fa-html5"></span>
                </div>-->
                <div class="info">
                    <h4 class="text-center">Arunachal Pradesh</h4>
                    <p class="text-center"><b>ex: publishdate > startdate && publishdate < enddate</b></p>
                    <form method="get" target="_blank" action="<?php echo $crawler_url; ?>arunachalpradesh/arunachal_pradesh.php">  
                      <div class="row">  
                        <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control start_date" name="start_date"  value="<?php echo $previous_date; ?>" placeholder="Start Date">
			</div>  
                        </div> 
                        <div class="col-md-6">
                         <div class="form-group">
                             <input type="text" class="form-control end_date" name="end_date" value="<?php echo $current_date; ?>" placeholder="End Date">
			</div> 
                        </div> 
                          
                      </div>  
                     <span class="pull-left">https://arunachaltenders.gov.in/nicgep/app</span>                    
                     <input type="submit" name="west_bangal" class="btn btn-primary" value="Send">
                    </form>     
                </div>
            </div>
        </div>
        
        
        
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <div class="box">
                <!--<div class="box-icon">
                    <span class="fa fa-4x fa-html5"></span>
                </div>-->
                <div class="info">
                    <h4 class="text-center">Assam</h4>
                    <p class="text-center"><b>ex: publishdate > startdate && publishdate < enddate</b></p>
                    <form method="get" target="_blank" action="<?php echo $crawler_url; ?>assam/assam.php">  
                      <div class="row">  
                        <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control start_date" name="start_date"  value="<?php echo $previous_date; ?>" placeholder="Start Date">
			</div>  
                        </div> 
                        <div class="col-md-6">
                         <div class="form-group">
                             <input type="text" class="form-control end_date" name="end_date" value="<?php echo $current_date; ?>" placeholder="End Date">
			</div> 
                        </div> 
                          
                      </div>  
                     <span class="pull-left">https://assamtenders.gov.in/nicgep/app</span>                    
                     <input type="submit" name="west_bangal" class="btn btn-primary" value="Send">
                    </form>     
                </div>
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <div class="box">
                <!--<div class="box-icon">
                    <span class="fa fa-4x fa-html5"></span>
                </div>-->
                <div class="info">
                    <h4 class="text-center">Chandigarh</h4>
                    <p class="text-center"><b>ex: publishdate > startdate && publishdate < enddate</b></p>
                    <form method="get" target="_blank" action="<?php echo $crawler_url; ?>chandigarh/chandigarh.php">  
                      <div class="row">  
                        <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control start_date" name="start_date"  value="<?php echo $previous_date; ?>" placeholder="Start Date">
			</div>  
                        </div> 
                        <div class="col-md-6">
                         <div class="form-group">
                             <input type="text" class="form-control end_date" name="end_date" value="<?php echo $current_date; ?>" placeholder="End Date">
			</div> 
                        </div> 
                          
                      </div>  
                     <span class="pull-left">https://etenders.chd.nic.in/nicgep/app</span>                    
                     <input type="submit" name="west_bangal" class="btn btn-primary" value="Send">
                    </form>     
                </div>
            </div>
        </div>
        
        
         
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <div class="box">
                <!--<div class="box-icon">
                    <span class="fa fa-4x fa-html5"></span>
                </div>-->
                <div class="info">
                    <h4 class="text-center">VPT</h4>
                    <p class="text-center"><b>ex: publishdate > startdate && publishdate < enddate</b></p>
                    <form method="get" target="_blank" action="<?php echo $crawler_url; ?>gvpt/vpt.php">  
                      <div class="row">  
                        <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control start_date" name="start_date"  value="<?php echo $previous_date; ?>" placeholder="Start Date">
			</div>  
                        </div> 
                        <div class="col-md-6">
                         <div class="form-group">
                             <input type="text" class="form-control end_date" name="end_date" value="<?php echo $current_date; ?>" placeholder="End Date">
			</div> 
                        </div> 
                          
                      </div>  
                     <span class="pull-left">https://vpttenders.nic.in/nicgep/app</span>                    
                     <input type="submit" name="west_bangal" class="btn btn-primary" value="Send">
                    </form>     
                </div>
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <div class="box">
                <!--<div class="box-icon">
                    <span class="fa fa-4x fa-html5"></span>
                </div>-->
                <div class="info">
                    <h4 class="text-center">COAL</h4>
                    <p class="text-center"><b>ex: publishdate > startdate && publishdate < enddate</b></p>
                    <form method="get" target="_blank" action="<?php echo $crawler_url; ?>coal/coal.php">  
                      <div class="row">  
                        <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control start_date" name="start_date"  value="<?php echo $previous_date; ?>" placeholder="Start Date">
			</div>  
                        </div> 
                        <div class="col-md-6">
                         <div class="form-group">
                             <input type="text" class="form-control end_date" name="end_date" value="<?php echo $current_date; ?>" placeholder="End Date">
			</div> 
                        </div> 
                          
                      </div>  
                     <span class="pull-left">https://coalindiatenders.nic.in/nicgep/app</span>                    
                     <input type="submit" name="west_bangal" class="btn btn-primary" value="Send">
                    </form>     
                </div>
            </div>
        </div>
        
        
        
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <div class="box">
                <!--<div class="box-icon">
                    <span class="fa fa-4x fa-html5"></span>
                </div>-->
                <div class="info">
                    <h4 class="text-center">CPCL</h4>
                    <p class="text-center"><b>ex: publishdate > startdate && publishdate < enddate</b></p>
                    <form method="get" target="_blank" action="<?php echo $crawler_url; ?>cpcl/cpcl.php">  
                      <div class="row">  
                        <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control start_date" name="start_date"  value="<?php echo $previous_date; ?>" placeholder="Start Date">
			</div>  
                        </div> 
                        <div class="col-md-6">
                         <div class="form-group">
                             <input type="text" class="form-control end_date" name="end_date" value="<?php echo $current_date; ?>" placeholder="End Date">
			</div> 
                        </div> 
                          
                      </div>  
                     <span class="pull-left">https://cpcletenders.nic.in/nicgep/app</span>                    
                     <input type="submit" name="west_bangal" class="btn btn-primary" value="Send">
                    </form>     
                </div>
            </div>
        </div>
        
        
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <div class="box">
                <!--<div class="box-icon">
                    <span class="fa fa-4x fa-html5"></span>
                </div>-->
                <div class="info">
                    <h4 class="text-center">E-Tender</h4>
                    <p class="text-center"><b>ex: publishdate > startdate && publishdate < enddate</b></p>
                    <form method="get" target="_blank" action="<?php echo $crawler_url; ?>etender/etender.php">  
                      <div class="row">  
                        <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control start_date" name="start_date"  value="<?php echo $previous_date; ?>" placeholder="Start Date">
			</div>  
                        </div> 
                        <div class="col-md-6">
                         <div class="form-group">
                             <input type="text" class="form-control end_date" name="end_date" value="<?php echo $current_date; ?>" placeholder="End Date">
			</div> 
                        </div> 
                          
                      </div>  
                     <span class="pull-left">https://etenders.gov.in/eprocure/app</span>                    
                     <input type="submit" name="west_bangal" class="btn btn-primary" value="Send">
                    </form>     
                </div>
            </div>
        </div>
        
        
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <div class="box">
                <!--<div class="box-icon">
                    <span class="fa fa-4x fa-html5"></span>
                </div>-->
                <div class="info">
                    <h4 class="text-center">Himachal Pradesh</h4>
                    <p class="text-center"><b>ex: publishdate > startdate && publishdate < enddate</b></p>
                    <form method="get" target="_blank" action="<?php echo $crawler_url; ?>himachalpradesh/himachalpradesh.php">  
                      <div class="row">  
                        <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control start_date" name="start_date"  value="<?php echo $previous_date; ?>" placeholder="Start Date">
			</div>  
                        </div> 
                        <div class="col-md-6">
                         <div class="form-group">
                             <input type="text" class="form-control end_date" name="end_date" value="<?php echo $current_date; ?>" placeholder="End Date">
			</div> 
                        </div> 
                          
                      </div>  
                     <span class="pull-left">https://hptenders.gov.in/nicgep/app</span>                    
                     <input type="submit" name="west_bangal" class="btn btn-primary" value="Send">
                    </form>     
                </div>
            </div>
        </div>
        
        
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <div class="box">
                <!--<div class="box-icon">
                    <span class="fa fa-4x fa-html5"></span>
                </div>-->
                <div class="info">
                    <h4 class="text-center">Lakshadweep</h4>
                    <p class="text-center"><b>ex: publishdate > startdate && publishdate < enddate</b></p>
                    <form method="get" target="_blank" action="<?php echo $crawler_url; ?>lakshadweep/lakshadweep.php">  
                      <div class="row">  
                        <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control start_date" name="start_date"  value="<?php echo $previous_date; ?>" placeholder="Start Date">
			</div>  
                        </div> 
                        <div class="col-md-6">
                         <div class="form-group">
                             <input type="text" class="form-control end_date" name="end_date" value="<?php echo $current_date; ?>" placeholder="End Date">
			</div> 
                        </div> 
                          
                      </div>  
                     <span class="pull-left">https://tendersutl.gov.in/nicgep/app</span>                    
                     <input type="submit" name="west_bangal" class="btn btn-primary" value="Send">
                    </form>     
                </div>
            </div>
        </div>
        
        
        
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <div class="box">
                <!--<div class="box-icon">
                    <span class="fa fa-4x fa-html5"></span>
                </div>-->
                <div class="info">
                    <h4 class="text-center">Manipur</h4>
                    <p class="text-center"><b>ex: publishdate > startdate && publishdate < enddate</b></p>
                    <form method="get" target="_blank" action="<?php echo $crawler_url; ?>manipur/manipur.php">  
                      <div class="row">  
                        <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control start_date" name="start_date"  value="<?php echo $previous_date; ?>" placeholder="Start Date">
			</div>  
                        </div> 
                        <div class="col-md-6">
                         <div class="form-group">
                             <input type="text" class="form-control end_date" name="end_date" value="<?php echo $current_date; ?>" placeholder="End Date">
			</div> 
                        </div> 
                          
                      </div>  
                     <span class="pull-left">https://manipurtenders.gov.in/nicgep/app</span>                    
                     <input type="submit" name="west_bangal" class="btn btn-primary" value="Send">
                    </form>     
                </div>
            </div>
        </div>
        
        
        
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <div class="box">
                <!--<div class="box-icon">
                    <span class="fa fa-4x fa-html5"></span>
                </div>-->
                <div class="info">
                    <h4 class="text-center">MES</h4>
                    <p class="text-center"><b>ex: publishdate > startdate && publishdate < enddate</b></p>
                    <form method="get" target="_blank" action="<?php echo $crawler_url; ?>mes/mes.php">  
                      <div class="row">  
                        <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control start_date" name="start_date"  value="<?php echo $previous_date; ?>" placeholder="Start Date">
			    </div>  
                        </div> 
                        <div class="col-md-6">
                         <div class="form-group">
                             <input type="text" class="form-control end_date" name="end_date" value="<?php echo $current_date; ?>" placeholder="End Date">
			             </div> 
                        </div> 
                          
                      </div>  
                     <span class="pull-left">https://defproc.gov.in/nicgep/app</span>                    
                     <input type="submit" name="west_bangal" class="btn btn-primary" value="Send">
                    </form>     
                </div>
            </div>
        </div>
        
        
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <div class="box">
                <!--<div class="box-icon">
                    <span class="fa fa-4x fa-html5"></span>
                </div>-->
                <div class="info">
                    <h4 class="text-center">Mizoram</h4>
                    <p class="text-center"><b>ex: publishdate > startdate && publishdate < enddate</b></p>
                    <form method="get" target="_blank" action="<?php echo $crawler_url; ?>mizoram/mizoram.php">  
                      <div class="row">  
                        <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control start_date" name="start_date"  value="<?php echo $previous_date; ?>" placeholder="Start Date">
			    </div>  
                        </div> 
                        <div class="col-md-6">
                         <div class="form-group">
                             <input type="text" class="form-control end_date" name="end_date" value="<?php echo $current_date; ?>" placeholder="End Date">
			             </div> 
                        </div> 
                          
                      </div>  
                     <span class="pull-left">https://mizoramtenders.gov.in/nicgep/app</span>                    
                     <input type="submit" name="west_bangal" class="btn btn-primary" value="Send">
                    </form>     
                </div>
            </div>
        </div>
        
        
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <div class="box">
                <!--<div class="box-icon">
                    <span class="fa fa-4x fa-html5"></span>
                </div>-->
                <div class="info">
                    <h4 class="text-center">Odisha</h4>
                    <p class="text-center"><b>ex: publishdate > startdate && publishdate < enddate</b></p>
                    <form method="get" target="_blank" action="<?php echo $crawler_url; ?>odisha/odisha.php">  
                      <div class="row">  
                        <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control start_date" name="start_date"  value="<?php echo $previous_date; ?>" placeholder="Start Date">
			    </div>  
                        </div> 
                        <div class="col-md-6">
                         <div class="form-group">
                             <input type="text" class="form-control end_date" name="end_date" value="<?php echo $current_date; ?>" placeholder="End Date">
			             </div> 
                        </div> 
                          
                      </div>  
                     <span class="pull-left">https://tendersodisha.gov.in/nicgep/app</span>                    
                     <input type="submit" name="west_bangal" class="btn btn-primary" value="Send">
                    </form>     
                </div>
            </div>
        </div>
        
        
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <div class="box">
                <!--<div class="box-icon">
                    <span class="fa fa-4x fa-html5"></span>
                </div>-->
                <div class="info">
                    <h4 class="text-center">Rajasthan</h4>
                    <p class="text-center"><b>ex: publishdate > startdate && publishdate < enddate</b></p>
                    <form method="get" target="_blank" action="<?php echo $crawler_url; ?>rajasthan/rajasthan.php">  
                      <div class="row">  
                        <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control start_date" name="start_date"  value="<?php echo $previous_date; ?>" placeholder="Start Date">
			    </div>  
                        </div> 
                        <div class="col-md-6">
                         <div class="form-group">
                             <input type="text" class="form-control end_date" name="end_date" value="<?php echo $current_date; ?>" placeholder="End Date">
			             </div> 
                        </div> 
                          
                      </div>  
                     <span class="pull-left">https://eproc.rajasthan.gov.in/nicgep/app</span>                    
                     <input type="submit" name="west_bangal" class="btn btn-primary" value="Send">
                    </form>     
                </div>
            </div>
        </div>
        
        
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <div class="box">
                <!--<div class="box-icon">
                    <span class="fa fa-4x fa-html5"></span>
                </div>-->
                <div class="info">
                    <h4 class="text-center">Sikkim</h4>
                    <p class="text-center"><b>ex: publishdate > startdate && publishdate < enddate</b></p>
                    <form method="get" target="_blank" action="<?php echo $crawler_url; ?>sikkim/sikkim.php">  
                      <div class="row">  
                        <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control start_date" name="start_date"  value="<?php echo $previous_date; ?>" placeholder="Start Date">
			    </div>  
                        </div> 
                        <div class="col-md-6">
                         <div class="form-group">
                             <input type="text" class="form-control end_date" name="end_date" value="<?php echo $current_date; ?>" placeholder="End Date">
			             </div> 
                        </div> 
                          
                      </div>  
                     <span class="pull-left">https://sikkimtender.gov.in/nicgep/app</span>                    
                     <input type="submit" name="west_bangal" class="btn btn-primary" value="Send">
                    </form>     
                </div>
            </div>
        </div>
        
        
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <div class="box">
                <!--<div class="box-icon">
                    <span class="fa fa-4x fa-html5"></span>
                </div>-->
                <div class="info">
                    <h4 class="text-center">Tamil Nadu</h4>
                    <p class="text-center"><b>ex: publishdate > startdate && publishdate < enddate</b></p>
                    <form method="get" target="_blank" action="<?php echo $crawler_url; ?>tamilnadu/tamilnadu.php">  
                      <div class="row">  
                        <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control start_date" name="start_date"  value="<?php echo $previous_date; ?>" placeholder="Start Date">
			    </div>  
                        </div> 
                        <div class="col-md-6">
                         <div class="form-group">
                             <input type="text" class="form-control end_date" name="end_date" value="<?php echo $current_date; ?>" placeholder="End Date">
			             </div> 
                        </div> 
                          
                      </div>  
                     <span class="pull-left">https://tntenders.gov.in/nicgep/app</span>                    
                     <input type="submit" name="west_bangal" class="btn btn-primary" value="Send">
                    </form>     
                </div>
            </div>
        </div>
        
        
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <div class="box">
                <!--<div class="box-icon">
                    <span class="fa fa-4x fa-html5"></span>
                </div>-->
                <div class="info">
                    <h4 class="text-center">Tripura</h4>
                    <p class="text-center"><b>ex: publishdate > startdate && publishdate < enddate</b></p>
                    <form method="get" target="_blank" action="<?php echo $crawler_url; ?>tripura/tripura.php">  
                      <div class="row">  
                        <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control start_date" name="start_date"  value="<?php echo $previous_date; ?>" placeholder="Start Date">
			    </div>  
                        </div> 
                        <div class="col-md-6">
                         <div class="form-group">
                             <input type="text" class="form-control end_date" name="end_date" value="<?php echo $current_date; ?>" placeholder="End Date">
			             </div> 
                        </div> 
                          
                      </div>  
                     <span class="pull-left">https://tripuratenders.gov.in/nicgep/app</span>                    
                     <input type="submit" name="west_bangal" class="btn btn-primary" value="Send">
                    </form>     
                </div>
            </div>
        </div>
        
        
        
        
        
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <div class="box">
                <!--<div class="box-icon">
                    <span class="fa fa-4x fa-html5"></span>
                </div>-->
                <div class="info">
                    <h4 class="text-center">West Bengal</h4>
                    <p class="text-center"><b>ex: publishdate > startdate && publishdate < enddate</b></p>
                    <form method="get" target="_blank" action="<?php echo $crawler_url; ?>westbengal/west_bangal.php">  
                      <div class="row">  
                        <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control start_date" name="start_date"  value="<?php echo $previous_date; ?>" placeholder="Start Date">
			</div>  
                        </div> 
                        <div class="col-md-6">
                         <div class="form-group">
                             <input type="text" class="form-control end_date" name="end_date" value="<?php echo $current_date; ?>" placeholder="End Date">
			</div> 
                        </div> 
                          
                      </div>  
                     <span class="pull-left">https://wbtenders.gov.in/nicgep/app</span>                      
                    <input type="submit" name="west_bangal" class="btn btn-primary" value="Send">
                    </form>     
                </div>
            </div>
        </div>
        
       
       
         <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <div class="box">
                <!--<div class="box-icon">
                    <span class="fa fa-4x fa-html5"></span>
                </div>-->
                <div class="info">
                    <h4 class="text-center">Bharat Electronics</h4>
                    <p class="text-center"><b>ex: publishdate > startdate && publishdate < enddate</b></p>
                    <form method="get" target="_blank" action="<?php echo $crawler_url; ?>bharat_electronics/bharat_electronics.php">  
                      <div class="row">  
                        <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control start_date" name="start_date"  value="<?php echo $previous_date; ?>" placeholder="Start Date">
			</div>  
                        </div> 
                        <div class="col-md-6">
                         <div class="form-group">
                             <input type="text" class="form-control end_date" name="end_date" value="<?php echo $current_date; ?>" placeholder="End Date">
			</div> 
                        </div> 
                          
                      </div>  
                     <span class="pull-left">http://eprocurebel.co.in/nicgep/app</span>                      
                    <input type="submit" name="west_bangal" class="btn btn-primary" value="Send">
                    </form>     
                </div>
            </div>
        </div>
        
        
        
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <div class="box">
                <!--<div class="box-icon">
                    <span class="fa fa-4x fa-html5"></span>
                </div>-->
                <div class="info">
                    <h4 class="text-center">E-procure</h4>
                    <p class="text-center"><b>ex: publishdate > startdate && publishdate < enddate </b></p>
                    <form method="get" target="_blank" action="<?php echo $crawler_url; ?>eprocurepublic/eprocure_gov_in.php">  
                      <div class="row">  
                        <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control start_date" name="start_date"  value="<?php echo $previous_date; ?>" placeholder="Start Date">
			</div>  
                        </div> 
                        <div class="col-md-6">
                         <div class="form-group">
                             <input type="text" class="form-control end_date" name="end_date" value="<?php echo $current_date; ?>" placeholder="End Date">
			</div> 
                        </div> 
                          
                      </div>  
                     <span class="pull-left">https://eprocure.gov.in/eprocure/app</span>                      
                    <input type="submit" name="west_bangal" class="btn btn-primary" value="Send">
                    </form>     
                </div>
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <div class="box">
                <!--<div class="box-icon">
                    <span class="fa fa-4x fa-html5"></span>
                </div>-->
                <div class="info">
                    <h4 class="text-center">E-Publish</h4>
                    <p class="text-center"><b>ex: publishdate > startdate && publishdate < enddate </b></p>
                    <form method="get" target="_blank" action="<?php echo $crawler_url; ?>eprocurepublic/eprocurepublic.php">  
                      <div class="row">  
                        <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control start_date" name="start_date"  value="<?php echo $previous_date; ?>" placeholder="Start Date">
			</div>  
                        </div> 
                        <div class="col-md-6">
                         <div class="form-group">
                             <input type="text" class="form-control end_date" name="end_date" value="<?php echo $current_date; ?>" placeholder="End Date">
			</div> 
                        </div> 
                          
                      </div>  
                     <span class="pull-left">https://eprocure.gov.in/epublish/app</span>                      
                    <input type="submit" name="west_bangal" class="btn btn-primary" value="Send">
                    </form>     
                </div>
            </div>
        </div>
        
         <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <div class="box">
                <!--<div class="box-icon">
                    <span class="fa fa-4x fa-html5"></span>
                </div>-->
                <div class="info">
                    <h4 class="text-center">Uttar Pradesh</h4>
                    <p class="text-center"><b>ex: publishdate > startdate && publishdate < enddate </b></p>
                    <form method="get" target="_blank" action="<?php echo $crawler_url; ?>gup/up.php">  
                      <div class="row">  
                        <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control start_date" name="start_date"  value="<?php echo $previous_date; ?>" placeholder="Start Date">
			</div>  
                        </div> 
                        <div class="col-md-6">
                         <div class="form-group">
                             <input type="text" class="form-control end_date" name="end_date" value="<?php echo $current_date; ?>" placeholder="End Date">
			</div> 
                        </div> 
                          
                      </div>  
                     <span class="pull-left">https://etender.up.nic.in/nicgep/app</span>                      
                    <input type="submit" name="west_bangal" class="btn btn-primary" value="Send">
                    </form>     
                </div>
            </div>
        </div>
        
        
         <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <div class="box">
                <!--<div class="box-icon">
                    <span class="fa fa-4x fa-html5"></span>
                </div>-->
                <div class="info">
                    <h4 class="text-center">Maharastra</h4>
                    <p class="text-center"><b>ex: publishdate > startdate && publishdate < enddate </b></p>
                    <form method="get" target="_blank" action="<?php echo $crawler_url; ?>gmaharastra/maharastra.php">  
                      <div class="row">  
                        <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control start_date" name="start_date"  value="<?php echo $previous_date; ?>" placeholder="Start Date">
			</div>  
                        </div> 
                        <div class="col-md-6">
                         <div class="form-group">
                             <input type="text" class="form-control end_date" name="end_date" value="<?php echo $current_date; ?>" placeholder="End Date">
			</div> 
                        </div> 
                          
                      </div>  
                     <span class="pull-left">https://mahatenders.gov.in/nicgep/app</span>                      
                    <input type="submit" name="west_bangal" class="btn btn-primary" value="Send">
                    </form>     
                </div>
            </div>
        </div>
        
        
         <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <div class="box">
                <!--<div class="box-icon">
                    <span class="fa fa-4x fa-html5"></span>
                </div>-->
                <div class="info">
                    <h4 class="text-center">Kerala</h4>
                    <p class="text-center"><b>ex: publishdate > startdate && publishdate < enddate </b></p>
                    <form method="get" target="_blank" action="<?php echo $crawler_url; ?>gkerla/kerla.php">  
                      <div class="row">  
                        <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control start_date" name="start_date"  value="<?php echo $previous_date; ?>" placeholder="Start Date">
			</div>  
                        </div> 
                        <div class="col-md-6">
                         <div class="form-group">
                             <input type="text" class="form-control end_date" name="end_date" value="<?php echo $current_date; ?>" placeholder="End Date">
			</div> 
                        </div> 
                          
                      </div>  
                     <span class="pull-left">https://etenders.kerala.gov.in/nicgep/app</span>                      
                    <input type="submit" name="west_bangal" class="btn btn-primary" value="Send">
                    </form>     
                </div>
            </div>
        </div>
        
        
         <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <div class="box">
                <!--<div class="box-icon">
                    <span class="fa fa-4x fa-html5"></span>
                </div>-->
                <div class="info">
                    <h4 class="text-center">Haryana</h4>
                    <p class="text-center"><b>ex: publishdate > startdate && publishdate < enddate </b></p>
                    <form method="get" target="_blank" action="<?php echo $crawler_url; ?>gharyana/haryana.php">  
                      <div class="row">  
                        <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control start_date" name="start_date"  value="<?php echo $previous_date; ?>" placeholder="Start Date">
			</div>  
                        </div> 
                        <div class="col-md-6">
                         <div class="form-group">
                             <input type="text" class="form-control end_date" name="end_date" value="<?php echo $current_date; ?>" placeholder="End Date">
			</div> 
                        </div> 
                          
                      </div>  
                     <span class="pull-left">https://etenders.hry.nic.in/nicgep/app</span>                      
                    <input type="submit" name="west_bangal" class="btn btn-primary" value="Send">
                    </form>     
                </div>
            </div>
        </div>
        
        
         <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <div class="box">
                <!--<div class="box-icon">
                    <span class="fa fa-4x fa-html5"></span>
                </div>-->
                <div class="info">
                    <h4 class="text-center">Jammu Kashmir</h4>
                    <p class="text-center"><b>ex: publishdate > startdate && publishdate < enddate </b></p>
                    <form method="get" target="_blank" action="<?php echo $crawler_url; ?>gjammukashmir/jammukashmir.php">  
                      <div class="row">  
                        <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control start_date" name="start_date"  value="<?php echo $previous_date; ?>" placeholder="Start Date">
			</div>  
                        </div> 
                        <div class="col-md-6">
                         <div class="form-group">
                             <input type="text" class="form-control end_date" name="end_date" value="<?php echo $current_date; ?>" placeholder="End Date">
			</div> 
                        </div> 
                          
                      </div>  
                     <span class="pull-left">https://jktenders.gov.in/nicgep/app</span>                      
                    <input type="submit" name="west_bangal" class="btn btn-primary" value="Send">
                    </form>     
                </div>
            </div>
        </div>
        
        
         <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <div class="box">
                <!--<div class="box-icon">
                    <span class="fa fa-4x fa-html5"></span>
                </div>-->
                <div class="info">
                    <h4 class="text-center">Delhi</h4>
                    <p class="text-center"><b>ex: publishdate > startdate && publishdate < enddate </b></p>
                    <form method="get" target="_blank" action="<?php echo $crawler_url; ?>gdelhi/delhi.php">  
                      <div class="row">  
                        <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control start_date" name="start_date"  value="<?php echo $previous_date; ?>" placeholder="Start Date">
			</div>  
                        </div> 
                        <div class="col-md-6">
                         <div class="form-group">
                             <input type="text" class="form-control end_date" name="end_date" value="<?php echo $current_date; ?>" placeholder="End Date">
			</div> 
                        </div> 
                          
                      </div>  
                     <span class="pull-left">https://govtprocurement.delhi.gov.in/nicgep/app</span>                      
                    <input type="submit" name="west_bangal" class="btn btn-primary" value="Send">
                    </form>     
                </div>
            </div>
        </div>
        
        
         <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <div class="box">
                <!--<div class="box-icon">
                    <span class="fa fa-4x fa-html5"></span>
                </div>-->
                <div class="info">
                    <h4 class="text-center">Jharkhand</h4>
                    <p class="text-center"><b>ex: publishdate > startdate && publishdate < enddate </b></p>
                    <form method="get" target="_blank" action="<?php echo $crawler_url; ?>gjharkhand/jharkhand.php">  
                      <div class="row">  
                        <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control start_date" name="start_date"  value="<?php echo $previous_date; ?>" placeholder="Start Date">
			</div>  
                        </div> 
                        <div class="col-md-6">
                         <div class="form-group">
                             <input type="text" class="form-control end_date" name="end_date" value="<?php echo $current_date; ?>" placeholder="End Date">
			</div> 
                        </div> 
                          
                      </div>  
                     <span class="pull-left">https://jharkhandtenders.gov.in/nicgep/app</span>                      
                    <input type="submit" name="west_bangal" class="btn btn-primary" value="Send">
                    </form>     
                </div>
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <div class="box">
                <!--<div class="box-icon">
                    <span class="fa fa-4x fa-html5"></span>
                </div>-->
                <div class="info">
                    <h4 class="text-center">mptenders</h4>
                    <p class="text-center"><b>ex: publishdate > startdate && publishdate < enddate </b></p>
                    <form method="get" target="_blank" action="<?php echo $crawler_url; ?>mptenders/mptenders.php">  
                      <div class="row">  
                        <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control start_date" name="start_date"  value="<?php echo $previous_date; ?>" placeholder="Start Date">
			</div>  
                        </div> 
                        <div class="col-md-6">
                         <div class="form-group">
                             <input type="text" class="form-control end_date" name="end_date" value="<?php echo $current_date; ?>" placeholder="End Date">
			</div> 
                        </div> 
                          
                      </div>  
                     <span class="pull-left">https://mptenders.gov.in/nicgep/app</span>                      
                    <input type="submit" name="west_bangal" class="btn btn-primary" value="Send">
                    </form>     
                </div>
            </div>
        </div>
         <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <div class="box">
                <!--<div class="box-icon">
                    <span class="fa fa-4x fa-html5"></span>
                </div>-->
                <div class="info">
                    <h4 class="text-center">IOCL</h4>
                    <p class="text-center"><b>ex: publishdate > startdate && publishdate < enddate </b></p>
                    <form method="get" target="_blank" action="<?php echo $crawler_url; ?>giol/iol.php">  
                      <div class="row">  
                        <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control start_date" name="start_date"  value="<?php echo $previous_date; ?>" placeholder="Start Date">
			</div>  
                        </div> 
                        <div class="col-md-6">
                         <div class="form-group">
                             <input type="text" class="form-control end_date" name="end_date" value="<?php echo $current_date; ?>" placeholder="End Date">
			</div> 
                        </div> 
                          
                      </div>  
                     <span class="pull-left">https://iocletenders.nic.in/nicgep/app</span>                      
                    <input type="submit" name="west_bangal" class="btn btn-primary" value="Send">
                    </form>     
                </div>
            </div>
        </div>
        
    </div>    

    
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <div class="box">
                <!--<div class="box-icon">
                    <span class="fa fa-4x fa-html5"></span>
                </div>-->
                <div class="info">
                    <h4 class="text-center">Dnhtenders</h4>
                    <p class="text-center"><b>ex: publishdate > startdate && publishdate < enddate</b></p>
                    <form method="get" target="_blank" action="<?php echo $crawler_url; ?>gdadranagarhaveli/dadranagarhaveli.php">  
                      <div class="row">  
                        <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control start_date" name="start_date"  value="<?php echo $previous_date; ?>" placeholder="Start Date">
			</div>  
                        </div> 
                        <div class="col-md-6">
                         <div class="form-group">
                             <input type="text" class="form-control end_date" name="end_date" value="<?php echo $current_date; ?>" placeholder="End Date">
			</div> 
                        </div> 
                          
                      </div>  
                     <span class="pull-left">https://dnhtenders.gov.in/nicgep/app</span>                    
                     <input type="submit" name="west_bangal" class="btn btn-primary" value="Send">
                    </form>     
                </div>
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <div class="box">
                <!--<div class="box-icon">
                    <span class="fa fa-4x fa-html5"></span>
                </div>-->
                <div class="info">
                    <h4 class="text-center">PMGSY</h4>
                    <p class="text-center"><b>ex: publishdate > startdate && publishdate < enddate</b></p>
                    <form method="get" target="_blank" action="<?php echo $crawler_url; ?>gpmgsytenders/pmgsy.php">  
                      <div class="row">  
                        <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control start_date" name="start_date"  value="<?php echo $previous_date; ?>" placeholder="Start Date">
			</div>  
                        </div> 
                        <div class="col-md-6">
                         <div class="form-group">
                             <input type="text" class="form-control end_date" name="end_date" value="<?php echo $current_date; ?>" placeholder="End Date">
			</div> 
                        </div> 
                          
                      </div>  
                     <span class="pull-left">https://pmgsytenders.gov.in/nicgep/app</span>                    
                     <input type="submit" name="west_bangal" class="btn btn-primary" value="Send">
                    </form>     
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
  //$('.start_date').datepicker({dateFormat: 'yy-mm-dd'});
  $('.start_date').datepicker({
    format: 'yyyy-mm-dd'
 });
  $('.end_date').datepicker({format: 'yyyy-mm-dd'});
</script>    
@stop

