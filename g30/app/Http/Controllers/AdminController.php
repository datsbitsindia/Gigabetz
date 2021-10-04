<?php

namespace App\Http\Controllers;

ini_set('memory_limit', '-1');
use Illuminate\Http\Request;
use Auth;
use DB;
use DataTables;
use Route;
use Session;
use Redirect;
use Illuminate\Support\Facades\Validator; // for validation
use Illuminate\Support\Facades\Input; // for validation
use Crypt;
//use App\Events\TableReload; // for pusher table reload

use App\Models\Admin;


if (version_compare(PHP_VERSION, '7.2.0', '>=')) {
    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
}


class AdminController extends Controller
{
   	public function dashboard(){
       
        $user = auth()->guard('admin')->user();
       
        return view('admin/dashboard');
    }

    
    public function dashboard2(){
        $user = auth()->guard('admin')->user();
        //dd($user);
        return view('admin/dashboard2');
    }
    public function adminlogout()
    {   
        Auth::guard('admin')->logout();
      	return redirect('admin/login');
    }
    public function userlisting()
    {   
        return view('admin/userlisting');
    }	
    public function ajaxuserlisting()
    {   
    
    	//$sql = "SELECT * FROM `users`";
    	$sql = "SELECT users.id,users.name,users.email,COUNT(DISTINCT registration_arham.id) as total FROM `users` LEFT JOIN registration_arham ON users.id=registration_arham.user_id GROUP BY `users.id`";
    	
        $data = DB::select($sql);    
		//return DataTables::of($data)->make(true);
		 return Datatables::of($data)
            ->addColumn('action', function ($data) {
                return '<a href="'.route('viewmember', $data->id).'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> View</a>';
            })

            /*->editColumn('id', 'ID: {{$id}}')
             ->addColumn('action2', function ($data) {
            return '<a href="'.route('edituser', $data->id).'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>';
       		 })
             ->rawColumns(['action','action2'])*/

            ->make(true);
           
     
    }
    public function memberlisting()
    {   
        return view('admin/memberlisting');
    }
    
    public function tempmemberlisting()
    {   
        return view('admin/parthmemberlisting');
    }
    
    public function ajaxmemberlisting()
    {   
    
    	$sql = "SELECT * FROM `registration_arham`";
      $data = DB::select($sql);    
		//return DataTables::of($data)->make(true);
		 return Datatables::of($data)
            ->addColumn('action', function ($data) {
                //return '<a href="'.route('edituser', $data->id).'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>';
                
            })

            /*->editColumn('id', 'ID: {{$id}}')
             ->addColumn('action2', function ($data) {
            return '<a href="'.route('edituser', $data->id).'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>';
       		 })
             ->rawColumns(['action','action2'])*/

            ->make(true);
     
    }
    
    public function tenderreportlisting()
    {   
        //return view('admin/tenderreportlisting');
        $sql = "SELECT website_name,COUNT(*) as total FROM `crawgj` GROUP BY website_name ORDER BY total DESC";
    	$data = DB::connection('mysql2')->select($sql); 
    	
    	//$data = DB::table('users')->where('id', $id)->first();
         return view('admin/tenderreportlisting',compact('data')); 
    }
    public function websitereportlisting()
    {   
        //return view('admin/tenderreportlisting');
        $dt = date('Y-m-d');
        $sql = "SELECT website_name,COUNT(*) AS totallive,SUM(if(dt = '$dt', 1, 0)) AS totalfresh FROM tenderinfo WHERE submitdate >= '$dt' GROUP BY website_name";
    	$data = DB::select($sql); 
    	
    	//$data = DB::table('users')->where('id', $id)->first();
         return view('admin/websitereportlisting',compact('data')); 
    }
    public function websitereportpublishdatelisting()
    {   
        //return view('admin/tenderreportlisting');
        if(isset($_GET['date'])){
         $dt = $_GET['date'];   
        }else{
        $dt = date('Y-m-d');
        }
        
        //$sql = "SELECT website_name,SUM(if(purfromdate = '$dt', 1, 0)) AS totalfresh FROM tenderinfo WHERE purfromdate='$dt' GROUP BY website_name";
        $sql = "SELECT website_name,COUNT(*) AS totalfresh FROM tenderinfo WHERE purfromdate='$dt' GROUP BY website_name";
    	$data = DB::select($sql); 
    	
    	$sql2 = "SELECT website_name,COUNT(*) AS totalfresh1 FROM crawgj WHERE e_publish_date='$dt' GROUP BY website_name";
    	$data2 = DB::connection('mysql2')->select($sql2); 
    	
    	$a = json_decode(json_encode($data), true);
    	$b = json_decode(json_encode($data2), true);
    	//echo "<pre>";
    	//print_r($a);
    	//print_r($b);
    	
    	$result = array();
    	foreach($b as $k => $val){
    	     $website = $val['website_name'];  
    	     $total = $val['totalfresh1'];
    	     $count_total = 0;
    	     foreach($a as $k1 => $val1){
    	         $website1 = $val1['website_name'];
    	         if($website == $website1){
    	           $count_total = $val1['totalfresh']; 
    	         }
    	     }
    	     $result[$k]['website_name'] = $website;
    	     $result[$k]['total'] = $total;
    	     $result[$k]['total_transfer'] = $count_total;
    	    
    	}
    	
    	//print_r($result);
    	//print_r(array_merge_recursive($a,$b));
    	//die();
    	
    // 	$result = array_merge_recursive($a, $b);
    //     print_r($result);
    // 	echo "<pre>";print_r($a); print_r($b);
    // 	print_r($results);die();
    	
    // 	$array = array();
    // 	foreach($data2 as $key => $val){
    	    
    // 	    $array[$val->website_name]['total'] = $val->totalfresh;
    // 	    $array[$val->website_name]['totaltransfer'] = $val->totalfresh;
    // 	}
    	
    	//$data = DB::table('users')->where('id', $id)->first();
         return view('admin/websitereportpublishdatelisting',compact('result','dt')); 
    }
    
