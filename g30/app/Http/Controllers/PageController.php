<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use DB;
use DataTables;
use Route;
use Session;
use Redirect;
use App\Admin;
use Illuminate\Support\Facades\Validator; // for validation
use Illuminate\Support\Facades\Input; // for validation
use Illuminate\Support\Facades\Http;
use View;
use App\Http\Controllers\AuthController;
use URL;
use Response;
use GuzzleHttp\Client;

class PageController extends Controller
{
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {   
        //$exhi_sql = "SELECT * FROM `exhibition` ORDER BY eid DESC LIMIT 3";
        //$exhi_sql = "SELECT *,exhibition.exhibition_name,exhibition.start_date,exhibition.exhibition_image,organisor.organisor_name FROM `exhibition` LEFT JOIN `organisor` ON exhibition.organisor=organisor.oid ORDER BY eid DESC LIMIT 3";
        //$data_exhi = DB::select($exhi_sql); 
        //return view('welcome',compact('data_exhi'));
        return view('welcome');
    }
    public function index()
    {
        $users_sql = "SELECT * FROM `gallery`";
        $data_users = DB::select($users_sql);
        return view('welcome',compact('data_users'));
    }
    public function about()
    {
        return view('about');
    }
	
	public function getregisteruser()
    {	
		if (Session::has('loginuser')){
			return redirect('/');
		}
        return view('auth.register');
    }
	public function addusers()
    {	
		if (Session::has('loginuser')){
			return view('addusers');
		}else{
			return redirect('login-user');	
		}
 
    } 
	public function formaddusers(Request $request)
    {
        
		if (!Session::has('loginuser')){
			return redirect('/');
		}
		
		try { 
        
            $validator = validator::make($request->all(),
                array(
                    'password' => 'required|confirmed',
                    'RoleID' => 'required',
                    'username' => 'required',
                    'name' => 'required',
                    
                    
                )
            );
            if ($validator->fails()) {
                
                $err_arr = $validator->errors()->all();
                $error = '';  
                foreach($err_arr as $k => $val){
                  $error .= $val." ";
                }
                return Redirect()->back()->with('error',$error)->withInput(); 
                
            }else{
            		//$client = new Client(['verify' => false]); //GuzzleHttp\Client
            		$value = Session::get('loginuser');
            		$loginUserid = $value[0]['user']['UserID'];	
            		
            		 $response = Http::post('http://103.228.146.43:9222/api/addAccount', [
                        'FullName' => $request->get('name'),
                        'UserName' => $request->get('username'),
                        'Password' => $request->get('password'),
                        'Email' => $request->get('email'),
                        'PhoneNumber' => $request->get('phone'),
            			'RoleID' => $request->get('RoleID'),
            			'ExposureLimit' => $request->get('ExposureLimit'),
            			'CreditReference' => $request->get('CreditReference'),
            			//'CommissionSetting' => $request->get('CommissionSetting'),
            			//'PartnershipSetting' => $request->get('PartnershipSetting'),
            			//'BetLimitSetting' => $request->get('BetLimitSetting'),
            			'Comm_Upline_1' => $request->get('Comm_Upline_1'),
            			'Comm_Upline_2' => $request->get('Comm_Upline_2'),
            			'Comm_Upline_3' => $request->get('Comm_Upline_3'),
            			'Comm_Downline_1' => $request->get('Comm_Downline_1'),
            			'Comm_Downline_2' => $request->get('Comm_Downline_2'),
            			'Comm_Downline_3' => $request->get('Comm_Downline_3'),
            			'Comm_Our_1' => $request->get('Comm_Our_1'),
            			'Comm_Our_2' => $request->get('Comm_Our_2'),
            			'Comm_Our_3' => $request->get('Comm_Our_3'),
            			'Part_Upline_1' => $request->get('Part_Upline_1'),
            			'Part_Upline_2' => $request->get('Part_Upline_2'),
            			'Part_Upline_3' => $request->get('Part_Upline_3'),
            			'Part_Downline_1' => $request->get('Part_Downline_1'),
            			'Part_Downline_2' => $request->get('Part_Downline_2'),
            			'Part_Downline_3' => $request->get('Part_Downline_3'),
            			'Part_Our_1' => $request->get('Part_Our_1'),
            			'Part_Our_2' => $request->get('Part_Our_2'),
            			'Part_Our_3' => $request->get('Part_Our_3'),
            			'Bet_Min_1' => $request->get('Bet_Min_1'),
            			'Bet_Min_2' => $request->get('Bet_Min_2'),
            			'Bet_Min_3' => $request->get('Bet_Min_3'),
            			'Bet_Min_4' => $request->get('Bet_Min_4'),
            			'Bet_Min_5' => $request->get('Bet_Min_5'),
            			'Bet_Max_1' => $request->get('Bet_Max_1'),
            			'Bet_Max_2' => $request->get('Bet_Max_2'),
            			'Bet_Max_3' => $request->get('Bet_Max_3'),
            			'Bet_Max_4' => $request->get('Bet_Max_4'),
            			'Bet_Max_5' => $request->get('Bet_Max_5'),
            			'Bet_Delay_1' => $request->get('Bet_Delay_1'),
            			'Bet_Delay_2' => $request->get('Bet_Delay_2'),
            			
            			'Bet_Delay_3' => $request->get('Bet_Delay_3'),
            			'Bet_Delay_4' => $request->get('Bet_Delay_4'),
            			'Bet_Delay_5' => $request->get('Bet_Delay_5'),
            			
            			'MinimumOdds' => $request->get('MinimumOdds'),
            			'MaximumOdds' => $request->get('MaximumOdds'),
            			'TransctionCode' => $request->get('TransctionCode'),
            			'LoginUserID' => $loginUserid,
                    ]);
            		
            		$jsonData = $response->json();
            		//print_r($jsonData);die();
                    //$error = "test";
            		$error = $jsonData['message'];
            		$success = $jsonData['success'];
            		if($success == 1){
            		//return back()->with('success','Added Successfully');	
            		//return Redirect();formaddusers
            		return redirect('list-user');
            		}else{
            		return back()->with('error',$error)->withInput();
            		}
		
            }
            
		}catch (Exception $e) {
            Log::warning(sprintf('Exception: %s', $e->getMessage()));
            return Redirect()->back();
        }
    }
	public function getloginuser()
    {	
		if (Session::has('loginuser')){
			return redirect('/inplay/3');
		}
        return view('auth.login');
    }
	public function logoutuser()
    {	
		if (Session::has('loginuser')){
			Session::forget('loginuser');
			return redirect('login-user');
		}
        //return view('auth.login');
    }
	public function listuser(){
		
		if (Session::has('loginuser')){
			$value = Session::get('loginuser');
			$loginUserid = $value[0]['user']['UserID'];
			
			    //https://api.b365api.com/v1/bet365/inplay_filter?sport_id=3&token=97205-QBhTyEQKRoffkC
			    
				$response = Http::post('http://103.228.146.43:9222/api/getAccounts', [
					'LoginUserID' => $loginUserid,
				]);
				
				$jsonData = $response->json();
				//echo "<pre>";print_r($jsonData);die();
				
				$success = $jsonData['success'];
				if($success == 1){
					
					$data = $jsonData['data']; 
					return view('listuser',compact('data'));
				}else{
				    $error = $jsonData['data'];
					return back()->with('error',$error)->withInput();
				}
		}else{
			return redirect('login-user');
		}
	}
	
