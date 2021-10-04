<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use DB;
use Session;
if (version_compare(PHP_VERSION, '7.2.0', '>=')) {
    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
}
class AdminLoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function getAdminLogin()
    {
        
        if (auth()->guard('admin')->user()) return redirect()->route('admindashboard');
        return view('admin/login');
    }
    public function adminAuth(Request $request)
    {   


        $validator = $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        
        if (auth()->guard('admin')->attempt(['email' => $request->input('email'), 'password' => $request->input('password')]))
        { 

                $row = auth()->guard('admin')->user();
                if($row->user_verified == 0) {
                   return Redirect::to(URL::previous())->with('error', 'Verification Pending..., Please check your email...!');
                }
                if($row->user_status == 0) {
                    return Redirect::to(URL::previous())->with('error', 'Your account is Inactive.., Contact administrator...!');
                }
               
                /*$Parentdata=AdminLoginController::getParentMenu();

                Session::forget('parent_menu'); 
                foreach($Parentdata as $value)
                {
                    //Session::push('parent_menu', $value->mod_name);
                    Session::push('parent_menu', array(
                            'mod_id' => $value->mod_id,
                            'mod_name' => $value->mod_name,
                            'mod_short'    => $value->mod_short) 
                      );
                }

                Session::forget('sub_menu_permission'); //check sub menu permission 
                foreach($Parentdata as $pm_item)
                {
                  $Childdata=AdminLoginController::getChildMenu($pm_item->mod_name);

                  Session::forget($pm_item->mod_name); 
                  foreach($Childdata as $cm_item)
                  {
                    Session::push($pm_item->mod_name,
                      array('mod_id' => $cm_item->mod_id,
                            'mod_name'    => $cm_item->mod_name,
                            'mod_short'    => $cm_item->mod_short, 
                            'mod_url'     => $cm_item->mod_url,
                            'umo_actions' => $cm_item->umo_actions,
                            'mod_type' => $pm_item->mod_name,) 
                      );

                    Session::push('sub_menu_permission',
                      array('mod_id' => $cm_item->mod_id,
                            'parent_data_id' => $cm_item->mod_id,
                            'parent_title' => $cm_item->mod_name,
                            'mod_name'    => $cm_item->mod_name,
                            'mod_short'    => $cm_item->mod_short, 
                            'mod_url'     => $cm_item->mod_url,
                            'action' => $cm_item->umo_actions,
                            'mod_type' => $pm_item->mod_name,) 
                      );  
                  }
                }*/

            return redirect()->route('admindashboard');
        }else{
            return redirect()->back();
            //dd('your username and password are wrong.');
        }
    }


  public static function getParentMenu()
  { 
    $row = auth()->guard('admin')->user();
    if(($row->usr_type == "TECH") or $row->usr_type == "SUPER")
    {
      $roles = DB::table('tbl_m_modules as m')
                ->select('m.mod_id','m.mod_name','m.mod_short')
                ->where('m.mod_type','=','Parent')
                ->where('m.mod_is_child','=','0')
                ->orderBy('m.mod_do')
                ->get();
    }
    else
    {
      $roles = DB::select('select mod_id,mod_name,mod_short from ( select m.mod_id,`m`.`mod_name` ,m.mod_short,m.mod_do  from `tbl_m_modules` as `m` where m.mod_name IN (SELECT DISTINCT mod_type FROM tbl_m_modules t1,tbl_m_user_modules  t2  WHERE t1.mod_id=t2.mod_id AND t2.usr_id="'.$row->id.'") and `m`.`mod_type` = "Parent" and `m`.`mod_super` = "0" and `m`.`mod_tech` = "0" and `m`.`mod_is_child` = "0"
            UNION 
          select m.mod_id,`m`.`mod_name` as mmaa ,m.mod_short,m.mod_do   from `tbl_m_modules` as `m`  where m.mod_name IN (SELECT DISTINCT mod_type FROM tbl_m_modules t1,tbl_m_module_role_details t2 WHERE t1.mod_id=t2.mod_id AND t2.rol_id="'.$row->rol_id.'") and `m`.`mod_type` =  "Parent" and `m`.`mod_super` =  "0" and `m`.`mod_tech` =  "0" and `m`.`mod_is_child` = "0" ) as aa order by mod_do');
        }
      return $roles;
  }
  public static function getChildMenu($pm_item)
  { 
     $row = auth()->guard('admin')->user();
    if(($row->usr_type == "TECH") or $row->usr_type == "SUPER")
    {
      $permission = DB::table('tbl_m_modules as t1')
          ->select('t1.mod_id','t1.mod_name','t1.mod_short','t1.mod_url','t1.mod_actions as umo_actions','t1.mod_id','t1.mod_tech') 
          ->where('t1.mod_type','=',$pm_item)
          ->where('t1.mod_is_child','=','0')
          ->orderBy('t1.mod_do')
          ->get();
    }
    else
    {
      $permission  =DB::select('select mod_id,mod_name,mod_short,mod_url,umo_actions from( select t1.mod_id,`t1`.`mod_name`,`t1`.`mod_short`, `t1`.`mod_url`, `t2`.`umo_actions`,`t1`.`mod_do` from `tbl_m_modules` as `t1` inner join `tbl_m_user_modules` as `t2` on `t1`.`mod_id` = `t2`.`mod_id` where `t2`.`usr_id` ="'.$row->id.'" and `t1`.`mod_type` = "'.$pm_item.'"  and `t1`.`mod_is_child` = "0" and `t1`.`mod_super` =  "0" and `t1`.`mod_tech` =  "0" 
       UNION 
        select t1.mod_id,`t1`.`mod_name`,`t1`.`mod_short`, `t1`.`mod_url`, `t2`.`umo_actions`,`t1`.`mod_do` from `tbl_m_modules` as `t1` inner join `tbl_m_module_role_details` as `t2` on `t1`.`mod_id` = `t2`.`mod_id` where `t2`.`rol_id` ="'.$row->rol_id.'" and `t1`.`mod_type` ="'.$pm_item.'"  and `t1`.`mod_is_child` = "0" and `t1`.`mod_super` =  "0" and `t1`.`mod_tech` =  "0" ) as aa  group by mod_name order by  mod_do ASC');
    }

    //if( session('admin_usr_type') == "SUPER")
    if($row->usr_type == "SUPER")  
    {
      foreach ($permission as $key => $mod_action) {
        if($mod_action->mod_tech == 1){
            unset($permission[$key]);
        } 
      }
    }
    return $permission;
  }
}