    public function searchtender_refno(){
        if(isset($_GET['date'])){
         $dt = $_GET['date'];   
        }else{
        $dt = '';
        }
        
        //$sql = "SELECT website_name,SUM(if(purfromdate = '$dt', 1, 0)) AS totalfresh FROM tenderinfo WHERE purfromdate='$dt' GROUP BY website_name";
        $sql = "SELECT * FROM tenderinfo WHERE TenderNo='$dt' OR tender_ref_id='$dt'";
    	$result = DB::select($sql);
    	
    	return view('admin/searchtender_refno',compact('result','dt')); 
    }
    public function adminlisting()
    {  
       /*$mod_action = ModulesController::check_permission('admin/adminlisting');

       if(strpos(' '.$mod_action->action,'L')>0)
       {
         return view('admin/adminlisting');
       }
       else
       {
          return Redirect()->back();
       } */
        return view('admin/adminlisting');
    } 
    public function ajaxadminlisting()
    {   
      /*$mod_action = ModulesController::check_permission('admin/adminlisting');
      $parent_title = $mod_action->parent_title;
      $parent_data_id = $mod_action->parent_data_id;*/
      //$sql = "SELECT id,first_name,last_name,company_name,email,user_phone,usr_type,tbl_m_module_roles.rol_name FROM admins LEFT JOIN tbl_m_module_roles ON admins.rol_id=tbl_m_module_roles.rol_id";
      $sql = "SELECT id,first_name,last_name,company_name,email,user_phone,usr_type FROM admins";
        $data = DB::select($sql);    
    //return DataTables::of($data)->make(true);
     return Datatables::of($data)
            // ->addColumn('action', function ($data) {
            //     return '<span class="btn btn-sm green span-link sub_menu_tab_a" parent-data-id="'.$parent_data_id.'" parent-title="'.$parent_title.'" data-action="C" data-key="0" data-link="'.route('assignmodule/modules', $data->id).'"><i class="glyphicon glyphicon-edit"></i>Assign Module</span>';
            // })

            /*->editColumn('id', 'ID: {{$id}}')
             ->addColumn('action2', function ($data) {
            return '<a href="'.route('edituser', $data->id).'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>';
           })
             ->rawColumns(['action','action2'])*/

            ->make(true);
     
    } 
    /*public function ajaxuserlisting2()
    {   


        $sql = "SELECT id,first_name,last_name,company_name,email FROM `users`";
        $data = DB::select($sql);    
        $arr = array();
        $arr[]['data'] = $data;
        echo json_encode($arr);
     
    }*/
    public function edit_user_details($id){
    	$sql = "SELECT * FROM registration_arham WHERE user_id=$id";
        $data = DB::select($sql);  
    	//$data = DB::table('registration_arham')->where('id', $id)->first();
    	
         return view('admin/viewmember',compact('data'));  
    }

     public function updatestatus(Request $request){
         
         
         $status = $request->get('star_status');
         $id = $request->get('mem_id');
         
         $data = array(
          'flag' => $status,
          );
         $success = DB::table('registration_arham')->where('id',$id)->update($data);

          if($success){
            echo "success";
            //$table_id="get_list_data";
            //event(new TableReload($table_id));
          }
         
     }
     public function deletemember(Request $request){
         
         
         //$status = $request->get('star_status');
         $id = $request->get('mem_id');
         
        //  $data = array(
        //   'flag' => $status,
        //   );
         //$success = DB::table('registration_arham')->where('id',$id)->update($data);
        $success = DB::table('registration_arham')->where('id',$id)->delete();
          if($success){
            echo "success";
            //$table_id="get_list_data";
            //event(new TableReload($table_id));
          }
         
     }
     
    public function post_edit_user_details(){

    
      $fname = $_GET['fname'];
      
      $email = $_GET['email'];
      $company = $_GET['company'];
      $phone = $_GET['phone'];
      $id = $_GET['user_id'];
      $status = $_GET['status'];
      $is_tender = $_GET['is_tender'];
      $is_result = $_GET['is_result'];
      $is_check = $_GET['is_check'];
      
      $alternate_email = $_GET['alternate_email'];
      $alternate_email_str = implode(',',$alternate_email);
      
      $data = array(
          'name' => $fname,
         
          'email' => $email,
          'alternate_email' => $alternate_email_str,
          'company_name' => $company,
          'mobile' => $phone,
          'status' => $status,
          'is_tender' => $is_tender,
          'is_result' => $is_result,
          'is_check' => $is_check,
          );
          
      $success = DB::table('users')->where('id',$id)->update($data);

      if($success){
        echo "success";
        //$table_id="get_list_data";
        //event(new TableReload($table_id));
      }
    }
    
    public function test(){
        return view('admin/tab_test');  
    }

    public function tab1()
    {   

        $sql = "SELECT id,first_name,last_name,company_name,email,user_phone FROM `users`";
        $data = DB::select($sql);    
        //return DataTables::of($data)->make(true);
         return Datatables::of($data)
            ->addColumn('action', function ($data) {
                return '<div class="btn btn-xs btn-primary edit-record" tab-check="step_2" tab-title="Agency Info" data="'.$data->id.'"><i class="glyphicon glyphicon-edit"></i> Edit</div>';
            })
            /*->editColumn('id', 'ID: {{$id}}')
             ->addColumn('action2', function ($data) {
            return '<a href="'.route('edituser', $data->id).'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>';
             })
             ->rawColumns(['action','action2'])*/
            ->make(true);
     
    }   
    
    public function tab2()
    {   

        $sql = "SELECT agencyid,agencyname FROM `agency` where agencyid=".$_GET['agencyid'];
        $data = DB::select($sql);    
       
        //return DataTables::of($data)->make(true);
         return Datatables::of($data)
            ->addColumn('action', function ($data) {
                return '<div class="btn btn-xs btn-primary edit-record" tab-check="step_3" tab-title="Tender Info" data="'.$data->agencyid.'"><i class="glyphicon glyphicon-edit"></i> Edit</div>';
            })
            /*->editColumn('id', 'ID: {{$id}}')
             ->addColumn('action2', function ($data) {
            return '<a href="'.route('edituser', $data->id).'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>';
             })
             ->rawColumns(['action','action2'])*/
            ->make(true);
     
    }   
    public function tab3()
    {   

        $sql = "SELECT * FROM `tbl_m_1819_tender_info` where ti_agencyid=".$_GET['id'];
        $data = DB::select($sql);    
       
        //return DataTables::of($data)->make(true);
         return Datatables::of($data)
            ->addColumn('action', function ($data) {
                return '<div class="btn btn-xs btn-primary edit-record" tab-check="step_4" tab-title="TenderView Info" data="'.$data->ti_id.'"><i class="glyphicon glyphicon-edit"></i> Edit</div>';
            })
            /*->editColumn('id', 'ID: {{$id}}')
             ->addColumn('action2', function ($data) {
            return '<a href="'.route('edituser', $data->id).'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>';
             })
             ->rawColumns(['action','action2'])*/
            ->make(true);
     
    }   