    public function registeruser(Request $request)
    {
        
		if (Session::has('loginuser')){
			return redirect('/');
		}
		
		 try { 
        
            $validator = validator::make($request->all(),
                array(
                    'password' => 'required|confirmed',
                    //'password_confirmation' => 'required',
                
                )
            );
            if ($validator->fails()) {
                
                $err_arr = $validator->errors()->all();
                $error = '';  
                foreach($err_arr as $k => $val){
                  $error .= $val." ";
                }
                
                return Redirect()->back()->with('error',$error)->withInput(); 
            }else{
                
                //$client = new Client(['verify' => false]); //GuzzleHttp\Client
		
                /*$response = Http::accept('application/json')->post('http://103.228.146.43:9222/api/registerUser', [
                    'FullName' => $request->get('name'),
                    'UserName' => $request->get('username'),
                    'Password' => $request->get('password'),
                    'Email' => $request->get('email'),
                    'PhoneNumber' => $request->get('phone'),
                ]);*/
        		
        		 $response = Http::post('http://103.228.146.43:9222/api/registerUser', [
                    'FullName' => $request->get('name'),
                    'UserName' => $request->get('username'),
                    'Password' => $request->get('password'),
                    'Email' => $request->get('email'),
                    'PhoneNumber' => $request->get('phone'),
                ]);
        		
        		$jsonData = $response->json();
        		//echo "<pre>";print_r($jsonData);die();
        		/*$params = [
                    'FullName' => $request->get('name'),
                    'UserName' => $request->get('username'),
                    'Password' => $request->get('password'),
                    'Email' => $request->get('email'),
                    'PhoneNumber' => $request->get('phone'),
                ];
        
               
        		$headers = [
        		'content-type' => 'application/json',
        			'accept' => 'application/ld+json'
        		];
        
        		$url = "http://103.228.146.43:9222/api/registerUser";
        		$response = $client->post($url, [
                    'json' => $params,
                    'headers' => $headers,
                    'verify'  => false,
                ]);
        		
                $responseBody = $response->getBody();
                echo "<pre>";print_r($responseBody);die();
        		
        		//echo $responseBody['message'];
        		
        		die();*/
                //$error = "test";
        		$error = $jsonData['message'];
        		$success = $jsonData['success'];
        		if($success == 1){
        		//return back()->with('success',$error)->withInput();	
        		//return Redirect();
        		return redirect('login');
        		}else{
        		return back()->with('error',$error)->withInput();
        		}
                //return Redirect()->back()->with('error',$error)->withInput(); 
                //echo "test";
                //return response()->json(['status' => 'success','reset' => '0','message' =>'Successfully Updated!']);
         
              
            }
        }catch (Exception $e) {
            Log::warning(sprintf('Exception: %s', $e->getMessage()));
      
            return Redirect()->back();
           
        }
		
    }
    