    public function post_activation_user_details(){
       
       
      /*$fname = $_GET['fname'];
      $lname = $_GET['lname'];
      $email = $_GET['email'];
      $company = $_GET['company'];
      $phone = $_GET['phone'];
      $alternate_email = $_GET['alternate_email'];
      $alternate_email_str = implode(',',$alternate_email);*/
      $id = $_POST['user_id'];
      $status = $_POST['status'];
    $is_tender = $_POST['is_tender'];
    if(!isset($is_tender) || $is_tender == ""){
      $is_tender = 0;
    }
    $is_result = $_POST['is_result'];
    if(!isset($is_result) || $is_result == ""){
      $is_result = 0;
    }
    $is_check = $_POST['is_check'];
    if(!isset($is_check) || $is_check == ""){
      $is_check = 0;
    }
      
     
      
      $data = array(
          //'name' => $fname,
          //'last_name' => $lname,
          //'email' => $email,
          //'alternate_email' => $alternate_email_str,
          //'company_name' => $company,
          //'mobile' => $phone,
          'status' => $status,
          'is_tender' => $is_tender,
          'is_result' => $is_result,
          'is_check' => $is_check,
          );
          //dd($data);
      $success = DB::table('users')->where('id',$id)->update($data);

      if($success){
        //echo "success";
        //return response()->json(['status' => 'success','reset' => '0','message' =>'Successfully Updated!']);
        
        //$table_id="get_list_data";
        //event(new TableReload($table_id));
      }
      return back()->with('success', 'Thank You! Successfully Updated.');
    }

    public function postserviceuserdetails(Request $request){
       
        $id = $_POST['user_id'];
        $service_commitement = $_POST['service_commitement'];
        $amount = $_POST['amount'];
        $tenure = $_POST['tenure'];
        $remarks = $_POST['remarks'];
      
     $dt = date('Y-m-d H:i:s');
      
      $data = array(
          'user_id' => $id,
          'service_commitement' => $service_commitement,
          'amount' => $amount,
          'tenure' => $tenure,
          'remarks' => $remarks,
          'updated_at' => $dt,
          );
          //dd($data);
          $user = DB::table('user_service_details')->where('user_id',$request->get('user_id'))->first();
          if(empty($user)){
             //dd($data);
             $success = DB::table('user_service_details')->insertGetId($data);
             $mod_last_insert_id = DB::getPdo()->lastInsertId();
          }else{
             $success = DB::table('user_service_details')->where('user_id',$id)->update($data);
          }
     
      if($success){
         return back()->with('success', 'Thank You! Successfully Updated.');
      }
    }

    public function tenderlisting()
    {   

      $moduledata = ModulesController::check_permission('admin/tenderlisting');
      $data=$moduledata->action; 
      if(strpos(' '.$moduledata->action,'L')>0)
      {
        return view('admin/tenderlisting',compact('data','moduledata'));
      }
      else
      {
       return Redirect()->back();
      } 
      //return view('admin/tenderlisting');
    } 
    
    public function ajaxtenderlisting()
    {  
      $limit_str = ''; 
      if(isset($_GET['start']) && isset($_GET['length'])){
       $limit_str = ' LIMIT '.$_GET['start'].','.$_GET['length'];  
      }

      $sql = "SELECT ti_id,ti_no,ti_ref_no,ti_submit_date,ti_amount,ti_work FROM `tbl_m_1819_tender_info`";
        $data = DB::select($sql);   
     return Datatables::of($data)
            ->addColumn('action', function ($data) {
                //return '<a href="'.route('edituser', $data->ti_id).'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> View</a>';
                return '<a href="#" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> View</a>';
            })
            ->make(true);
    } 

    public function auctionlisting()
    {   
        return view('admin/auctionlisting');
    } 
    public function ajaxauctionlisting()
    {   
      $sql = "SELECT ti_id,ti_no,ti_ref_no,ti_submit_date,ti_amount,ti_work FROM `tbl_m_1819_auction_info`";
        $data = DB::select($sql);    
     return Datatables::of($data)
            ->addColumn('action', function ($data) {
                //return '<a href="'.route('edituser', $data->ti_id).'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> View</a>';
                return '<a href="#" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> View</a>';
            })
            ->make(true);
    }

    public function gallerylisting()
    {   
        return view('admin/gallerylisting');
    } 
    public function ajaxgallerylisting()
    {   
      $sql = "SELECT id,title,description,tags,gallery_image,image_size,created_date FROM `gallery`";
        $data = DB::select($sql);    
     return Datatables::of($data)
            ->addColumn('action', function ($data) {
                return '<a href="'.route('editgallery', $data->id).'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>';
                //return '<a href="#" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> View</a>';
            })
            ->make(true);
    } 

    public function addgallery(){
        //$sql = "SELECT * FROM gallery WHERE id=$id";
        //$data = DB::select($sql);  
        //$data = DB::table('registration_arham')->where('id', $id)->first();
      
        return view('admin/add_gallery');  
    }

    public function postaddgallery(Request $request){
      
        //dd($request);
        $arr = array();
        DB::beginTransaction();
        try { 
        
            $validator = Validator::make($request->all(),
                array(
                    'title' => 'required',
                    'description' => 'required',
                    'tags' => 'required',
                    'image_size' => 'required',
                )
            );
            if ($validator->fails()) {
                $err_arr = $validator->errors()->all();
                $error = '';  
                foreach($err_arr as $k => $val){
                  $error .= $val;
                }
                //return response()->json(['status' => 'error','message' =>$error]);
                return redirect('add_gallery')->withInput()->withErrors($validator);
            }else{
                
                $gallery_image='';
                //if($request->hasFile('gallery_image')){
                if($request->hasFile('gallery_image')){
                    //echo "@@@@@";die();
                    //$allowedfileExtension=['pdf','jpg','png','docx','doc','zip'];
                    $file = $request->file('gallery_image');
                    $filename = $file->getClientOriginalName();
                    $extension = $file->getClientOriginalExtension();
                    
                    $destinationPath = 'public/frontend/images/gallery/'; // upload path
                    $gallery_image = date('YmdHis') . "." . $extension;
                   
                    $file->move($destinationPath, $gallery_image);
        
                }else{
                     //e_certificate
                }
                //echo $gallery_image;die();
                 
                
                //echo "####";die();
                $dt = date('Y-m-d');

                $data =[
                'title'=>$request->get('title'),
                'description' =>$request->get('description'),
                'tags' =>$request->get('tags'),
                'gallery_image' => $gallery_image,
                'image_size' =>$request->get('image_size'),
                ];
             
                //dd($data);
                $id = DB::table('gallery')->insertGetId($data);
                $mod_last_insert_id = DB::getPdo()->lastInsertId();

                DB::commit();
                
              return redirect('admin/gallerylisting')->with('success', 'Gallery Added Successfully!');
            }
        }catch (Exception $e) {
            Log::warning(sprintf('Exception: %s', $e->getMessage()));
            //return Redirect::route('modules');
            return back()->with('error', 'something went wrong!');
            DB::rollback();
        }

    }

    public function editgallery($id){
        //$sql = "SELECT * FROM gallery WHERE id=$id";
        //echo $sql;die();
        //$data = DB::select($sql);
        $data = DB::table('gallery')->where('id', $id)->first(); 
        //$data = DB::table('registration_arham')->where('id', $id)->first();
      
        return view('admin/edit_gallery',compact('data'));  
    }

    public function posteditgallery(Request $request){
        $arr = array();
        DB::beginTransaction();
        try { 
        
            $validator = Validator::make($request->all(),
                array(
                    'title' => 'required',
                    'description' => 'required',
                    'tags' => 'required',
                    'image_size' => 'required',
                )
            );
            if ($validator->fails()) {
                $err_arr = $validator->errors()->all();
                $error = '';  
                foreach($err_arr as $k => $val){
                  $error .= $val;
                }
                //return response()->json(['status' => 'error','message' =>$error]);
                return Redirect()->back()->with('error',$error)->withInput(); 
            }else{
                
                $gallery_image='';
                if($request->hasFile('gallery_image')){

                    //$allowedfileExtension=['pdf','jpg','png','docx','doc','zip'];
                    $file = $request->file('gallery_image');
                    $filename = $file->getClientOriginalName();
                    $extension = $file->getClientOriginalExtension();
                    
                    $destinationPath = 'public/frontend/images/gallery/'; // upload path
                    $gallery_image = date('YmdHis') . "." . $extension;
                    $file->move($destinationPath, $gallery_image);
        
                }else{
                    $gallery_image = $request->get('gallery_image');
                }
                
                $id = $request->get('gid');
                $dt = date('Y-m-d');
                $data =[
                'title'=>$request->get('title'),
                'description' =>$request->get('description'),
                'tags' =>$request->get('tags'),
                'gallery_image' =>$gallery_image,
                'image_size' =>$request->get('image_size'),
                ];
             
                //dd($data);
                //$id = DB::table('registration_arham')->insertGetId($data);
                //$mod_last_insert_id = DB::getPdo()->lastInsertId();
                
                $success = DB::table('gallery')->where('id',$id)->update($data);

                DB::commit();
                
                //return Redirect::route('modules');
                return redirect('admin/gallerylisting')->with('success', 'Gallery Update Successfully!');
            }
        }catch (Exception $e) {
            Log::warning(sprintf('Exception: %s', $e->getMessage()));
            //return Redirect::route('modules');
            return back()->with('error', 'something went wrong!');
            DB::rollback();
        } 
    }
    
    public function sectorlisting()
    {   
    
      $moduledata = ModulesController::check_permission('admin/sectorlisting');
      $data=$moduledata->action; 
      if(strpos(' '.$moduledata->action,'L')>0)
      {
        return view('admin/sectorlisting',compact('data','moduledata'));
      }
      else
      {
       return Redirect()->back();
      } 
    } 
    public function ajaxsectorlisting()
    {   
      $sql = "SELECT id,name FROM `tbl_m_sector`";
        $data = DB::select($sql);    
     return Datatables::of($data)
            ->make(true);
    } 
    public function agencylisting()
    {   
      /*$moduledata = ModulesController::check_permission('admin/agencylisting');
      $data=$moduledata->action; 
      if(strpos(' '.$moduledata->action,'L')>0)
      {
        return view('admin/agencylisting',compact('data','moduledata'));
      }
      else
      {
       return Redirect()->back();
      } */
      return view('admin/agencylisting');
    } 
    public function ajaxagencylisting()
    {   
        
      $sql = "SELECT agencyid,agencyname FROM `agency`";
     
      //$sql = "SELECT tbl_m_agency.agencyid,tbl_m_agency.agencyname,tbl_m_misc_info.mmi_text as type_org FROM `tbl_m_agency` LEFT JOIN tbl_m_misc_info ON tbl_m_agency.type_of_organisation=tbl_m_misc_info.mmi_id ORDER BY tbl_m_misc_info.mmi_text DESC";
        //WHERE tbl_m_misc_info.mmi_master='Type of Organization'
       
        
          if(request()->ajax())
            {
                        /*return datatables()->of(Post::latest()->get())
                        ->addColumn('action', function($data){
                        $button = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$data->id.'" data-original-title="Edit" class="edit btn btn-success edit-post">Edit</a>';
                        $button .= '&nbsp;&nbsp;';
                        $button .= '<a href="javascript:void(0);" id="delete-post" data-toggle="tooltip" data-original-title="Delete" data-id="'.$data->id.'" class="delete btn btn-danger">   Delete</a>';
                        return $button;
                        })
                        ->rawColumns(['action'])
                        ->make(true);*/
                    $data = DB::select($sql);  
                    //$data = DB::table('agency')->latest('agencyid')->get();
                    return Datatables::of($data)
                    ->make(true);    
            }  
            
    } 
    