	public function loginuser(Request $request)
    {   
        
		if (Session::has('loginuser')){
			return redirect('/');
		}	
	
		 $response = Http::post('http://103.228.146.43:9222/api/authenticateUser', [
            'userName' => $request->get('email'),
            'password' => $request->get('password'),   
        ]);
		
		$jsonData = $response->json();
		//echo "<pre>";print_r($jsonData);die();
	
        //$error = "test";
		
		$headers = [
		'content-type' => 'application/json',
			'accept' => 'application/ld+json'
		];
		$success = $jsonData['success'];
		if($success == 1){
		$UserID = $jsonData['user']['UserID'];
		$UserName = $jsonData['user']['UserName'];
		
		Session::push('loginuser', $jsonData);
		
		return back()->with('success','');	
		}else{
		$error = $jsonData['message'];
		return back()->with('error',$error)->withInput();
		}
        //return Redirect()->back()->with('error',$error)->withInput(); 
        //echo "test";
        //return response()->json(['status' => 'success','reset' => '0','message' =>'Successfully Updated!']);
    }
    public function stock()
    {
        return view('stock');
    }

    public function gallery()
    {
        $users_sql = "SELECT * FROM `gallery`";
        $data_users = DB::select($users_sql);
        return view('gallery',compact('data_users'));
    }

    public function gallerydetails($id)
    {
        $data = DB::table('gallery')->where('id', $id)->first();
        return view('gallery_single',compact('data'));
    }
    
    public function contact()
    {
        return view('contact');
    }
    
    public function adduser()
    {
        return view('adduser');
    }
    