    public function departmentlisting()
    {   
        return view('admin/department');
    } 
    public function ajaxdepartmentlisting()
    {   
      $sql = "SELECT tbl_m_department.ma_id,tbl_m_department.department_name,tbl_m_agency.agencyname FROM `tbl_m_department` LEFT JOIN tbl_m_agency ON tbl_m_department.ma_id=tbl_m_agency.agencyid";
        $data = DB::select($sql);    
     return Datatables::of($data)
            ->make(true); 
    } 

    public function divisionlisting()
    {   
        return view('admin/division');
    } 
    public function ajaxdivisionlisting()
    {   
      $sql = "SELECT tbl_m_division.div_id,tbl_m_division.division_name,tbl_m_department.department_name FROM `tbl_m_division` LEFT JOIN tbl_m_department ON tbl_m_division.dept_id=tbl_m_department.dept_id";
        $data = DB::select($sql);    
     return Datatables::of($data)
            ->make(true);
    } 

    public function subdivisionlisting()
    {   
        return view('admin/subdivision');
    } 

    public function ajaxsubdivisionlisting()
    {   
      $sql = "SELECT tbl_m_subdivision.subdiv_id,tbl_m_subdivision.subdivision_name,tbl_m_division.division_name FROM `tbl_m_subdivision` LEFT JOIN tbl_m_division ON tbl_m_subdivision.division_id=tbl_m_division.div_id";
        $data = DB::select($sql);    
     return Datatables::of($data)
            ->make(true);
    } 

    public function inquirylisting()
    {   
        return view('admin/inquirylisting');
    } 
    public function ajaxinquirylisting()
    {   
      $sql = "SELECT * FROM `contact`";
        $data = DB::select($sql);    
     return Datatables::of($data)
            ->make(true);
    } 
    public function popup_inquirylisting()
    {   
        return view('admin/popup_inquirylisting');
    } 
    public function popup_ajaxinquirylisting()
    {   
      $sql = "SELECT * FROM `tbl_inquiry`";
        $data = DB::select($sql);    
     return Datatables::of($data)
            ->make(true);
    } 
    public function agencycreate(){   
      
         $mod_action = ModulesController::check_permission('admin/agencylisting');
         $action= encrypt($mod_action->action);   
         if(strpos(' '.$mod_action->action,'C')>0)
         {
          $org_type = array();
         
          $filter_sql = "SELECT * FROM `tbl_m_misc_info` WHERE mmi_master='Type of Organization'";
          $data_misc = DB::select($filter_sql);   

          /*foreach($data_misc as $k => $val){
    
              $org_type[] = $val->mmi_text;
        
          }*/

          
           return view('admin.agency.create',compact('data_misc'))->with('action',$action);
         }
         else
         {
           return Redirect()->back();
         }
    }


    public function postagencycreate(Request $request)
    { 
      $arr = array();
      DB::beginTransaction();
      try { 
        
         $validator = validator::make(Input::all(),
            array(
              'org_name' => 'required',
              'org_name_type' => 'required',
              )
            );
        if ($validator->fails()) {
            $err_arr = $validator->errors()->all();
            $error = '';  
            foreach($err_arr as $k => $val){
              $error .= $val;
            }
            return response()->json(['status' => 'error','message' =>$error]);
        }else{
         
         
         
         $dt = date('Y-m-d');
          $data =[
          'type_of_organisation'=>$request->get('org_name_type'),
          'agencyname' =>$request->get('org_name'),
          ];
         
         //dd($data);
         $id = DB::table('tbl_m_agency')->insertGetId($data);
         $mod_last_insert_id = DB::getPdo()->lastInsertId();

         DB::commit(); 
         return response()->json(['status' => 'success','reset' => '1','message' =>'Successfully Created!']);
       }
      }catch (Exception $e) {
      Log::warning(sprintf('Exception: %s', $e->getMessage()));
      //return Redirect::route('modules');
      DB::rollback();
      }
    }


    public function sectorcreate(){   
      
         $mod_action = ModulesController::check_permission('admin/sectorlisting');
         $action= encrypt($mod_action->action);   
         if(strpos(' '.$mod_action->action,'C')>0)
         {
           return view('admin.sector.create')->with('action',$action);
         }
         else
         {
           return Redirect()->back();
         }
    }

    public function postsectorcreate(Request $request)
    { 
      $arr = array();
      DB::beginTransaction();
      try { 
        
         $validator = validator::make(Input::all(),
            array(
              'sc_name' => 'required',
              )
            );
        if ($validator->fails()) {
            $err_arr = $validator->errors()->all();
            $error = '';  
            foreach($err_arr as $k => $val){
              $error .= $val;
            }
            return response()->json(['status' => 'error','message' =>$error]);
        }else{
         
         
         
         $dt = date('Y-m-d');
          $data =[
          'name' =>$request->get('sc_name'),
          ];
         
         //dd($data);
         $id = DB::table('tbl_m_sector')->insertGetId($data);
         $mod_last_insert_id = DB::getPdo()->lastInsertId();

         DB::commit(); 
         return response()->json(['status' => 'success','reset' => '1','message' =>'Successfully Created!']);
       }
      }catch (Exception $e) {
      Log::warning(sprintf('Exception: %s', $e->getMessage()));
      //return Redirect::route('modules');
      DB::rollback();
      }
    }