    public function submitbitpopup(Request $request)
    {
        
		if (Session::has('loginuser')){
			$value = Session::get('loginuser');
			$loginUserid = $value[0]['user']['UserID'];
		}else{
		   return redirect('/');
		}
		
		
		 $response = Http::post('http://103.228.146.43:9222/api/usersBets', [
            'SportID' => $request->get('SportID'),
            'FIID' => $request->get('FIID'),
            'BetID' => $request->get('BetID'),
            'ODValue' => $request->get('ODValue'),
            'ODCalcValue' => $request->get('ODCalcValue'),
            'BetAmount' => $request->get('BetAmount'),
            'EventName' => $request->get('EventName'),
            'MarketGroup' => $request->get('MarketGroup'),
            'LoginUserID' => $loginUserid,
        ]);
		
		$jsonData = $response->json();
		//print_r($jsonData);die();
		
		$success = $jsonData['success'];
		if($success == 1){
		return response()->json(['status' => 'success','message' =>'Record Successfully Updated.']);
		}else{
		$error = $jsonData['message'];    
		return response()->json(['status' => 'error','message' =>$error]);
		}
		
    }
    public function submitgp(Request $request)
    {
        
		if (Session::has('loginuser')){
			$value = Session::get('loginuser');
			$loginUserid = $value[0]['user']['UserID'];
		}else{
		   return redirect('/');
		}
		
		 $response = Http::post('http://103.228.146.43:9222/api/userGeneratePoints', [
            'UserID' => $request->get('UserID'),
            'Points' => $request->get('Points'),
            'LoginUserID' => $loginUserid,
            'TransctionCode' => $request->get('TransctionCode'),
        ]);
		
		$jsonData = $response->json();
		//print_r($jsonData);die();
		
		$success = $jsonData['success'];
		if($success == 1){
		return response()->json(['status' => 'success','message' =>'Record Successfully Updated.']);
		}else{
		$error = $jsonData['message'];    
		return response()->json(['status' => 'error','message' =>$error]);
		}
		
    }
    public function submitdeposite(Request $request)
    {
        
		if (Session::has('loginuser')){
			$value = Session::get('loginuser');
			$loginUserid = $value[0]['user']['UserID'];
			$loginUserRoleID = $value[0]['user']['RoleID'];
		}else{
		   return redirect('/');
		}
		
		  
		 $response = Http::post('http://103.228.146.43:9222/api/userDeposit', [
            'UserID' => $request->get('UserID'),
            'Amount' => $request->get('Amount'),
            'Remarks' => $request->get('Remarks'),
            'LoginUserID' => $loginUserid,
            'TransctionCode' => $request->get('TransctionCode'),
            'LoginRoleID' => $loginUserRoleID,
        ]);
		
		$jsonData = $response->json();
		//print_r($jsonData);die();
		
		$success = $jsonData['success'];
		if($success == 1){
		return response()->json(['status' => 'success','message' =>'Record Successfully Updated.']);
		}else{
		$error = $jsonData['message'];    
		return response()->json(['status' => 'error','message' =>$error]);
		}
		
    }
    public function submitwithdraw(Request $request)
    {
        
		if (Session::has('loginuser')){
			$value = Session::get('loginuser');
			$loginUserid = $value[0]['user']['UserID'];
			$loginUserRoleID = $value[0]['user']['RoleID'];
		}else{
		   return redirect('/');
		}
		
		$response = Http::post('http://103.228.146.43:9222/api/userWithdrawRequest', [
            'UserID' => $request->get('UserID'),
            'Amount' => $request->get('Amount'),
            'WithdrawType' => $request->get('WithdrawType'),
            'Remarks' => $request->get('Remarks'),
            'LoginUserID' => $loginUserid,
            'TransctionCode' => $request->get('TransctionCode'),
            'LoginRoleID' => $loginUserRoleID,
        ]);
		
		$jsonData = $response->json();
		//print_r($jsonData);die();
		$success = $jsonData['success'];
		if($success == 1){
		return response()->json(['status' => 'success','message' =>'Record Successfully Updated.']);
		}else{
		$error = $jsonData['message'];    
		return response()->json(['status' => 'error','message' =>$error]);
		}
		
    }
    public function submitminmaxOdds(Request $request)
    {
        
		if (Session::has('loginuser')){
			$value = Session::get('loginuser');
			$loginUserid = $value[0]['user']['UserID'];
			$loginUserRoleID = $value[0]['user']['RoleID'];
		}else{
		   return redirect('/');
		}
		 
		$response = Http::post('http://103.228.146.43:9222/api/userMinMaxOdds', [
            'UserID' => $request->get('UserID'),
            'MinimumOdds' => $request->get('MinimumOdds'),
            'MaximumOdds' => $request->get('MaximumOdds'),
            'LoginUserID' => $loginUserid,
            'TransctionCode' => $request->get('TransctionCode'),
            //'LoginRoleID' => $loginUserRoleID,
        ]);
		
		$jsonData = $response->json();
		//print_r($jsonData);die();
		$success = $jsonData['success'];
		if($success == 1){
		return response()->json(['status' => 'success','message' =>'Record Successfully Updated.']);
		}else{
		$error = $jsonData['message'];    
		return response()->json(['status' => 'error','message' =>$error]);
		}
		
    }
     public function submitexposureLimit(Request $request)
    {
        
		if (Session::has('loginuser')){
			$value = Session::get('loginuser');
			$loginUserid = $value[0]['user']['UserID'];
			$loginUserRoleID = $value[0]['user']['RoleID'];
		}else{
		   return redirect('/');
		}
		
		$response = Http::post('http://103.228.146.43:9222/api/userExposureLimit', [
            'UserID' => $request->get('UserID'),
            'ExposureLimit' => $request->get('ExposureLimit'),
            'LoginUserID' => $loginUserid,
            'TransctionCode' => $request->get('TransctionCode'),
            //'LoginRoleID' => $loginUserRoleID,
        ]);
		
		$jsonData = $response->json();
		//print_r($jsonData);die();
		$success = $jsonData['success'];
		if($success == 1){
		return response()->json(['status' => 'success','message' =>'Record Successfully Updated.']);
		}else{
		$error = $jsonData['message'];    
		return response()->json(['status' => 'error','message' =>$error]);
		}
		
    }
    public function submitcreditReference(Request $request)
    {
        
		if (Session::has('loginuser')){
			$value = Session::get('loginuser');
			$loginUserid = $value[0]['user']['UserID'];
			$loginUserRoleID = $value[0]['user']['RoleID'];
		}else{
		   return redirect('/');
		}
	
		$response = Http::post('http://103.228.146.43:9222/api/userCreditReference', [
            'UserID' => $request->get('UserID'),
            'CreditReference' => $request->get('CreditReference'),
            'LoginUserID' => $loginUserid,
            'TransctionCode' => $request->get('TransctionCode'),
            //'LoginRoleID' => $loginUserRoleID,
        ]);
		
		$jsonData = $response->json();
		//print_r($jsonData);die();
		$success = $jsonData['success'];
		if($success == 1){
		return response()->json(['status' => 'success','message' =>'Record Successfully Updated.']);
		}else{
		$error = $jsonData['message'];    
		return response()->json(['status' => 'error','message' =>$error]);
		}
		
    }
     public function submituserpassword(Request $request)
    {
        
		if (Session::has('loginuser')){
			$value = Session::get('loginuser');
			$loginUserid = $value[0]['user']['UserID'];
			$loginUserRoleID = $value[0]['user']['RoleID'];
		}else{
		   return redirect('/');
		}
	    try { 
            $validator = validator::make($request->all(),
                array(
                    'Password' => 'min:6|required_with:ConfirmPassword|same:ConfirmPassword',
                    //'Password' => 'required|confirmed',
                    //'RoleID' => 'required', ConfirmPassword
                )
            );
            if ($validator->fails()) {
                
                $err_arr = $validator->errors()->all();
                $error = '';  
                foreach($err_arr as $k => $val){
                  $error .= $val." ";
                }
                
                //return Redirect()->back()->with('error',$error)->withInput(); 
            	 return response()->json(['status' => 'error','message' =>$error]);
            }else{
		
        		$response = Http::post('http://103.228.146.43:9222/api/resetUserPassword', [
                    'UserID' => $request->get('UserID'),
                    'Password' => $request->get('Password'),
                    'LoginUserID' => $loginUserid,
                    'TransctionCode' => $request->get('TransctionCode'),
                    //'LoginRoleID' => $loginUserRoleID,
                ]);
        		$jsonData = $response->json();
        		//print_r($jsonData);die();
        		$success = $jsonData['success'];
        		if($success == 1){
        		return response()->json(['status' => 'success','message' =>'Record Successfully Updated.']);
        		}else{
        		$error = $jsonData['message'];    
        		return response()->json(['status' => 'error','message' =>$error]);
        		}
        		
            }
	    }catch (Exception $e) {
            Log::warning(sprintf('Exception: %s', $e->getMessage()));
            return Redirect()->back();
        }
    }
    
     public function submitchangeStatus(Request $request)
    {
        
		if (Session::has('loginuser')){
			$value = Session::get('loginuser');
			$loginUserid = $value[0]['user']['UserID'];
			$loginUserRoleID = $value[0]['user']['RoleID'];
		}else{
		   return redirect('/');
		}
		
	    //dd($request);
		$response = Http::post('http://103.228.146.43:9222/api/userActiveAandBetStatus', [
            'UserID' => $request->get('UserID'),
            'Active' => $request->get('useractive'),
            'BetStatus' => $request->get('betactive'),
            'LoginUserID' => $loginUserid,
            'TransctionCode' => $request->get('TransctionCode'),
            //'LoginRoleID' => $loginUserRoleID,
        ]);
		
		$jsonData = $response->json();
		//print_r($jsonData);die();
		$success = $jsonData['success'];
		if($success == 1){
		return response()->json(['status' => 'success','message' =>'Record Successfully Updated.']);
		}else{
		$error = $jsonData['message'];    
		return response()->json(['status' => 'error','message' =>$error]);
		}
		
    }
     public function submitSuperMasterAccess(Request $request)
    {
        
		if (Session::has('loginuser')){
			$value = Session::get('loginuser');
			$loginUserid = $value[0]['user']['UserID'];
			$loginUserRoleID = $value[0]['user']['RoleID'];
		}else{
		   return redirect('/');
		}
	    
	    
		$response = Http::post('http://103.228.146.43:9222/api/userSportsAccess', [
            'UserID' => $request->get('UserID'),
            'Cricket' => $request->get('cricketAccess'),
            'Soccer' => $request->get('soccerAccess'),
            'Tennis' => $request->get('tennisAccess'),
            'Casino' => $request->get('casinoAccess'),
            'LoginUserID' => $loginUserid,
            'TransctionCode' => $request->get('TransctionCode'),
            //'LoginRoleID' => $loginUserRoleID,
        ]);
		
		$jsonData = $response->json();
		//print_r($jsonData);die();
		$success = $jsonData['success'];
		if($success == 1){
		return response()->json(['status' => 'success','message' =>'Record Successfully Updated.']);
		}else{
		$error = $jsonData['message'];    
		return response()->json(['status' => 'error','message' =>$error]);
		}
		
    }
    /*public function blogs()
    {
        return view('bloglisting');
    }
    
    public function blogdetails()
    {
        return view('blog_single');
    }
    
    public function eventdetails()
    {
        return view('event_detail');
    }
    
    public function getorganisorlist() {        

        $sql = "SELECT oid as id,organisor_name as name,LENGTH(organisor_name) as lk FROM organisor WHERE  1=1";
        if (isset($_GET['q']) && !empty($_GET['q'])) {
            $sql .= " and organisor_name like '%" . $_GET['q'] . "%' ";
        }
        // if (isset($_GET['t_org']) && !empty($_GET['t_org'])) {
        //     $sql .= " and type_of_organisation = " . $_GET['t_org'];
        // }
        $sql .= " ORDER BY lk ASC LIMIT 10";     
        $data_agency = DB::select($sql);
        $data = array();
        foreach ($data_agency as $key => $value) {
          $data[] = array('id' => $value->id, 'text' => $value->name);              
        } 
        $json_response = json_encode($data);
        echo $json_response;
        
    }
    
    public function adduserinquiry(Request $request)
    {
                        
              //dd($request);          
        DB::beginTransaction();
        try { 
        
            $validator = validator::make($request->all(),
                array(
                    'firstname' => 'required',
                    'lastname' => 'required',
                    'email' => 'required',
                    'phone' => 'required',  
                )
            );
            if ($validator->fails()) {
                $err_arr = $validator->errors()->all();
                $error = '';  
                foreach($err_arr as $k => $val){
                  $error .= $val."<br>";
                }
                //return response()->json(['status' => 'error','message' =>$error]);
                return Redirect()->back()->with('error',$error)->withInput(); 
            }else{
         
                $data =[
                    'firstname' => $request->get('firstname'),
                    'lastname' => $request->get('lastname'),
                    'email' => $request->get('email'),
                    'phone' => $request->get('phone'),
                    'message' => $request->get('message'),
                    'exhi_id' => $request->get('exhi_id'),
                    'exhi_name' => $request->get('exhi_name'),
                ];  
         
                //dd($data);
                $id = DB::table('exhi_inquiry')->insertGetId($data);
                $mod_last_insert_id = DB::getPdo()->lastInsertId();

                DB::commit(); 
                //return response()->json(['status' => 'success','reset' => '1','message' =>'Successfully Created!']);
                return Redirect()->back()->with('success','Inquiry Send successfully.');     
            }
        }catch (Exception $e) {
            Log::warning(sprintf('Exception: %s', $e->getMessage()));
      
            return Redirect()->back();
            DB::rollback();
        }
    }
    
    public function addcontactinquiry(Request $request)
    {
                        
              //dd($request);          
        DB::beginTransaction();
        try { 
        
            $validator = validator::make($request->all(),
                array(
                    'name' => 'required',
                    'email' => 'required',
                    'subject' => 'required',
                )
            );
            if ($validator->fails()) {
                $err_arr = $validator->errors()->all();
                $error = '';  
                foreach($err_arr as $k => $val){
                  $error .= $val."<br>";
                }
                //return response()->json(['status' => 'error','message' =>$error]);
                return Redirect()->back()->with('error',$error)->withInput(); 
            }else{
         
                $data =[
                    'name' => $request->get('name'),
                    'email' => $request->get('email'),
                    'subject' => $request->get('subject'),
                    'message' => $request->get('message'),
                ];  
         
                //dd($data);
                $id = DB::table('inquiry')->insertGetId($data);
                $mod_last_insert_id = DB::getPdo()->lastInsertId();

                DB::commit(); 
                //return response()->json(['status' => 'success','reset' => '1','message' =>'Successfully Created!']);
                return Redirect()->back()->with('success','Inquiry Send successfully.');     
            }
        }catch (Exception $e) {
            Log::warning(sprintf('Exception: %s', $e->getMessage()));
      
            return Redirect()->back();
            DB::rollback();
        }
    }
    
    public function myaccount()
    {
        return view('myaccount');
    }*/