    public function emailalert(){
        $user = auth()->guard('admin')->user();
        //dd($user);
        return view('admin/emailalert');
    }
    public function sendpaiduseremail(){
        //$user = auth()->guard('admin')->user();
        //dd($user);
        //return view('admin/emailalert');
        
        $dt = date('Y-m-d');
        $sql = "SELECT * FROM check_email ORDER BY id DESC LIMIT 1";
        $checkdata = DB::select($sql); 
        $last_tenderid = $checkdata[0]->tender_id;
        $last_send_date = $checkdata[0]->date;
        
        $sqllive = "SELECT MAX(ourrefno) as ourrefno FROM live_tenders";
        $checklive = DB::select($sqllive); 
        $live_max_tenderid = $checklive[0]->ourrefno;
        
        if($last_send_date == $dt){
        return redirect()->route('emailalert')->with('success', 'Today Already Send Email!');
        }
        
        
        
        //$filter_user = "SELECT * FROM users LEFT JOIN tbl_user_tender_product ON users.id=tbl_user_tender_product.user_id WHERE users.id=30 AND users.is_tender=1 AND users.status='Paid' AND tbl_user_tender_product.to_date>='$dt'";
        $filter_user = "SELECT * FROM users LEFT JOIN tbl_user_tender_product ON users.id=tbl_user_tender_product.user_id WHERE users.is_tender=1 AND users.status='Paid' AND tbl_user_tender_product.to_date>='$dt'";
        //echo $filter_user;die();
        $data_user = DB::select($filter_user);   

          foreach($data_user as $k => $val){
              //$org_type[] = $val->mmi_text;
               $tendersData = $this->Loginusertenders($val,$last_tenderid);
               //dd($tendersData);
               $company = $val->company_name;
               $to = $val->email;
               $alternate_email = $val->alternate_email;
               
               $subject = "Fresh Tender Of Your Category ".$dt." || ".$company;
               
               /*$message ='<center>
                <table cellpadding="0" cellspacing="0" border="0" width="100%" style="width:calc(100%);margin:0 auto;font-family: Arial; letter-spacing: 1.1px;">
                    <tbody>
                        <tr>
                            <td width="100%">
                                
                                <table width="800px" cellpadding="0" cellspacing="0" border="0" style="max-width:800px;margin:0 auto;border:2px solid #0f5881;">
                                    <tbody>
                                        <tr>
                                            <td width="100%" style="">
                                            
                                                <table width="100%" cellpadding="0" cellspacing="0" border="0" style="min-width:100%;padding: 10px 20px;background-color:#fff;">
                                                    <tbody>
                                                        <tr>
                                                            <td align="left" style="display: table-cell;">
                                                                <h3 style="font-family:Arial;margin:auto;font-size: 14px;">Sales : 9672022299 | 9672442299<br/>Support : 9672042299 | 9672062299</h3>
                                                            </td>
                                                            <td align="right">
                                                                <img src="https://www.tenderkings.com/public/frontend/images/logo.png" width="125">
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
            
                                                <table width="100%" cellpadding="0" cellspacing="0" border="0" style="min-width:100%">
            			                            <tbody>
            			                                <tr>
            			                                    <td width="100%">
            			                                        <hr width="100%" align="center" style="margin-top:0px;margin-bottom:0px;border-color:#0f5881;">
            			                                    </td>
            			                                </tr>
            			                            </tbody>
            			                        </table>
                                                
                                                <table width="100%" cellpadding="0" cellspacing="0" border="0" style="min-width:100%;padding: 10px 20px;color:#0f5881;">
                                                    <tbody>
                                                        <tr>
                                                            <td width="100%"><h1 style="margin-bottom: 0px;word-spacing: 5px;">Dear '.$company.'</h1></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
            
                                                <table width="100%" cellpadding="0" cellspacing="0" border="0" style="min-width:100%;padding: 10px 20px;color:#0f5881;">
                                                    <tbody>
                                                        <tr>
                                                            <td width="100%"><h3 style="margin-bottom: 0px;word-spacing: 5px;">Greetings from Tenderkings.com!</h3></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
            
                                                <table width="100%" cellpadding="0" cellspacing="0" border="0" style="min-width:100%;padding: 10px 20px;color:#0f5881;">
                                                    <tbody>';
                                                    $srno = 1;
                                                    if(!empty($tendersData) && isset($tendersData)){
                                                        
                                                    foreach($tendersData as $t){
                                                        $parameterid = Crypt::encrypt($t->ourrefno);
                                                         $str = (strlen($t->Work) > 200) ? substr($t->Work, 0, 200).'...' : $t->Work;
                                                         if ($t->amount == '0.00' || empty($t->amount) || $t->amount <= 3000) {

                                                                 $tamount = "Not Estimated";
                                                            } else {
                                                                $tamount = $t->ti_amount;
                                                            }
                                                            
                                                        $message .='<tr style="margin-bottom:10px;display: block;border:1px solid #0f5881;">
                                                            <td width="100%" style="padding:10px 10px;margin-bottom:10px;">
                                                            	<table width="100%" cellpadding="0" cellspacing="0" border="0" style="min-width:100%;">
            				                                        <tbody>
            				                                            <tr>
            				                                                <td width="70%" align="left"><p style="margin-bottom: 10px;font-size:14px;"><strong>'.$srno.'. TKID : '.$t->ourrefno.'</strong></p></td>
            				                                                <td width="30%" rowspan="4" align="center">
            				                                                	<p>
            				                                                		<a href="'.route('usertender',$parameterid).'" style="text-decoration:none;background:#0f5881;color:#fff;font-size:14px;font-weight:bold;padding:7px 10px;clear:both">View More</a>
            				                                                		<a target="_blank" href="'.$t->documentpath.'" style="text-decoration:none;background:#0f5881;color:#fff;font-size:14px;font-weight:bold;padding:7px 10px;clear:both">Download</a>
            				                                                	</p>
            				                                                </td>
            				                                            </tr>
            				                                            <tr>
            				                                                <td width="70%" align="left"><p style="margin-bottom: 10px;font-size:14px;">'.$str.'</p></td>
            				                                            </tr>
            				                                            <tr>
            				                                                <td width="70%" align="left"><p style="margin-bottom: 10px;font-size:14px;">Authority Name : '.$t->org_name.' | Tender Value : '.$tamount.'</p></td>
            				                                            </tr>
            				                                             <tr>
            				                                                <td width="70%" align="left"><p style="margin-bottom: 10px;font-size:14px;">Location : '.$t->city.', '.$t->state_name.'</p></td>
            				                                            </tr>
            				                                            <tr>
            				                                                <td width="70%" align="left"><p style="font-size:14px;">Due Date : '.$t->show_ti_submit_date.'</p></td>
            				                                            </tr>
            				                                        </tbody>
            				                                    </table>
                                                            </td>
                                                        </tr>';
                                                    $srno++;
                                                    }
                                                    }else{
                                                        
                                                        $message .='<tr style="margin-bottom:10px;display: block;">
                                                            <td width="100%" style="border:1px solid #0f5881;padding:10px 10px;margin-bottom:10px;">
                                                            	<span style="text-decoration:none;background:#0f5881;color:#fff;font-size:14px;font-weight:bold;padding:7px 10px;clear:both">No Fresh Tenders Today!</span>
                                                            </td>
                                                        </tr>';
                                                    }
            
                                                    $message .='</tbody>
                                                </table>
            
                                                <table width="100%" cellpadding="0" cellspacing="0" border="0" style="min-width:100%">
            			                            <tbody>
            			                                <tr>
            			                                    <td width="100%">
            			                                        <hr width="100%" align="center" style="margin-top:0px;margin-bottom:0px;border-color:#0f5881;">
            			                                    </td>
            			                                </tr>
            			                            </tbody>
            			                        </table>
                                                
                                                <table width="100%" cellpadding="0" cellspacing="0" border="0" style="min-width:100%;padding: 10px 20px;color:#0f5881;">
                                                    <tbody>
                                                        <tr>
                                                            <td width="100%">
                                                                <h2 style="margin:5px 0px;word-spacing: 5px;">Thanks You<br/>Tenderkings</h3>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
            
                                                <table width="100%" cellpadding="0" cellspacing="0" border="0" style="min-width:100%;padding: 10px 20px;color:#0f5881;">
                                                    <tbody>
                                                        <tr>
                                                            <td width="100%">
                                                                <p style="margin:10px 0px">If you do not want to receive this mailer, <a style="color:#0f5881" title="TenderKings">Unsubscribe</a></p>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                
                            </td>
                        </tr>
                    </tbody>
                </table>
            </center>';
            */
            
            $message ='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
            <html>
            <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
            <meta name="viewport" content="width=device-width" />
            
            <style>
                .mobile_full_width_content{width: 78%;display: inline-table;}
                .mobile_full_width_btn{width: 20%;display: inline-table;}
                .mobile_inline_btn{text-decoration:none;background:#0f5881;color:#fff;font-size:14px;font-weight:bold;padding:7px 10px;display:block;margin-bottom: 5px;text-align: center;}
            
                @media only screen and (max-width: 768px){
                    .mobile_full_width_content{width:100% !important;display: block !important;}
                    .mobile_full_width_btn{width:100% !important;display: block !important;}
                    .mobile_inline_btn {display: inline-block !important;font-size:13px !important;}
                }
            </style>
            </head>
            <body style="padding:0; margin:0">
            <center>
                <table cellpadding="0" cellspacing="0" border="0" width="100%" style="width:calc(100%);margin:0 auto;font-family: Arial; letter-spacing: 1.1px;">
                    <tbody>
                        <tr>
                            <td width="100%">
                                
                                <table width="800px" cellpadding="0" cellspacing="0" border="0" style="max-width:800px;margin:0 auto;border:2px solid #0f5881;">
                                    <tbody>
                                        <tr>
                                            <td width="100%" style="">
                                            
                                                <table width="100%" cellpadding="0" cellspacing="0" border="0" style="min-width:100%;padding: 10px 20px;background-color:#fff;">
                                                    <tbody>
                                                        <tr>
                                                            <td align="left" style="display: table-cell;">
                                                                <h3 style="font-family:Arial;margin:auto;font-size: 14px;">Sales : 9672022299 | 9672442299<br/>Support : 9672042299 | 9672062299</h3>
                                                            </td>
                                                            <td align="right">
                                                                <img src="https://www.tenderkings.com/public/frontend/images/logo.png" width="125">
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
            
                                                <table width="100%" cellpadding="0" cellspacing="0" border="0" style="min-width:100%">
            			                            <tbody>
            			                                <tr>
            			                                    <td width="100%">
            			                                        <hr width="100%" align="center" style="margin-top:0px;margin-bottom:0px;border-color:#0f5881;">
            			                                    </td>
            			                                </tr>
            			                            </tbody>
            			                        </table>
                                                
                                                <table width="100%" cellpadding="0" cellspacing="0" border="0" style="min-width:100%;padding: 10px 20px;color:#0f5881;">
                                                    <tbody>
                                                        <tr>
                                                            <td width="100%"><h1 style="margin-bottom: 0px;word-spacing: 5px;">Dear '.$company.'</h1></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
            
                                                <table width="100%" cellpadding="0" cellspacing="0" border="0" style="min-width:100%;padding: 10px 20px;color:#0f5881;">
                                                    <tbody>
                                                        <tr>
                                                            <td width="100%"><h3 style="margin-bottom: 0px;word-spacing: 5px;">Greetings from Tenderkings.com!</h3></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
            
                                                <table width="100%" cellpadding="0" cellspacing="0" border="0" style="min-width:100%;padding: 10px 20px;color:#0f5881;">
                                                    <tbody>';
                                                    $srno = 1;
                                                 
                                                    if(!empty($tendersData) && isset($tendersData)){
                                                        
                                                        foreach($tendersData as $t){
                                                        $parameterid = Crypt::encrypt($t->ourrefno);
                                                         $str = (strlen($t->Work) > 200) ? substr($t->Work, 0, 200).'...' : $t->Work;
                                                         if ($t->amount == '0.00' || empty($t->amount) || $t->amount <= 3000) {

                                                                 $tamount = "Not Estimated";
                                                            } else {
                                                                $tamount = $t->ti_amount;
                                                            }
                                                         
                                                            
                                                            $message .='<tr style="margin-bottom:10px;display: block;border:1px solid #0f5881;">
                                                            <td width="97%" style="padding:10px 10px;margin-bottom:10px;display: block;">
                                                            	<table width="100%" cellpadding="0" cellspacing="0" border="0" style="min-width:100%;">
            				                                        <tbody>
            				                                            <tr>
            				                                                <div class="mobile_full_width_content">
            				                                                    <p style="margin-bottom: 10px;font-size:14px;"><strong>'.$srno.'. TKID : '.$t->ourrefno.'</strong></p>
            				                                                    <p style="margin-bottom: 10px;font-size:14px;">'.$str.'</p>
            				                                                    <p style="margin-bottom: 10px;font-size:14px;">Authority Name : '.$t->org_name.' | Tender Value : '.$tamount.'</p>
            				                                                    <p style="margin-bottom: 10px;font-size:14px;">Location : '.$t->city.', '.$t->state_name.'</p>
            				                                                    <p style="font-size:14px;">Due Date : '.$t->show_ti_submit_date.'</p>
            				                                                </div>
            				                                                <div class="mobile_full_width_btn">
        				                                                		<a href="'.route('usertender',$parameterid).'" class="mobile_inline_btn" style="color:#fff;">View More</a>
        				                                                		<a target="_blank" href="'.$t->documentpath.'" class="mobile_inline_btn" style="color:#fff;">Download</a>
            				                                                </div>
            				                                            </tr>
            				                                            
            				                                        </tbody>
            				                                    </table>
                                                            </td>
                                                        </tr>';
                                                        
                                                    $srno++;
                                                    }
                                                    
                                                    }else{
                                                        
                                                        $message .='<tr style="margin-bottom:10px;display: block;">
                                                            <td width="100%" style="border:1px solid #0f5881;padding:10px 10px;margin-bottom:10px;">
                                                            	<span style="text-decoration:none;background:#0f5881;color:#fff;font-size:14px;font-weight:bold;padding:7px 10px;clear:both">No Fresh Tenders Today!</span>
                                                            </td>
                                                        </tr>';
                                                    }
            
                                                    $message .='</tbody>
                                                </table>
            
                                                <table width="100%" cellpadding="0" cellspacing="0" border="0" style="min-width:100%">
            			                            <tbody>
            			                                <tr>
            			                                    <td width="100%">
            			                                        <hr width="100%" align="center" style="margin-top:0px;margin-bottom:0px;border-color:#0f5881;">
            			                                    </td>
            			                                </tr>
            			                            </tbody>
            			                        </table>
                                                
                                                <table width="100%" cellpadding="0" cellspacing="0" border="0" style="min-width:100%;padding: 10px 20px;color:#0f5881;">
                                                    <tbody>
                                                        <tr>
                                                            <td width="100%">
                                                                <h2 style="margin:5px 0px;word-spacing: 5px;">Thanks You<br/>Tenderkings</h3>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
            
                                                <table width="100%" cellpadding="0" cellspacing="0" border="0" style="min-width:100%;padding: 10px 20px;color:#0f5881;">
                                                    <tbody>
                                                        <tr>
                                                            <td width="100%">
                                                                <p style="margin:10px 0px">If you do not want to receive this mailer, <a style="color:#0f5881" title="TenderKings">Unsubscribe</a></p>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                
                            </td>
                        </tr>
                    </tbody>
                </table>
            </center>
            </body>
            </html>';
            //echo $message;die();
               // Always set content-type when sending HTML email
                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                
                // More headers
                $headers .= 'From: TenderKings <info@tenderkings.com>' . "\r\n";
                
                if($alternate_email != "" && $alternate_email != NULL){
                $headers .= 'Cc: '.$alternate_email.',tenderkingsalert@gmail.com' . "\r\n";   
                }else{
                $headers .= 'Cc: tenderkingsalert@gmail.com' . "\r\n";
                }
                $headers .= 'Reply-To: info@tenderkings.com'. "\r\n";
                $headers .= 'X-Mailer: PHP/' . phpversion()."\r\n";
                
                mail($to, $subject, $message, $headers);
          }
          
        $id = DB::table('check_email')->insertGetId(
        [
        'tender_id' => $live_max_tenderid,
        'date'=> $dt,
        ]);  
        return redirect()->route('emailalert')->with('success', 'Paid User Email Send Successfully!.');
    }
    public function Loginusertenders($userproduct,$maxdate){
        $dt = date('Y-m-d');
        //check_email
        
        $sqlall = "SELECT t.ourrefno,t.Work,t.submitdate,DATE_FORMAT(t.submitdate, '%a %D %b, %Y') as show_ti_submit_date,t.tenderamount as amount,Moneyformat(t.tenderamount) as ti_amount,t.city,t.state_name,t.purfromdate,t.org_name,DATEDIFF(t.submitdate,'$dt') as days,t.documentpath from live_tenders as t WHERE 1=1"; // t.ti_submit_date >= '$dt'
        
        $sqlall .= " AND (t.ourrefno > '$maxdate' OR t.dt='$dt')"; // check condition last datewise tenders
        
        $keyword = $userproduct->keyword;
        if(trim($keyword) != ""){
            $searchKeyword = explode(',',$keyword);
            $sqlall .= " AND ( ";
            foreach ($searchKeyword as $i => $j) {
                if ($i == 0) {
                    $sqlall .= " t.Work LIKE '%" . $j . "%'";
                    $sqlall1 .= " t.Work LIKE '%" . $j . "%'";
                } else {
                    $sqlall .= " or t.Work LIKE '%" . $j . "%'";
                    $sqlall1 .= " or t.Work LIKE '%" . $j . "%'";
                }
            }
            $sqlall .= " )";
        }
        
        $excluding_keyword = $userproduct->excluding_keyword;
        if ($excluding_keyword != '') {
            $userexcludingkeyword = explode(",", $excluding_keyword);
            for ($j = 0; $j < count($userexcludingkeyword); $j++) {
                if (count($userexcludingkeyword) == 1) {
                    $sqlall .= " AND (t.Work NOT LIKE '%" . $userexcludingkeyword[$j] . "%')";
                }
                if (count($userexcludingkeyword) > 1) {
                    if ($j == 0) {
                        $sqlall .= " AND (t.Work NOT LIKE '%" . $userexcludingkeyword[$j] . "%' AND ";
                    } else if ($j == (count($userexcludingkeyword) - 1)) {
                        $sqlall .= " t.Work NOT LIKE '%" . $userexcludingkeyword[$j] . "%')";
                    } else {
                        $sqlall .= " t.Work NOT LIKE '%" . $userexcludingkeyword[$j] . "%' AND ";
                    }
                }
            }
        }
        $agency = $userproduct->organisation;
        if ($agency != 0 && $agency != "") {
                $sqlall .= " AND t.agencyid IN (" . $agency . ")";
        }
        $state = $userproduct->state;
        if ($state != 0 && $state != "") {
                $sqlall .= " AND t.stateid IN (" . $state . ")";
        }
        //dd($sqlall);
        //echo $sqlall;die();
        $data = DB::select($sqlall); 
        return $data;
    }
}