    public function postcontact(Request $request)
    { 
        //dd($request);
        $arr = array();
        DB::beginTransaction();
        try { 
        
            $validator = Validator::make($request->all(),
                array(
                    'name' => 'required',
                    'subject' => 'required',
                    'message' => 'required',
                    'email' => 'required|email',
                )
            );
            if ($validator->fails()) {
                $err_arr = $validator->errors()->all();
                $error = '';  
                foreach($err_arr as $k => $val){
                  $error .= $val;
                }
                //return response()->json(['status' => 'error','message' =>$error]);
                return redirect('add-user')->withInput()->withErrors($validator);
            }else{
                
                $dt = date('Y-m-d');
                $data =[
                'name'=>$request->get('name'),
                'email' =>$request->get('email'),
                'subject' =>$request->get('subject'),
                'message' =>$request->get('message'),
                ];
             
                //dd($data);
                $id = DB::table('contact')->insertGetId($data);
                $mod_last_insert_id = DB::getPdo()->lastInsertId();

                DB::commit();
                
                $email_to = $request->get('email');
                //$email_cc = "ravinirmal960@gmail.com";
                $email_cc = "jalpesh901@gmail.com";
        
                $subject = "Thank you! Greetings from CIGARETTES RACKS";
                 
                $body = '<table class="em_full_wrap" valign="top" width="100%" cellspacing="0" cellpadding="0" border="0" bgcolor="#efefef" align="center">
                  	<tbody>
                  		<tr>
                    		<td valign="top" align="center">
                    			<table class="em_main_table" style="max-width:800px;" width="" cellspacing="0" cellpadding="0" border="0" align="center">
                    				<tr>
                    					<td>
                		          			<table width="100%" bgcolor="#7b0b3b" cellspacing="0" cellpadding="0" border="0" align="center" style="padding:10px;">
                				                <tbody>
                				                  	<tr>
                					                    <td align="left">
                					                        <img src="https://crm.tenderkings.com/timir/public/frontend/images/logo.png" width="100">
                					                    </td>
                				                	</tr>
                				              	</tbody>
                			          		</table>
                
                			          		<table width="100%" bgcolor="#faf9f9" cellspacing="0" cellpadding="0" border="0" align="center" style="padding:20px 20px 10px;">
                				                <tbody>
                				                    <tr>
                				                      	<td>
                				                        	<h3 style="font-family: Roboto,RobotoDraft,Helvetica,Arial; font-size:18px; color:#7b0b3b;margin: 0 0;" valign="top" align="left"><strong>Greetings from CIGARETTES RACKS</strong></h3>
                				                      	</td>
                				                    </tr>
                				                    <tr>
                				                      	<td>
                				                        	<p style="font-family: Roboto,RobotoDraft,Helvetica,Arial; font-size:16px; color:#000;margin: 0 0;" valign="top" align="left">We have received Aaradhak Details</p>
                				                      	</td>
                				                    </tr>
                				                </tbody>
                				            </table>
                
                				            <table width="100%" bgcolor="#fff" cellspacing="0" cellpadding="0" border="0" align="center" style="padding:10px 20px 10px;">
                				                <tbody>
                				                    <tr>
                				                        <td>
                				                            <p style="font-family: Roboto,RobotoDraft,Helvetica,Arial; font-size:13px;line-height: 20px; color:#000;margin: 5px 0;"><strong>Name - </strong>'.$request->get('name').'</p>
                				                        </td> 
                				                    </tr>
                				                    <tr>
                				                        <td>
                				                            <p style="font-family: Roboto,RobotoDraft,Helvetica,Arial; font-size:13px;line-height: 20px; color:#000;margin: 5px 0;"><strong>Email - </strong>'.$request->get('email').'</p>
                				                        </td> 
                				                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p style="font-family: Roboto,RobotoDraft,Helvetica,Arial; font-size:13px;line-height: 20px; color:#000;margin: 5px 0;"><strong>Subject - </strong>'.$request->get('subject').'</p>
                                                        </td> 
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p style="font-family: Roboto,RobotoDraft,Helvetica,Arial; font-size:13px;line-height: 20px; color:#000;margin: 5px 0;"><strong>Message - </strong>'.$request->get('message').'</p>
                                                        </td> 
                                                    </tr>
                				                </tbody>
                				            </table>
                		    				
                		    				<table width="100%" bgcolor="#fff" cellspacing="0" cellpadding="0" border="0" align="center" style="padding:10px 20px 20px;">
                			                    <tbody>
                			                        <tr>
                			                          	<td>
                			                            	<h3 style="font-family: Roboto,RobotoDraft,Helvetica,Arial; font-size:14px; margin: 10px 0 0; color:#000;">Thanks & Regards</h3>
                			                          	</td>
                			                        </tr>
                			                        <tr>
                			                          	<td>
                			                            	<p style="font-family: Roboto,RobotoDraft,Helvetica,Arial; font-size:13px; color:#000;margin: 5px 0px 10px;">Admin Team<br/>CIGARETTES RACKS</p>
                			                          	</td>
                			                        </tr>
                                                    <tr>
                                                        <td>
                                                            <p style="font-family: Roboto,RobotoDraft,Helvetica,Arial; font-size:13px; color:#000;margin: 2px 0;">Email:ravinirmal960@gmail.com</p>
                                                        </td>
                                                    </tr>
                			                    </tbody>
                			                </table>
                
                				            <table width="100%" cellspacing="0" cellpadding="0" border="0" align="center" bgcolor="#7b0b3b" style="padding:5px 20px 5px;">
                				                <tbody>
                				                    <tr>
                				                      <td>
                				                        <p style="font-size:13px; color:#fff; margin: 0 0; font-family: Roboto,RobotoDraft,Helvetica,Arial;text-align: center;" valign="top" align="">CIGARETTES RACKS</p>
                				                      </td>  
                				                    </tr>
                				                </tbody>
                				            </table>
                				        </td>
                				    </tr>
                				</table>
                    		</td>
                		</tr>
                	</tbody>
                </table>';
            
                $header = "MIME-Version: 1.0" . "\r\n";
                $header = "From:ravinirmal960@gmail.com \r\n";
                $header .= "Cc:".$email_cc." \r\n";
                
                //$header .= "Content-type: text/html\r\n";
                $header .= "Content-type:text/html;charset=UTF-8" . "\r\n";
             
                $retval = mail ($email_to,$subject,$body,$header);
                
                
                return redirect('/contact')->with('success', 'successful! We will reach you soon with solution of your query.');
            }
        }catch (Exception $e) {
            Log::warning(sprintf('Exception: %s', $e->getMessage()));
            //return Redirect::route('modules');
            return back()->with('error', 'something went wrong!');
            DB::rollback();
        }
    }
    
     public function curl($url) {
        // Assigning cURL options to an array
        
        $options = Array(
            CURLOPT_RETURNTRANSFER => TRUE, // Setting cURL's option to return the webpage data
            CURLOPT_FOLLOWLOCATION => TRUE, // Setting cURL to follow 'location' HTTP headers
            CURLOPT_AUTOREFERER => TRUE, // Automatically set the referer where following 'location' HTTP headers
            CURLOPT_CONNECTTIMEOUT => 120,
            CURLOPT_SSL_VERIFYPEER => false, // Setting the amount of time (in seconds) before the request times out
            CURLOPT_TIMEOUT => 120, // Setting the maximum amount of time for cURL to execute queries
            CURLOPT_MAXREDIRS => 10, // Setting the maximum number of redirections to follow
            CURLOPT_URL => $url, // Setting cURL's URL option with the $url variable passed into the function
        );
    
        $ch = curl_init();  // Initialising cURL 
        curl_setopt_array($ch, $options);   // Setting cURL's options using the previously assigned array data in $options
        $data = curl_exec($ch); // Executing the cURL request and assigning the returned data to the $data variable
        curl_close($ch);    // Closing cURL 
        return $data;   // Returning the data from the function 
    }
    
    public function myusers()
    {   
        $user_id = Auth::user()->id;
        //$exhi_sql = "SELECT * FROM `exhibition` ORDER BY eid DESC LIMIT 3";
        $users_sql = "SELECT * FROM `registration_arham` WHERE user_id=$user_id";
        $data_users = DB::select($users_sql); 
        return view('myusers',compact('data_users'));
    }
    
    public function edituser($id){
	    $data = DB::table('registration_arham')->where('id', $id)->first(); 
        return view('edituser',compact('data'));
    }
    
    public function postedituser(Request $request)
    { 
        //dd($request);
        $arr = array();
        DB::beginTransaction();
        try { 
        
            $validator = Validator::make($request->all(),
                array(
                    'applicant_name' => 'required',
                    'age' => 'required',
                    'gender' => 'required',
                    'father_name' => 'required',
                    'village' => 'required',
                    'email' => 'required|email',
                    'aadhar_no' => 'required|digits:12',
                    'postal_address' => 'required',
                    'city' => 'required',
                    'district' => 'required',
                    'state' => 'required',
                    'pincode' => 'required',
                    'mobile' => 'required',
                    'whatsapp' => 'required',
                    //'ongoing_tapasya' => 'required',
                    'health_issue' => 'required',
                    'emergency_contact' => 'required',
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
                
                $applicant_image='';
                if($request->hasFile('applicant_image')){

                    //$allowedfileExtension=['pdf','jpg','png','docx','doc','zip'];
                    $file = $request->file('applicant_image');
                    $filename = $file->getClientOriginalName();
                    $extension = $file->getClientOriginalExtension();
                    
                    $destinationPath = 'public/frontend/images/user_image/'; // upload path
                    $applicant_image = date('YmdHis') . "." . $extension;
                    $file->move($destinationPath, $applicant_image);
        
                }else{
                    $applicant_image = $request->get('e_applicant');
                }
                 
                $adharcard_image = '';
                if($request->hasFile('adharcard_image')){

                    //$allowedfileExtension=['pdf','jpg','png','docx','doc','zip'];
                    $file = $request->file('adharcard_image');
                    $filename = $file->getClientOriginalName();
                    $extension = $file->getClientOriginalExtension();
                    
                    $destinationPath = 'public/frontend/images/aadhar_image/'; // upload path
                    $adharcard_image = date('YmdHis') . "_e." . $extension;
                    $file->move($destinationPath, $adharcard_image);
        
                }else{
                    $adharcard_image = $request->get('e_adharcard');
                }
                
                $id = $request->get('uid');
                $dt = date('Y-m-d');
                $user_id = Auth::user()->id;
                $data =[
                'applicant_name'=>$request->get('applicant_name'),
                'age' =>$request->get('age'),
                'gender' =>$request->get('gender'),
                'father_name' =>$request->get('father_name'),
                'village' =>$request->get('village'),
                'email' =>$request->get('email'),
                'aadhar_no' =>$request->get('aadhar_no'),
                'applicant_image' => $applicant_image,
                'adharcard_image' => $adharcard_image,
                'postal_address' =>$request->get('postal_address'),
                'city' =>$request->get('city'),
                'district' =>$request->get('district'),
                'state' =>$request->get('state'),
                'pincode' =>$request->get('pincode'),
                'mobile' =>$request->get('mobile'),
                'whatsapp' =>$request->get('whatsapp'),
                //'ongoing_tapasya' =>$request->get('ongoing_tapasya'),
                'health_issue' =>$request->get('health_issue'),
                'emergency_contact' =>$request->get('emergency_contact'),
                'mumuksh' =>$request->get('mumuksh'),
                'punya_kamane_hetu' =>$request->get('punya_kamane_hetu'),
                'posad_din' =>$request->get('posad_din'),
                'user_id' => $user_id,
                ];
             
                //dd($data);
                //$id = DB::table('registration_arham')->insertGetId($data);
                //$mod_last_insert_id = DB::getPdo()->lastInsertId();
                
                $success = DB::table('registration_arham')->where('id',$id)->update($data);

                DB::commit();
                
                //return Redirect::route('modules');
                return redirect('/my-users')->with('success', 'Thank You! User Update Successfully.');
            }
        }catch (Exception $e) {
            Log::warning(sprintf('Exception: %s', $e->getMessage()));
            //return Redirect::route('modules');
            return back()->with('error', 'something went wrong!');
            DB::rollback();
        }
    }
    
    public function inplay($id)
    {
        
        if (Session::has('loginuser')){
			$value = Session::get('loginuser');
			$loginUserid = $value[0]['user']['UserID'];
			
			    //https://api.b365api.com/v1/bet365/inplay_filter?sport_id=3&token=97205-QBhTyEQKRoffkC
			    
				$response = Http::get('https://api.b365api.com/v1/bet365/inplay_filter', [
					'sport_id' => $id,
					'token' => '97205-QBhTyEQKRoffkC'
				]);
				
				$jsonData = $response->json();
				//echo "<pre>";print_r($jsonData);die();
				
				$success = $jsonData['success'];
				if($success == 1){
					
					$data = $jsonData['results']; 
					return view('inplay',compact('data','id'));
				 }else{
				     $error = $jsonData['error'];
				     $data = array();
				 	return back()->with('error',$error)->withInput();
				 }
		}else{
			return redirect('login-user');
		}
        //return view('inplay');
    }
    public function details($id)
    {
        
        if (Session::has('loginuser')){
			$value = Session::get('loginuser');
			$loginUserid = $value[0]['user']['UserID'];
			
			    //https://api.b365api.com/v1/bet365/inplay_filter?sport_id=3&token=97205-QBhTyEQKRoffkC
			    
			    
			    $token = '97205-QBhTyEQKRoffkC';
			    $pageresults = 'https://api.b365api.com/v1/bet365/event';
				$response = Http::get($pageresults, [
					'FI' => $id,
					'token' => '97205-QBhTyEQKRoffkC'
				]);
				
				$jsonData = $response->json();
				//echo "<pre>";print_r($jsonData);die();
				
				$success = $jsonData['success'];
				if($success == 1){
					
					$data = $jsonData['results']; 
					return view('details',compact('data','id'));
				 }else{
				     $error = $jsonData['data'];
				 	return back()->with('error',$error)->withInput();
				 }
		}else{
			return redirect('login-user');
		}
        //return view('inplay');
    }
    
    
}
